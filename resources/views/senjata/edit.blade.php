@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-default">
			  <div class="panel-heading">Edit Data Senjata 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('r.update',$i->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $i->nama }}"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('asal') ? ' has-error' : '' }}">
			  			<label class="control-label">Asal Daerah</label>	
			  			<input type="text" name="asal" class="form-control" value="{{ $i->asal }}"  required>
			  			@if ($errors->has('asal'))
                            <span class="help-block">
                                <strong>{{ $errors->first('asal') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('material') ? ' has-error' : '' }}">
			  			<label class="control-label">Material</label>	
			  			<input type="text" name="material" class="form-control" value="{{ $i->material }}"  required>
			  			@if ($errors->has('material'))
                            <span class="help-block">
                                <strong>{{ $errors->first('material') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('fungsi') ? ' has-error' : '' }}">
			  			<label class="control-label">Fungsi</label>	
			  			<input type="text" name="fungsi" class="form-control" value="{{ $i->fungsi }}"  required>
			  			@if ($errors->has('fungsi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('fungsi') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('sejarah') ? ' has-error' : '' }}">
			  			<label class="control-label">Sejarah</label>	
			  			<textarea name="sejarah" class="form-control" rows="10" required>{{ $i->sejarah }}</textarea>
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