@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-default">
			  <div class="panel-heading">Show Data Kesenian 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $f->nama }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Asal Kesenian</label>	
			  			<input type="text" name="asal" class="form-control" value="{{ $f->asal }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Fungsi Kesenian</label>	
			  			<input type="text" name="fungsi" class="form-control" value="{{ $f->fungsi }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Jenis Kesian</label>	
			  			<input type="text" name="jenis_kesenian" class="form-control" value="{{ $f->jenis_kesenian }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Sejarah</label>	
			  			<textarea name="sejarah" class="form-control" readonly>{{ $f->sejarah }}</textarea>
			  		</div>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection