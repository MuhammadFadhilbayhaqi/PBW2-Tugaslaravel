<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// Muhammad Fadhil Bayhaqi_6706223102
class Transaction extends Model {
    use HasFactory;
    public $timestamps = false;
    // Muhammad Fadhil Bayhaqi_6706223102_46-03
    protected $fillable = [
        'userIdPetugas',
        'userIdPeminjaman',
        'tanggalPinjam',
        'tanggalSelesai',
    ];
}
