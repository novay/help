<div class="row">
	<div class="form-group col-md-6">
		<div class="col-xs-12">
			{!! Form::label('npsn','npsn')!!}
		</div>
		<div class="col-xs-12">
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
	</div>
	<div class="form-group col-md-6">
		<div class="col-xs-12">
			{!! Form::label('nss','NSS')!!}
		</div>
		<div class="col-xs-12">
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
	</div>
	<div class="form-group col-md-6">
		<div class="col-xs-12">
			{!! Form::label('title','Nama Sekolah')!!}
		</div>
		<div class="col-xs-12">
			{!! Form::text('title',null,['class'=>'form-control','id'=>'title'])!!}
		</div>
	</div>
	<div class="form-group col-md-6">
		<div class="col-xs-12">
			{!! Form::label('file_logo','Logo Sekolah')!!}
		</div>
		<div class="col-xs-12">
			<div class="fileinput fileinput-new" data-provides="fileinput">
				<span class="btn btn-default btn-file">
					<span class="fileinput-new">Select file</span>
					<span class="fileinput-exists">Change</span>
					{!! Form::file('file_logo',['id'=>'file_logo']) !!}
				</span>
				<span class="fileinput-filename"></span>
				<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
			</div>
		</div>
	</div>
	<div class="form-group col-md-4">
		<div class="col-xs-12">
			{!! Form::label('bentuk_pendidikan_id','Bentuk Pendidikan')!!}
		</div>
		<div class="col-xs-12">
			{!! Form::select('bentuk_pendidikan_id',$ModelBentukPendidikan->lists('title','id'),null,['class'=>'form-control','id'=>'bentuk_pendidikan_id'])!!}
		</div>
	</div>
	<div class="form-group col-md-4">
		<div class="col-xs-12">
			{!! Form::label('status_sekolah_id','Status Sekolah')!!}
		</div>
		<div class="col-xs-12">
			{!! Form::select('status_sekolah_id',$ModelStatusSekolah->lists('title','id'),null,['class'=>'form-control','id'=>'status_sekolah_id'])!!}
		</div>
	</div>
	<div class="form-group col-md-4">
		<div class="col-xs-12">
			{!! Form::label('status_kepemilikan_id','Status Kepemilikan')!!}
		</div>
		<div class="col-xs-12">
			{!! Form::select('status_kepemilikan_id',$ModelStatusKepemilikan->lists('title','id'),null,['class'=>'form-control','id'=>'status_kepemilikan_id'])!!}
		</div>
	</div>
	<div class="form-group col-md-6">
		<div class="col-xs-12">
			{!! Form::label('no_telp','No. Telp')!!}
		</div>
		<div class="col-xs-12">
			{!! Form::text('no_telp',null,['class'=>'form-control','id'=>'no_telp'])!!}
		</div>
	</div>
	<div class="form-group col-md-6">
		<div class="col-xs-12">
			{!! Form::label('no_hp','No.HP')!!}
		</div>
		<div class="col-xs-12">
			{!! Form::text('no_hp',null,['class'=>'form-control','id'=>'no_hp'])!!}
		</div>
	</div>
	<div class="form-group col-md-6">
		<div class="col-xs-12">
			{!! Form::label('email','E-Mail')!!}
		</div>
		<div class="col-xs-12">
			{!! Form::text('email',null,['class'=>'form-control','id'=>'email',"type" => "email"])!!}
		</div>
	</div>
	<div class="form-group col-md-6">
		<div class="col-xs-12">
			{!! Form::label('website','Website')!!}
		</div>
		<div class="col-xs-12">
			{!! Form::text('website',null,['class'=>'form-control','id'=>'website'])!!}
		</div>
	</div>							
</div>