<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        //dd ('dd welcome');
        return view('welcome');
        //view

    }
    //
}
