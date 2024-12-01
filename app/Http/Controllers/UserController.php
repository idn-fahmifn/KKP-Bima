<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index()
    {
        return view('userarea.dashboard');
    }

    public function pengaduanSaya()
    {
        $data = Laporan::where('id_user', auth()->user()->id)->get()->all();
        return view('userarea.pengaduan.index', compact('data'));

    }

    public function createPengaduan()
    {
        return view('userarea.pengaduan.create');
    }
    public function storePengaduan(Request $request)
    {
        $input = $request->all();
        if($request->hasFile('dokumentasi'))
        {
            $gambar = $request->file('dokumentasi'); //mengambil nilai/ file yang ada di form
            $extension = $gambar->getClientOriginalExtension(); //mengambil format/extension
            $path_simpan = 'public/images/pengaduan'; //tempat penyimpanan
            $pelapor = Auth::user()->username;
            $nama = 'pengaduan-'.$pelapor.Carbon::now()->format('ymdhis').'.'.$extension; //nama file setelah diupload
            $simpan = $request->file('dokumentasi')->storeAs($path_simpan, $nama); //file disimpan di path dengan nama yang sudah ditentukan
            $input['dokumentasi'] = $nama; //nama yang akan dikirimkan ke database
        }

        $tanggal = Carbon::now()->format('d-m-y');
        $input['tanggal_laporan'] = $tanggal;
        $input['tanggal_update'] = $tanggal;
        $input['slug'] =random_int(000000, 999999).'-'.Str::slug($request->judul_laporan).'-'.$tanggal;

        Laporan::create($input);
        return redirect()->route('user');

    }

    public function detail(Laporan $laporan)
    {
        return $laporan;
    }
}
