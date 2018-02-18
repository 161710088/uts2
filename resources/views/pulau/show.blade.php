@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-default">
			  <div class="panel-heading">Show Data Pulau 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $a->nama }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Koordinat</label>	
			  			<input type="text" name="koordinat" class="form-control" value="{{ $a->koordinat }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Luas</label>	
			  			<input type="text" name="luas" class="form-control" value="{{ $a->luas }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Kepulauan</label>	
			  			<input type="text" name="kepulauan" class="form-control" value="{{ $a->kepulauan }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Puncak Tertinggi</label>	
			  			<input type="text" name="puncak_tertinggi" class="form-control" value="{{ $a->puncak_tertinggi }}"  readonly>
			  		</div>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection