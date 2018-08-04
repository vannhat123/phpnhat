<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apartmentscontroller extends Controller
{
    public function index()
    {
        $list_obj = Apartments::all();
        return view('admin.apartments.list')->with('list_obj', $list_obj);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.apartments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $obj = new Apartments();
        $obj->ten = Input::get('name');
        $obj->diachi = Input::get('diachi');
        $obj->giaban = Input::get('giaban');
        $obj->thongtinchung = Input::get('thongtinchung');
        $obj->thongtinchitiet = Input::get('thongtinchitiet');
        $obj->hinhdaidien = Input::get('hinhdaidien');
        $obj->save();
        return redirect('/admin/apartments');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obj = Apartments::find($id);
        if ($obj == null) {
            return view('404');
        }
        return view('admin.apartments.show')
            ->with('obj', $obj);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Apartments::find($id);
        if ($obj == null) {
            return view('404');
        }
        return view('admin.apartments.edit')
            ->with('obj', $obj);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $obj = Apartments::find($id);
        if ($obj == null) {
            return view('404');
        }
        $obj->ten = Input::get('name');
        $obj->diachi = Input::get('diachi');
        $obj->giaban = Input::get('giaban');
        $obj->thongtinchung = Input::get('thongtinchung');
        $obj->thongtinchitiet = Input::get('thongtinchitiet');
        $obj->hinhdaidien = Input::get('hinhdaidien');
        $obj->save();
        return redirect('/admin/apartments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Apartments::find($id);
        if ($obj == null) {
            return response('Apartments not found or has been deleted!', 404);
        }
        $obj->delete();
        return response('Deleted', 200);
    }
}
