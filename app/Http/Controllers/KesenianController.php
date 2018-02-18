<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kesenian;

class KesenianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $f = kesenian::all();
        return view('kesenian.index',compact('f'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kesenian.create'); 
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
            'nama' => 'required|unique:kesenians|max:255',
            'asal' => 'required|min:2',
            'fungsi' => 'required|min:2',
            'jenis_kesenian' => 'required|min:2',
            'sejarah' => 'required|min:2'
        ]);

        $f = new kesenian;
        $f->nama = $request->nama;
        $f->asal = $request->asal;
        $f->fungsi = $request->fungsi;
        $f->jenis_kesenian = $request->jenis_kesenian;
        $f->sejarah = $request->sejarah;
        $f->save();
        return redirect()->route('u.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $f = kesenian::findOrFail($id);
        return view('kesenian.show',compact('f'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $f = kesenian::findOrFail($id);
        return view('kesenian.edit',compact('f'));
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
        $f = kesenian::findOrFail($id);
        $f->nama = $request->nama;
        $f->asal = $request->asal;
        $f->fungsi = $request->fungsi;
        $f->jenis_kesenian = $request->jenis_kesenian;
        $f->sejarah = $request->sejarah;
        $f->save();
        return redirect()->route('u.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $f = kesenian::findOrFail($id);
        $f->delete();
        return redirect()->route('u.index');
    }
}
