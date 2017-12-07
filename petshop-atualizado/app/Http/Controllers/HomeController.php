<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.index');
    }

    public function dicas_saude() 
    {
        return view('site.dicas');
    }

    public function acessorio()
    {
        return view('site.acessorio');
    }
     public function fale()
     {
        return view('site.fale');
     }
}
