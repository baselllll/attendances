<?php

namespace App\Helpers;

use Carbon\Carbon;

class MainSettings
{
    public function CheckComedPortal($secret_key){
        //check same secret key and not expired
        $expire_date = "23-11-2023 11:12:22";
        $current_date = Carbon::now()->format('d-m-Y H-i-s');
        if($secret_key =="12345" and $expire_date > $current_date){
            return SemanticsConstant::VERIFIED;
        }else{
            return SemanticsConstant::NOTALLOWED;
        }
    }
}
