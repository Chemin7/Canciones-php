<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paginasController extends Controller
{
    public function canciones($id = null){
        $canciones = [];
        $canciones[0] = ['cancion'=>'sundress','artista'=>'ASAP Roky'];
        $canciones[1] = ['cancion' => 'space song','artista'=>'beach house'];
        $canciones[2] = ['cancion' => 'sweet dreams','artista'=>'eurythmics'];
        
        if(!is_null($id)){
            $cancion = $canciones[$id];
        }else{
            $cancion = null;
        }
            return view('index',compact('canciones','cancion'));
    }

    public function contacto(){
        return view('contacto');
    }

    public function postContacto(Request $request){
        dd($request->all());
    }
}
