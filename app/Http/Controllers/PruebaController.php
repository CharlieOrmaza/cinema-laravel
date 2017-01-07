<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function index()
    {
        return "PruebaController@index";
    }

    public function nombre($nombre)
    {
        return "Tu nombre es: $nombre";
    }
}
