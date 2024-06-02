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
        <form action="storepeminjaman" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <div class="card-body">
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-10">
                      <select name="id_inventaris" class="form-control" id="id_inventaris">
                          <option value="">-- Pilih --</option>                            
                          @foreach ($data as $item)
                          <option value="{{ $item['id_inventaris'] }}">{{ $item['nama'] }}</option>
                          @endforeach
                      </select>
                  </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Jumlah</label>
                        <div class="col-sm-10">
                          <input type="number" name="jumlah" id="jumlah" class="form-control" placeholder="Jumlah">
                      </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Tanggal Pinjam</label>
                    <div class="col-sm-10">
                      <input type="date"  name="tanggal_pinjam" id="tanggal_pinjam" class="form-control" placeholder="Alamat" value="<?php echo date('Y-m-d'); ?>" disabled>
                  </div>
                </div>
                <input type="text" name="status_peminjaman" class="form-control" placeholder="Alamat" hidden>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Id Pegawai</label>
                    <div class="col-sm-10">
                      <input type="number" name="id_pegawai" name="id_pegawai" class="form-control" placeholder="Id Pegawai">
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
