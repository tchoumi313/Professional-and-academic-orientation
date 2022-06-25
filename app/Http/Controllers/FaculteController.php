<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculte;
use App\Models\Universite;

class FaculteController extends Controller
{
    public function index()
    {
        $facultes = Faculte::orderBy('name', 'desc')->paginate(5);

        return view('facultes/index', compact('facultes'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|unique:facultes,name',
            'description' => 'required',

            /*  'imagePath ' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
             */ 'pdfFilePath' => 'required|mimetypes:application/pdf|max:16000'/* */
        ]);

        //dd($request);
        /* $pdfPath = time() . '.' . $request->pdfFilePath->extension();

        $request->file->storeAs('public/Facultes', $pdfPath); */
        /*    $pdfPath = Storage::path($request->pdfFilePath);
        Storage::put('u.pdf', $pdfPath); */
        $pdfPath = $request->file('pdfFilePath')->store('public/facultes/');
        $path = $request->file('imagePath')->store('public/images/facultes/');
        $faculte = new Faculte();
        $faculte->universite_id = $request->universite_id;
        $faculte->name = $request->name;
        $faculte->description = $request->description;
        $faculte->imagePath = $path;
        $faculte->pdfFilePath = $pdfPath;
        $faculte->save();

        return redirect()->route('facultes.index')
            ->with('success', 'faculte has been created successfully.');
    }

    public function edit(Faculte $faculte)
    {

        $universites = Universite::all();
        return view('facultes.edit', compact('faculte', 'universites'));
    }

    public function create()
    {
        $universites = Universite::all();
        return view('facultes.create', compact('universites'));
    }

    public function destroy(Faculte $faculte)
    {
        $faculte->delete();

        return redirect()->route('facultes.index')
            ->with('success', 'faculte has been deleted successfully');
    }
    public function update(Request $request, $id)
    {
        //dd($request);
        $request->validate([
            'name' => 'required',
            'description' => 'required',

        ]);

        $faculte = Faculte::find($id);
        if ($request->hasFile('imagePath')) {
            /* $request->validate([
                'imagePath ' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]); */
            $path = $request->file('imagePath')->store('public/images/facultes/');
            $faculte->imagePath = $path;
        }
        if ($request->hasFile('pdfFilePath')) {
            $request->validate([
                'pdfFilePath' => 'required|mimetypes:application/pdf|max:16000'
            ]);
            /* $pdfPath = time() . '.' . $request->pdfFile->extension();

            $request->file->storeAs('public/facultes', $pdfPath); */
            $pdfPath = $request->file('pdfFilePath')->store('public/facultes/');
        }
        $faculte->universite_id = $request->universite_id;
        $faculte->name = $request->name;
        $faculte->description = $request->description;
        //$faculte->imagePath = $path;
        //$faculte->pdfFilePath = $pdfPath;
        $faculte->save();

        return redirect()->route('facultes.index')
            ->with('success', 'faculte updated successfully');
    }
}