
<div class="row">
	<div class="col-xs-12 form-group">
		{!! Form::label('id','Nama Provinsi') !!}
		{!! Form::select('id',$ModelProvinsi->lists('title','id'),null,['class'=>'form-control','id'=>'id']) !!}
	</div>
	<div class="col-md-6 form-group">
		{!! Form::label('id','ID Kabupaten') !!}
		{!! Form::text('id',null,['class'=>'form-control','id'=>'id']) !!}
	</div>
	<div class="col-md-6 form-group">
		{!! Form::label('title','Nama Kabupaten') !!}
		{!! Form::text('title',null,['class'=>'form-control','id'=>'title']) !!}
	</div>
</div>
<script>


</script>