@extends('layout.main')

@section('container')

@if (session()->has('pesan'))
	<div class="alert alert-success" role="alert">
		{{ @session('pesan') }}
	</div>
@endif

<h2 style="text-align: center;">Data Administrasi Pembayaran</h2>
	<table class="table table-secondary table-striped" style="text-align: center;">
		<tr>
			<th>No</th>
			<th>Kode Pembayaran</th>
			<th>Nama Pasien</th>
			<th>Jenis Kelamin</th>
            <th>Pelayanan</th>
		</tr>
		@foreach($pembayarans as $pembayaran)
			<tr>
				<td>{{ $loop->iteration }}</td>
				<td>{{ $pembayaran->kode }}</td>
				<td>{{ $pembayaran->pasien->namapasien }}</td>
				<td>{{ $pembayaran->jenis_kelamin }}</td>
                <td>{{ $pembayaran->pelayanan }}</td>
			</tr>
		@endforeach
	</table>
	{{ $pembayarans->links('pagination::bootstrap-5') }}
@endsection