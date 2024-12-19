<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Tanggapan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        // Carbon indonesia

        Carbon::setLocale('id');

        $indo = Carbon::now()->isoFormat('dddd, D MMMM YYYY');



    return view('userarea.dashboard', compact('indo'));
    }

    public function pengaduanSaya()
    {
        $data = Laporan::where('id_user', Auth::user()->id)->get()->all();
        return view('userarea.pengaduan.index', compact('data'));
    }

    public function createPengaduan()
    {
        return view('userarea.pengaduan.create');
    }
    public function storePengaduan(Request $request)
    {
        $input = $request->all();

        if ($request->hasFile('dokumentasi')) {
            $gambar = $request->file('dokumentasi'); //mengambil nilai/ file yang ada di form
            $extension = $gambar->getClientOriginalExtension(); //mengambil format/extension
            $path_simpan = 'public/images/pengaduan'; //tempat penyimpanan
            $nama = 'pengaduan-' . random_int(000000, 999999) . Carbon::now()->format('Ymdhis') . '.' . $extension; //nama file setelah diupload
            $simpan = $gambar->storeAs($path_simpan, $nama); //file disimpan di path dengan nama yang sudah ditentukan
            $input['dokumentasi'] = $nama; //nama yang akan dikirimkan ke database
        }

        $tanggal = Carbon::now()->format('Ymd');
        $input['tanggal_laporan'] = $tanggal;
        $input['tanggal_update'] = $tanggal;
        $input['slug'] = random_int(000000, 999999) . '-' . Str::slug($request->judul_laporan) . '-' . $tanggal;

        Laporan::create($input);
        return redirect()->route('myreport')->with('success', 'Berhasil ditambahkan');
    }

    public function detail(Laporan $laporan)
    {
        $data = $laporan;
        $tanggapan = Tanggapan::where('id_laporan', $laporan->id)->get()->all();
        return view('userarea.pengaduan.detail', compact('data', 'tanggapan'));
    }

    public function updatePengaduan(Request $request, $id)
    {
        $input = $request->all();
        $data = Laporan::find($id);
        if ($request->hasFile('dokumentasi')) {
            $gambar = $request->file('dokumentasi'); //mengambil nilai/ file yang ada di form
            $extension = $gambar->getClientOriginalExtension(); //mengambil format/extension
            $path_simpan = 'public/images/pengaduan'; //tempat penyimpanan
            $nama = 'pengaduan-' . random_int(000000, 999999) . Carbon::now()->format('Ymdhis') . '.' . $extension; //nama file setelah diupload
            $simpan = $gambar->storeAs($path_simpan, $nama); //file disimpan di path dengan nama yang sudah ditentukan
            $input['dokumentasi'] = $nama; //nama yang akan dikirimkan ke database
            Storage::delete('public/images/barang/'.$data->dokumentasi);
        }

        $tanggal = Carbon::now()->format('Ymd');
        $input['tanggal_laporan'] = $tanggal;
        $input['tanggal_update'] = $tanggal;
        $input['slug'] = random_int(000000, 999999) . '-' . Str::slug($request->judul_laporan) . '-' . $tanggal;

        Laporan::create($input);
        return redirect()->route('user');
    }
}
