@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-default">
			  <div class="panel-heading">Show Data Pahlawan 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $j->nama }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Tempat Lahir</label>	
			  			<input type="text" name="tempat" class="form-control" value="{{ $j->tempat }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Tanggal Lahir</label>	
			  			<input type="text" name="tanggal_lahir" class="form-control" value="{{ $j->tanggal_lahir }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Wafat</label>	
			  			<input type="text" name="wafat" class="form-control" value="{{ $j->wafat }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Kota Asal</label>	
			  			<input type="text" name="kota_asal" class="form-control" value="{{ $j->kota_asal }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Tempat Tinggal</label>	
			  			<input type="text" name="tempat_tinggal" class="form-control" value="{{ $j->tempat_tinggal }}"  readonly>
			  		</div>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection