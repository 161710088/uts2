@extends('layouts.app')
@section('content')
<center><h1>MAKANAN KHAS INDONESIA</h1></center>
<div class="row">
	<div class="container">
			  	<div class="table-responsive">
				  <table class="table table-bordered table-inserve">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama Makanan Khas</th>
					  <th>Asal Daerah</th>
					  <th>Harga</th>
					  <th>Bahan Pokok</th>
					  <th>Jenis Makanan</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($h as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama }}</td>
				    	<td>{{ $data->asal }}</td>
				    	<td>{{ $data->harga }}</td>
				    	<td>{{ $data->bahan_pokok }}</td>
				    	<td>{{ $data->jenis_makanan }}</td>
						<td>
							<a class="btn btn-warning" href="{{ route('s.edit',$data->id) }}">Edit</a>
						</td>
						<td>
							<a href="{{ route('s.show',$data->id) }}" class="btn btn-success">Show</a>
						</td>
						<td>
							<form method="post" action="{{ route('s.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				  <div class="pull-right"><a class="btn btn-info" href="{{ route('s.create') }}">Tambah</a></div>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection