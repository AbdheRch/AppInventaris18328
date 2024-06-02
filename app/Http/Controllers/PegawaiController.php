<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\db;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $judul = "Data Pegawai";
        $data = Pegawai::orderBy('id_pegawai', 'desc')->get();
        return view('pegawai.tampil', compact('judul', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $judul = "Tambah Data Pegawai";
        return view('pegawai.input', compact('judul'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('pegawais')->insert([
            'nama_pegawai'=> $request->nama_pegawai,
            'no_pegawai'=> $request->no_pegawai,
            'alamat'=> $request->alamat
        ]);
        return redirect('/pegawai');
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
        $judul = "Edit Data pegawai";
        $data = DB::table('pegawais')->where('id_pegawai',$id)->get();
        return view('pegawai.edit',['pegawai' => $data], compact('judul'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        DB::table('pegawais')->where('id_pegawai',$request->id_pegawai)->update([
            'nama_pegawai'=> $request->nama_pegawai,
            'no_pegawai'=> $request->no_pegawai,
            'alamat'=> $request->alamat
        ]);
        return redirect('/pegawai');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('pegawais')->where('id_pegawai',$id)->delete();
        
        return redirect('/pegawai');
    }
}
