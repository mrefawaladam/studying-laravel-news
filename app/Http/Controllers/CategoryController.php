<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryOne(){
        return view('pages.category.one');
    }
    
    public function categoryTwo(){
        return view('pages.category.two');
    }
    

    public function categoryTree(){
        return view('pages.category.tree');
    }
    

    public function categoryFour(){
        return view('pages.category.four');
    }
    
}
