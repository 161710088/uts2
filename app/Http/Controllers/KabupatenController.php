<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kabupaten;

class KabupatenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $d = kabupaten::all();
        return view('kabupaten.index',compact('d'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kabupaten.create');
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
            'nama' => 'required|unique:kabupatens|max:255',
            'nama_bupati' => 'required|min:2',
            'luas' => 'required|min:2',
            'kepadatan' => 'required|min:2',
            'populasi' => 'required|min:2'
        ]);

        $d = new kabupaten;
        $d->nama = $request->nama;
        $d->nama_bupati = $request->nama_bupati;
        $d->luas = $request->luas;
        $d->kepadatan = $request->kepadatan;
        $d->populasi = $request->populasi;
        $d->save();
        return redirect()->route('w.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $d = kabupaten::findOrFail($id);
        return view('kabupaten.show',compact('d'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $d = kabupaten::findOrFail($id);
        return view('kabupaten.edit',compact('d'));
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
        $d = kabupaten::findOrFail($id);
        $d->nama = $request->nama;
        $d->nama_bupati = $request->nama_bupati;
        $d->luas = $request->luas;
        $d->kepadatan = $request->kepadatan;
        $d->populasi = $request->populasi;
        $d->save();
        return redirect()->route('w.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = kabupaten::findOrFail($id);
        $d->delete();
        return redirect()->route('w.index');
    }
}
