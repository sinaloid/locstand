<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artisan extends Model
{
    protected $fillable = [
        "nom",
        'prenom',
        'raison_social',
        'contact',
        'domaine_activite',
        'ville',
        'pays',
        'responsable_stand',
        'accompagnateur1',
        'accompagnateur2'
    ];
    use HasFactory;
}
