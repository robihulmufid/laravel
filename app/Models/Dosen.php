<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $table = 'dosens';
    protected $fillable = [
        'nip',
        'nama',
        'email',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'profil',
    ];
    protected $casts = [
        'tanggal_lahir' => 'date',
    ];
}
