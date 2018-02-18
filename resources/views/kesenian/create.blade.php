@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-default">
			  <div class="panel-heading">Tambah Data Kesenian 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('u.store') }}" method="post" >
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
			  			<label class="control-label">Asal kesenian</label>	
			  			<input type="text" name="asal" class="form-control"  required>
			  			@if ($errors->has('asal'))
                            <span class="help-block">
                                <strong>{{ $errors->first('asal') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('fungsi') ? ' has-error' : '' }}">
			  			<label class="control-label">Fungsi Kesenian</label>	
			  			<input type="text" name="fungsi" class="form-control"  required>
			  			@if ($errors->has('fungsi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('fungsi') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('jenis_kesenian') ? ' has-error' : '' }}">
			  			<label class="control-label">Jenis Kesenian</label>	
			  			<input type="text" name="jenis_kesenian" class="form-control"  required>
			  			@if ($errors->has('jenis_kesenian'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jenis_kesenian') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('sejarah') ? ' has-error' : '' }}">
			  			<label class="control-label">Sejarah</label>	
			  			<textarea name="sejarah" class="form-control"  required></textarea>
			  			@if ($errors->has('sejarah'))
                            <span class="help-block">
                                <strong>{{ $errors->first('sejarah') }}</strong>
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