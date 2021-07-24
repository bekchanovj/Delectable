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
            'ingredients' => 'required',
            'instructions' => 'required',
            'servings' => 'required',
            'c_time' => 'required',
            'p_time' => 'required',
            'notes' => 'required',
            'image' => 'required|image',
        ]);

        $imagePath = request('image')->store('uploads','public');

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'title' => $data['title'],
            'ingredients' => $data['ingredients'],
            'instructions' => $data['instructions'],
            'servings' => $data['servings'],
            'c_time' => $data['c_time'],
            'p_time' => $data['p_time'],
            'notes' => $data['notes'],
            'image' => $imagePath,
        ]);
       

        return redirect('/profile/' . auth()->user()->id);
    }


}
