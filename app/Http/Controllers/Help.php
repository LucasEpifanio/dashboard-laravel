<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class Help extends Controller
{
    public function index(): View
    {
        return view("help.help");
    }
}
