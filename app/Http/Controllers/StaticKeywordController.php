<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaticKeywordController extends Controller
{
    public static $count = 0;
    public static function Increment(){
        Self::$count++;
    }
    Public static function getCount(){
        return Self::$count;
    }


    /* static variable*/
public static function IncrementCounter(){
    static $counter = 0;
    $counter++;
    echo $counter;
}
}
StaticKeywordController::Increment();
StaticKeywordController::IncrementCounter();
StaticKeywordController::IncrementCounter();
StaticKeywordController::IncrementCounter();
