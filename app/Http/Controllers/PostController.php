<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

class PostController extends Controller
{
    public function index()
    {   
        $post = post::all();
        return view('post.index',compact('post'));
    }
    public function edit($id)
    {
        $post = post::find($id);
        return view('post.edit_post',compact('post'));
    }
    public function store(Request $request)
    {
        $this->validate($request,[

            'name'=>'required',
        ]);

        $post = new post;
        $post->name = $request->name; 
        $post->save();
        return redirect()->back();
    }
    public function destroy($id)
    {   
        post::destroy($id);
        return redirect()->back();
    }
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'name' => 'required',
            
        ]);
        $post = post::find($id);
        $post->name = $request->input('name');
        $post->update();
        return redirect('/post');
    }
}
