<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts.index')->with(['posts' => Post::all() ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'image' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        Post::create($request->all());
        return redirect('posts');
    }
}
