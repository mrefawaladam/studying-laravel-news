<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('pages.contact');
    }

    public function store(request $request){
        dd($request);
    }
}
