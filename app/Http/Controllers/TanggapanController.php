<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Tanggapan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TanggapanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Laporan::all();
        return view('admin.tanggapan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $tanggal = Carbon::now()->format('Ymdhis');

        if ($request->hasFile('dokumentasi')) {
            $gambar = $request->file('dokumentasi'); //mengambil nilai/ file yang ada di form
            $extension = $gambar->getClientOriginalExtension(); //mengambil format/extension
            $path_simpan = 'public/images/tanggapan'; //tempat penyimpanan
            $nama = 'tanggapan-' . random_int(000000, 999999) .$tanggal . '.' . $extension; //nama file setelah diupload
            $gambar->storeAs($path_simpan, $nama); //file disimpan di path dengan nama yang sudah ditentukan
        }

        Tanggapan::create([
            'id_laporan' => $request->id_laporan,
            'keterangan' => $request->keterangan,
            'dokumentasi' => $nama,
        ]);

        $update = Laporan::find($request->id_laporan);
        $update->tanggal_update = $tanggal;
        $update->status = $request->status;
        $update->save();


        return redirect()->route('tanggapan.index')->with('success', 'Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tanggapan $tanggapan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tanggapan $tanggapan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tanggapan $tanggapan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tanggapan $tanggapan)
    {
        //
    }
}
