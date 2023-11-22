<?php

namespace App\Http\Controllers;

class SettingProController extends Controller
{
    public function view_404(){return view('errors.404');}
    public function view_500(){return view('errors.500');}
    public function view_409(){return view('errors.409');}
}
