<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommandesController extends Controller
{
     public function index(){
        return view("commandes");
    }
}
