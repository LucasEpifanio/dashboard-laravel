<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class Documentossub2 extends Controller
{
    public function index(): View
    {
        return view("documentos.documentos-sub-2");
    }
}
