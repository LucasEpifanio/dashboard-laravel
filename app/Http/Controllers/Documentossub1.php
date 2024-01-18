<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class Documentossub1 extends Controller
{
    public function index(): View
    {
        return view("documentos.documentos-sub-1");
    }
}
