<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Gate;

use App\Post;

class PostController extends Controller
{
    //
    public function index() {
        // $posts = Post::all();

        $posts = Post::where('user_id', Auth::id())->get();

        return view('posts', compact('posts'));
    }

    public function update($id) {
        $post = Post::find($id);

        if(Gate::denies('update-post', $post))
            return redirect('posts');

        return view('post-update', compact('post'));
    }

    public function delete($id) {
        $post = Post::find($id);

        if(Gate::denies('delete-post', $post))
            return redirect('posts');
        else
            $post->delete();

        return redirect('posts');
    }
}
