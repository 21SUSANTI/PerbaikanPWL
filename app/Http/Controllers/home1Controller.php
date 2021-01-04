<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class kelasController extends Controller
{
    //
    public function home1(){
        return view('home1');
    }

    public function __construct()
     {
         //$this->middleware('auth');
        $this->middleware(function($request, $next){
        if(Gate::allows('user-home')) return $next($request);
         abort(403, 'Anda tidak memiliki cukup hak akses');
     });

     }
}