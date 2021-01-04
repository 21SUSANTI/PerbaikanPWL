<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\siswa;
use Illuminate\Support\Facades\Gate;


class siswaController extends Controller
{
    //
    public function __construct()
     {
         //$this->middleware('auth');
        $this->middleware(function($request, $next){
        if(Gate::allows('manage-siswa')) return $next($request);
         abort(403, 'Anda tidak memiliki cukup hak akses');
     });

     }
    
    public function siswa(){
        $siswas = siswa::all();
        return view('siswa', ['siswa' => $siswas]);
    }
    
    public function addSiswa(){
        return view('/addSiswa');
        
    }
    
    public function createsiswa(Request $request){
        $addsiswa = new siswa();
        $addsiswa->id= $request->id;
        $addsiswa->nama= $request->nama;
        $addsiswa->ttl= $request->ttl;
        $addsiswa->alamat=$request->alamat;
        $addsiswa->ekstrakulikuler= $request->ekstrakulikuler;
        $addsiswa->kelas= $request->kelas;
        $addsiswa->semester= $request->semester;
        $addsiswa->rata= $request->rata;
        $addsiswa->save();
        return redirect('/siswa');
    }

    public function editsiswa($id){
        $siswa = siswa::find($id);
        return view('editsiswa', ['siswa'=>$siswa]);
 }

    public function updatesiswa($id, Request $request){
        $siswa= siswa::find($id);
        $siswa->id= $request->id;
        $siswa->nama= $request->nama;
        $siswa->ttl= $request->ttl;
        $siswa->alamat=$request->alamat;
        $siswa->ekstrakulikuler= $request->ekstrakulikuler;
        $siswa->kelas= $request->kelas;
        $siswa->semester= $request->semester;
        $siswa->rata= $request->rata;
        $siswa->save();
        return redirect('/siswa');
    }

    public function delete ($id){
        $siswa = siswa::find($id);
        $siswa->delete();
        return redirect('/siswa');
    }
}

