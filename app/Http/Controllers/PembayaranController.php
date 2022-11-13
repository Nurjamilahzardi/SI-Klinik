<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Pasien;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pembayaran.index',[
            'pembayarans'=>Pembayaran::latest()->paginate(8),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembayaran.create',[
            'pasiens'=>Pasien::all()
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
            'kode' => 'required|unique:pembayarans|size:4',
            'pasien_id' => 'required',
            'pelayanan' => 'required',
            'jenis_kelamin' => 'required|in:P,L'
        
        ]);
        Pembayaran::create($validatedData);
         return redirect('/pembayaran')->with('pesan','Data berhasil ditambahkan');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembayaran $pembayaran)
    {
        return view('pembayaran.edit',[
            'pembayarans'=>$pembayaran,
            'pasiens'=>Pasien::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pembayaran $pembayaran)
    {
        $validatedData=$request->validate([
            'kode' => 'required',
            'pasien_id' => 'required',
            'pelayanan' => 'required',
            'jenis_kelamin' => 'required|in:P,L'
        
        ]);
        Pembayaran::where('id',$pembayaran->id)->update($validatedData);
         return redirect('/pembayaran')->with('pesan','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembayaran $pembayaran)
    {
        Pembayaran::destroy($pembayaran->id);
        return redirect('/pembayaran')->with('pesan','Data Berhasil Dihapus');
    }
}
