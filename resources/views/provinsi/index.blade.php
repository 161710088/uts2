@extends('layouts.app')
@section('content')
<center><h1>PROVINSI DI INDONESIA</h1></center>
<div class="row">
	<div class="container">
			  	<div class="table-responsive">
				  <table class="table table-bordered table-inserve">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama Provinsi</th>
					  <th>Nama Gubernur</th>
					  <th>Luas</th>
					  <th>Kepadatan</th>
					  <th>Populasi</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($b as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama }}</td>
				    	<td>{{ $data->nama_gubernur }}</td>
				    	<td>{{ $data->luas }}</td>
				    	<td>{{ $data->kepadatan }}</td>
				    	<td>{{ $data->populasi }}</td>
						<td>
							<a class="btn btn-warning" href="{{ route('y.edit',$data->id) }}">Edit</a>
						</td>
						<td>
							<a href="{{ route('y.show',$data->id) }}" class="btn btn-success">Show</a>
						</td>
						<td>
							<form method="post" action="{{ route('y.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				  <div class="pull-right"><a class="btn btn-info" href="{{ route('y.create') }}">Tambah</a></div>
				</div>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection