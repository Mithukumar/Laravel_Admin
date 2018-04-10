<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;

class menuController extends Controller
{
    public function index()
    {   
        $menu = menu::all();
        return view('menu.index',compact('menu'));
    }
    public function edit($id)
    {
        $menu = menu::find($id);
        return view('menu.edit_menu',compact('menu'));
    }
    public function store(Request $request)
    {
        $this->validate($request,[

            'name'=>'required',
        ]);

        $menu = new menu;
        $menu->name = $request->name; 
        $menu->save();
        return redirect()->back();
    }
    public function delete($id)
    {   
        menu::destroy($id);
        return redirect()->back();
    }
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'name' => 'required',
            
        ]);
        $menu = menu::find($id);
        $menu->name = $request->input('name');
        $menu->update();
        return redirect('/menu');
    }
}
