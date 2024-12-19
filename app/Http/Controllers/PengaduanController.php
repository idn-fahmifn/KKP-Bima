<?php

namespace App\Http\Controllers;

use App\Models\Laporan;

use App\Models\Tanggapan;
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
        $pengaduan = Tanggapan::where('id_laporan', $laporan->id)->get();
        return view('laporan.detail', compact('data', 'pengaduan'));
    }
         
}
