@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-default">
			  <div class="panel-heading">Edit Data Provinsi 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('w.update',$d->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $d->nama }}"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('nama_bupati') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Bupati</label>	
			  			<input type="text" name="nama_bupati" class="form-control" value="{{ $d->nama_bupati }}"  required>
			  			@if ($errors->has('nama_bupati'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_bupati') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('luas') ? ' has-error' : '' }}">
			  			<label class="control-label">Luas</label>	
			  			<input type="text" name="luas" class="form-control" value="{{ $d->luas }}"  required>
			  			@if ($errors->has('luas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('luas') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('kepadatan') ? ' has-error' : '' }}">
			  			<label class="control-label">kepadatan</label>	
			  			<input type="text" name="kepadatan" class="form-control" value="{{ $d->kepadatan }}"  required>
			  			@if ($errors->has('kepadatan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kepadatan') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('populasi') ? ' has-error' : '' }}">
			  			<label class="control-label">Populasi</label>	
			  			<input type="text" name="populasi" class="form-control" value="{{ $d->populasi }}"  required>
			  			@if ($errors->has('populasi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('populasi') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary pull-right">Simpan</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection