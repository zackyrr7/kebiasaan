<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputHarianController extends Controller
{
    public function index()
    {
        return view('inputHarian.create');
    }
}
