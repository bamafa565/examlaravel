<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __invoke(Page $page)
       {
           return view('patient.layout', compact('patient'));
       }
}
