<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminContrioller extends Controller
{
    public function index(){
        return view('admin');
    }
}
