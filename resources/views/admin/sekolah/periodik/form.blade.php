
@inject('sekolah','\App\Repositories\Eloquent\Sekolah')
@inject('semester','\App\Repositories\Eloquent\Semester')
@inject('ajaran','\App\Repositories\Eloquent\TahunAjaran')
@inject('waktu','\App\Repositories\Eloquent\WaktuPenyelengaraan')
@inject('listrik','\App\Repositories\Eloquent\SumberListrik')
@inject('kategori','\App\Repositories\Eloquent\KategoriWilayah')
@inject('internet','\App\Repositories\Eloquent\AksesInternet')


<div class="row">
	<div class="col-md-6">
		<p>
			{!! Form::label('title','Sekolah')!!}
			{!! Form::select('sekolah_id',$sekolah->lists('npsn','id'),null,['class'=>'form-control'])!!}
		</p>
		<p>
			{!! Form::label('title','Semester')!!}
			{!! Form::select('semester_id',$semester->lists('title','id'),null,['class'=>'form-control'])!!}
		</p>
		<p>
			{!! Form::label('title','Tahun Ajaran')!!}
			{!! Form::select('tahun_ajaran_id',$ajaran->lists('title','id'),null,['class'=>'form-control'])!!}
		</p>
		<p>
			{!! Form::label('title','Waktu Penyelenggaraan')!!}
			{!! Form::select('waktu_penyelenggaraan_id',$waktu->lists('title','id'),null,['class'=>'form-control'])!!}
		</p>
		<p>
			{!! Form::label('title','Bersedia Menerima Bosnas')!!}
			{!! Form::select('bosna',['ya'=>'ya','tidak'=>'tidak','bisa jadi'=>'bisa jadi'],null,['class'=>'form-control'])!!}
		</p>
		<p>
			{!! Form::label('title','Bersedia Menerima Bosda')!!}
			{!! Form::select('bosda',['ya'=>'ya','tidak'=>'tidak'],null,['class'=>'form-control'])!!}
		</p>

	</div>
	<div class="col-md-6">
		<p>
			{!! Form::label('title','Sumber Listrik')!!}
			{!! Form::select('bosna',$listrik->lists('title','id'),null,['class'=>'form-control'])!!}
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
			{!! Form::select('katagori_id',$kategori->lists('title','id'),null,['class'=>'form-control'])!!}
		</p>
		<p>
			{!! Form::label('title','Akses Internet 1')!!}
			{!! Form::select('akses_internet_id',$internet->lists('title','id'),null,['class'=>'form-control'])!!}
		</p>
		<p>
			{!! Form::label('title','Akses Internet 1')!!}
			{!! Form::select('akses_internet_id',$internet->lists('title','id'),null,['class'=>'form-control'])!!}
		</p>
	</div>

</div>
