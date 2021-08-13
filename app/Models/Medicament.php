<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Medicament extends Model
{
        use SoftDeletes;
    protected $guarded=[];

//     $fillable=[
//
//     'libelle',
//     'description',
//     'prix',
//      'id_cat',
//      'datefabri',
//      'dateperem',
//      'dosage',
//     ];
}
