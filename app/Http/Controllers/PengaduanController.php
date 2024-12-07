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

    public function pending()
    {
        return view('laporan.pending');
    }
    public function detail(Laporan $laporan)
    {
        $data = $laporan;
        return view('laporan.detail', compact('data'));
    }
         
}
