<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pahlawan;

class PahlawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $j = pahlawan::all();
        return view('pahlawan.index',compact('j'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pahlawan.create');
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
            'nama' => 'required|unique:pahlawans|max:255',
            'tempat' => 'required|min:2',
            'tanggal_lahir' => 'required|min:2',
            'wafat' => 'required|min:2',
            'tempat_tinggal' => 'required|min:2',
            'kota_asal' => 'required|min:2'
        ]);

        $j = new pahlawan;
        $j->nama = $request->nama;
        $j->tempat = $request->tempat;
        $j->tanggal_lahir = $request->tanggal_lahir;
        $j->wafat = $request->wafat;
        $j->tempat_tinggal = $request->tempat_tinggal;
        $j->kota_asal = $request->kota_asal;
        $j->save();
        return redirect()->route('q.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $j = pahlawan::findOrFail($id);
        return view('pahlawan.show',compact('j'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $j = pahlawan::findOrFail($id);
        return view('pahlawan.edit',compact('j'));
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
        $j = pahlawan::findOrFail($id);
        $j->nama = $request->nama;
        $j->tempat = $request->tempat;
        $j->tanggal_lahir = $request->tanggal_lahir;
        $j->wafat = $request->wafat;
        $j->tempat_tinggal = $request->tempat_tinggal;
        $j->kota_asal = $request->kota_asal;
        $j->save();
        return redirect()->route('q.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $j = pahlawan::findOrFail($id);
        $j->delete();
        return redirect()->route('q.index');
    }
}
