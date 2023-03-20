<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogs()
    {
        $posts = Post::orderByDesc('created_at')->get();
        return view('blogs',compact('posts'));
    }

    public function showblogs(Post $post)
    {

        return view('showblogs',compact('post'));
    }
}
