@extends('layouts.master')
@section('content')

<form method="post" action="{{ url('update-mahasiswa', $Mhs->id) }}">
	{{ csrf_field() }}
	<div class="row mt-3">
		<div class="col">
			<label for="nama" class="form-label"><h5>Nama Mahasiswa</h5></label>
			<input type="text" class="form-control form-control-lg" name="nama" value="{{ $Mhs->nama }}">
		</div>
		<div class="col">
			<label for="email" class="form-label"><h5>Alamat Email</h5></label>
			<input type="text" class="form-control form-control-lg" name="email" value="{{ $Mhs->email }}">
		</div>
	</div>

	<div class="row mt-3">
		<div class="col">
			<label for="nim" class="form-label"><h5>NIM</h5></label>
			<input type="text" class="form-control form-control-lg" id="nim" name="nim" value="{{ $Mhs->nim }}">
		</div>
		<div class="col">
			<label for="alamat" class="form-label"><h5>Alamat Rumah</h5></label>
			<input type="text" class="form-control form-control-lg" name="alamat" value="{{ $Mhs->alamat }}">
		</div>
	</div><br>

	<button type="submit" class="btn btn-success" name="kirim">Edit</button>
</form>

@endsection