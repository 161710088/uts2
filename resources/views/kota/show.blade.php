@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-default">
			  <div class="panel-heading">Show Data Kota 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $c->nama }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Nama Walikota</label>	
			  			<input type="text" name="nama_walkot" class="form-control" value="{{ $c->nama_walkot }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Hari Jadi</label>	
			  			<input type="text" name="hari_jadi" class="form-control" value="{{ $c->hari_jadi }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Julukan</label>	
			  			<input type="text" name="julukan" class="form-control" value="{{ $c->julukan }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Sejarah</label>	
			  			<textarea name="sejarah" class="form-control" readonly>{{ $c->sejarah }}</textarea>
			  		</div>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection