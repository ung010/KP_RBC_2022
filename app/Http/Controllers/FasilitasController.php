<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    function index() {
        return view('fasilitas.index');
    }
}
