<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class ekstrakulikulerController extends Controller
{
    //
    public function ekstrakulikuler(){
        return view('ekstrakulikuler');
    }

    public function __construct()
     {
         $this->middleware('auth');
    //     $this->middleware(function($request, $next){
    //     if(Gate::allows('user-ekstrakulikuler')) return $next($request);
    //      abort(403, 'Anda tidak memiliki cukup hak akses');
    //  });

     }

}
