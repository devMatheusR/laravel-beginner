<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function about(){

    return view(view: 'about');
    }

    public function services(){
        $services = [
            // 'Service 1',
            // 'Service 2',
            // 'Service 3',
            // 'Service 4',
            // 'Cool',
            // 'Another cool service',
        ];

        return view(view: 'services', data: compact(var_name: 'services'));
    }
}
