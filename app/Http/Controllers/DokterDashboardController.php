<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.dokter.index',[
            'dokters'=>Dokter::latest()->paginate(6)

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.dokter.create');
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
            'nip' => 'required|unique:dokters|size:10',
            'namadokter' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required|in:P,L',
            'spesialis' => 'required',
            'notelp' => 'required'
        
        ]);
         Dokter::create($validatedData);
         return redirect('/dokterdashboard')->with('pesan','Data berhasil ditambahkan');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function show(Dokter $dokter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function edit(Dokter $dokter, $id)
    {
        return view('dashboard.dokter.edit',[
            'dokters'=>Dokter::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dokter $dokter, $id)
    {
        $validatedData=$request->validate([
            'nip' => 'required',
            'namadokter' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required|in:P,L',
            'spesialis' => 'required',
            'notelp' => 'required'
        
        ]);
        Dokter::where('id',$id)->update($validatedData);
         return redirect('/dokterdashboard')->with('pesan','Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dokter $dokter, $id)
    {
        Dokter::destroy($id);
        return redirect('/dokterdashboard')->with('pesan','Data berhasil dihapus');
    }
}
