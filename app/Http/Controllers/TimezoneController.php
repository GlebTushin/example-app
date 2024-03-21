<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimezoneController extends Controller
{
    public function get_timezone(){
        return date_default_timezone_get();
    }
    //
}
