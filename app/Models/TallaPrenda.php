<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TallaPrenda extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_prenda',
        'id_talla',
        'stock',
    ];
}
