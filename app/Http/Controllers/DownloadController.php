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
    
    public function bis() {
        return view('download.bis');
    }
    
    public function win() {
        return view('download.win');
    }
    
    public function fy() {
        return view('download.fy');
    }
    
    public function money() {
        // return view('download.money');
        return view('download.side');
    }
    
    public function game() {
        return view('download.game2');
    }
    
    public function side() {
        return view('download.side');
    }
    
    public function marrish() {
        return view('download.marrish');
    }
    
    public function kanto() {
        // return view('download.money');
        return view('download.side');
    }
    
    public function papa() {
        // return view('download.papa');
        return view('download.side');
    }
    
    public function omiai() {
        return view('download.omiai');
    }
    
    // public function os() {
    //     if (\Agent::is('iPhone')) { //端末がiOSかどうか
    //           return redirect('https://fam-ad.com/ad/p/dt?_site=64802&_loc=221380&_mstype=99'); //famのワクワクiOS
    //       } else {
    //           return view('download.top5'); //PC
    //       }
    //     }
    // }

}