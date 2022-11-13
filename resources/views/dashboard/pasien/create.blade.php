@extends('dashboard.layouts.main')

@section('container')
<h1 style="text-align: center;">Tambah Data</h1>
<div class="row">
	<div class="col-lg-6">
		<form action="/pasiendashboard" method="post">
		@csrf
		<div class="mb-3">
		  <label class="form-label">ID Pasien</label>
		  <input type="text" class="form-control @error('idpasien') is-invalid @enderror" name="idpasien" id="idpasien" value="{{ old('idpasien') }}">

		  @error('idpasien')
		  <div class="invalid-feedback">
		  	{{ $message }}
		  </div>
		  @enderror
		</div>

		<div class="mb-3">
		  <label class="form-label">Nama Pasien</label>
		  <input type="text" class="form-control" name="namapasien" id="namapasien" value="{{ old('namapasien') }}">
		</div>

		<div class="mb-2">
		<label for="dokter" class="form-label">Nama Dokter</label>
		<select class="form-select" name="dokter_id">
			@foreach($dokters as $dokter)
		  		<option value="{{ $dokter->id }}">{{ $dokter->namadokter }}</option>
		  	@endforeach
		</select>
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
		  <label class="form-label">Penyakit</label>
		  <input type="text" class="form-control" name="penyakit" id="penyakit" value="{{ old('penyakit') }}">
		</div>
 
		<div class="mb-3">
		  <label class="form-label">Alamat</label>
		  <textarea class="form-control" name="alamat" id="alamat"></textarea>
		</div>
		<div class="mb-2">
		  <button type="submit" name="submit" class="btn btn-secondary">Create</button>
		</div>
		<div class="mb-2">
          <a href="/pasiendashboard" name="back" class="btn btn-secondary">Back</a>
        </div>
	</form>
	</div>
</div>
@endsection