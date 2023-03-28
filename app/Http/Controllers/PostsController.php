<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() {

        return view('posts', [
            'posts' => post::all()
        ]);
    }

    public function view($slug, Request $request) {
        /** @var Post $post */
        $post = Post::find($slug);


        return view('post', [
            'post' => $post
        ]);
    }
}
