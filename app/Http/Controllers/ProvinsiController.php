<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\provinsi;

class ProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $b = provinsi::all();
        return view('provinsi.index',compact('b'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('provinsi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $b = new provinsi;
        $b->nama = $request->nama;
        $b->nama_gubernur = $request->nama_gubernur;
        $b->luas = $request->luas;
        $b->kepadatan = $request->kepadatan;
        $b->populasi = $request->populasi;
        $b->save();
        return redirect()->route('y.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $b = provinsi::findOrFail($id);
        return view('provinsi.show',compact('b'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $b = provinsi::findOrFail($id);
        return view('provinsi.edit',compact('b'));
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
        $this->validate($request,[
            'nama' => 'required|unique:pulaus|max:255',
            'nama_gubernur' => 'required||min:2',
            'luas' => 'required||min:2',
            'kepadatan' => 'required||min:2',
            'populasi' => 'required||min:2'
        ]);

        // update data berdasarkan id
        $b = provinsi::findOrFail($id);
        $b->nama = $request->nama;
        $b->nama_gubernur = $request->nama_gubernur;
        $b->luas = $request->luas;
        $b->kepadatan = $request->kepadatan;
        $b->populasi = $request->populasi;
        $b->save();
        return redirect()->route('y.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $b = provinsi::findOrFail($id);
        $b->delete();
        return redirect()->route('y.index');
    }
}
