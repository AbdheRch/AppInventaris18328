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
        <h2 class="card-title" style="float: left">Tambah Data Pegawaii</h2>
      </div>
        <form action="storepegawai" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <div class="card-body">
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Nama Pegawaii</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama_pegawai" class="form-control" placeholder="Nama Pegawai">
                  </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">No Pegawai</label>
                        <div class="col-sm-10">
                          <input type="number" name="no_pegawai" class="form-control" placeholder="No Pegawai">
                      </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                  </div>
                </div>

                <div class="d-grid gap-2 d-md-block">
                  <input class="btn btn-secondary"  type="submit" name="submit" value="Tambah">
                  <button class="btn" style="background-color: gray" name="reset" type="reset">RESET</button>
                </div>
            </div>
        </form>
    </div>
  </div>
</div>

@endsection