<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
     public function bienvenida()
    {
        return view('vBienvenida');
    }
     public function registro()
    {
        return view('vRegistro');
    }

}
