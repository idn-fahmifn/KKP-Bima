<?php

namespace App\Http\Controllers;

use App\Models\Laporan;

use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function semua()
    {
        $data = Laporan::all();
        return view('laporan.semua', compact('data'));
    }

    public function masuk()
    {
        return view('laporan.masuk');
    }
    public function detail(Laporan $laporan)
    {
        return $laporan;
    }
         
}
