@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-default">
			  <div class="panel-heading">Show Data Tempat Wisata 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $g->nama }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Lokasi</label>	
			  			<input type="text" name="lokasi" class="form-control" value="{{ $g->lokasi }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Jenis Wisata</label>	
			  			<input type="text" name="jenis_wisata" class="form-control" value="{{ $g->jenis_wisata }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Keunggulan</label>	
			  			<input type="text" name="keunggulan" class="form-control" value="{{ $g->keunggulan }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Sejarah</label>	
			  			<textarea name="sejarah" class="form-control" readonly>{{ $g->sejarah }}</textarea>
			  		</div>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection