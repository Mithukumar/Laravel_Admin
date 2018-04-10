<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\logo;
use Image;
use Illuminate\Support\Facades\Input;

class logoController extends Controller
{
    public function index()
    {   
        $logo = logo::all();
        return view('logo.index',compact('logo'));
    }
    public function store(Request $request)
    {
        $this->validate($request,[

            'title' => 'required',
            'image' => 'required',

        ]);
        $logo = new logo;
        $logo->title = $request->title;
        if (input::file()) {
            
            $image = input::file('image');
            $filename = time().'.'.$image->getclientoriginalextension();
            $path = public_path('images/'.$filename);

            Image::make($image)->resize(200,200)->save($path);
            $logo->image = $filename;
        }

        $logo->save();
        return redirect()->back();
    }
    public function edit($id)
    {
        $logo = logo::find($id);
        return view('logo.edit_logo',compact('logo'));
    }
    public function delete($id)
    {
        logo::destroy($id);
        return redirect()->back();
    }
    public function update(Request $request)
    {
        $this->validate($request,[

            'title' => 'required',
            'image' => 'required',

        ]);
        $logo = new logo;
        $logo->title = $request->input('title');
        if (input::file()) {
            
            $image = input::file('image');
            $filename = time().'.'.$image->getclientoriginalextension();
            $path = public_path('images/'.$filename);

            Image::make($image)->resize(200,200)->save($path);
            $logo->image = $filename;
        }

        $logo->update();
        return redirect('/logo');
    }
 
}