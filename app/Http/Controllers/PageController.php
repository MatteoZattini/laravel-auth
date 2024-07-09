<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // prendo i dati dal config
        $dati = config("data");
        // richiamo la vista
        return view('home', $dati);
    }
}
