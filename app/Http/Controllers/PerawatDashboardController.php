<?php

namespace App\Http\Controllers;

use App\Models\Perawat;
use Illuminate\Http\Request;

class PerawatDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.perawat.index',[
            'perawats'=>Perawat::latest()->paginate(8)

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.perawat.create');
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
            'nip' => 'required|unique:perawats|size:10',
            'namaperawat' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required|in:P,L',
            'notelp' => 'required'
        
        ]);
         Perawat::create($validatedData);
         return redirect('/perawatdashboard')->with('pesan','Data berhasil ditambahkan');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perawat  $perawat
     * @return \Illuminate\Http\Response
     */
    public function show(Perawat $perawat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perawat  $perawat
     * @return \Illuminate\Http\Response
     */
    public function edit(Perawat $perawat, $id)
    {
        return view('dashboard.perawat.edit',[
            'perawats'=>Perawat::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perawat  $perawat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perawat $perawat, $id)
    {
        $validatedData=$request->validate([
            'nip' => 'required',
            'namaperawat' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required|in:P,L',
            'notelp' => 'required'
        
        ]);
        Perawat::where('id',$id)->update($validatedData);
         return redirect('/perawatdashboard')->with('pesan','Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perawat  $perawat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perawat $perawat, $id)
    {
        Perawat::destroy($id);
        return redirect('/perawatdashboard')->with('pesan','Data berhasil dihapus');
    }
}
