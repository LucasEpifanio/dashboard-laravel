<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class Analises extends Controller
{
    public function index(): View
    {
        return view("analises.analises");
    }
}
