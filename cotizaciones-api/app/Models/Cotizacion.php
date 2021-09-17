<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model
{
    protected $fillable = ["id", "nombre", "apellido", "automovil", "email", "telefono"];
    public $timestamp = false;
}
