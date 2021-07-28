<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicament extends Model
{
    protected $fillable=[

    'libelle',
    'description',
    'prix',
    'id_cat',
     'datefabri',
    'dateperem',
     'dosage',
    ];
}
