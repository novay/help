<div class="row">
	<div class="form-group col-md-6">
			{!! Form::label('npsn','npsn')!!}
			<div class="input-group">
			{!! Form::text('npsn',null,['class'=>'form-control','id'=>'npss'])!!}
				<div class="input-group-btn">
					<div class="fileinput fileinput-new" data-provides="fileinput">
						<span class="btn btn-default btn-file">
							<span class="fileinput-new">Select file</span>
							<span class="fileinput-exists">Change</span>
							{!! Form::file('file_npsn') !!}
						</span>
					</div>
				</div>
			</div>
	</div>
	<div class="form-group col-md-6">
			{!! Form::label('nss','NSS')!!}
			<div class="input-group">
				{!! Form::text('nss',null,['class'=>'form-control','id'=>'nss'])!!}
				<div class="input-group-btn">
					<div class="fileinput fileinput-new" data-provides="fileinput">
						<span class="btn btn-default btn-file">
							<span class="fileinput-new">Select file</span>
							<span class="fileinput-exists">Change</span>
							{!! Form::file('file_nss') !!}
						</span>
					</div>	
				</div>
			</div>
	</div>
	<div class="form-group col-md-6">
			{!! Form::label('title','Nama Sekolah')!!}
			{!! Form::text('title',null,['class'=>'form-control','id'=>'title'])!!}
	</div>
	<div class="form-group col-md-6">
		<div class="col-md-12">
			{!! Form::label('file_logo','Logo Sekolah')!!}
		</div>
		<div class="col-md-12">	
			<div class="fileinput fileinput-new" data-provides="fileinput">
				<div class="btn-group">
					<span class="btn btn-default btn-file">
						<span class="fileinput-new">Pilih file</span>
						<span class="fileinput-exists">Ubah</span>
						{!! Form::file('file_logo',['id'=>'file_logo']) !!}
					</span>
					<button type="button" class="btn close btn-danger fileinput-exists" data-dismiss="fileinput">Hapus</button>
				</div>
			</div>
		</div>
	</div>
	<div class="form-group col-md-3 col-xs-12">
			{!! Form::label('bentuk_pendidikan_id','Bentuk Pendidikan')!!}
			{!! Form::select('bentuk_pendidikan_id',$ModelBentukPendidikan->lists('title','id'),null,['class'=>'form-control','id'=>'bentuk_pendidikan_id'])!!}
	</div>
	<div class="form-group col-md-3 col-xs-12">
			{!! Form::label('status_sekolah_id','Status Sekolah')!!}
			{!! Form::select('status_sekolah_id',$ModelStatusSekolah->lists('title','id'),null,['class'=>'form-control','id'=>'status_sekolah_id'])!!}
	</div>
	<div class="form-group col-md-3 col-xs-12">
			{!! Form::label('status_kepemilikan_id','Status Kepemilikan')!!}
			{!! Form::select('status_kepemilikan_id',$ModelStatusKepemilikan->lists('title','id'),null,['class'=>'form-control','id'=>'status_kepemilikan_id'])!!}
	</div>
	<div class="form-group col-md-3 col-xs-12">
			{!! Form::label('yayasan_id','Status Kepemilikan')!!}
			{!! Form::select('yayasan_id',$ModelYayasan->lists('nama','id'),null,['class'=>'form-control','id'=>'yayasan_id'])!!}
	</div>
	<div class="form-group col-md-6">
			{!! Form::label('no_telp','No. Telp')!!}
			{!! Form::text('no_telp',null,['class'=>'form-control','id'=>'no_telp'])!!}
	</div>
	<div class="form-group col-md-6">
			{!! Form::label('no_hp','No.HP')!!}
			{!! Form::text('no_hp',null,['class'=>'form-control','id'=>'no_hp'])!!}
	</div>
	<div class="form-group col-md-6">
			{!! Form::label('email','E-Mail')!!}
			{!! Form::text('email',null,['class'=>'form-control','id'=>'email',"type" => "email"])!!}
	</div>
	<div class="form-group col-md-6">
			{!! Form::label('website','Website')!!}
			{!! Form::text('website',null,['class'=>'form-control','id'=>'website'])!!}
	</div>							
</div>