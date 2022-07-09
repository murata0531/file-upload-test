<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Archive;

class ArchiveController extends Controller
{
    public function index()
    {
        // $categories = Category::with('archives')->get();
        // dd($categories[0]->archives);

        $archives = Archive::all();

        return view('archives',compact('archives'));
    }
}
