<?php

namespace sorteo\Http\Controllers;

use Illuminate\Http\Request;

class ParticipaController extends Controller
{
    public function index(){
        return view('participante');
    }
}
