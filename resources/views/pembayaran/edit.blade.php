@extends('layout.main')

@section('container')
<h1 style="text-align: center;">Edit Data</h1>
<div class="row">
	<div class="col-lg-6">
		<form action="/pembayaran/{{$pembayarans->id}}" method="post">
			@method('PUT')
			@csrf
			<div class="mb-3">
				<label for="kode" class="form-label">Kode Pembayaran</label>
				<input type="text" class="form-control @error('kode') is-invalid @enderror"  name="kode" id="kode" value="{{old('kode', $pembayarans->kode) }}" readonly>

				@error('kode')
				<div class="invalid-feedback">
					{{$message}}
				</div>
				@enderror
			</div>

			<div class="mb-3">
			<label for="pasien" class="form-label">Nama Pasien</label>
			<select class="form-select" name="pasien_id" aria-label="Default select example">
				@foreach($pasiens as $pasien)
				@if(old('pasien_id',$pembayarans->pasien_id)==$pasien->id)
				<option value="{{ $pasien->id }}" selected>{{ $pasien->namapasien }}</option>
				@else
				<option value="{{ $pasien->id }}">{{ $pasien->namapasien }}</option>
				@endif
				@endforeach
			</select>
		</div> 

		<div class="mb-3">
			<label class="form-label">Jenis Kelamin</label>
			<div class="form-check me-3">
						<input type="radio" class="form-check-input" name="jenis_kelamin" value="L" {{ old('jenis_kelamin',$pembayarans->jenis_kelamin)=='L' ? 'checked' : ''}} checked>Laki-Laki
					</div>
					<div class="form-check me-3">
						<input class="form-check-input" type="radio" name="jenis_kelamin" value="P" @checked (old ('jenis_kelamin',$pembayarans->jenis_kelamin)=='P')>Perempuan
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
				<input type="text" class="form-control @error('pelayanan') is-invalid @enderror"  name="pelayanan" id="pelayanan" value="{{old('pelayanan', $pembayarans->pelayanan) }}">

				@error('pelayanan')
				<div class="invalid-feedback">
					{{$message}}
				</div>
				@enderror
			</div>
		<div class="mb-3">
			<button type="submit" name="submit" class="btn btn-primary">Update</button>
		</div>
	</form>
</div>
</div>
@endsection