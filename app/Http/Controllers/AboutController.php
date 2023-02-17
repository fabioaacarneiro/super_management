<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $title = 'Sobre Nós';
        return view("site.about", compact('title'));
    }
}
