@extends('admin_template')
@section('content')
<div class="box box-warning" id="box-ajax">
	<div class="box-header">
		<h3 class="box-title">{!! $documentTitle !!}</h3>
		<div class="box-tools">
			<div class="btn-group">
				<button data-widget="remove" class="btn btn-danger btn-sm close-form " type="button"><i class="fa fa-close"></i></button>
			</div>
		</div>
	</div>
	<div class="box-body">
		<table class="table table-striped">
			<tr>
				<td class="col-xs-4">Nama Provinsi</td>
				<td class="col-xs-1">:</td>
				<td>{{ $data->provinsi->title }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Nama Kabupaten</td>
				<td class="col-xs-1">:</td>
				<td>{{ $data->kabupaten->title }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Nama Kecamatan</td>
				<td class="col-xs-1">:</td>
				<td>{{ $data->title }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Dibuat tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{ $data->created_at }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Terakhir diperbarui</td>
				<td class="col-xs-1">:</td>
				<td>{{ $data->updated_at }}</td>
			</tr>
		</table>		
	</div>
</div>
@stop