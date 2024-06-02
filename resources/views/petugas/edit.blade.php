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
        @foreach ($petugas as $d)
      <form action="updatepetugas" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <div class="card-body">
              <input type="hidden" name="id_petugas" value="{{ $d->id_petugas }}">
              <div class="mb-3 row">
                  <label class="col-sm-2 col-form-label">Nama Petugas</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama_petugas" class="form-control" placeholder="Nama Petugas" value="{{ $d->nama_petugas }}">
                </div>
              </div>
              <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                          <input type="text" name="username" class="form-control" placeholder="Username" value="{{ $d->username }}">
                      </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" name="password" class="form-control" placeholder="Password">
                  </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Level</label>
                    <div class="col-sm-10">
                        <select name="id_level" class="form-control" id="">
                          @foreach ($detail_level as $item)                           
                            <option value="{{ $item['id_level'] }}">{{ $item['nama_level'] }}</option>
                            @endforeach
                        </select>
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