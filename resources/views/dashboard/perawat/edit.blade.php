@extends('dashboard.layouts.main')

@section('container')
<h1 style="text-align: center;">Edit Data</h1>
<div class="row">
	<div class="col-lg-6">
		<form action="/perawatdashboard/{{$perawats->id}}" method="post">
			@method('PUT')
			@csrf
			<div class="mb-3">
				<label for="nip" class="form-label">NIP</label>
				<input type="text" class="form-control @error('nip') is-invalid @enderror"  name="nip" id="nip" value="{{old('nip', $perawats->nip) }}" readonly>

				@error('nip')
				<div class="invalid-feedback">
					{{$message}}
				</div>
				@enderror
			</div>

			<div class="mb-3">
				<label class="form-label">Nama Perawat</label> 
				<input type="text" class="form-control @error('namaperawat') is-invalid @enderror"  name="namaperawat" id="namaperawat" value="{{old('namaperawat', $perawats->namaperawat) }}">

				@error('namadokter')
				<div class="invalid-feedback">
					{{$message}}
				</div>
				@enderror
			</div>

		<div class="mb-3">
			<label class="form-label">Jenis Kelamin</label>
			<div class="form-check me-3">
						<input type="radio" class="form-check-input" name="jenis_kelamin" value="L" {{ old('jenis_kelamin',$perawats->jenis_kelamin)=='L' ? 'checked' : ''}} checked>Laki-Laki
					</div>
					<div class="form-check me-3">
						<input class="form-check-input" type="radio" name="jenis_kelamin" value="P" @checked (old ('jenis_kelamin',$perawats->jenis_kelamin)=='P')>Perempuan
					</div>
			</div>
			@error('jenis_kelamin')
			<div class="invalid-feedback">
				{{ $message }}
			</div>
			@enderror
		</div>

		<div class="mb-3">
			<label class="form-label">Alamat</label>
			<textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat">{{old('alamat',$perawats->alamat) }}</textarea>

			@error('alamat')
			<div class="invalid-feedback">
				{{$message}}
			</div>
			@enderror
		</div>

        <div class="mb-3">
			<label class="form-label">No Telp</label>
			<input type="text" class="form-control @error('notelp') is-invalid @enderror"  name="notelp" id="notelp" value="{{old('notelp', $perawats->notelp) }}">
			@error('telp')				
				<div class="invalid-feedback">
					{{$message}}
				</div>
			@enderror
		</div>
		<div class="mb-2">
		  <button type="submit" name="submit" class="btn btn-secondary">Create</button>
		</div>
		<div class="mb-2">
          <a href="/perawatdashboard" name="back" class="btn btn-secondary">Back</a>
        </div>
	</form>
</div>
</div>
@endsection