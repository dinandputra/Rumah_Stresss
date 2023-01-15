<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;

    protected $table = "obats";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'kode_obat', 'nama_obat', 'jenis', 'harga', 'stok', 'photo'
    ];

}
