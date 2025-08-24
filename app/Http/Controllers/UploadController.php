<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadCSVRequest;
use App\Models\TicketHeader;
use App\Services\CsvRowMapper;

class UploadController extends Controller
{
    public function upload(UploadCSVRequest $request){
        $request->validate(['csv_file' => 'required|file|mimes:csv,txt']);
        $path = $request->file('csv_file')->store('csv_uploads');
        $fullPath = storage_path('app/private/' . $path);
        $handle = fopen($fullPath, 'r');
        if (!$handle) {
            throw new \Exception("Neuspelo otvaranje fajla: {$this->$path}");
        }

        $mapper = new CsvRowMapper();

        while (($line = fgets($handle)) !== false) {
            $line = trim($line);

            if (empty($line) || str_starts_with($line, '#')) {
                continue;
            }

            $columns = explode('|', $line);
            $mapped = $mapper->map($columns);
            $ticketHeader = TicketHeader::create($mapped['ticketHeader']);

            if ($mapped['related']) {
                $relatedData = $mapped['related']['data'];
                $relatedData['ticketHeaderId'] = $ticketHeader->id;
                $relatedClass = $mapped['related']['model'];
                $relatedClass::create($relatedData);
            }
        }

        fclose($handle);

        return redirect()->back()->with('success', 'CSV je uspesno obradjen!');
    }
}
