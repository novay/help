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
				<td rowspan="3" width="200px" align="center">
					<img class="img-thumbnail" src="{{ url('img/yayasan/'.$data->file_logo) }}" alt="Logo {{ $data->nama }}" style="width:200px">
					<span>Logo Yayasan {{$data->nama}}</span>
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
				<td class="col-xs-1">:</td>
				<td colspan="2" >{{ $data->provinsi->title }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Kabupaten/Kota</td>
				<td class="col-xs-1">:</td>
				<td colspan="2" >{{ $data->kabupaten->title }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Kecamatan</td>
				<td class="col-xs-1">:</td>
				<td colspan="2" >{{ $data->kecamatan->title }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Kelurahan/Desa</td>
				<td class="col-xs-1">:</td>
				<td colspan="2" >{{ $data->kelurahan->title }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Dusun</td>
				<td class="col-xs-1">:</td>
				<td colspan="2" >{{ $data->dusun }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Kode Pos</td>
				<td class="col-xs-1">:</td>
				<td colspan="2" >{{ $data->kode_pos }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">RT/RW</td>
				<td class="col-xs-1">:</td>
				<td colspan="2" >{{ $data->rt }}/{{ $data->rw }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Lintang/Bujur</td>
				<td class="col-xs-1">:</td>
				<td colspan="2" >{{ $data->lintang }}/{{ $data->bujur }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">No. Telp</td>
				<td class="col-xs-1">:</td>
				<td colspan="2" >{{ $data->no_telp }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">No. HP</td>
				<td class="col-xs-1">:</td>
				<td colspan="2" >{{ $data->no_hp }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Alamat E-mail</td>
				<td class="col-xs-1">:</td>
				<td colspan="2" >{{ $data->email }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Website</td>
				<td class="col-xs-1">:</td>
				<td colspan="2" >http://{{ $data->website }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">No Akte Pendirian</td>
				<td class="col-xs-1">:</td>
				<td colspan="2" >{{ $data->no_akte }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">File Akte Pendirian</td>
				<td class="col-xs-1">:</td>
				<td colspan="2" >
				 	@if(isset($data))
				 		<a class="img-loader" data-img-url="{{url('img/yayasan/'.$data->file_akte)}}" data-toggle="modal" data-target="#modal_img">Lihat Gambar</a>
				 	@endif
				</td> 
			</tr>
			<tr>
				<td class="col-xs-4">No Pengesagan Pengadilan Negeri, lembaga berita negara</td>
				<td class="col-xs-1">:</td>
				<td colspan="2" >{{ $data->no_pengesahan }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">File Pengesagan Pengadilan Negeri, lembaga berita negara</td>
				<td class="col-xs-1">:</td>
				<td colspan="2" >
				 	@if(isset($data))
				 		<a class="img-loader" data-img-url="{{url('img/yayasan/'.$data->file_pengesahan)}}" data-toggle="modal" data-target="#modal_img">Lihat Gambar</a>
				 	@endif
				</td> 
			</tr>
			<tr>
				<td class="col-xs-4">No SK Berita Negara</td>
				<td class="col-xs-1">:</td>
				<td colspan="2" >{{ $data->no_berita }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">File SK Berita Negara</td>
				<td class="col-xs-1">:</td>
				<td colspan="2" >
				 	@if(isset($data))
				 		<a class="img-loader" data-img-url="{{url('img/yayasan/'.$data->file_berita)}}" data-toggle="modal" data-target="#modal_img">Lihat Gambar</a>
				 	@endif
				</td> 
			</tr>
			<tr>
				<td class="col-xs-4">NPWP</td>
				<td class="col-xs-1">:</td>
				<td colspan="2" >{{ $data->npwp }}</td>
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