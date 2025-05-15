<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswas';
    protected $fillable = [
        'nim',
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
