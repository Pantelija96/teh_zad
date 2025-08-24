<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadCSVRequest;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(UploadCSVRequest $request){
        $file = $request->file('csv_file');
        $filename = time() . '_' . $file->getClientOriginalName();
        $path = $file->storeAs('upload/csv', $filename);
    }
}
