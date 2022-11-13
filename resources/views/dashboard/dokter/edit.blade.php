@extends('dashboard.layouts.main')

@section('container')
<h1 style="text-align: center;">Edit Data</h1>
<div class="row">
	<div class="col-lg-6">
		<form action="/dokterdashboard/{{$dokters->id}}" method="post">
			@method('PUT')
			@csrf
			<div class="mb-3">
				<label for="nip" class="form-label">NIP</label>
				<input type="text" class="form-control @error('nip') is-invalid @enderror"  name="nip" id="nip" value="{{old('nip', $dokters->nip) }}" readonly>

				@error('nip')
				<div class="invalid-feedback">
					{{$message}}
				</div>
				@enderror
			</div>

			<div class="mb-3">
				<label class="form-label">Nama Dokter</label> 
				<input type="text" class="form-control @error('namadokter') is-invalid @enderror"  name="namadokter" id="namadokter" value="{{old('namadokter', $dokters->namadokter) }}">

				@error('namadokter')
				<div class="invalid-feedback">
					{{$message}}
				</div>
				@enderror
			</div>

		<div class="mb-3">
			<label class="form-label">Jenis Kelamin</label>
			<div class="form-check me-3">
						<input type="radio" class="form-check-input" name="jenis_kelamin" value="L" {{ old('jenis_kelamin',$dokters->jenis_kelamin)=='L' ? 'checked' : ''}} checked>Laki-Laki
					</div>
					<div class="form-check me-3">
						<input class="form-check-input" type="radio" name="jenis_kelamin" value="P" @checked (old ('jenis_kelamin',$dokters->jenis_kelamin)=='P')>Perempuan
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
			<textarea class="form-control @error('spesialis') is-invalid @enderror" name="spesialis" id="spesialis">{{old('spesialis',$dokters->spesialis) }}</textarea>

			@error('spesialis')
			<div class="invalid-feedback">
				{{$message}}
			</div>
			@enderror

		</div>

		<div class="mb-3">
			<label class="form-label">Alamat</label>
			<textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat">{{old('alamat',$dokters->alamat) }}</textarea>

			@error('alamat')
			<div class="invalid-feedback">
				{{$message}}
			</div>
			@enderror
		</div>

        <div class="mb-3">
			<label class="form-label">No Telp</label>
			<input type="text" class="form-control @error('notelp') is-invalid @enderror"  name="notelp" id="notelp" value="{{old('notelp', $dokters->notelp) }}">
			@error('telp')				
				<div class="invalid-feedback">
					{{$message}}
				</div>
			@enderror
		</div>
		<div class="mb-2">
		  <button type="submit" name="submit" class="btn btn-secondary">Update</button>
		</div>
		<div class="mb-2">
          <a href="/dokterdashboard" name="back" class="btn btn-secondary">Back</a>
        </div>
	</form>
</div>
</div>
@endsection