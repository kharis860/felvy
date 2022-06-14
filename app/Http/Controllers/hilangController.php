<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hilangController extends Controller
{
    public function store(Request $request){
        $post = new hilang;

        $post -> Tanggal_hilang= $request->Tanggal_hilang;
        $post -> Keterangan= $request->Keterangan;
        $post -> hp= $request->hp;

        $post->save();
        return response()->json($post,200);
    }
    public function create(){
        
    }
}