<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{

    //Lis
    public function inde_GET() 
    {
        return view('index');
    }

}
