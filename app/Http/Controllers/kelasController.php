<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class kelasController extends Controller
{
    //
    
    public function kelas(){
        return view('kelas');
    }

    public function __construct()
     {
         $this->middleware('auth');
    //     $this->middleware(function($request, $next){
    //     if(Gate::allows('user-kelas')) return $next($request);
    //      abort(403, 'Anda tidak memiliki cukup hak akses');
    //  });

     }
}
