@extends('layouts.master')
@section('content')
    
  @foreach ($dtMahasiswa as $item)
  <div class="col-sm-6">
    <div class="course">
      <div class="card card-body border-success mb-4">
        <div class="row">
          <div class="col-sm-7">
            <h5 class="card-title">{{ $item->nama }}</h5>
            <p>{{ $item->nim }}</p>
            <p>{{ $item->alamat }}</p>
          </div>

          <div class="col-sm-5">
            <a href="{{ url('delete-mahasiswa', $item->id) }}" ><i class="fa fa-trash-can" style="color: #dc3545;"></i></a>
            <a href="{{ url('edit-mahasiswa', $item->id) }}" ><i class="fa fa-pen-to-square" style="color: #198754;"></i></a>
            <div>
              <p>{{ $item->email }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach

@endsection