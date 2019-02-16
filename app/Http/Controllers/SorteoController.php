<?php

namespace sorteo\Http\Controllers;

use sorteo\Sorteo;
use Illuminate\Http\Request;

class SorteoController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $sorteos = [
            [
                "nombre" => "nombre1",
                "imagen" => "img/adblock.png",
                "descripcion" => "descripcion de prueba"
            ],
            [
                "nombre" => "nombre1",
                "imagen" => "img/adblock.png",
                "descripcion" => "descripcion de prueba"
            ],
            [
                "nombre" => "nombre1",
                "imagen" => "img/adblock.png",
                "descripcion" => "descripcion de prueba"
            ],
            [
                "nombre" => "nombre1",
                "imagen" => "img/adblock.png",
                "descripcion" => "descripcion de prueba"
            ]
        ];
        return view('sorteos', ['publicaciones' => $sorteos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \sorteo\Sorteo  $sorteo
     * @return \Illuminate\Http\Response
     */
    public function show() {
        $sorteo = Sorteo::getAll();
        return view('sorteos', ['publicaciones' => $sorteo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \sorteo\Sorteo  $sorteo
     * @return \Illuminate\Http\Response
     */
    public function edit(Sorteo $sorteo) {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \sorteo\Sorteo  $sorteo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sorteo $sorteo) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \sorteo\Sorteo  $sorteo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sorteo $sorteo) {
        //
    }

}
