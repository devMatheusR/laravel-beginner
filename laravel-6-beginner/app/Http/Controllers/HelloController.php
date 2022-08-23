<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
       $coolString = 'Heello from Controller';

        return view(view: 'subviews.hello', data: compact('coolString' ));
    }

}
