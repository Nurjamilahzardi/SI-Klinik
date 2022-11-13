<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use App\Models\Perawat;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ruangan.index',[
            'ruangans'=>Ruangan::latest()->paginate(8)

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ruangan.create',[
            'perawats'=>Perawat::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'koderuangan' => 'required|unique:ruangans|size:4',
            'namaruangan' => 'required',
            'perawat_id' => 'required',
            'kelas' => 'required'
        
        ]);
         Ruangan::create($validatedData);
         return redirect('/ruangan')->with('pesan','Data berhasil ditambahkan');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function show(Ruangan $ruangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function edit(Ruangan $ruangan)
    {
        return view('ruangan.edit',[
            'ruangans'=>$ruangan,
            'perawats' => Perawat::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ruangan $ruangan)
    {
        $validatedData=$request->validate([
            'koderuangan' => 'required',
            'namaruangan' => 'required',
            'perawat_id' => 'required',
            'kelas' => 'required'
        
        ]);
        Ruangan::where('id',$ruangan->id)->update($validatedData);
         return redirect('/ruangan')->with('pesan','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ruangan $ruangan)
    {
        Ruangan::destroy($ruangan->id);
        return redirect('/ruangan')->with('pesan','Data Berhasil Dihapus');
    }
}
