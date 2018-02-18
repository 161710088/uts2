@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-default">
			  <div class="panel-heading">Tambah Data Suku 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('v.store') }}" method="post" >
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
			  		<div class="form-group {{ $errors->has('wilayah') ? ' has-error' : '' }}">
			  			<label class="control-label">Wilayah</label>	
			  			<input type="text" name="wilayah" class="form-control"  required>
			  			@if ($errors->has('wilayah'))
                            <span class="help-block">
                                <strong>{{ $errors->first('wilayah') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('populasi') ? ' has-error' : '' }}">
			  			<label class="control-label">Populasi</label>	
			  			<input type="text" name="populasi" class="form-control"  required>
			  			@if ($errors->has('populasi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('populasi') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('agama') ? ' has-error' : '' }}">
			  			<label class="control-label">Agama</label>	
			  			<input type="text" name="agama" class="form-control"  required>
			  			@if ($errors->has('agama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('agama') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('bahasa') ? ' has-error' : '' }}">
			  			<label class="control-label">Bahasa</label>	
			  			<input type="text" name="bahasa" class="form-control"  required>
			  			@if ($errors->has('bahasa'))
                            <span class="help-block">
                                <strong>{{ $errors->first('bahasa') }}</strong>
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