<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EkskurRutinController extends Controller
{
    public function FormEkskurRutin(){
        return view('pages.form-ekskur-rutin');
    }
}
