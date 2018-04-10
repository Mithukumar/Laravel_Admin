<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\about;

class AboutController extends Controller
{
    public function index()
    {   
        $about = about::all();
        return view('about.index',compact('about'));
    }
    public function edit($id)
    {
        $about = about::find($id);
        return view('about.edit_about',compact('about'));
    }
    public function store(Request $request)
    {
        $this->validate($request,[

            'title'=>'required',
            'detail'=>'required',
        ]);

        $about = new about;
        $about->title = $request->title; 
        $about->detail = $request->detail;
        $about->save();
        return redirect()->back();
    }
    public function destroy($id)
    {   
        about::destroy($id);
        return redirect()->back();
    }
    public function update(Request $request,$id)
    {
        $this->validate($request, [

            'title'=>'required',
            'detail'=>'required',
        ]);

        $about = about::find($id);
        $about->title = $request->input('title');
        $about->detail = $request->input('detail');
        $about->update();
        return redirect('/about');

    }
}
