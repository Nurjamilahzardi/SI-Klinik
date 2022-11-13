@extends('layout.main')

@section('container')

@if (session()->has('pesan'))
	<div class="alert alert-success" role="alert">
		{{ @session('pesan') }}
	</div>
@endif

<h2 style="text-align: center;">Data Obat</h2>
	<table class="table table-secondary table-striped" style="text-align: center;">
		<tr>
			<th>No</th>
			<th>Kode Obat</th>
			<th>Nama Obat</th>
			<th>Kategori</th>
			<th>Stok</th>
			<th>Expired</th>
		</tr>
		@foreach($obats as $obat)
			<tr>
				<td>{{ $loop->iteration }}</td>
				<td>{{ $obat->kodeobat }}</td>
				<td>{{ $obat->namaobat }}</td>
				<td>{{ $obat->kategori }}</td>
				<td>{{ $obat->stok }}</td>
				<td>{{ $obat->expired }}</td>
			</tr>
		@endforeach
	</table>
	{{ $obats->links('pagination::bootstrap-5') }}
@endsection