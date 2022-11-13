@extends('dashboard.layouts.main')

@section('container')

@if (session()->has('pesan'))
	<div class="alert alert-success" role="alert">
		{{ @session('pesan') }}
	</div>
@endif

<h2 style="text-align: center;">Data Administrasi Pembayaran</h2>
	<td><a href="/pembayarandashboard/create" class="btn btn-dark"> <i class="fas fa-cart-plus"></i> Tambah Data</a></td>
	<table class="table table-secondary table-striped" style="text-align: center;">
		<tr>
			<th>No</th>
			<th>Kode Pembayaran</th>
			<th>Nama Pasien</th>
			<th>Jenis Kelamin</th>
            <th>Pelayanan</th>
			<th>Action</th>
		</tr>
		@foreach($pembayarans as $pembayaran)
			<tr>
				<td>{{ $loop->iteration }}</td>
				<td>{{ $pembayaran->kode }}</td>
				<td>{{ $pembayaran->pasien->namapasien }}</td>
				<td>{{ $pembayaran->jenis_kelamin }}</td>
                <td>{{ $pembayaran->pelayanan }}</td>
				<td>
					<a href="/pembayarandashboard/{{ $pembayaran->id }}/edit" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
					<form action="/pembayarandashboard/{{ $pembayaran->id }}" class="d-inline" method="post">
						@method('DELETE')
						@csrf
						<button class="btn btn-secondary" type="submit" onclick="return confirm('Yakin akan Mendelete Data?')"><i class="fa-solid fa-trash"></i></button>
					</form>
				</td>
			</tr>
		@endforeach
	</table>
	{{ $pembayarans->links('pagination::bootstrap-5') }}
@endsection