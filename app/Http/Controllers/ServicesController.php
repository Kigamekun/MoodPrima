<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.services', [
            'data' => Services::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plants.create-or-edit',['act'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->file('thumb') != null) {
            $file = $request->file('thumb');
            $thumbname = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path() . '/thumb' . '/', $thumbname);
            Services::
            create([
                'title' => $request->title,
                'thumb' => $thumbname,
            ]);
        } else {
            Services::
            create([
                'title' => $request->title,
            ]);
        }
        return redirect()->back()->with(['message'=>'Services berhasil ditambahkan','status'=>'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services  $plants
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Services::find($id);
        return view('plants.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $plants
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Services::find($id);
        return view('plants.create-or-edit', [
            'data' => $data,
            'act' => 'edit'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $plants
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->file('thumb') != null) {
            $file = $request->file('thumb');
            $thumbname = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path() . '/thumb' . '/', $thumbname);
            Services::where('id', $id)
            ->update([
                'title' => $request->title,
                'thumb' => $thumbname,
            ]);
        } else {
            Services::where('id', $id)
            ->update([
                'title' => $request->title,
            ]);
        }
        return redirect()->back()->with(['message'=>'Services berhasil di update','status'=>'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $plants
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Services::destroy($id);
        return redirect()->back()->with(['message'=>'Services berhasil di delete','status'=>'success']);
    }
}
