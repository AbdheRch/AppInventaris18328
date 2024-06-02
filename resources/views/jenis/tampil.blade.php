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
          <a href="tambahjenis" class="btn" style="float: right"><i class="fa-solid fa-folder-plus text-secondary" ></i></a>
        </div>
        <div class="card-body">
          <table id="example2" class="table table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Jenis</th>
                <th>Kode Jenis</th>
                <th>Keterangan</th>
                <th>OPSI</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $d)
              <tr>
                 <th>{{ $loop->iteration  }}</th>
                 <th>{{ $d->nama_jenis }}</th>
                 <th>{{ $d->kode_jenis }}</th>                
                 <th>{{ $d->keterangan }}</th>                
                 <th>
                   <a href="editjenis{{ $d->id_jenis }}" class="btn"><i class="fa-solid fa-pencil text-warning"></i></a>
                   <a href="hapusjenis{{ $d->id_jenis }}" class="btn"><i class="fas fa-trash-alt text-danger"></i></a>
                 </th>
              </tr>
                 @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

@endsection