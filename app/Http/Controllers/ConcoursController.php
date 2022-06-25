<?php

namespace App\Http\Controllers;

use App\Models\Concours;
use Illuminate\Http\Request;

class ConcoursController extends Controller
{
    public function showConcours()
    {

        $concourss = Concours::orderBy('name', 'asc')->paginate(10);

        return view('layouts.concours', compact('concourss'));
    }

    public function showConcourInDetail(Concours $concours)
    {
        return view('layouts.detailConcours', compact('concours'));
    }
}