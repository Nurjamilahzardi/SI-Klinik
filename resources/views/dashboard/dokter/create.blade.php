@extends('dashboard.layouts.main')

@section('container')
<h1 style="text-align: center;">Tambah Data</h1>
<div class="row">
	<div class="col-lg-6">
		<form action="/dokterdashboard" method="post">
		@csrf
		<div class="mb-3">
		  <label class="form-label">NIP</label>
		  <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" id="nip" value="{{ old('nip') }}">

		  @error('nip')
		  <div class="invalid-feedback">
		  	{{ $message }}
		  </div>
		  @enderror
		</div>

		<div class="mb-3">
		  <label class="form-label">Nama Dokter</label>
		  <input type="text" class="form-control" name="namadokter" id="namadokter" value="{{ old('namadokter') }}">
		</div>
		<div class="mb-2">
		  <label class="form-label">Jenis Kelamin</label>
		  <div class="d-flex">
		  	<div class="form-check me-3">
		  		<input type="radio" class="form-check-input" name="jenis_kelamin" value="L" checked="{{ old('jenis_kelamin')=='L' ? 'checked' : '' }}" checked>Laki-Laki
		  	</div>
		  	<div class="form-check me-3">
		  		<input type="radio" class="form-check-input" name="jenis_kelamin" value="P" checked="{{ old('jenis_kelamin')=='P' ? 'checked' : '' }}">Perempuan
		  	</div>
		  </div>
		  @error('jenis_kelamin')
		  <div class="invalid-feedback">
		  	{{ $message }}
		  </div>
		  @enderror
		</div>

        <div class="mb-3">
		  <label class="form-label">Spesialis</label>
		  <textarea class="form-control" name="spesialis" id="spesialis"></textarea>
		</div>

		<div class="mb-3">
		  <label class="form-label">Alamat</label>
		  <textarea class="form-control" name="alamat" id="alamat"></textarea>
		</div>

        <div class="mb-3">
		  <label class="form-label">No Telp</label>
		  <input type="text" class="form-control" name="notelp" id="notelp" value="{{ old('notelp') }}">
		</div>
		<div class="mb-2">
		  <button type="submit" name="submit" class="btn btn-secondary">Create</button>
		</div>
		<div class="mb-2">
          <a href="/dokterdashboard" name="back" class="btn btn-secondary">Back</a>
        </div>
	</form>
	</div>
</div>
@endsection