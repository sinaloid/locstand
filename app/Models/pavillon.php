<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pavillon extends Model
{

    protected $fillable = [
        'nom',
        'nombre_stand'
    ];
    use HasFactory;
}
