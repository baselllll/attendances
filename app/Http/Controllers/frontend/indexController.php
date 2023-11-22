<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function __construct()
    {

    }
    public function index(){
        return view('frontend.index');
    }
}
