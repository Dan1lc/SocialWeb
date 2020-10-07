<?php

namespace App\Http\Controllers;

use Request;
// Фасады
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\User;

class MainController extends Controller
{
    
    
    public function start()
    {
        return view('start');
    }
}
