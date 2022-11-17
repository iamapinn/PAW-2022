<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_mhss extends Model
{
    use HasFactory;
    protected $table = 'tbl_mhss';
    // protected $fillable = ['nrp', 'nama', 'alamat', 'email'];
    // or
    protected $guarded = [];
}
