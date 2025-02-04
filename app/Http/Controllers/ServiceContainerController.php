<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\DemoOne;

class ServiceContainerController extends Controller
{
    public function index(DemoOne $customServiceInstance){
        echo $customServiceInstance->doSomethingUseful();
    }
}
