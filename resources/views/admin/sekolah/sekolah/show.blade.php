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
				<td class="col-xs-4">NPSN</td>
				<td class="col-xs-1">:</td>
				<td>
					{{ $data->npsn }}
					{{ $data->file_npsn }}
				</td>
			</tr>
			<tr>
				<td class="col-xs-4">NSS</td>
				<td class="col-xs-1">:</td>
				<td>
					{{ $data->nss }}
					{{ $data->file_nss }}
				</td>
			</tr>
			<tr>
				<td class="col-xs-4">Nama Sekolah</td>
				<td class="col-xs-1">:</td>
				<td>
					{{ $data->title }}
					{{ $data->file_logo }}
				</td>
			</tr>
			<tr>
				<td class="col-xs-4">Bentuk Pendidikan</td>
				<td class="col-xs-1">:</td>
				<td>{{ $data->bentuk_pendidikan->title }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Status Sekolah</td>
				<td class="col-xs-1">:</td>
				<td>{{ $data->status_sekolah->title }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Status Kepemilikan</td>
				<td class="col-xs-1">:</td>
				<td>{{ $data->status_kepemilikan->title }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">No. Telp</td>
				<td class="col-xs-1">:</td>
				<td>{{ $data->no_telp }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">No. HP</td>
				<td class="col-xs-1">:</td>
				<td>{{ $data->no_hp }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">E-mail</td>
				<td class="col-xs-1">:</td>
				<td>{{ $data->email }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Website</td>
				<td class="col-xs-1">:</td>
				<td>{{ $data->website }}</td>
			</tr>

		</table>		
	</div>
</div>
@stop