@extends('layout')
@section('content')

<div class="page-header">
    <div class="page-block">
      <div class="row align-items-center">
        <div class="col-md-12">
          <div class="page-header-title">
            <h2 class="m-b-10">{{ $judul }}</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
            <h2 class="card-title" style="float: left">{{ $judul }}</h2>
            <a href="{{ url('/peminjaman/pdf') }}" class="btn" style="float: right"><i class="fa-solid fa-print text-secondary"></i></a>
          </div>
        <div class="card-body">
          <table id="example2" class="table table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Status Peminjaman</th>
                <th>Nama Pegawai</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $d)
              <tr>
                 <th>{{ $loop->iteration  }}</th>
                 <th>{{ $d->tanggal_pinjam }}</th>
                 <th>{{ $d->tanggal_kembali }}</th>                
                 <th>{{ $d->status_peminjaman }}</th>                
                 <th>{{ $d->nama_pegawai }}</th>                
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection