<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //? Recupero tutti i dati movies dal db e vado a gestirli per poi restituirli

    //! Avrò n metodi per creare n rotte
    public function index(){
        // vado a prendermi tutti i movies presenti nel db
        $movies = Movie::all();
        // vado a vedere
        dd($movies);
        return view('books.index');
    }
}
