<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
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
        return view('obat.index',[
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
        return view('obat.create');
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
         return redirect('/obat')->with('pesan','Data berhasil ditambahkan');;
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
    public function edit(Obat $obat)
    {
        return view('obat.edit',[
            'obats'=>$obat
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Obat $obat)
    {
        $validatedData=$request->validate([
            'kodeobat' => 'required',
            'namaobat' => 'required',
            'kategori' => 'required',
            'stok' => 'required',
            'expired' => 'required'
        
        ]);
        Obat::where('id',$obat->id)->update($validatedData);
         return redirect('/obat')->with('pesan','Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Obat $obat)
    {
        Obat::destroy($obat->id);
        return redirect('/obat')->with('pesan','Data berhasil dihapus');
    }
}
