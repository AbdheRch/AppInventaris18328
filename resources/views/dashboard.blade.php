@extends('layout')
@section('content')
<div>
    <div class="container-fluid">
      <h3>{{ $title }}</h3>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">{{ $isi }}</h5>
          </div>
        </div>
    </div>
</div>
@endsection