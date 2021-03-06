@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-default">
			  <div class="panel-heading">Tambah Data Tempat Wisata 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('t.store') }}" method="post" >
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
			  		<div class="form-group {{ $errors->has('lokasi') ? ' has-error' : '' }}">
			  			<label class="control-label">Lokasi</label>	
			  			<input type="text" name="lokasi" class="form-control"  required>
			  			@if ($errors->has('lokasi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('lokasi') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('jenis_wisata') ? ' has-error' : '' }}">
			  			<label class="control-label">Jenis Wisata</label>	
			  			<input type="text" name="jenis_wisata" class="form-control"  required>
			  			@if ($errors->has('jenis_wisata'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jenis_wisata') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('keunggulan') ? ' has-error' : '' }}">
			  			<label class="control-label">Keunggulan</label>	
			  			<input type="text" name="keunggulan" class="form-control"  required>
			  			@if ($errors->has('keunggulan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('keunggulan') }}</strong>
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