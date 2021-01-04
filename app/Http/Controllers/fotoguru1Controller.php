<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\fotoguru;
use Illuminate\Support\Facades\Gate;



class fotoguru1Controller extends Controller
{
    //
    public function fotoguru1(){
        $fotogurus = fotoguru::all();
        return view('fotoguru1', ['fotoguru' => $fotogurus]);
    }

    public function __construct()
     {
         $this->middleware('auth');
    //     $this->middleware(function($request, $next){
    //     if(Gate::allows('user-fotoguru1')) return $next($request);
    //      abort(403, 'Anda tidak memiliki cukup hak akses');
    //  });

     }
}
