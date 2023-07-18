<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'titre',
        'acronyme',
        'offre',
        'statut',
        'date_debut',
        'date_fin',
        'fprojet'
    ];

}
