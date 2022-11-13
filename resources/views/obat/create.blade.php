@extends('layout.main')

@section('container')
<h1 style="text-align: center;">Tambah Data</h1>
<div class="row">
	<div class="col-lg-6">
		<form action="/obat" method="post">
		@csrf
		<div class="mb-3">
		  <label class="form-label">Kode Obat</label>
		  <input type="text" class="form-control @error('kodeobat') is-invalid @enderror" name="kodeobat" id="kodeobat" value="{{ old('kodeobat') }}">

		  @error('kodeobat')
		  <div class="invalid-feedback">
		  	{{ $message }}
		  </div>
		  @enderror
		</div>

		<div class="mb-3">
		  <label class="form-label">Nama Obat</label>
		  <input type="text" class="form-control" name="namaobat" id="namaobat" value="{{ old('namaobat') }}">
		</div>

        <div class="mb-3">
		  <label class="form-label">Kategori</label>
		  <input type="text" class="form-control" name="kategori" id="kategori" value="{{ old('kategori') }}">
		</div>

		<div class="mb-3">
		  <label class="form-label">Stok</label>
		  <input type="text" class="form-control" name="stok" id="stok" value="{{ old('stok') }}">
		</div>

        <div class="mb-3">
		  <label class="form-label">Expired</label>
		  <input type="date" class="form-control" name="expired" id="expired" value="{{ old('notelp') }}">
		</div>
		<div class="mb-2">
		  <button type="submit" name="submit" class="btn btn-secondary">Create</button>
		</div>
		<div class="mb-2">
          <a href="/dokter" name="back" class="btn btn-secondary">Back</a>
        </div>
	</form>
	</div>
</div>
@endsection