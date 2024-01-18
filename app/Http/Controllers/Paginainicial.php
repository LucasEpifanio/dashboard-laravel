<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class Paginainicial extends Controller
{
    public function index(): View
    {
        return view("pagina-inicial.pagina-inicial");
    }
}
