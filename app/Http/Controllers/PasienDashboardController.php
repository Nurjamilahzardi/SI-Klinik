<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Dokter;
use Illuminate\Http\Request;

class PasienDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pasien.index',[
            'pasiens'=>Pasien::latest()->paginate(8)

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pasien.create',[
            'dokters'=>Dokter::all()
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
            'idpasien' => 'required|unique:pasiens|size:10',
            'namapasien' => 'required',
            'dokter_id' => 'required',
            'jenis_kelamin' => 'required|in:P,L',
            'penyakit' => 'required',
            'alamat' => 'required'
        
        ]);
         Pasien::create($validatedData);
         return redirect('/pasiendashboard')->with('pesan','Data berhasil ditambahkan');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show(Pasien $pasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit(Pasien $pasien, $id)
    {
        return view('dashboard.pasien.edit',[
            'pasiens'=> Pasien::find($id),
            'dokters' => Dokter::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pasien $pasien, $id)
    {
        $validatedData=$request->validate([
            'idpasien' => 'required',
            'namapasien' => 'required',
            'dokter_id' => 'required',
            'jenis_kelamin' => 'required|in:P,L',
            'penyakit' => 'required',
            'alamat' => 'required'
        
        ]);
        Pasien::where('id',$id)->update($validatedData);
         return redirect('/pasiendashboard')->with('pesan','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pasien $pasien, $id)
    {
        Pasien::destroy($id);
        return redirect('/pasiendashboard')->with('pesan','Data Berhasil Dihapus');
    }
}
