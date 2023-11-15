<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    function homepage() {
        return view('homepage');
    }
    
    function ChiSiamo() {
        return view('chisiamo');
    }
    
    function ServizioClienti() {
        return view('servizioclienti');
    }
}
