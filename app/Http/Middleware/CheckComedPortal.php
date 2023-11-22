<?php

namespace App\Http\Middleware;

use App\Helpers\MainSettings;
use App\Helpers\SemanticsConstant;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;

class CheckComedPortal
{

    public function __construct(MainSettings $mainSettings)
    {
        $this->mainSettings = $mainSettings;
    }


    public function handle($request, Closure $next)
    {
        $secret_key = "12345";
        $check = $this->mainSettings->CheckComedPortal($secret_key);
        if ($check == SemanticsConstant::NOTALLOWED) {
            return Redirect::route('view_409');
        }else{
            return $next($request);
        }


    }



}
