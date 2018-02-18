@extends('layouts.app')
@section('content')
<center><h1>SENJATA KHAS INDONESIA</h1></center>
<div class="row">
	<div class="container">
			  	<div class="table-responsive">
				  <table class="table table-bordered table-inserve">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama Senjata</th>
					  <th>Asal Daerah</th>
					  <th>Material</th>
					  <th>Fungsi</th>
					  <th>Sejarah</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($i as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama }}</td>
				    	<td>{{ $data->asal }}</td>
				    	<td>{{ $data->material }}</td>
				    	<td>{{ $data->fungsi }}</td>
				    	<td>{{ $data->sejarah }}</td>
						<td>
							<a class="btn btn-warning" href="{{ route('r.edit',$data->id) }}">Edit</a>
						</td>
						<td>
							<a href="{{ route('r.show',$data->id) }}" class="btn btn-success">Show</a>
						</td>
						<td>
							<form method="post" action="{{ route('r.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				  <div class="pull-right"><a class="btn btn-info" href="{{ route('r.create') }}"><b>Tambah</b></a>
			  	</div>
				</div>
			  </div>
			</div>	
@endsection