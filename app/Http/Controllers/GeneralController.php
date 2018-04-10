<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\general;

class GeneralController extends Controller
{
    public function index()
    {   
        $general = general::all();
        return view('general.index',compact('general'));
    }

     public function show()
    {   
     
    }
    public function edit($id)
    {
        $general = general::find($id);
        return view('general.edit_general',compact('general'));
    }
    public function store(Request $request)
    {
        $this->validate($request,[

            'name'=>'required',
            'number'=>'required',
            'email'=>'required',
            'address'=>'required',
        ]);

        $general = new general;
        $general->name = $request->name; 
        $general->number = $request->number;
        $general->email = $request->email;
        $general->address = $request->address;
        $general->save();
        return redirect()->back();
    }

    public function destroy($id)
    {   
        general::destroy($id);
        return redirect()->back();
    }
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'name' => 'required',
            'number' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);
        $general = general::find($id);
        $general->name = $request->input('name');
        $general->number = $request->input('number');
        $general->email = $request->input('email');
        $general->address = $request->input('address');
        $general->update();
        return redirect('/general');
    }
}
