<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function masuk()
    {
        return view('laporan.masuk');
    }
}
