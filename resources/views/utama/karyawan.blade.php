@extends('utama.index')
@section('title','Halaman Data Karyawan')
@section('content')
<br>
<div class="row">
	<div class="col-sm-12">
		<a href="/tambah" class="btn btn-primary">Tambah Data Karyawan</a>
		<br><br>
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Nama</th>
					<th scope="col">Alamat</th>
					<th scope="col">Jabatan</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $tampil)
				<tr>
					<td>{{ $tampil->id }}</td>
					<td>{{ $tampil->nama }}</td>
					<td>{{ $tampil->alamat }}</td>
					<td>{{ $tampil->jabatan }}</td>
					<td><a href="/karyawan/edit/{{ $tampil->id }}" class="btn btn-primary">Edit</a></td>
					<td>
						<form action="/karyawan/{{$tampil->id}}" method="post">
							{{csrf_field()}}
							{{method_field('DELETE')}}
							<button type="submit" value="hapus" class="btn btn-danger">Hapus</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection