<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        var_dump($_POST);
        $title = 'Contato';
        return view("site.contact", compact('title'));
    }
}
