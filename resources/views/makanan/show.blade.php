@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-default">
			  <div class="panel-heading">Show Data Makanan Khas
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $h->nama }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Asal Daerah</label>	
			  			<input type="text" name="asal" class="form-control" value="{{ $h->asal }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Harga</label>	
			  			<input type="text" name="harga" class="form-control" value="{{ $h->harga }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Bahan Pokok</label>	
			  			<input type="text" name="bahan_pokok" class="form-control" value="{{ $h->bahan_pokok }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Jenis Makanan</label>	
			  			<input type="text" name="jenis_makanan" class="form-control" value="{{ $h->jenis_makanan }}"  readonly>
			  		</div>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection