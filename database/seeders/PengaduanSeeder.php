<?php

namespace Database\Seeders;

use App\Models\Laporan;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengaduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        Laporan::create([
            'id_user' => 1,
            'judul_laporan' => 'lampu pecah',
            'jenis_laporan' => 'perlu perbaikan',
            'dokumentasi' => 'test.jpg',
            'tanggal_laporan' => $now,
            'tanggal_update' => $now,
            'keterangan' => 'harus segera diperbaiki atuh',
            'slug' => 'laporan-1'
        ]);
    }
}
