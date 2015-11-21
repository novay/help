@inject('sekolah','\App\Repositories\Eloquent\Sekolah')
@inject('khusus','\App\Repositories\Eloquent\DataKebutuhanKhusus')

<div class="col-md-12">
	<div class="row">
		<div class="col-md-6">
			<p>
				{!! Form::label('title','Sekolah')!!}
				{!! Form::select('sekolah_id',$sekolah->lists('npsn','id'),null,['class'=>'form-control'])!!}
			</p>
			
		</div>
		<div class="col-md-6">
			<p>
				{!! Form::label('title','MBS')!!}
				{!! Form::select('mbs',['ya'=>'ya','tidak'=>'tidak'],null,['class'=>'form-control'])!!}
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<p>
				{!! Form::label('title','Luas Tanah Sekolah Milik Sendiri (M2)')!!}
				{!! Form::text('luas_tanah_milik',null,['class'=>'form-control'])!!}
			</p>
			
		</div>
		<div class="col-md-6">
			<p>
				{!! Form::label('title','Luas Tanah Sekolah Bukan Milik/Sewa (M2)')!!}
				{!! Form::text('luas_tanah_sewa',null,['class'=>'form-control'])!!}
			</p>
			
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<p>
				{!! Form::label('title',' Nomor Status kepemilikan Tanah')!!}
				{!! Form::text('no_status_kepemilikan_tanah',null,['class'=>'form-control'])!!}
			</p>
			
		</div>
		<div class="col-md-6">
			<p>
				{!! Form::label('title',' Nomor Sertivikat kepemilikan Tanah')!!}
				{!! Form::text('no_sertivikat',null,['class'=>'form-control'])!!}
			</p>
			
		</div>
		<div class="col-md-6">
			<p>
				{!! Form::label('title','File Sertifikat')!!}
				{!! Form::file('file',null,['class'=>'form-control'])!!}
			</p>
			
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<p>
				{!! Form::label('title','NPWP')!!}
				{!! Form::text('npwp',null,['class'=>'form-control'])!!}
			</p>
		</div>
		<div class="col-md-6">
			<p>
				{!! Form::label('title','File NPWP')!!}
				{!! Form::file('file_npwp',null,['class'=>'form-control'])!!}
			</p>
		</div>
	</div>
	<hr>
	<h3>Kebutuhan Khusus Yang Dilayani</h3>
	<div class="row">
		<div class="col-md-12">
			{!! Form::label('title','Data Kebutuhan Khusus')!!}
			{!! Form::select('keburuhan_khusus_id',$khusus->lists('title','id'),null,['class'=>'form-control'])!!}
		</div>
	</div>
</div>