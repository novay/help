@inject('sekolah','\App\Repositories\Eloquent\Sekolah')
@inject('ajaran','\App\Repositories\Eloquent\TahunAjaran')
@inject('semester','\App\Repositories\Eloquent\Semester')
@inject('suplai,'\App\Repositories\Eloquent\SuplaiAir')


<div class="row">
	<div class="col-md-12">
		<div class="col-md-6">
			<p>
				{!! Form::label('title','Sekolah')!!}
				{!! Form::select('sekolah_id',$sekolah->lists('npsn','id'),null,['class'=>'form-control'])!!}
			</p>
			<p>
				{!! Form::label('title','Title')!!}
				{!! Form::text('title',null,['class'=>'form-control'])!!}
			</p>
			<p>
				{!! Form::label('title','Tahun Ajaran')!!}
				{!! Form::select('tahun_ajaran_id',$ajaran->lists('title','id'),null,['class'=>'form-control'])!!}
			</p>
			<p>
				{!! Form::label('title','Semester')!!}
				{!! Form::select('semester_id',$semester->lists('title','id'),null,['class'=>'form-control'])!!}
			</p>

			<p>
				{!! Form::label('title','Ketersediaan Air')!!}
				{!! Form::select('ketersediaan_air',['ya'=>'ya','tidak'=>'tidak'],null,['class'=>'form-control'])!!}
			</p>
			<p>
				{!! Form::label('title','Suplai Air')!!}
				{!! Form::select('suplai_air_id',$suplai->lists('title','id'),null,['class'=>'form-control'])!!}
			</p>
			<p>
				{!! Form::label('title','Kecukupan Air')!!}
				{!! Form::select('ketersediaan_air',['cukup'=>'cukup','kurang'=>'kurang','tidak ada'=>'tidak ada'],null,['class'=>'form-control'])!!}
			</p>

		</div>
		<div class="col-md-6">

			<p>
				{!! Form::label('title','Proses Air')!!}
				{!! Form::select('ketersediaan_air',['ya'=>'ya','tidak'=>'tidak'],null,['class'=>'form-control'])!!}
			</p>

			<p>
				{!! Form::label('title','Air Minum')!!}
				{!! Form::select('air_minum',['ya'=>'ya','tidak'=>'tidak'],null,['class'=>'form-control'])!!}
			</p>
			<p>
				{!! Form::label('title',' Membawa Air')!!}
				{!! Form::select('membawa_air',['ya'=>'ya','tidak'=>'tidak'],null,['class'=>'form-control'])!!}
			</p>

			<p>
				{!! Form::label('title','Toilet Kebutuhan Khusus')!!}
				{!! Form::text('toilet_kebutuhan_khusus',null,['class'=>'form-control'])!!}
			</p>
			<p>
				{!! Form::label('title','Toilet Siswa Kecil')!!}
				{!! Form::text('toilet_siswa_kecil',null,['class'=>'form-control'])!!}
			</p>
			<p>
				{!! Form::label('title','Cuci Tangan')!!}
				{!! Form::text('cuci_tangan',null,['class'=>'form-control'])!!}
			</p>
		</div>
	</div>

</div>
