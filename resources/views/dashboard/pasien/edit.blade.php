@extends('dashboard.layouts.main')

@section('container')
<h1 style="text-align: center;">Edit Data</h1>
<div class="row">
	<div class="col-lg-6">
		<form action="/pasiendashboard/{{$pasiens->id}}" method="post">
			@method('PUT')
			@csrf
			<div class="mb-3">
				<label for="idpasien" class="form-label">ID Pasien</label>
				<input type="text" class="form-control @error('idpasien') is-invalid @enderror"  name="idpasien" id="idpasien" value="{{old('idpasien', $pasiens->idpasien) }}" readonly>

				@error('idpasien')
				<div class="invalid-feedback">
					{{$message}}
				</div>
				@enderror
			</div>

			<div class="mb-3">
				<label class="form-label">Nama Pasien</label>
				<input type="text" class="form-control @error('namapasien') is-invalid @enderror"  name="namapasien" id="namapasien" value="{{old('namapasien', $pasiens->namapasien) }}">

				@error('namapasien')
				<div class="invalid-feedback">
					{{$message}}
				</div>
				@enderror
			</div>

			<div class="mb-3">
			<label for="dokter" class="form-label">Nama Dokter</label>
			<select class="form-select" name="dokter_id" aria-label="Default select example">
				@foreach($dokters as $dokter)
				@if(old('dokter_id',$pasiens->dokter_id)==$dokter->id)
				<option value="{{ $dokter->id }}" selected>{{ $dokter->namadokter }}</option>
				@else
				<option value="{{ $dokter->id }}">{{ $dokter->namadokter }}</option>
				@endif
				@endforeach
			</select>
		</div> 

		<div class="mb-3">
			<label class="form-label">Jenis Kelamin</label>
			<div class="form-check me-3">
						<input type="radio" class="form-check-input" name="jenis_kelamin" value="L" {{ old('jenis_kelamin',$pasiens->jenis_kelamin)=='L' ? 'checked' : ''}} checked>Laki-Laki
					</div>
					<div class="form-check me-3">
						<input class="form-check-input" type="radio" name="jenis_kelamin" value="P" @checked (old ('jenis_kelamin',$pasiens->jenis_kelamin)=='P')>Perempuan
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
				<input type="text" class="form-control @error('penyakit') is-invalid @enderror"  name="penyakit" id="penyakit" value="{{old('penyakit', $pasiens->penyakit) }}">

				@error('penyakit')
				<div class="invalid-feedback">
					{{$message}}
				</div>
				@enderror
			</div>

		<div class="mb-3">
			<label class="form-label">Alamat</label>
			<textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat">{{old('alamat',$pasiens->alamat) }}</textarea>

			@error('alamat')
			<div class="invalid-feedback">
				{{$message}}
			</div>
			@enderror

		</div>
		<div class="mb-2">
		  <button type="submit" name="submit" class="btn btn-secondary">Update</button>
		</div>
		<div class="mb-2">
          <a href="/pasiendashboard" name="back" class="btn btn-secondary">Back</a>
        </div>
	</form>
</div>
</div>
@endsection