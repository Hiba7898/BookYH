<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjetController extends Controller
{
    public function BOOKYH(){
        return view('BOOKYH');
    }
   
    public function accueil(){
        return view('accueil');
    }
    public function About(){
        return view('About');
    }
    public function contact(){
        return view('contact');
    }

    public function orders(){
        return view('orders');
    }

   
}
