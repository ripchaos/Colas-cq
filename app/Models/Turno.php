<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Departamento;

class Turno extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'atendido',
        'departamento_id',
        'llamado_en',
    ];

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }
}
