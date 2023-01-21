<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meta;

class MetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.meta', [
            'data' => Meta::all()
        ]);
    }

    public function admin()
    {
        return view('admin.admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plants.create-or-edit', ['act'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Meta::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->back()->with(['message'=>'Meta berhasil ditambahkan','status'=>'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meta  $plants
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Meta::find($id);
        return view('plants.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meta  $plants
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Meta::find($id);
        return view('plants.create-or-edit', [
            'data' => $data,
            'act' => 'edit'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Meta  $plants
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->file('hero') != null) {
            $file = $request->file('hero');
            $thumbname = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path() . '/hero' . '/', $thumbname);
            Meta::where('id', $id)
            ->update([
                'hero' => $thumbname,
                'heading_hero' => $request->heading_hero,
                'about' => $request->about,
                'maps' => $request->maps,
                'email' => $request->email,
                'address' => $request->address,
            ]);
        } else {
            Meta::where('id', $id)
            ->update([
                'heading_hero' => $request->heading_hero,
                'about' => $request->about,
                'maps' => $request->maps,
                'email' => $request->email,
                'address' => $request->address,
            ]);
        }
        return redirect()->back()->with(['message'=>'Meta berhasil di update','status'=>'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meta  $plants
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Meta::destroy($id);
        return redirect()->back()->with(['message'=>'Meta berhasil di delete','status'=>'success']);
    }
}
