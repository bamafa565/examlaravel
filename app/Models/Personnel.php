<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personnel extends Model
{
protected $fillable=[
     'nomperso',
     'prenomperso',
    'numTelperso',
    'adressPerso',
    'emailperso',
    'fonctionperso'


];
}
