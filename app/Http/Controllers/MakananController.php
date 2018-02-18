<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\makanan;

class MakananController extends Controller 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $h = makanan::all(); 
        return view('makanan.index',compact('h'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('makanan.create');
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
            'nama' => 'required|unique:makanans|max:255',
            'asal' => 'required|min:2',
            'harga' => 'required|min:2',
            'bahan_pokok' => 'required|min:2',
            'jenis_makanan' => 'required|min:2'
        ]);

        $h = new makanan;
        $h->nama = $request->nama;
        $h->asal = $request->asal;
        $h->harga = $request->harga;
        $h->bahan_pokok = $request->bahan_pokok;
        $h->jenis_makanan = $request->jenis_makanan;
        $h->save();
        return redirect()->route('s.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $h = makanan::findOrFail($id);
        return view('makanan.show',compact('h'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $h = makanan::findOrFail($id);
        return view('makanan.edit',compact('h'));
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
        $h = makanan::findOrFail($id);
        $h->nama = $request->nama;
        $h->asal = $request->asal;
        $h->harga = $request->harga;
        $h->bahan_pokok = $request->bahan_pokok;
        $h->jenis_makanan = $request->jenis_makanan;
        $h->save();
        return redirect()->route('s.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $h = makanan::findOrFail($id);
        $h->delete();
        return redirect()->route('s.index');
    }
}
