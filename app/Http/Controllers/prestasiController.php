<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class prestasiController extends Controller
{
    public function prestasi(){
        return view('prestasi');
    }

    public function __construct()
     {
         $this->middleware('auth');
    //     $this->middleware(function($request, $next){
    //     if(Gate::allows('user-prestasi')) return $next($request);
    //      abort(403, 'Anda tidak memiliki cukup hak akses');
    //  });

     }
    
}