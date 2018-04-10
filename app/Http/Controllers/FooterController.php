<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\footer;

class FooterController extends Controller
{
    public function index()
    {   
        $footer = footer::all();
        return view('footer.index',compact('footer'));
    }
    public function edit($id)
    {
        $footer = footer::find($id);
        return view('footer.edit_footer',compact('footer'));
    }
    public function store(Request $request)
    {
        $this->validate($request,[

            'title'=>'required',
        ]);

        $footer = new footer;
        $footer->title = $request->title; 
        $footer->save();
        return redirect()->back();
    }
    public function destroy($id)
      {
          footer::destroy($id);
          return redirect()->back();
        
    }
    public function update(Request $request,$id)
    {
        $this->validate($request, [

            'title'=>'required',
        ]);

        $footer = footer::find($id);
        $footer->title = $request->input('title');
        $footer->update();
        return redirect('/footer');

    }
}
