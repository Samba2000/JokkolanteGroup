<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'date_creation',
        'statut',
        'po',
        'total',
    ];
}
