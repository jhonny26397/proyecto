<?php

namespace App\Http\Controllers;

use App\Models\Cuartos;
use Illuminate\Http\Request;

class CuartosController extends Controller
{
    public function index()
    {
        return view('cuartos.index')->withCuartos(Cuartos::get());
    }

    public function create()
    {
        return view('create');
    }
}
