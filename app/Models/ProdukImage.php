<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukImage extends Model
{
    use HasFactory;

    protected $table = 'produk_images';

    protected $fillable = [
        'id',
        'produk_id',
        'gambar',
    ];
}
