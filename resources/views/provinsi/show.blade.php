@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-default">
			  <div class="panel-heading">Show Data Provinsi 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $b->nama }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Nama Gubernur</label>	
			  			<input type="text" name="nama_gubernur" class="form-control" value="{{ $b->nama_gubernur }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Luas</label>	
			  			<input type="text" name="luas" class="form-control" value="{{ $b->luas }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Kepadatan</label>	
			  			<input type="text" name="kepadatan" class="form-control" value="{{ $b->kepadatan }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Populasi</label>	
			  			<input type="text" name="populasi" class="form-control" value="{{ $b->populasi }}"  readonly>
			  		</div>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection