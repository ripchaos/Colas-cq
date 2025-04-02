<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Departamento;

class Impresora extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'tipo',
        'direccion',
        'departamento_id',
        'activa',
    ];

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }
}
