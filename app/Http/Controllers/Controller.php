<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}


// …or push an existing repository from the command line
// git remote add origin https://github.com/MIGUEL-FIGUEROA/laravel.git
// git branch -M main
// git push -u origin main