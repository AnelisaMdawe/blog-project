<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class TestController extends Controller
{
    public function index() {
        return view('posts', [
            'posts' => post::all()
        ]);
    }
}
