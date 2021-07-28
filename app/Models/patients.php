<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patients extends Model
{
 protected $fillable=[
         'nom',
         'prenom',
         'sexe',
          'age',
          'adress',
           'temperature',
         'poids',
       ];
}
