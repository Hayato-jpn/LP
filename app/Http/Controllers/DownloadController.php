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
    
    public function top3() {
        return view('download.top3');
    }
    
    public function top4() {
        return view('download.top4');
    }
}
