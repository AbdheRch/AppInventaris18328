<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenerateLaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function laporan()
    { 
        $judul = "Laporan Peminjaman";
        $data = Peminjaman::with('pegawai')->get();$data = DB::table('peminjamen')
        ->join('pegawais', 'peminjamen.id_pegawai', '=', 'pegawais.id_pegawai')
        ->select('peminjamen.*', 'pegawais.nama_pegawai')
        ->latest()
        ->get();
        return view('laporan.tampil',  compact('judul', 'data'));
    }

    public function datalaporan()
    { 
        $data = Peminjaman::with('pegawai')->get();$data = DB::table('peminjamen')
        ->join('pegawais', 'peminjamen.id_pegawai', '=', 'pegawais.id_pegawai')
        ->select('peminjamen.*', 'pegawais.nama_pegawai')
        ->latest()
        ->get();
        return view('laporan.tampil',  compact('judul', 'data'));
    }

    public function generatePdf()
    {
        $peminjaman = Peminjaman::with('pegawai')->get();$peminjaman = DB::table('peminjamen')
        ->join('pegawais', 'peminjamen.id_pegawai', '=', 'pegawais.id_pegawai')
        ->select('peminjamen.*', 'pegawais.nama_pegawai')
        ->latest()
        ->get();   

        $data = [
            'judul' => 'Data Peminjaman',
            'data' => $peminjaman, // Pastikan model Peminjaman sudah di-import
        ];

        $pdf = new Dompdf();
        $pdf->loadHtml(view('laporan.datalaporan', $data));

        // (Opsi) Atur ukuran dan orientasi halaman
        $pdf->setPaper('A4', 'potrait');

        // Render PDF
        $pdf->render();

        // Tampilkan PDF atau simpan ke file
        return $pdf->stream('laporan_peminjaman.pdf');
    }
}