<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmeController extends Controller
{
    public function index() {
        return view('filme.filme');
    }
}
