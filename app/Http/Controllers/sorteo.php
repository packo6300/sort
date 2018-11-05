<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sorteo extends Controller{
    public function index(){
        $publicaciones=[
            [
                "nombre"=>"nombre1",
                "img"=>"img/adblock.png",
                "desc"=>"descripcion de prueba"
            ],
            [
                "nombre"=>"nombre1",
                "img"=>"img/adblock.png",
                "desc"=>"descripcion de prueba"
            ],
            [
                "nombre"=>"nombre1",
                "img"=>"img/adblock.png",
                "desc"=>"descripcion de prueba"
            ]
        ];
        return view('sorteos')->with('publicaciones', $publicaciones);
    }
}
