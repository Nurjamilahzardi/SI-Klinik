@extends('layout.main')

@section('container')

@if (session()->has('pesan'))
	<div class="alert alert-success" role="alert">
		{{ @session('pesan') }}
	</div>
@endif

<h2 style="text-align: center;">Data Dokter</h2>
	<table class="table table-secondary table-striped" style="text-align: center;">
			<tr>
				<th>No</th>
				<th>NIP</th>
				<th>Nama Dokter</th>
				<th>Jenis Kelamin</th>
				<th>Spesialis</th>
				<th>Alamat</th>
				<th>No Telp</th>
			</tr>
		
		@foreach($dokters as $dokter)
			<tr>
				<td>{{ $loop->iteration }}</td>
				<td>{{ $dokter->nip }}</td>
				<td>{{ $dokter->namadokter }}</td>
				<td>{{ $dokter->jenis_kelamin }}</td>
				<td>{{ $dokter->spesialis }}</td>
				<td>{{ $dokter->alamat }}</td>
                <td>{{ $dokter->notelp }}</td>
			</tr>
		@endforeach
	</table>
	{{ $dokters->links('pagination::bootstrap-5') }}
@endsection