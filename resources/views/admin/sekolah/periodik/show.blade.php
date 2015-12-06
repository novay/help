{{dd($data->akses_internet)}}
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
				<td class="col-xs-4">Nama Sekolah</td>
				<td class="col-xs-1">:</td>
				<td>{{$data->sekolah->title}}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Semester</td>
				<td class="col-xs-1">:</td>
				<td>{{$data->semester->title}}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Tahun Ajaran</td>
				<td class="col-xs-1">:</td>
				<td>{{$data->tahun_ajaran->title}}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Waktu Penyelenggaraan</td>
				<td class="col-xs-1">:</td>
				<td>{{$data->waktu_penyelenggaraan->title}}</td>
			</tr>
			<tr>
				<td class="col-xs-4">BOSNA</td>
				<td class="col-xs-1">:</td>
				<td>{{$data->bosna}}</td>
			</tr>
			<tr>
				<td class="col-xs-4">BOSDA</td>
				<td class="col-xs-1">:</td>
				<td>{{$data->bosda}}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Sumber Listrik</td>
				<td class="col-xs-1">:</td>
				<td>{{$data->sumber_listrik}}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Daya Listrik</td>
				<td class="col-xs-1">:</td>
				<td>{{$data->daya}}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Wilayah Khusus</td>
				<td class="col-xs-1">:</td>
				<td>{{$data->wilayah_khusus}}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Kategori Wilayah</td>
				<td class="col-xs-1">:</td>
				<td>{{$data->kategori_wilayah}}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Akses Internet</td>
				<td class="col-xs-1">:</td>
				<td>{{implode(',',$data->akses_internet->toArray())}}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Dibuat tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{$data->created_at}}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Diperbarui tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{$data->updated_at}}</td>
			</tr>
		</table>		
	</div>
</div>
@stop