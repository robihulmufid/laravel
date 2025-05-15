<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawais';
    protected $fillable = [
        'nip',
        'nama',
        'email',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat'
    ];
    protected $casts = [
        'tanggal_lahir' => 'date',
    ];
}
