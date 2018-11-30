<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    public function index()
    {
    	$tags = Tag::all();
    	return view('tag.index',compact('tags'));
    }
     public function store(Request $request)
    {
        //validasi
        $this->validate($request,[
            'nama'=>'required',
        ]);

        $tag = Tag::create($request->all());
        return redirect()->route('tag.index')->withMessage('Berhasil');
    }
}
