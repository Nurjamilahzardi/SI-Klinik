@extends('dashboard.layouts.main')

@section('container')

@if (session()->has('pesan'))
	<div class="alert alert-success" role="alert">
		{{ @session('pesan') }}
	</div>
@endif

<h2 style="text-align: center;">Data Obat</h2>
	<td><a href="/obatdashboard/create" class="btn btn-dark"> <i class="fas fa-cart-plus"></i> Tambah Data</a></td>
	<table class="table table-secondary table-striped" style="text-align: center;">
		<tr>
			<th>No</th>
			<th>Kode Obat</th>
			<th>Nama Obat</th>
			<th>Kategori</th>
			<th>Stok</th>
			<th>Expired</th>
			<th>Action</th>
		</tr>
		@foreach($obats as $obat)
			<tr>
				<td>{{ $loop->iteration }}</td>
				<td>{{ $obat->kodeobat }}</td>
				<td>{{ $obat->namaobat }}</td>
				<td>{{ $obat->kategori }}</td>
				<td>{{ $obat->stok }}</td>
				<td>{{ $obat->expired }}</td>
				<td>
					<a href="/obatdashboard/{{ $obat->id }}/edit" class="btn btn-secondary btn-sm"><i class="fas fa-edit"></i></a>
					<form action="/obatdashboard/{{ $obat->id }}" class="d-inline" method="post">
						@method('DELETE')
						@csrf
						<button class="btn btn-secondary btn-sm" type="submit" onclick="return confirm('Yakin akan Mendelete Data?')"><i class="fa-solid fa-trash"></i></button>
					</form>
				</td>
			</tr>
		@endforeach
	</table>
	{{ $obats->links('pagination::bootstrap-5') }}
@endsection