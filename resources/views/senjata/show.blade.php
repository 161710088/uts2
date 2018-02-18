@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-default">
			  <div class="panel-heading">Show Data Senjata Khas 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $i->nama }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Asal Daerah</label>	
			  			<input type="text" name="Asal" class="form-control" value="{{ $i->Asal }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Material</label>	
			  			<input type="text" name="material" class="form-control" value="{{ $i->material }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Fungsi</label>	
			  			<input type="text" name="fungsi" class="form-control" value="{{ $i->fungsi }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Sejarah</label>	
			  			<textarea name="sejarah" class="form-control" readonly>{{ $i->sejarah }}</textarea>
			  		</div>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection