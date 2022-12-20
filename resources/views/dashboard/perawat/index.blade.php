@extends('dashboard.layouts.main')

@section('container')

@if (session()->has('pesan'))
	<div class="alert alert-success" role="alert">
		{{ @session('pesan') }}
	</div>
@endif

<h2 style="text-align: center;">Data Perawat</h2>
	<td><a href="/perawatdashboard/create" class="btn btn-dark"> <i class="fas fa-cart-plus"></i> Tambah Data</a></td>
	<table class="table table-secondary table-striped" style="text-align: center;">
		<tr>
			<th>No</th>
			<th>NIP</th>
			<th>Nama Perawat</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
            <th>No Telp</th>
			<th>Action</th>
		</tr>
		@foreach($perawats as $perawat)
			<tr>
				<td>{{ $loop->iteration }}</td>
				<td>{{ $perawat->nip }}</td>
				<td>{{ $perawat->namaperawat }}</td>
				<td>{{ $perawat->jenis_kelamin }}</td>
				<td>{{ $perawat->alamat }}</td>
                <td>{{ $perawat->notelp }}</td>
				<td>
					<a href="/perawatdashboard/{{ $perawat->id }}/edit" class="btn btn-secondary btn-sm"><i class="fas fa-edit"></i></a>
					<form action="/perawatdashboard/{{ $perawat->id }}" class="d-inline" method="post">
						@method('DELETE')
						@csrf
						<button class="btn btn-secondary btn-sm" type="submit" onclick="return confirm('Yakin akan Mendelete Data?')"><i class="fa-solid fa-trash"></i></button>
					</form>
				</td>
			</tr>
		@endforeach
	</table>
	{{ $perawats->links('pagination::bootstrap-5') }}
@endsection