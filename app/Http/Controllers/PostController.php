<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        // dd($posts[0]);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'user_id' => 'required',
        ]);
        //dd($request);
        Post::create($request->all());

        return redirect()->route('posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //$post = Post::find($post);
        // dd($post);
        return view('posts.show', compact('post'));
    }

    public function search(Request $request)
    {
        $search = $request->search; //Request::get('search');
        $posts = Post::where('body', 'like', '%' . $search . '%')->orderBy('id')->paginate(6);
        return view('posts.index', compact('posts'));
    }
}