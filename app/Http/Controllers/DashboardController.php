<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Author: Luis Alberto Gracía Rodríguez
    public function index() {
        return view('welcome', ['title'=>'Curso En Platzi']);
    }
}
