<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use Illuminate\Support\Facades\db;

class ValidasiPengembalianController extends Controller
{
    public function validasi($id_peminjaman)
    {
        $peminjaman = Peminjaman::findOrFail($id_peminjaman);
        $peminjaman->status_peminjaman = 'Divalidasi';
        $peminjaman->save();
        return redirect()->back()->with('success', 'Status peminjaman berhasil divalidasi.');
    }

    public function pengembalian()
    {
        $judul = "Peminjaman";
        $data = Peminjaman::with('pegawai')->get();$data = DB::table('peminjamen')
        ->join('pegawais', 'peminjamen.id_pegawai', '=', 'pegawais.id_pegawai')
        ->where('peminjamen.status_peminjaman', 'Divalidasi') // Assuming 'peminjaman' table is involved
        ->select('peminjamen.*', 'pegawais.nama_pegawai')
        ->latest()
        ->get();
        return view('peminjaman.pengembalian', compact('judul', 'data'));
    }

    public function kembalikan($id_peminjaman)
    {
        $peminjaman = Peminjaman::findOrFail($id_peminjaman);
        $peminjaman->tanggal_kembali = now();
        $peminjaman->status_peminjaman = 'Dikembalikan';
        $peminjaman->save();
        return redirect()->back()->with('success', 'Peminjaman berhasil dikembalikan.');
    }
}