<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable= [
        'judul','logo','email','no_telp','instagram','user_id',
    ];

    protected $table = 'profiles';
}
