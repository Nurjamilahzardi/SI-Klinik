<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.obat.index',[
            'obats'=>Obat::latest()->paginate(8)

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.obat.create');
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
            'kodeobat' => 'required|unique:obats|size:4',
            'namaobat' => 'required',
            'kategori' => 'required',
            'stok' => 'required',
            'expired' => 'required'
        
        ]);
         Obat::create($validatedData);
         return redirect('/obatdashboard')->with('pesan','Data berhasil ditambahkan');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function show(Obat $obat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function edit(Obat $obat, $id)
    {
        return view('dashboard.obat.edit',[
            'obats'=> Obat::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Obat $obat, $id)
    {
        $validatedData=$request->validate([
            'kodeobat' => 'required',
            'namaobat' => 'required',
            'kategori' => 'required',
            'stok' => 'required',
            'expired' => 'required'
        
        ]);
        Obat::where('id',$id)->update($validatedData);
         return redirect('/obatdashboard')->with('pesan','Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Obat $obat, $id)
    {
        Obat::destroy($id);
        return redirect('/obatdashboard')->with('pesan','Data berhasil dihapus');
    }
}
