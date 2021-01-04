<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\rapot;
use PDF;
use Illuminate\Support\Facades\Gate;

class rapotController extends Controller
{
    
     public function __construct()
     {
         //$this->middleware('auth');
        $this->middleware(function($request, $next){
        if(Gate::allows('manage-rapot')) return $next($request);
         abort(403, 'Anda tidak memiliki cukup hak akses');
     });

     }
    
    public function rapot(){
        $rapots = rapot::all();
        return view('rapot', ['rapot' => $rapots]);
    }
    
    public function addrapot(){
        return view('addrapot');
    }
    
    public function createrapot(Request $request){
        $addrapot = new rapot();
            $addrapot->id= $request->id;
            $addrapot->nama=$request->nama;
            $addrapot->ttl= $request->ttl;
            $addrapot->alamat=$request->alamat;
            $addrapot->kelas= $request->kelas;
            $addrapot->semester= $request->semester;
            $addrapot->pelajaran= $request->pelajaran;
            $addrapot->nilai= $request->nilai;
            $addrapot->walikelas= $request->walikelas;
            $addrapot->kepalasekolah= $request->kepalasekolah;
            $addrapot->save();
        return redirect('/rapot');
    }

    public function editrapot($id){
        $rapot = rapot::find($id);
        return view('editrapot', ['rapot'=>$rapot]);
 }

    public function updaterapot($id, Request $request){
        $rapot = rapot::find($id);
        $rapot->id=$request->id;
        $rapot->nama=$request->nama;
        $rapot->ttl=$request->ttl;
        $rapot->alamat=$request->alamat;
        $rapot->kelas= $request->kelas;
        $rapot->semester= $request->semester;
        $rapot->pelajaran= $request->pelajaran;
        $rapot->nilai= $request->nilai;
        $rapot->walikelas= $request->walikelas;
        $rapot->kepalasekolah= $request->kepalasekolah;
        $rapot->save();
        return redirect('/rapot');
    }

    public function delete($id){
        $rapot = rapot::find($id);
        $rapot->delete();
        return redirect('/rapot');
    }
    public function cetakRapot_pdf(){
        $rapot = rapot::all();
        $pdf = PDF::loadview('rapots_pdf', ['rapot'=>$rapot]);
        return $pdf->stream();
    }
}
