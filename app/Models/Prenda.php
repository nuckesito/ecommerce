<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prenda extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'color',
        'price',
        'stock',
        'image_path',
        'id_categoria',
        'id_marca',
    ];

  
}
