<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = "mahasiswa";
    protected $primarykey = "id";
    protected $fillable = [
        'id', 'nim', 'nama', 'email', 'alamat'
    ];
}
