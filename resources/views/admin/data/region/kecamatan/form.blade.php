<div class="row">
	<div class="col-md-6 form-group">
		{!! Form::label('provinsi_id','Nama Provinsi') !!}
		{!! Form::select('provinsi_id',$ModelProvinsi->lists('title','id'),null,['class'=>'form-control','id'=>'provinsi_id']) !!}
	</div>
	<div class="col-md-6 form-group">
		{!! Form::label('kabupaten_id','Nama Kabupaten') !!}
		{!! Form::select('kabupaten_id',$ModelKabupaten->lists('title','id'),null,['class'=>'form-control','id'=>'kabupaten_id']) !!}
	</div>
	<div class="col-md-6 form-group">
		{!! Form::label('id','ID Kecamatan') !!}
		{!! Form::text('id',null,['class'=>'form-control','id'=>'id']) !!}
	</div>
	<div class="col-md-6 form-group">
		{!! Form::label('title','Nama Kecamatan') !!}
		{!! Form::text('title',null,['class'=>'form-control','id'=>'title']) !!}
	</div>
</div>
<script>


</script>
