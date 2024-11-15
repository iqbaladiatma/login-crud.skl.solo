<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class cobah extends Model
{
    use HasFactory;
    protected $table = 'cobahs';
    //
    protected $fillable = [
        'nama',
        'alamat',
        'hobi',
        'tglahir',
        'jumlah',
        'status',
    ];
}
