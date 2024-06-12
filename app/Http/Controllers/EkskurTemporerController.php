<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EkskurTemporerController extends Controller
{
    public function FormEkskurTemporer() {
        return view('pages.form-ekskur-temporer');
    }
}
