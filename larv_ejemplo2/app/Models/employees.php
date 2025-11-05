<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    // Especificamos el nombre de la tabla
    use HasFactory;

    protected $table = "employees";
}
