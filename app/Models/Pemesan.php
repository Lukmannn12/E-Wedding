<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pemesan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama','email','tgl_acara','status','katalog_id','user_id','no_resi',
    ];

    public function katalog(): BelongsTo
    {
        return $this->belongsTo(Katalog::class, 'katalog_id','id');
    }

    protected $guarded = [];
    
    protected $attributes = [
        'status' => 'request',
    ];
}

