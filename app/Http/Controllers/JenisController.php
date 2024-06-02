<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */  
    public function index()
    {
        $judul = "Data Jenis";
        $data = Jenis::orderBy('id_jenis', 'desc')->get();
        return view('jenis.tampil',  compact('judul', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $judul = "Tambah Data Jenis";
        return view('jenis.input', compact('judul'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('jenis')->insert([
            'nama_jenis'=> $request->nama_jenis,
            'kode_jenis'=> $request->kode_jenis,
            'keterangan'=> $request->keterangan
        ]);
        return redirect('/jenis');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $judul = "Edit Data Jenis";
        $data = DB::table('jenis')->where('id_jenis',$id)->get();
        return view('jenis.edit',['jenis' => $data], compact('judul'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        DB::table('jenis')->where('id_jenis',$request->id_jenis)->update([
            'nama_jenis'=> $request->nama_jenis,
            'kode_jenis'=> $request->kode_jenis,
            'keterangan'=> $request->keterangan
        ]);
        return redirect('/jenis');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('jenis')->where('id_jenis',$id)->delete();
        
        return redirect('/jenis');
    }
}
