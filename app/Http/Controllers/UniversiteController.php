<?php

namespace App\Http\Controllers;

use App\Models\Faculte;
use App\Models\Filiere;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Universite;
use Illuminate\Support\Facades\Storage;

class UniversiteController extends Controller
{
    public function index()
    {
        $universites = Universite::orderBy('name', 'desc')->paginate(5);

        return view('universites/index', compact('universites'));
    }

    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'name' => 'required|unique:universites,name',
            'description' => 'required',
            'location' => 'required',
            /*  'imagePath ' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
             */ 'pdfFilePath' => 'required|mimetypes:application/pdf|max:16000'/* */
        ]);

        //
        /* $pdfPath = time() . '.' . $request->pdfFilePath->extension();

        $request->file->storeAs('public/universites', $pdfPath); */
        /*    $pdfPath = Storage::path($request->pdfFilePath);
        Storage::put('u.pdf', $pdfPath); */
        $pdfPath = $request->file('pdfFilePath')->store('public/universites/');
        $path = $request->file('imagePath')->store('public/images/universites/');
        $universite = new Universite();
        $universite->name = $request->name;
        $universite->location = $request->location;
        $universite->description = $request->description;
        $universite->imagePath = $path;
        $universite->pdfFilePath = $pdfPath;
        $universite->save();

        return redirect()->route('universites.index')
            ->with('success', 'Universite has been created successfully.');
    }

    public function edit(Universite $universite)
    {
        return view('universites.edit', compact('universite'));
    }

    public function create()
    {
        return view('universites.create');
    }

    public function destroy(Universite $universite)
    {
        $universite->delete();

        return redirect()->route('universites.index')
            ->with('success', 'Universite has been deleted successfully');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'location' => 'required',
        ]);

        $universite = Universite::find($id);
        if ($request->hasFile('imagePath')) {
            /* $request->validate([
                'imagePath ' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]); */
            $path = $request->file('imagePath')->store('public/images/universites/');
            $universite->imagePath = $path;
        }
        if ($request->hasFile('pdfFilePath')) {
            $request->validate([
                'pdfFilePath' => 'required|mimetypes:application/pdf|max:16000'
            ]);
            /* $pdfPath = time() . '.' . $request->pdfFile->extension();

            $request->file->storeAs('public/universites', $pdfPath); */
            $pdfPath = $request->file('pdfFilePath')->store('public/universites/');
        }
        $universite->name = $request->name;
        $universite->location = $request->location;
        $universite->description = $request->description;
        //$universite->imagePath = $path;
        //$universite->pdfFilePath = $pdfPath;
        $universite->save();

        return redirect()->route('universites.index')
            ->with('success', 'Universite updated successfully');
    }



    public function searchEveryWhere(Request $data)
    {
        // dd($data);
        $search = $data->search;
        $universites = Universite::where('name', 'like', '%' . $search . '%')->orderBy('id')->paginate(100);
        $posts = Post::where('body', 'like', '%' . $search . '%')->orderBy('id')->paginate(100);
        $filieres = Filiere::where('name', 'like', '%' . $search . '%')->orderBy('id')->paginate(100);
        $facultes = Faculte::where('name', 'like', '%' . $search . '%')->orderBy('id')->paginate(100);


        return view('layouts.search', compact('universites', 'posts', 'filieres', 'facultes'));
    }

    public function show()
    {
        return view('layouts.admin');
    }
}