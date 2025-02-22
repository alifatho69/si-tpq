<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaliSantri extends Model
{
    use HasFactory;

    protected $table = 'wali_santris';
    
    protected $fillable = [
        'nama',
        'alamat',
        'no_hp',
    ];
}
