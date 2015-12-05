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
				<td class="col-xs-4">Nama Yayasan</td>
				<td class="col-xs-1">:</td>
				<td>{{ $data->nama }}</td>
				<td rowspan="3">
					<img class="img-thumbnail" src="{{ url('img/yayasan/'.$data->file_logo) }}" alt="Logo {{ $data->nama }}" style="width:200px">
				</td>
			</tr>
			<tr>
				<td class="col-xs-4">Pimpinan Yayasan</td>
				<td class="col-xs-1">:</td>
				<td>{{ $data->pimpinan }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Alamat Yayasan</td>
				<td class="col-xs-1">:</td>
				<td>{{ $data->alamat }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Provinsi</td>
				<td class="col-xs-1" colspan="2">:</td>
				<td>{{ $data->provinsi->title }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Kabupaten/Kota</td>
				<td class="col-xs-1" colspan="2">:</td>
				<td>{{ $data->kabupaten->title }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Kecamatan</td>
				<td class="col-xs-1" colspan="2">:</td>
				<td>{{ $data->kecamatan->title }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Kelurahan/Desa</td>
				<td class="col-xs-1" colspan="2">:</td>
				<td>{{ $data->kelurahan->title }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Dusun</td>
				<td class="col-xs-1" colspan="2">:</td>
				<td>{{ $data->dusun }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Kode Pos</td>
				<td class="col-xs-1" colspan="2">:</td>
				<td>{{ $data->kode_pos }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">RT/RW</td>
				<td class="col-xs-1" colspan="2">:</td>
				<td>{{ $data->rt }}/{{ $data->rw }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Lintang/Bujur</td>
				<td class="col-xs-1" colspan="2">:</td>
				<td>{{ $data->lintang }}/{{ $data->bujur }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">No. Telp</td>
				<td class="col-xs-1" colspan="2">:</td>
				<td>{{ $data->no_telp }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">No. HP</td>
				<td class="col-xs-1" colspan="2">:</td>
				<td>{{ $data->no_hp }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Alamat E-mail</td>
				<td class="col-xs-1" colspan="2">:</td>
				<td>{{ $data->email }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Website</td>
				<td class="col-xs-1" colspan="2">:</td>
				<td>http://{{ $data->website }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">No Akte Pendirian</td>
				<td class="col-xs-1" colspan="2">:</td>
				<td>{{ $data->no_akte }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">File Akte Pendirian</td>
				<td class="col-xs-1" colspan="2">:</td>
				<td>{{ $data->file_akte }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">No Pengesagan Pengadilan Negeri, lembaga berita negara</td>
				<td class="col-xs-1" colspan="2">:</td>
				<td>{{ $data->no_pengesahan }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">File Pengesagan Pengadilan Negeri, lembaga berita negara</td>
				<td class="col-xs-1" colspan="2">:</td>
				<td>{{ $data->file_pengesahan }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">No SK Berita Negara</td>
				<td class="col-xs-1" colspan="2">:</td>
				<td>{{ $data->no_berita }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">File SK Berita Negara</td>
				<td class="col-xs-1" colspan="2">:</td>
				<td>{{ $data->file_berita }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">NPWP</td>
				<td class="col-xs-1" colspan="2">:</td>
				<td>{{ $data->npwp }}</td>
			</tr>
		</table>		
	</div>
</div>
@stop