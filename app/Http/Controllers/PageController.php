<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //funzione per tornare alla homepage
    public function home(){
        return view('pages.home');
    }
}
