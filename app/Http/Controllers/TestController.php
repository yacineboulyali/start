<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //


    public function contact($name){
        echo 'test controller'.$name;
    }
}
