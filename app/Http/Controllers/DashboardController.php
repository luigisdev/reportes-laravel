<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Author: Luis Alberto Gracía Rodríguez
    public function index(Request $request) {
        // dd() funciona como: var_dump($variable); die;
        // dd($request->query('title', 'Valor por default'));
        // return view('welcome', ['title'=>'Curso En Platzi']);
        return view('welcome', [
            'title'=> $request->query('title', 'Valor por default')
            ] 
        );
    }
}
