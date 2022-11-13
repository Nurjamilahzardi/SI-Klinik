@extends('dashboard.layouts.main')

@section('container')

@if (session()->has('pesan'))
	<div class="alert alert-success" role="alert">
		{{ @session('pesan') }}
	</div>
@endif

<h2 style="text-align: center;">Data Pasien</h2>
	<td><a href="/pasiendashboard/create" class="btn btn-dark"> <i class="fas fa-cart-plus"></i> Tambah Data</a></td>
	<table class="table table-secondary table-striped" style="text-align: center;">
		<tr>
			<th>No</th>
			<th>ID Pasien</th>
			<th>Nama Pasien</th>
			<th>Nama Dokter</th>
			<th>Jenis Kelamin</th>
			<th>Penyakit</th>
			<th>Alamat</th>
			<th>Action</th>
		</tr>
		@foreach($pasiens as $pasien)
			<tr>
				<td>{{ $loop->iteration }}</td>
				<td>{{ $pasien->idpasien }}</td>
				<td>{{ $pasien->namapasien }}</td>
				<td>{{ $pasien->dokter->namadokter }}</td>
				<td>{{ $pasien->jenis_kelamin }}</td>
				<td>{{ $pasien->penyakit }}</td>
				<td>{{ $pasien->alamat }}</td>
				<td>
					<a href="/pasiendashboard/{{ $pasien->id }}/edit" class="btn btn-secondary btn-sm"><i class="fas fa-edit"></i></a>
					<form action="/pasiendashboard/{{ $pasien->id }}" class="d-inline" method="post">
						@method('DELETE')
						@csrf
						<button class="btn btn-secondary btn-sm" type="submit" onclick="return confirm('Yakin akan Mendelete Data?')"><i class="fa-solid fa-trash"></i></i></button>
					</form>
				</td>
			</tr>
		@endforeach
	</table>
	{{ $pasiens->links('pagination::bootstrap-5') }}
@endsection