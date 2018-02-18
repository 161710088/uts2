@extends('layouts.app')
@section('content')
<center><h1>SUKU DI INDONESIA</h1></center>
<div class="row">
	<div class="container">
			  	<div class="table-responsive">
				  <table class="table table-bordered table-inserve">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama Suku</th>
					  <th>Wilayah</th>
					  <th>Populasi</th>
					  <th>Agama</th>
					  <th>Bahasa</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($e as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama }}</td>
				    	<td>{{ $data->wilayah }}</td>
				    	<td>{{ $data->populasi }}</td>
				    	<td>{{ $data->agama }}</td>
				    	<td>{{ $data->bahasa }}</td>
						<td>
							<a class="btn btn-warning" href="{{ route('v.edit',$data->id) }}">Edit</a>
						</td>
						<td>
							<a href="{{ route('v.show',$data->id) }}" class="btn btn-success">Show</a>
						</td>
						<td>
							<form method="post" action="{{ route('v.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table><div class="pull-right"><a class="btn btn-info" href="{{ route('v.create') }}">Tambah</a>
			  	</div>
				</div>
			  </div>
			</div>
@endsection