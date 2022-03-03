<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SqlInjectionController extends Controller
{
    public function index(Request $request)
    {
        $data = [];
        if ($request->has("id")) {
            $data = DB::select(DB::raw("select name from users where id = ".$request["id"]));
        }

        return view("sql-injection")->with("data", $data);
    }
}
