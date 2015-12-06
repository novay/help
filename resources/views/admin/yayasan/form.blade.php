<div class="row">
	<div class="col-md-12 form-group">
		{!! Form::label('nama','Nama Yayasan')!!}
		{!! Form::text('nama',null,['class'=>'form-control','id'=>'nama'])!!}
	</div>
	<div class="form-group col-md-12">
		{!! Form::label('pimpinan','Nama Pimpinan Yayasan')!!}
		{!! Form::text('pimpinan',null,['class'=>'form-control'])!!}	
	</div>
	<div class="form-group col-md-12">
		{!! Form::label('alamat','Alamat')!!}
		{!! Form::text('alamat',null,['class'=>'form-control'])!!}
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		<div class="form-group">
			{!! Form::label('provinsi','Provinsi')!!}
			{!! Form::select('provinsi',$ModelProvinsi->lists('title','id'),null,['class'=>'form-control chain','data-next-chain'=>'kabupaten','id'=>'provinsi'])!!}
		</div>				
		<div class="form-group">
			{!! Form::label('kabupaten','Kabupaten')!!}
			{!! Form::select('kabupaten',isset($data)?$ModelKabupaten->lists('title','id'):[],null,['class'=>'form-control chain','data-next-chain'=>'kecamatan',(isset($data) ? 'readonly':'disabled'),'id'=>'kabupaten'])!!}
		</div>		
		<div class="form-group">
			{!! Form::label('kecamatan','Kecamatan')!!}
			{!! Form::select('kecamatan',isset($data)?$ModelKecamatan->lists('title','id'):[],null,['class'=>'form-control chain','data-next-chain'=>'kelurahan_id',(isset($data) ? 'readonly':'disabled'),'id'=>'kecamatan'])!!}
		</div>		
		<div class="form-group">
			{!! Form::label('kelurahan_id','Kelurahan')!!}
			{!! Form::select('kelurahan_id',isset($data)?$ModelKelurahan->lists('title','id'):[],null,['class'=>'form-control',(isset($data) ? 'readonly':'disabled'),'id'=>'kelurahan_id'])!!}
		</div>		
	</div>
	<div class="col-md-4">
		<div class="form-group">
			{!! Form::label('kode_pos','Kode Pos')!!}
			{!! Form::text('kode_pos',null,['class'=>'form-control','id'=>'kode_pos'])!!}
		</div>

		<div class="form-group">
			{!! Form::label('rt','RT')!!}
			{!! Form::text('rt',null,['class'=>'form-control','id'=>'rt'])!!}
		</div>

		<div class="form-group">
			{!! Form::label('rw','RW')!!}
			{!! Form::text('rw',null,['class'=>'form-control','id'=>'rw'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('dusun','Dusun')!!}
			{!! Form::text('dusun',null,['class'=>'form-control','id'=>'dusun'])!!}
		</div>
	</div>
	<div class="col-md-4">
		<div class="col-xs-12">
			<div class="fileinput fileinput-new " data-provides="fileinput">
				<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
					@if($data)
						<img src="{{url('img/yayasan/'.$data->file_logo)}}" alt="">
					@endif
				</div>
				<div>
					<span class="btn btn-default btn-file"><span class="fileinput-new">Pilih Logo</span><span class="fileinput-exists">Change</span>{!! Form::file('file_logo')!!}</span>
					<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
				</div>
			</div>		
		</div>			
	</div>
</div>
<div class="row">
	<div class="form-group col-md-6">
		{!! Form::label('lintang','Lintang')!!}
		{!! Form::text('lintang',null,['class'=>'form-control','id'=>'lintang'])!!}
	</div>
	<div class="form-group col-md-6">
		{!! Form::label('bujur','Bujur')!!}
		<div class="input-group">
			{!! Form::text('bujur',null,['class'=>'form-control','id'=>'bujur'])!!}
			<div class="input-group-btn">
				<button class="btn btn-primary"><i class="fa fa croshairs"></i> Buka Peta</button>
			</div>
		</div>
	</div>	
</div>
<div class="row">
	<div class="col-md-3">
		<div class="form-group">
			{!! Form::label('no_telp','No. Telp')!!}
			{!! Form::text('no_telp',null,['class'=>'form-control','id'=>'no_telp'])!!}
		</div>

	</div>
	<div class="col-md-3">
		<div class="form-group">
			{!! Form::label('no_hp','No. Hp')!!}
			{!! Form::text('no_hp',null,['class'=>'form-control','id'=>'no_hp'])!!}
		</div>		
	</div>
	<div class="col-md-3">
		<div class="form-group">
			{!! Form::label('email','E-Mail')!!}
			{!! Form::text('email',null,['class'=>'form-control','id'=>'email'])!!}
		</div>	
	</div>
	<div class="col-md-3">
		<div class="form-group">
			{!! Form::label('website','Website')!!}
			<div class="input-group">
				<span class="input-group-addon">http://</span>
				{!! Form::text('website',null,['class'=>'form-control','id'=>'website'])!!}
			</div>
		</div>
	</div>	
</div>
<div class="row">
	<div class="col-md-4">
		<div class="form-group">
				{!! Form::label('no_akte','Akte Pendirian')!!}
				<div class="input-group">
					{!! Form::text('no_akte',null,['class'=>'form-control','id'=>'no_akte'])!!}
					<div class="input-group-btn">
						<div class="fileinput fileinput-new" data-provides="fileinput">
							<span class="btn btn-default btn-file">
								{!! Form::file('file_akte') !!}
								<span class="fileinput-new">Pilih file</span>
								<span class="fileinput-exists">Ganti file</span>
							</span>
						</div>
					</div>
				</div>
		</div>	
		<div class="form-group">
					{!! Form::label('tgl_akte','Tanggal Akte')!!}
					{!! Form::text('tgl_akte',null,['class'=>'form-control datechooser','id'=>'tgl_akte'])!!}
			</div>				
	</div>
	<div class="col-md-4">
		<div class="form-group">
				{!! Form::label('no_berita','SK Berita Negara')!!}
				<div class="input-group">
					{!! Form::text('no_berita',null,['class'=>'form-control','id'=>'no_berita'])!!}
					<div class="input-group-btn">
						<div class="fileinput fileinput-new" data-provides="fileinput">
							<span class="btn btn-default btn-file">
								{!! Form::file('file_berita') !!}
								<span class="fileinput-new">Pilih file</span>
								<span class="fileinput-exists">Ganti file</span>
							</span>
						</div>
					</div>
				</div>
		</div>
		<div class="form-group">
						{!! Form::label('tgl_berita','Tanggal')!!}
						{!! Form::text('tgl_berita',null,['class'=>'form-control datechooser','id'=>'tgl_berta'])!!}
				</div>
								
	</div>
	<div class="col-md-4">
		<div class="form-group">
				{!! Form::label('no_pengesahan','Pengesahan Pengadilan Negeri')!!}
				<div class="input-group">
					{!! Form::text('no_pengesahan',null,['class'=>'form-control','id'=>'no_pengesahan'])!!}
					<div class="input-group-btn">
						<div class="fileinput fileinput-new" data-provides="fileinput">
							<span class="btn btn-default btn-file">
								{!! Form::file('file_pengesahan') !!}
								<span class="fileinput-new">Pilih file</span>
								<span class="fileinput-exists">Ganti file</span>
							</span>
						</div>
					</div>
				</div>
		</div>
		<div class="form-group">
				{!! Form::label('tgl_pengesahan','Tanggal')!!}
				{!! Form::text('tgl_pengesahan',null,['class'=>'form-control datechooser','id'=>'tgl_pengesahan'])!!}
		</div>	
	</div>
</div>
<div class="row">
	<div class="form-group col-xs-12">
			{!! Form::label('npwp','NPWP')!!}
			{!! Form::text('npwp',null,['class'=>'form-control','id'=>'npwp'])!!}
	</div>			
</div>
