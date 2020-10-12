<?php

namespace App\Http\Controllers;

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FirstController extends Controller
{
    public function __construct(){
        $this-> middleware('auth');

    }
    public function show0(){
        return'hi';
    }
}
