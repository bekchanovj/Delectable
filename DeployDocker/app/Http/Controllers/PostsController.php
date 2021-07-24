<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'title' => 'required',
            'image' => 'required|image',
        ]);

        $imagePath = request('image')->store('uploads','public');

        //$image = Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
        //$image->save();

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'title' => $data['title'],
            'image' => $imagePath,
        ]);

         return redirect('/profile/' . auth()->user()->id);
    }


}
