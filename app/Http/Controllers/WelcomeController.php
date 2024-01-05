<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function welcome()
    {
        return view('/welcome', [
            "title" => "Welcome",
            "image" => "user.png",
            "img" => "inventarix.png",
        ]);
    }
}
