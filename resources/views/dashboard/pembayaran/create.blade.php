@extends('dashboard.layouts.main')

@section('container')
<h1 style="text-align: center;">Tambah Data</h1>
<div class="row">
	<div class="col-lg-6">
		<form action="/pembayarandashboard" method="post">
		@csrf
		<div class="mb-3">
		  <label class="form-label">Kode Pembayaran</label>
		  <input type="text" class="form-control @error('kode') is-invalid @enderror" name="kode" id="kode" value="{{ old('kode') }}">

		  @error('kode')
		  <div class="invalid-feedback">
		  	{{ $message }}
		  </div>
		  @enderror
		</div>

		<div class="mb-2">
		<label for="pasien" class="form-label">Nama Pasien</label>
		<select class="form-select" name="pasien_id">
			@foreach($pasiens as $pasien)
		  		<option value="{{ $pasien->id }}">{{ $pasien->namapasien }}</option>
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
		  <label class="form-label">Pelayanan</label>
		  <input type="text" class="form-control" name="pelayanan" id="pelayanan" value="{{ old('pelayanan') }}">
		</div>
 
		<div class="mb-2">
		  <button type="submit" name="submit" class="btn btn-secondary">Create</button>
		</div>
		<div class="mb-2">
          <a href="/pembayarandashboard" name="back" class="btn btn-secondary">Back</a>
        </div>
	</form>
	</div>
</div>
@endsection