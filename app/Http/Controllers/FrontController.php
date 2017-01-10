<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function reviews()
    {
        return view('reviews');
    }

    public function admin()
    {
        return view('admin.index');
    }
}
