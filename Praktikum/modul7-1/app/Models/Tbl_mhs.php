<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_mhs extends Model
{
    use HasFactory;

    protected $table = 'tbl_mhs';

    protected $fillable = [
        'nrp',
        'nama',
        'email',
        'alamat',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    protected $guarded = [
        'id',
    ];
}
