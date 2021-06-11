@extends('layouts.admin')
@section('content')
<h1><center>Notifikasi</center></h1>

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">
				</div>
			</div>
<div class="panel-body">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Gambar</th>
					<th>Nama custom</th>
					<th>Alamat</th>
					<th>No Telepon</th>
					<th>Product yang dipesan</th>
					<th>Jumlah barang yang dipesan</th>
					<th>Pembayaran</th>
					<th>Pengiriman</th>
					<th>Tanggal Pemesanan</th>
				</tr>	
</thead>
<tbody>
	@php $no = 1; @endphp
	@foreach($customNotif as $data)
	<tr>
		<td> {{ $no++ }} </td>
		<td><img src="{{asset('assets/images/avatar/'.$data->product->gambar) }}" style="max-width: 80px;"></td>
		<td> {{ $data->nama}} </td>
		<td> {{ $data->alamat }} </td>
		<td> {{ $data->no_tlp }} </td>
		<td> {{ $data->Product->nama }}</td>
		<td> {{ $data->jumlah_brg }} </td>
		<td> {{ $data->pembayaran }} </td>
		<td> {{ $data->pengiriman }} </td>
        <td> {{ date('M j, Y', strtotime($data->created_at)) }}</td>

</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection