@extends('utama.index')
@section('title','Tambah Karyawan')
@section('content')
<div class="row">
	<div class="col-sm-12">
		@if($errors->any())
		<div class="alert alert danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
		@endif
		<form action="/karyawan" method="post">
			{{ csrf_field()}}
			<div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" class="form-control" id="nama" name="nama">
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<input type="text" class="form-control" id="alamat" name="alamat">
			</div>
			<div class="form-group">
				<label for="jabatan">Jabatan</label>
				<input type="text" class="form-control" id="jabatan" name="jabatan">
			</div>
			<button type="submit" class="btn btn-primary">Simpan</button>
		</form>
	</div>
</div>
@endsection