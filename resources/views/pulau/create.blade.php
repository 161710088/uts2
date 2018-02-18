@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-default">
			  <div class="panel-heading">Tambah Data Pulau 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('z.store') }}" method="post" >
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
			  		<div class="form-group {{ $errors->has('koordinat') ? ' has-error' : '' }}">
			  			<label class="control-label">Koordinat</label>	
			  			<input type="text" name="koordinat" class="form-control"  required>
			  			@if ($errors->has('koordinat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('koordinat') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('luas') ? ' has-error' : '' }}">
			  			<label class="control-label">Luas</label>	
			  			<input type="text" name="luas" class="form-control"  required>
			  			@if ($errors->has('luas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('luas') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('kepulauan') ? ' has-error' : '' }}">
			  			<label class="control-label">Kepulauan</label>	
			  			<input type="text" name="kepulauan" class="form-control"  required>
			  			@if ($errors->has('kepulauan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kepulauan') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('puncak_tertinggi') ? ' has-error' : '' }}">
			  			<label class="control-label">Puncak Tertinggi</label>	
			  			<input type="text" name="puncak_tertinggi" class="form-control"  required>
			  			@if ($errors->has('puncak_tertinggi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('puncak_tertinggi') }}</strong>
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