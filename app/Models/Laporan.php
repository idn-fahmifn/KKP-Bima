<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'laporan';
    protected $guarded;

    protected $casts = ['tanggal_laporan' => 'date'];



    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    

    

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
