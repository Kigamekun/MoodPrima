<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.testimonial', [
            'data' => Testimonial::all()
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
            Testimonial::create([
                'name' => $request->name,
                'thumb' => $thumbname,
                'description' => $request->description,
            ]);
        } else {
            Testimonial::create([
                'name' => $request->name,
                'description' => $request->description,
            ]);
        }

        return redirect()->back()->with(['message'=>'Testimonial berhasil ditambahkan','status'=>'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $plants
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Testimonial::find($id);
        return view('plants.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $plants
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Testimonial::find($id);
        return view('plants.create-or-edit', [
            'data' => $data,
            'act' => 'edit'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $plants
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->file('thumb') != null) {
            $file = $request->file('thumb');
            $thumbname = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path() . '/thumb' . '/', $thumbname);
            Testimonial::where('id', $id)->update([
                'name' => $request->name,
                'thumb' => $thumbname,
                'description' => $request->description,
            ]);
        } else {
            Testimonial::where('id', $id)->update([
                'name' => $request->name,
                'description' => $request->description,
            ]);
        }
        return redirect()->back()->with(['message'=>'Testimonial berhasil di update','status'=>'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $plants
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Testimonial::destroy($id);
        return redirect()->back()->with(['message'=>'Testimonial berhasil di delete','status'=>'success']);
    }
}
