@extends('dashboard.layouts.main')

@section('container')
<h1 style="text-align: center;">Edit Data</h1>
<div class="row">
	<div class="col-lg-6">
		<form action="/obatdashboard/{{$obats->id}}" method="post">
			@method('PUT')
			@csrf
			<div class="mb-3">
				<label for="kodeobat" class="form-label">Kode Obat</label>
				<input type="text" class="form-control @error('kodeobat') is-invalid @enderror"  name="kodeobat" id="kodeobat" value="{{old('kodeobat', $obats->kodeobat) }}" readonly>

				@error('kodeobat')
				<div class="invalid-feedback">
					{{$message}}
				</div>
				@enderror
			</div>

			<div class="mb-3">
				<label class="form-label">Nama Obat</label>
				<input type="text" class="form-control @error('namaobat') is-invalid @enderror"  name="namaobat" id="namaobat" value="{{old('namaobat', $obats->namaobat) }}">

				@error('namaobat')
				<div class="invalid-feedback">
					{{$message}}
				</div>
				@enderror
			</div>

			<div class="mb-3">
				<label class="form-label">Kategori</label>
				<input type="text" class="form-control @error('kategori') is-invalid @enderror"  name="kategori" id="kategori" value="{{old('kategori', $obats->kategori) }}">

				@error('kategori')
				<div class="invalid-feedback">
					{{$message}}
				</div>
				@enderror
			</div>

			<div class="mb-3">
				<label class="form-label">Stok</label>
				<input type="text" class="form-control @error('stok') is-invalid @enderror"  name="stok" id="stok" value="{{old('stok', $obats->stok) }}">

				@error('stok')
				<div class="invalid-feedback">
					{{$message}}
				</div>
				@enderror
			</div>

			<div class="mb-3">
				<label class="form-label">Expired</label>
				<input type="date" class="form-control @error('expired') is-invalid @enderror"  name="expired" id="expired" value="{{old('expired', $obats->expired) }}">

				@error('expired')
				<div class="invalid-feedback">
					{{$message}}
				</div>
				@enderror
			</div>

		</div>
		<div class="mb-2">
		  <button type="submit" name="submit" class="btn btn-secondary">Update</button>
		</div>
		<div class="mb-2">
          <a href="/obatdashboard" name="back" class="btn btn-secondary">Back</a>
        </div>
	</form>
</div>
</div>
@endsection