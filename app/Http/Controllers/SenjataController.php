<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\senjata;

class SenjataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i = senjata::all();
        return view('senjata.index',compact('i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('senjata.create');
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
            'nama' => 'required|unique:senjatas|max:255',
            'asal' => 'required|min:2',
            'material' => 'required|min:2',
            'fungsi' => 'required|min:2',
            'sejarah' => 'required|min:2'
        ]);

        $i = new senjata;
        $i->nama = $request->nama;
        $i->asal = $request->asal;
        $i->material = $request->material;
        $i->fungsi = $request->fungsi;
        $i->sejarah = $request->sejarah;
        $i->save();
        return redirect()->route('r.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $i = senjata::findOrFail($id);
        return view('senjata.show',compact('i'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $i = senjata::findOrFail($id);
        return view('senjata.edit',compact('i'));
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
        $i = senjata::findOrFail($id);
        $i->nama = $request->nama;
        $i->asal = $request->asal;
        $i->material = $request->material;
        $i->fungsi = $request->fungsi;
        $i->sejarah = $request->sejarah;
        $i->save();
        return redirect()->route('r.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $i = senjata::findOrFail($id);
        $i->delete();
        return redirect()->route('r.index');
    }
}
