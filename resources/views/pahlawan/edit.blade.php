@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-default">
			  <div class="panel-heading">Edit Data Pahlawan 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('q.update',$j->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $j->nama }}"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('tempat') ? ' has-error' : '' }}">
			  			<label class="control-label">Tempat</label>	
			  			<input type="text" name="tempat" class="form-control" value="{{ $j->tempat }}"  required>
			  			@if ($errors->has('tempat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tempat') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Lahir</label>	
			  			<input type="date" name="tanggal_lahir" class="form-control" value="{{ $j->tanggal_lahir }}"  required>
			  			@if ($errors->has('tanggal_lahir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal_lahir') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('wafat') ? ' has-error' : '' }}">
			  			<label class="control-label">Wafat</label>	
			  			<input type="date" name="wafat" class="form-control" value="{{ $j->wafat }}"  required>
			  			@if ($errors->has('wafat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('wafat') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('kota_asal') ? ' has-error' : '' }}">
			  			<label class="control-label">Kota Asal</label>	
			  			<input type="text" name="kota_asal" class="form-control" value="{{ $j->kota_asal }}"  required>
			  			@if ($errors->has('kota_asal'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kota_asal') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('tempat_tinggal') ? ' has-error' : '' }}">
			  			<label class="control-label">Tempat Tinggal</label>	
			  			<textarea name="tempat_tinggal" class="form-control" required>{{ $j->tempat_tinggal }}</textarea>
			  			@if ($errors->has('tempat_tinggal'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tempat_tinggal') }}</strong>
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