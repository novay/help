<div class="row">
	<div class="col-md-6">
		<div class="form-group col-md-12">
			{!! Form::label('sekolah_id','Sekolah')!!}
			{!! Form::select('sekolah_id',$ModelSekolah->lists('title','id'),null,['class'=>'form-control','id'=>'sekolah_id'])!!}
		</div>
		<div class="col-md-12 form-group">
			{!! Form::label('no_sk','Nomor SK')!!}
			{!! Form::text('no_sk',null,['class'=>'form-control','id'=>'no_sk'])!!}
		</div>
		<div class="form-group col-md-12">
			{!! Form::label('lembaga_id','Lembaga')!!}
			{!! Form::select('lembaga_id',$ModelLembagaAkreditasi->lists('title','id'),null,['class'=>'form-control','id'=>'lembaga_id'])!!}
		</div>
		<div class="form-group col-md-12">
			{!! Form::label('nilai_id','Nilai Akreditasi')!!}
			{!! Form::select('nilai_id',$ModelNilaiAkreditasi->lists('title','id'),null,['class'=>'form-control','id'=>'lembaga_id'])!!}
		</div>
	</div>
	<div class="col-md-6">
		<div class="col-md-12 form-group">
			{!! Form::label('tmt','Tanggal Mulai Terhitung')!!}
			{!! Form::text('tmt',null,['class'=>'form-control datechooser'])!!}
		</div>
		<div class="col-md-12 form-group">
			{!! Form::label('title','Berlaku Sampai')!!}
			{!! Form::text('tanggal',null,['class'=>'form-control datechooser','id_no_sk'])!!}
		</div>
	
		<div class="col-md-12 form-group">
			{!! Form::label('title','File')!!}<br>
			<div class="fileinput fileinput-new" data-provides="fileinput">
				<span class="btn btn-default btn-file">
				<span class="fileinput-new">Select file</span>
				<span class="fileinput-exists">Change</span>
				{!! Form::file('file') !!}
				<span class="fileinput-filename"></span>
				<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
			</div>
		</div>
	</div>
	
</div>

