<div class="row">
	<div class="col-md-6">
		<p>
			{!! Form::label('sekolah_id','Sekolah')!!}
			{!! Form::select('sekolah_id',$ModelSekolah->lists('title','id'),null,['class'=>'form-control'])!!}
		</p>
		<p>
			{!! Form::label('title','Semester')!!}
			{!! Form::select('semester_id',$ModelSemester->lists('title','id'),null,['class'=>'form-control'])!!}
		</p>
		<p>
			{!! Form::label('title','Tahun Ajaran')!!}
			{!! Form::select('tahun_ajaran_id',$ModelTahunAjaran->lists('title','id'),null,['class'=>'form-control'])!!}
		</p>
		<p>
			{!! Form::label('title','Waktu Penyelenggaraan')!!}
			{!! Form::select('waktu_penyelenggaraan_id',$ModelWaktuPenyelenggaraan->lists('title','id'),null,['class'=>'form-control'])!!}
		</p>
		<p>
			{!! Form::label('title','Bersedia Menerima Bosnas')!!}
			{!! Form::select('bosna',['ya'=>'ya','tidak'=>'tidak'],null,['class'=>'form-control'])!!}
		</p>
		<p>
			{!! Form::label('title','Bersedia Menerima Bosda')!!}
			{!! Form::select('bosda',['ya'=>'ya','tidak'=>'tidak'],null,['class'=>'form-control'])!!}
		</p>

	</div>
	<div class="col-md-6">
		<p>
			{!! Form::label('title','Sumber Listrik')!!}
			{!! Form::select('bosna',$ModelSumberListrik->lists('title','id'),null,['class'=>'form-control'])!!}
		</p>
		<p>
			{!! Form::label('title','Daya')!!}
			{!! Form::text('daya',null,['class'=>'form-control'])!!}
		</p>
		<p>
			{!! Form::label('title','Wilayah Khusus')!!}
			{!! Form::select('bosna',['ya'=>'ya','tidak'=>'tidak'],null,['class'=>'form-control'])!!}
		</p>
		<p>
			{!! Form::label('title','Kategori Wilayah')!!}
			{!! Form::select('kategori_wilayah_id',$ModelKategoriWilayah->lists('title','id'),null,['class'=>'form-control'])!!}
		</p>
		<p>
			{!! Form::label('title','Akses Internet')!!}
			{!! Form::select('akses_internet[]',$ModelAksesInet->lists('title','id'),null,['class'=>'form-control','multiple'])!!}
		</p>
	</div>

</div>
