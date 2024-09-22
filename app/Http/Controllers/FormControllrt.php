<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormControllrt extends Controller
{
    public function formMethod(){
        return view('frontend.authentic.form');
    }
}
