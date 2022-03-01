<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function karir(){
        return view('pages.program.karir');
    }

    public function magang(){
        return view('pages.program.magang');
        
    }

    public function kunjungan(){
        return view('pages.program.kunjungan');
        
    }
}
