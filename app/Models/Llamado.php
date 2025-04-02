<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Turno;
use App\Models\User;
use App\Models\Pantalla;

class Llamado extends Model
{
    use HasFactory;

    protected $fillable = [
        'turno_id',
        'user_id',
        'pantalla_id',
        'accion',
        'realizado_en',
    ];

    public function turno()
    {
        return $this->belongsTo(Turno::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pantalla()
    {
        return $this->belongsTo(Pantalla::class);
    }
}

