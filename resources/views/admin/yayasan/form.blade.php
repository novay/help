@inject('provinsi','\App\Repositories\Eloquent\Provinsi')
@inject('kelurahan','\App\Repositories\Eloquent\Kelurahan')

<div class="row">
	<div class="col-md-12">
		{!! Form::label('title','Nama Yayasan')!!}
		{!! Form::text('nama',null,['class'=>'form-control','id'=>'nama'])!!}



		{!! Form::label('title','Nama Pimpinan Yayasan')!!}
		{!! Form::text('pimpinan',null,['class'=>'form-control'])!!}	



		{!! Form::label('title','Provinsi')!!}
		{!! Form::text('alamat',null,['class'=>'form-control'])!!}
	</div>
</div>
<hr>
<div class="row">
	<div class="col-md-4">
		<p>
			{!! Form::label('title','Kelurahan')!!}
			{!! Form::select('kelurahan_id',$kelurahan->lists('title','id'),null,['class'=>'form-control'])!!}	
		</p>

		<p>
			{!! Form::label('title','Dusun')!!}
			{!! Form::text('Dusun',null,['class'=>'form-control'])!!}	
		</p>
	</div>
	<div class="col-md-4">
		<p>
			{!! Form::label('title','Kode Pos')!!}
			{!! Form::text('kode_pos',null,['class'=>'form-control'])!!}	
		</p>
		
		<div class="col-md-6">
			<p>
				{!! Form::label('title','RT')!!}
				{!! Form::text('rt',null,['class'=>'form-control'])!!}	
			</p>
		</div>
		<div class="col-md-6">
			<p>
				{!! Form::label('title','RW')!!}
				{!! Form::text('rw',null,['class'=>'form-control'])!!}	
			</p>
		</div>
	</div>
	<div class="col-md-4">
		{!! Form::label('title','File')!!}
		{!! Form::file('file_logo',null,['class'=>'form-control'])!!}	
	</div>
</div>
<hr>
<h2>Letak Geografis</h2>
<div class="row">
	<div class="col-md-6">
		<p>
			{!! Form::label('title','Lintang')!!}
			{!! Form::text('rw',null,['class'=>'form-control'])!!}	
		</p>

		
	</div>
	<div class="col-md-6">
		<p>
			{!! Form::label('title','Bujur')!!}
			{!! Form::text('bujur',null,['class'=>'form-control'])!!}	
		</p>
		
		<a class="btn btn-danger" href="">Buka Peta Lokasi</a>
		
		
	</div>
</div>
<hr>
<div class="row">
	<div class="col-md-4">
		<p>
			{!! Form::label('title','Nomor Telepon')!!}
			{!! Form::text('no_telp',null,['class'=>'form-control'])!!}	
		</p>
	</div>
	<div class="col-md-4">
		<p>
			{!! Form::label('title','Nomor Fax')!!}
			{!! Form::text('no_fax',null,['class'=>'form-control'])!!}	
		</p>
	</div>
	<div class="col-md-4">
		{!! Form::label('title','Nomor HP')!!}
		{!! Form::text('no_hp',null,['class'=>'form-control'])!!}
	</div>
</div>
<div class="row">
	<div class="col-md-12">

		{!! Form::label('title','Email')!!}
		{!! Form::text('email',null,['class'=>'form-control','id'=>'email'])!!}

		{!! Form::label('title','Website')!!}
		{!! Form::text('website',null,['class'=>'form-control','id'=>'website'])!!}
	</div>
</div>
<h2>Akte Pendirian</h2>
<div class="row"> 
	<div class="col-md-6">
		{!! Form::label('title','No Akte')!!}
		{!! Form::text('no_akte',null,['class'=>'form-control','id'=>'no_akte'])!!}

		{!! Form::label('title','Tanggal')!!}
		{!! Form::text('tgl_akte',null,['class'=>'form-control','id'=>'tgl_akte'])!!}

		
	</div>
	<div class="col-md-6">
		<p>
			{!! Form::label('title','NPYP')!!}
			{!! Form::text('npwp',null,['class'=>'form-control','id'=>'npwp'])!!}

			{!! Form::label('title','Akte Yayasan')!!}
			{!! Form::file('file_akte',null,['class'=>'form-control','id'=>'file_akte'])!!}
		</p>
		
	</div>
</div>

<h2>Pengesahan Pengadilan Negeri</h2>
<div class="row">
	<div class="col-md-12">
		<p>
			{!! Form::label('title','No Pengesahan')!!}
			{!! Form::text('no_pengesahan',null,['class'=>'form-control'])!!}
		</p>			
			
	</div>
		<div class="col-md-6">
			<p>
			{!! Form::label('title','Tanggal')!!}
			{!! Form::text('tgl_pengesahan',null,['class'=>'form-control','id'=>'tgl_pengesahan'])!!}
			</p>
			
		</div>
		<div class="col-md-6">
			<p>
			{!! Form::label('title','File Pengesahan')!!}
			{!! Form::file('file_pengesahan',null,['class'=>'form-control','id'=>'file_pengesahan'])!!}
			</p>
			
		</div>
	
	<div class="col-md-6">
		
	</div>
</div>
<h2>SK Berita</h2>
<div class="row">
	<div class="col-md-12">
		<p>
			{!! Form::label('title','No Berita')!!}
			{!! Form::text('no_berita',null,['class'=>'form-control'])!!}
		</p>			
			
	</div>
		<div class="col-md-6">
			<p>
			{!! Form::label('title','Tanggal')!!}
			{!! Form::text('tgl_berita',null,['class'=>'form-control','id'=>'tgl_berita'])!!}
			</p>
			
		</div>
		<div class="col-md-6">
			<p>
			{!! Form::label('title','File Berita')!!}
			{!! Form::file('file_berita',null,['class'=>'form-control','id'=>'file_berita'])!!}
			</p>
			
		</div>
	
	<div class="col-md-6">
		
	</div>
</div>






















