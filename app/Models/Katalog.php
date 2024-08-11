<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Katalog extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_paket', 'isi_katalog', 'biaya', 'gambar', 'user_id',
    ];

    protected $table = 'katalogs';
}
