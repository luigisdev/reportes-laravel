<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //@Author Luis Alberto García Rodríguez
    public function index() {
        return view('welcome');
    }
}
