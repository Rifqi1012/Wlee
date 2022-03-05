<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bootcamp extends Model
{

    protected $table = 'bootcamp';
    public $timestamps = true;

    protected $casts = [
        'harga' => 'float'
    ];

    protected $fillable = [
        'tanggal',
        'waktu',
        'nama_bootcamp',
        'harga'
    ];
}
