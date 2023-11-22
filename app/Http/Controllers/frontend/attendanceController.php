<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class attendanceController extends Controller
{
    public function __construct()
    {

    }
    public function index(){
        $type = "manager";
        if($type=="employee"){
            return view('frontend.employee_attendance');
        }else{
            return view('frontend.manager_attendance');
        }

    }

    public function getDetails($empno){
        return view('frontend.employee_attendance');
    }
}
