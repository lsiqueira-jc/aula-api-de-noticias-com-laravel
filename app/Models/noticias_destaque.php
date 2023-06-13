<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticias_destaque extends Model
{
    use HasFactory;

    protected $fillable = [
        "imagem",
        "link",
        "titulo"

    ];
}
