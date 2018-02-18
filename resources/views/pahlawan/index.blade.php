@extends('layouts.app')
@section('content')
<center><h1>PAHLAWAN INDONESIA</h1></center>
<div class="row">
	<div class="container">
			  	<div class="table-responsive">
				  <table class="table table-bordered table-inserve">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama Pahlawan</th>
					  <th>Tempat Tanggal Lahir</th>
					  <th>Wafat</th>
					  <th>Kota Asal</th>
					  <th>Tempat Tinggal</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($j as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama }}</td>
				    	<td>{{ $data->tempat }}, {{ $data->tanggal_lahir }}</td>
				    	<td>{{ $data->wafat }}</td>
				    	<td>{{ $data->kota_asal }}</td>
				    	<td>{{ $data->tempat_tinggal }}</td>
						<td>
							<a class="btn btn-warning" href="{{ route('q.edit',$data->id) }}">Edit</a>
						</td>
						<td>
							<a href="{{ route('q.show',$data->id) }}" class="btn btn-success">Show</a>
						</td>
						<td>
							<form method="post" action="{{ route('q.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				  <div class="pull-right"><a class="btn btn-info" href="{{ route('q.create') }}">Tambah</a>
			  	</div>
				</div>
			  </div>
			</div>
@endsection