<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function about(){

    return view(view: 'about');
    }

    public function services(){

        // Model - singular
        // Service

        // Table - plurar
        // services


        $services = [
            "Cool service", 
            "Another cool service",
            "Db connection",

        ];

        return view(view: 'services', data: compact(var_name: 'services'));
    }
}
