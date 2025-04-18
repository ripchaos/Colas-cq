<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pantalla extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'video_url',
        'activa',
    ];
}
