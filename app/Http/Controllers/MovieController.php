<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    //? Recupero tutti i dati movies dal db e vado a gestirli per poi restituirli

    //! Avrò n metodi per creare n rotte
    public function index(){
        return view('books.index');
    }
}
