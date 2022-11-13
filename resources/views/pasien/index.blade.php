@extends('layout.main')

@section('container')

@if (session()->has('pesan'))
	<div class="alert alert-success" role="alert">
		{{ @session('pesan') }}
	</div>
@endif

<h2 style="text-align: center;">Data Pasien</h2>
	<table class="table table-secondary table-striped" style="text-align: center;">
		<tr>
			<th>No</th>
			<th>ID Pasien</th>
			<th>Nama Pasien</th>
			<th>Nama Dokter</th>
			<th>Jenis Kelamin</th>
			<th>Penyakit</th>
			<th>Alamat</th>
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
			</tr>
		@endforeach
	</table>
	{{ $pasiens->links('pagination::bootstrap-5') }}
@endsection