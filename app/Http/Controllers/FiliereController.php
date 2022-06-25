<?php

namespace App\Http\Controllers;

use App\Models\Faculte;
use Illuminate\Http\Request;
use App\Models\Filiere;
use Illuminate\Support\Facades\Storage;


class FiliereController extends Controller
{

    public function index()
    {
        $filieres = Filiere::orderBy('name', 'desc')->paginate(5);

        return view('filieres/index', compact('filieres'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required|unique:filieres,name',
            'description' => 'required',
            /*  'imagePath ' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
             */ 'pdfFilePath' => 'required|mimetypes:application/pdf|max:16000'/* */
        ]);

        //dd($request);
        /* $pdfPath = time() . '.' . $request->pdfFilePath->extension();

        $request->file->storeAs('public/Filieres', $pdfPath); */
        /*    $pdfPath = Storage::path($request->pdfFilePath);
        Storage::put('u.pdf', $pdfPath); */
        $pdfPath = $request->file('pdfFilePath')->store('public/filieres/');
        $path = $request->file('imagePath')->store('public/images/filieres/');
        $filiere = new Filiere();
        $filiere->faculte_id = $request->faculte_id;
        $filiere->name = $request->name;
        $filiere->description = $request->description;
        $filiere->imagePath = $path;
        $filiere->pdfFilePath = $pdfPath;
        $filiere->save();

        return redirect()->route('filieres.index')
            ->with('success', 'filiere has been created successfully.');
    }

    public function edit(Filiere $filiere)
    {
        $facultes = Faculte::all();
        return view('filieres.edit', compact('filiere', 'facultes'));
    }

    public function create()
    {
        $facultes = Faculte::all();
        return view('filieres.create', compact('facultes'));
    }

    public function destroy(Filiere $filiere)
    {
        $filiere->delete();

        return redirect()->route('filieres.index')
            ->with('success', 'filiere has been deleted successfully');
    }


    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $filiere = Filiere::find($id);
        //dd($filiere);
        if ($request->hasFile('imagePath')) {
            /* $request->validate([
                'imagePath ' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]); */
            $path = $request->file('imagePath')->store('public/images/filieres/');
            $filiere->imagePath = $path;
        }
        if ($request->hasFile('pdfFilePath')) {
            $request->validate([
                'pdfFilePath' => 'required|mimetypes:application/pdf|max:16000'
            ]);
            /* $pdfPath = time() . '.' . $request->pdfFile->extension();

            $request->file->storeAs('public/filieres', $pdfPath); */
            $pdfPath = $request->file('pdfFilePath')->store('public/filieres/');
            $filiere->pdfFilePath = $pdfPath;
        }
        $filiere->faculte_id = $request->faculte_id;
        $filiere->name = $request->name;
        $filiere->description = $request->description;
        // $filiere->imagePath = $path;
        // $filiere->pdfFilePath = $pdfPath;
        $filiere->save();

        return redirect()->route('filieres.index')
            ->with('success', 'filiere updated successfully');
    }
}