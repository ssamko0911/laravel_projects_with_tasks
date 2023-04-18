<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadFileController extends Controller
{
    public function download($file_name) {
        $file_path = public_path($file_name);
        return response()->download($file_path);
    }
}
