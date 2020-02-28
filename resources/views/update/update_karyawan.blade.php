@extends('utama.index')
@section('title','Update Karyawan')
@section('content')
<div class="row">
	<div class="col-sm-12">
		<form action="/karyawan/{{ $karyawan->id }}" method="post">
			{{csrf_field()}}
			{{method_field('PUT')}}
			<div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" name="nama" class="form-control" id="nama" value="{{$karyawan->nama}}">
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<input type="text" name="alamat" class="form-control" id="alamat" value="{{$karyawan->alamat}}">
			</div>
			<div class="form-group">
				<label for="jabatan">Jabatan</label>
				<input type="text" name="jabatan" class="form-control" id="jabatan" value="{{$karyawan->jabatan}}">
			</div>
			<button type="submit" class="btn btn-primary">Simpan</button>
		</form>
	</div>
</div>