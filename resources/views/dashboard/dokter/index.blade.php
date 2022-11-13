@extends('dashboard.layouts.main')

@section('container')

@if (session()->has('pesan'))
	<div class="alert alert-success" role="alert">
		{{ @session('pesan') }}
	</div>
@endif

<h2 style="text-align: center;">Data Dokter</h2>
	<td><a href="/dokterdashboard/create" class="btn btn-dark"> <i class="fas fa-cart-plus"></i> Tambah Data</a></td>
	<table class="table table-secondary table-striped" style="text-align: center;">
		<tr>
			<th>No</th>
			<th>NIP</th>
			<th>Nama Dokter</th>
			<th>Jenis Kelamin</th>
			<th>Spesialis</th>
			<th>Alamat</th>
            <th>No Telp</th>
			<th>Action</th>
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
				<td>
					<a href="/dokterdashboard/{{ $dokter->id }}/edit" class="btn btn-secondary btn-sm"><i class="fas fa-edit"></i></a>
					<form action="/dokterdashboard/{{ $dokter->id }}" class="d-inline" method="post">
						@method('DELETE')
						@csrf
						<button class="btn btn-secondary btn-sm" type="submit" onclick="return confirm('Yakin akan Mendelete Data?')"><i class="fa-solid fa-trash"></i></button>
					</form>
				</td>
			</tr>
		@endforeach
	</table>
	{{ $dokters->links('pagination::bootstrap-5') }}
@endsection