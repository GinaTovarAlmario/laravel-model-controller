<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    //! avrò n metodi per creare n rotte
    public function index(){
        return view('books.index');
    }
}
