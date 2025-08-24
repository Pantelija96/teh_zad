<?php

namespace App\Http\Controllers;

use App\Models\TicketHeader;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExportController extends Controller
{
    public function exportPdf()
    {
        $tickets = TicketHeader::with(['crceCdrs', 'crceConfs'])->orderBy('id')->get();
        $pdf = Pdf::loadView('pdf', compact('tickets'))
            ->setPaper('a4', 'landscape');
        $filename = 'tickets_export_' . now()->format('Y-m-d_H-i') . '.pdf';
        Storage::disk('public')->put($filename, $pdf->output());
        $url = Storage::url($filename);
        return redirect()->back()->with('success', "PDF je generisan. Preuzmi ovde: <a href='{$url}' target='_blank'>Preuzmi PDF</a>");
    }
}
