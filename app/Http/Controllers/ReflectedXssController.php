<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReflectedXssController extends Controller
{
    public function index() {
        return response(view("reflected-xss"))->header('X-XSS-Protection', "0");
    }
}
