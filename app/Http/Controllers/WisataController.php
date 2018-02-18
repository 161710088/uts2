<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\wisata;

class WisataController extends Controller 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $g = wisata::all();
        return view('wisata.index',compact('g'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wisata.create');
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
            'nama' => 'required|unique:wisatas|max:255',
            'lokasi' => 'required|min:2',
            'jenis_wisata' => 'required|min:2',
            'keunggulan' => 'required|min:2',
            'sejarah' => 'required|min:2'
        ]);

        $g = new wisata;
        $g->nama = $request->nama;
        $g->lokasi = $request->lokasi;
        $g->jenis_wisata = $request->jenis_wisata;
        $g->keunggulan = $request->keunggulan;
        $g->sejarah = $request->sejarah;
        $g->save();
        return redirect()->route('t.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $g = wisata::findOrFail($id);
        return view('wisata.show',compact('g'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $g = wisata::findOrFail($id);
        return view('wisata.edit',compact('g'));
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
        $g = wisata::findOrFail($id);
        $g->nama = $request->nama;
        $g->lokasi = $request->lokasi;
        $g->jenis_wisata = $request->jenis_wisata;
        $g->keunggulan = $request->keunggulan;
        $g->sejarah = $request->sejarah;
        $g->save();
        return redirect()->route('t.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $g = wisata::findOrFail($id);
        $g->delete();
        return redirect()->route('t.index');
    }
}
