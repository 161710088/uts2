@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-default">
			  <div class="panel-heading">Show Data Suku 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $e->nama }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Wilayah</label>	
			  			<input type="text" name="wilayah" class="form-control" value="{{ $e->wilayah }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Populasi</label>	
			  			<input type="text" name="populasi" class="form-control" value="{{ $e->populasi }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Agama</label>	
			  			<input type="text" name="agama" class="form-control" value="{{ $e->agama }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Bahasa</label>	
			  			<input type="text" name="bahasa" class="form-control" value="{{ $e->bahasa }}"  readonly>
			  		</div>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection