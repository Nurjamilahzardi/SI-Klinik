<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth')->only('edit','create');
    }

    public function index()
    {
        return view('dokter.index',[
            'dokters'=>Dokter::latest()->paginate(8)

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dokter.create');
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
         return redirect('/dokter')->with('pesan','Data berhasil ditambahkan');;
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
    public function edit(Dokter $dokter)
    {
        return view('dokter.edit',[
            'dokters'=>$dokter
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dokter $dokter)
    {
        $validatedData=$request->validate([
            'nip' => 'required',
            'namadokter' => 'required',
            'alamat' => 'required',
            'spesialis' => 'required',
            'fee' => 'required',
            'jenis_kelamin' => 'required|in:P,L',
            'notelp' => 'required'
        
        ]);
        Dokter::where('id',$dokter->id)->update($validatedData);
         return redirect('/dokter')->with('pesan','Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dokter $dokter)
    {
        Dokter::destroy($dokter->id);
        return redirect('/dokter')->with('pesan','Data berhasil dihapus');
    }
}
