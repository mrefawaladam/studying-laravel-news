<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        return view('pages.news.index');
    }

    public function newsKeyword ($keyword){
        return view('pages.news.keyword',compact('keyword'));
    }

}
