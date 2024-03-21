<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return (string)date('Y-M-d H:i:s',time()).' '.(string)date_default_timezone_get();
    }
}
