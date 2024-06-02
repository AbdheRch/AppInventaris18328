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
        @foreach ($inventaris as $d)
        <form action="updateinventaris" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <div class="card-body">
                <input type="hidden" name="id_inventaris" value="{{ $d->id_inventaris }}">
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $d->nama }}">
                  </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Kondisi</label>
                        <div class="col-sm-10">
                          <input type="text" name="kondisi" class="form-control" placeholder="Kondisi" value="{{ $d->kondisi }}">
                      </div>
                </div>
                <input type="text" hidden name="keterangan" class="form-control" placeholder="Kondisi" value="Tersedia">
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Jumlah</label>
                    <div class="col-sm-10">
                      <input type="number" name="jumlah" class="form-control" placeholder="Jumlah" value="{{ $d->jumlah }}">
                  </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Jenis</label>
                    <div class="col-sm-10">
                        <select name="id_jenis" class="form-control" id="">
                          <option value="" class="center">--Pilih Jenis--</option>
                            @foreach ($detail_jenis as $item)
                            <option value="{{ $item['id_jenis'] }}">{{ $item['nama_jenis'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Tanggal Register</label>
                    <div class="col-sm-10">
                      <input type="date" name="tanggal_register" class="form-control" placeholder="Tanggal Register" value="{{ $d->tanggal_register }}">
                  </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Ruang</label>
                    <div class="col-sm-10">
                        <select name="id_ruang" class="form-control" id="">
                          <option value="">--Pilih Ruang--</option>
                            @foreach ($detail_ruang as $item)
                            <option value="{{ $item['id_ruang'] }}">{{ $item['nama_ruang'] }}</option>
                            @endforeach
                        </select>
                  </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Kode Inventaris</label>
                    <div class="col-sm-10">
                      <input type="text" name="kode_inventaris" class="form-control" placeholder="Jumlah" value="{{ $d->kode_inventaris }}">
                  </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Petugas</label>
                    <div class="col-sm-10">
                        <select name="id_petugas" class="form-control" id="">
                          <option value="">--Pilih Petugas--</option>
                            @foreach ($detail_petugas as $item)
                            <option value="{{ $item['id_petugas'] }}">{{ $item['nama_petugas'] }}</option>
                            @endforeach
                        </select>
                  </div>
                </div>
                <div class="d-grid gap-2 d-md-block">
                  <input class="btn btn-secondary"  type="submit" name="submit" value="Tambah">
                  <button class="btn" style="background-color: gray" name="reset" type="reset">RESET</button>
                </div>
            </div>
        </form>
        @endforeach
    </div>
  </div>
</div>

@endsection