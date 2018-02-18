@extends('layouts.app')
@section('content')
<center><h1>PULAU DI INDONESIA</h1></center>
<div class="row">
	<div class="container">
			  	<div class="table-responsive">
				  <table class="table table-bordered table-inserve">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama Pulau</th>
					  <th>Koordinat</th>
					  <th>Luas</th>
					  <th>Kepulauan</th>
					  <th>Puncak Tertinggi</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($a as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama }}</td>
				    	<td>{{ $data->koordinat }}</td>
				    	<td>{{ $data->luas }}</td>
				    	<td>{{ $data->kepulauan }}</td>
				    	<td>{{ $data->puncak_tertinggi }}</td>
						<td>
							<a class="btn btn-warning" href="{{ route('z.edit',$data->id) }}">Edit</a>
						</td>
						<td>
							<a href="{{ route('z.show',$data->id) }}" class="btn btn-success">Show</a>
						</td>
						<td>
							<form method="post" action="{{ route('z.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				  <div class="pull-right"><a class="btn btn-info" href="{{ route('z.create') }}">Tambah</a>
			  	</div>
				</div>
			  </div>
			</div>
@endsection