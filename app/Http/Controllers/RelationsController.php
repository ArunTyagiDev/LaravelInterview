<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{User,Phone};

class RelationsController extends Controller
{
  public function onetoone(){
    return  User::with('getphone')->get();
  }
}
