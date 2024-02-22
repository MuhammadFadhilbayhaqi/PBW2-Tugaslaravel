<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaction extends Model {
    use HasFactory;
    public $timestamps = false;
    // Muhammad Fadhil Bayhaqi_6706223102_46-03
    protected $fillable = [
        'transaction_id',
        'collection_id',
        'tanggal_kembali',
        'status',
    ];
}
