<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PersistentXssController extends Controller
{
    public function index(Request $request) {
        $post = null;

        if($request->has("id")) {
            $post = Post::findorfail($request["id"]);
        }

        return response(view("persistent-xss")->with("post", $post))->header('X-XSS-Protection', "0");
    }
}
