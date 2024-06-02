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
      </div>
        @foreach ($jenis as $d)
        <form action="updatejenis" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <div class="card-body">
                <input type="hidden" name="id_jenis" value="{{ $d->id_jenis }}">
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Nama Jenis</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama_jenis" class="form-control" placeholder="Nama Ruang" value="{{ $d->nama_jenis }}">
                  </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Kode Jenis</label>
                        <div class="col-sm-10">
                          <input type="text" name="kode_jenis" class="form-control" placeholder="Kode Ruang"value="{{ $d->kode_jenis }}">
                      </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                      <input type="text" name="keterangan" class="form-control" placeholder="Keterangan"value="{{ $d->keterangan }}">
                  </div>
                </div>
                <div class="d-grid gap-2 d-md-block">
                  <input class="btn btn-secondary"  type="submit" name="submit" value="Update">
                  <button class="btn" style="background-color: gray" name="reset" type="reset">RESET</button>
                </div>
            </div>
        </form>
        @endforeach
    </div>
  </div>
</div>

@endsection