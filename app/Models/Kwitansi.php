<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kwitansi extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $softDelete = true;
    
    protected $fillable = [
        'penerima',
        'nomor_kwitansi',
        'tanggal',
        'keterangan',
        'nominal',
    ];

    protected $hidden = ["deleted_at"];
}
