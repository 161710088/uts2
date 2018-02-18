<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pulau;

class PulauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    // menampilkan semua data pulau melalui model 'pulau'
        $a = pulau::all();
        return view('pulau.index',compact('a'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pulau.create');
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
            'nama' => 'required|unique:pulaus|max:255',
            'koordinat' => 'required||min:2',
            'luas' => 'required||min:2',
            'kepulauan' => 'required||min:2',
            'puncak_tertinggi' => 'required||min:2'
        ]);

        $a = new pulau;
        $a->nama = $request->nama;
        $a->koordinat = $request->koordinat;
        $a->luas = $request->luas;
        $a->kepulauan = $request->kepulauan;
        $a->puncak_tertinggi = $request->puncak_tertinggi;
        $a->save();
        return redirect()->route('z.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $a = pulau::findOrFail($id);
        return view('pulau.show',compact('a'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $a = pulau::findOrFail($id);
        return view('pulau.edit',compact('a'));
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
        // update data berdasarkan id
        $a = pulau::findOrFail($id);
        $a->nama = $request->nama;
        $a->koordinat = $request->koordinat;
        $a->luas = $request->luas;
        $a->kepulauan = $request->kepulauan;
        $a->puncak_tertinggi = $request->puncak_tertinggi;
        $a->save();
        return redirect()->route('z.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = pulau::findOrFail($id);
        $a->delete();
        return redirect()->route('z.index');
    }
}
