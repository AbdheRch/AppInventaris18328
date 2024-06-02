<h1>Daftar Peminjaman</h1>

<table>
    <tr>
        <th>ID Peminjaman</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Kembali</th>
        <th>Status Peminjaman</th>
        <th>Nama Pegawai</th>
    </tr>
    @foreach($data as $p)
    <tr>
        <td>{{ $p->id_peminjaman }}</td>
        <td>{{ $p->tanggal_pinjam }}</td>
        <td>{{ $p->tanggal_kembali }}</td>
        <td>{{ $p->status_peminjaman }}</td>
        <td>{{ $p->nama_pegawai }}</td>
    </tr>
    @endforeach
</table>