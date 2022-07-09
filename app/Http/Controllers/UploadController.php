<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Archive;
use Carbon\Carbon;

class UploadController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('upload',compact('categories'));
    }

    public function store(Request $request)
    {
        $archive = new Archive();

        $archive->title = $request->input('title');
        $archive->organization = $request->input('organization');
        $archive->category_id = $request->input('category');
        $archive->category_id = $request->input('category');
        $form = $request->all();

        if (isset($form['image'])) {

            $now = Carbon::now();

            $file_name = $now . $request->file('image')->getClientOriginalName();

            $request->file('image')->storeAs('public',$file_name);

            $archive->img_url = $file_name;
            $archive->save();

            return redirect('/');
        }
    }
}
