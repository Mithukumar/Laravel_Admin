<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\service;

class ServiceController extends Controller
{
    public function index()
    {   
        $service = service::all();
        return view('service.index',compact('service'));
    }
    public function edit($id)
    {
        $service = service::find($id);
        return view('service.edit_service',compact('service'));
    }
    public function store(Request $request)
    {
        $this->validate($request,[

            'title'=>'required',
            'detail'=>'required',
        ]);

        $service = new service;
        $service->title = $request->title; 
        $service->detail = $request->detail;
        $service->save();
        return redirect()->back();
    }
    public function destroy($id)
    {   
        service::destroy($id);
        return redirect()->back();
    }
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'title' => 'required',
            'detail' => 'required',
        ]);
        $service = service::find($id);
        $service->title = $request->input('title');
        $service->detail = $request->input('detail');
        $service->update();
        return redirect('/service');
    }
}
