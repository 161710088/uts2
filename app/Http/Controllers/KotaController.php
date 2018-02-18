<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kota;
class KotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $c = kota::all();
        return view('kota.index',compact('c'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kota.create');
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
            'nama' => 'required|unique:kotas|max:255',
            'nama_walkot' => 'required|min:2',
            'hari_jadi' => 'required|min:2',
            'julukan' => 'required|min:2',
            'sejarah' => 'required|min:2'
        ]);

        $c = new kota;
        $c->nama = $request->nama;
        $c->nama_walkot = $request->nama_walkot;
        $c->hari_jadi = $request->hari_jadi;
        $c->julukan = $request->julukan;
        $c->sejarah = $request->sejarah;
        $c->save();
        return redirect()->route('x.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $c = kota::findOrFail($id);
        return view('kota.show',compact('c'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $c = kota::findOrFail($id);
        return view('kota.edit',compact('c'));
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
        $c = kota::findOrFail($id);
        $c->nama = $request->nama;
        $c->nama_walkot = $request->nama_walkot;
        $c->hari_jadi = $request->hari_jadi;
        $c->julukan = $request->julukan;
        $c->sejarah = $request->sejarah;
        $c->save();
        return redirect()->route('x.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $c = kota::findOrFail($id);
        $c->delete();
        return redirect()->route('x.index');
    }
}
