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
					{{ $data->npsn.' ' }}
					<a class="img-loader" data-img-url="{{url('img/sekolah/'.$data->file_npsn)}}" data-toggle="modal" data-target="#modal_img">Lihat Gambar</a>
				</td>
				<td rowspan="3" align="center" width="200px">
					<img src="{{url('img/sekolah/'.$data->file_logo)}}" alt="" width="200px">
					<span>Logo {{$data->title}}</span>
				</td>
			</tr>
			<tr>
				<td class="col-xs-4">NSS</td>
				<td class="col-xs-1">:</td>
				<td>
					{{ $data->nss.' ' }}
					<a class="img-loader" data-img-url="{{url('img/sekolah/'.$data->file_nss)}}" data-toggle="modal" data-target="#modal_img">Lihat Gambar</a>
				</td>
			</tr>
			<tr>
				<td class="col-xs-4">Nama Sekolah</td>
				<td class="col-xs-1">:</td>
				<td colspan="2">{{ $data->title }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Bentuk Pendidikan</td>
				<td class="col-xs-1">:</td>
				<td colspan="2">{{ $data->bentuk_pendidikan->title }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Status Sekolah</td>
				<td class="col-xs-1">:</td>
				<td colspan="2">{{ $data->status_sekolah->title }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Status Kepemilikan</td>
				<td class="col-xs-1">:</td>
				<td colspan="2">{{ $data->status_kepemilikan->title }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">No. Telp</td>
				<td class="col-xs-1">:</td>
				<td colspan="2">{{ $data->no_telp }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">No. HP</td>
				<td class="col-xs-1">:</td>
				<td colspan="2">{{ $data->no_hp }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">E-mail</td>
				<td class="col-xs-1">:</td>
				<td colspan="2">{{ $data->email }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Website</td>
				<td class="col-xs-1">:</td>
				<td colspan="2">{{ $data->website }}</td>
			</tr>

		</table>		
	</div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="modal_img">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        	<img src="" id="img_modal" alt="" width="100%">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>
	(function () {
		$('.img-loader').on('click',function  () {
			console.log('msg');
			$('#img_modal').attr('src',$(this).attr('data-img-url'));
		});
	})(jQuery); 
</script>
@stop