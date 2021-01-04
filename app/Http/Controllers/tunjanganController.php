<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class tunjanganController extends Controller
{
    //
    public function __construct()
     {
         $this->middleware('auth');
    //     $this->middleware(function($request, $next){
    //     if(Gate::allows('user-tunjangan')) return $next($request);
    //      abort(403, 'Anda tidak memiliki cukup hak akses');
    //  });

     }
    public function tunjangan(){
        return view('tunjangan');
    }
}
