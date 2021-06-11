@extends('layouts.admin')
@section('content')
<h1><center>Testimoni</center></h1>

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-title pull-right"><a href="{{ route('testimoni.create') }}" class="btn-outline-warning"><i class="fa fa-plus-square">&nbsp</i> Add </a>
			</div>
<div class="panel-body">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Email</th>
					<th colspan="3">Action</th>
				</tr>	
</thead>
<tbody>
	@php $no = 1; @endphp
	@foreach($testimonis as $data)
	<tr>
		<td> {{ $no++ }} </td>
		<td><p> {{ $data->nama }} </p></td>
		<td><p> {{ $data->email }} </p></td>
		<td>
	<td>
		<a class="btn btn-outline-primary" href=" {{ route('testimoni.edit',$data->id)}} "><i class="fa fa-file-text">&nbsp</i>Edit</a>
	</td>
	<td>
							<form method="post" action="{{ route('testimoni.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash"></i>Delete</button>
							</form>
						</td>
</tr>
@endforeach
</tbody>
</table>
<div style="margin-left: 500px"> {{$testimonis->links()}} </div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection