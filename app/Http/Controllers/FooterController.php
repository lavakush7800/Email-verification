<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooterController extends Controller
{
   public function index(){
       return view('footer');
   }

   public function show(){
    return view('footer');
}
}
