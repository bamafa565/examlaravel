<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\patients;

use Illuminate\Support\Str;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class LivewireDatatables extends LivewireDatatable
{

  public $model = patients::class;
}
