<?php

namespace App\Http\Controllers;

use App\Models\Faculte;
use App\Models\Filiere;
use App\Models\Post;
use App\Models\Universite;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(5);
        return view('welcome', compact('posts'));
    }


    public function showSchools()
    {
        $universites = Universite::orderBy('name', 'asc')->paginate(10);

        return view('layouts.schools', compact('universites'));
    }

    public function showFacultes(Universite $universite)
    {
        $facultes = $universite->facultes;


        return view('layouts.facultes', compact('universite', 'facultes'));
    }

    public function showFilieres(Faculte $faculte)
    {
        return view('layouts.filieres', compact('faculte'));
    }

    public function showCouncellor()
    {
        $councellors = User::where('role', '=', '2')->orderBy('id')->paginate(10);
        //dd($councellors[0]);

        return view('layouts.councellors', compact('councellors'));
    }
}