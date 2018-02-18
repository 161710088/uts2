@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-default">
			  <div class="panel-heading">Edit Data Kota 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('x.update',$c->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $c->nama }}"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('nama_walkot') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Walikota</label>	
			  			<input type="text" name="nama_walkot" class="form-control" value="{{ $c->nama_walkot }}"  required>
			  			@if ($errors->has('nama_walkot'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_walkot') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('hari_jadi') ? ' has-error' : '' }}">
			  			<label class="control-label">Hari Jadi</label>	
			  			<input type="date" name="hari_jadi" class="form-control" value="{{ $c->hari_jadi }}"  required>
			  			@if ($errors->has('hari_jadi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('hari_jadi') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('julukan') ? ' has-error' : '' }}">
			  			<label class="control-label">Julukan</label>	
			  			<input type="text" name="julukan" class="form-control" value="{{ $c->julukan }}"  required>
			  			@if ($errors->has('julukan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('julukan') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('sejarah') ? ' has-error' : '' }}">
			  			<label class="control-label">Sejarah</label>	
			  			<textarea name="sejarah" class="form-control" rows="10" required>{{ $c->sejarah }}</textarea>
			  			@if ($errors->has('sejarah'))
                            <span class="help-block">
                                <strong>{{ $errors->first('sejarah') }}</strong>
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