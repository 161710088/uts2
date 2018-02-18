@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-default">
			  <div class="panel-heading">Tambah Data Makanan Khas 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('s.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('asal') ? ' has-error' : '' }}">
			  			<label class="control-label">Asal Daerah</label>	
			  			<input type="text" name="asal" class="form-control"  required>
			  			@if ($errors->has('asal'))
                            <span class="help-block">
                                <strong>{{ $errors->first('asal') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
			  			<label class="control-label">Harga</label>	
			  			<input type="text" name="harga" class="form-control"  required>
			  			@if ($errors->has('harga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('bahan_pokok') ? ' has-error' : '' }}">
			  			<label class="control-label">Bahan Pokok</label>	
			  			<input type="text" name="bahan_pokok" class="form-control"  required>
			  			@if ($errors->has('bahan_pokok'))
                            <span class="help-block">
                                <strong>{{ $errors->first('bahan_pokok') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('jenis_makanan') ? ' has-error' : '' }}">
			  			<label class="control-label">Jenis Makanan</label>	
			  			<input type="text" name="jenis_makanan" class="form-control"  required>
			  			@if ($errors->has('jenis_makanan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jenis_makanan') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary pull-right">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection