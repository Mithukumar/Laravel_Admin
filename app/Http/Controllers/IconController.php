<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\icon;
use Image;
use Illuminate\Support\Facades\Input;

class iconController extends Controller
{
    public function index()
    {   
        $icon = icon::all();
        return view('icon.index',compact('icon'));
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'image' =>'required',
        ]);

        $icon = new icon;
         if(Input::file())
        {
  
            $image = Input::file('image');
            $filename  = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('images/' . $filename);
 
                Image::make($image->getRealPath(
        ))->resize(100, 100)->save($path);
                $icon->image = $filename;
           }

        $icon->save();
        return redirect()->back();

    }
    public function edit($id)
    {
        $icon = icon::find($id);
        return view('icon.edit_icon',compact('icon'));
    }
    public function delete($id)
    {
        icon::destroy($id);
        return redirect()->back();
    }
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'image' => 'required',
        ]);

        $icon = icon::find($id);
        $icon->update();

           if(Input::file())
        {
  
            $image = Input::file('image');
            $filename  = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('images/' . $filename);
 
                Image::make($image->getRealPath(
        ))->resize(100, 100)->save($path);

                $icon->image = $filename;
                $icon->save();
           }

        return redirect('/icon');
    }
 
}
