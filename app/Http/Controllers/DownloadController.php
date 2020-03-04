<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    //
    public function top() {
        return view('download.top');
    }
    
    public function top2() {
        return view('download.top2');
    }
}
