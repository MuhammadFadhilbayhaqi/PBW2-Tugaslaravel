<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model {
    use HasFactory;
    public $timestamps = false;
    // Muhammad Fadhil Bayhaqi_6706223102_46-03
    protected $fillable = [
        'namaKoleksi',
        'jenisKoleksi',
        'jumlahKoleksi',
        'namaPengarang',
    ];
}
