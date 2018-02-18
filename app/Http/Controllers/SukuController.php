<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\suku;

class SukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $e = suku::all();
        return view('suku.index',compact('e'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|unique:sukus|max:255',
            'wilayah' => 'required|min:2',
            'populasi' => 'required|min:2',
            'agama' => 'required|min:2',
            'bahasa' => 'required|min:2'
        ]);

        $e = new suku;
        $e->nama = $request->nama;
        $e->wilayah = $request->wilayah;
        $e->populasi = $request->populasi;
        $e->agama = $request->agama;
        $e->bahasa = $request->bahasa;
        $e->save();
        return redirect()->route('v.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $e = suku::findOrFail($id);
        return view('suku.show',compact('e'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $e = suku::findOrFail($id);
        return view('suku.edit',compact('e'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $e = suku::findOrFail($id);
        $e->nama = $request->nama;
        $e->wilayah = $request->wilayah;
        $e->populasi = $request->populasi;
        $e->agama = $request->agama;
        $e->bahasa = $request->bahasa;
        $e->save();
        return redirect()->route('v.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $e = suku::findOrFail($id);
        $e->delete();
        return redirect()->route('v.index');
    }
}
