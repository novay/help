@inject('sekolah','\App\Repositories\Eloquent\Sekolah')
@inject('ajaran','\App\Repositories\Eloquent\TahunAjaran')
@inject('semester','\App\Repositories\Eloquent\Semester')

<div class="col-md-12">
	<div class="row">
		<div class="col-md-12">
			<p>
				{!! Form::label('title','Sekolah')!!}
				{!! Form::select('sekolah_id',$sekolah->lists('npsn','id'),null,['class'=>'form-control'])!!}
			</p>
		</div>

	</div>
	<div class="row">
		<div class="col-md-4">
			<p>
				{!! Form::label('title','Tahun Ajaran')!!}
				{!! Form::select('tahun_ajaran_id',$ajaran->lists('title','id'),null,['class'=>'form-control'])!!}
			</p>
		</div>
		<div class="col-md-4">
			<p>
				{!! Form::label('title','Semester')!!}
				{!! Form::select('semester_id',$semester->lists('title','id'),null,['class'=>'form-control'])!!}
			</p>
		</div>
		<div class="col-md-4">
			<p>
				{!! Form::label('title','Jumlah Siswa')!!}
				{!! Form::text('jumlah',null,['class'=>'form-control'])!!}
			</p>
		</div>
	</div>
	<hr>
	<h3>Jumlah Siswa Berdasarkan Jenis Kelamin</h3>
	<div class="row">

		<div class="col-md-6">
			<p>
				{!! Form::label('title','Laki-laki')!!}
				{!! Form::text('jumlah_lk',null,['class'=>'form-control'])!!}
			</p>
		</div>
		<div class="col-md-6">
			<p>
				{!! Form::label('title','Perempuan')!!}
				{!! Form::text('jumlah_pr',null,['class'=>'form-control'])!!}
			</p>
		</div>
	</div>
	<hr>
	<h3>Jumlah Siswa Berdasarkan  Agama</h3>
	<div class="row">
		<div class="col-md-4">
			<p>
				{!! Form::label('title','Islam')!!}
				{!! Form::text('islam',null,['class'=>'form-control'])!!}
			</p>
		</div>
		<div class="col-md-4">
			<p>
				{!! Form::label('title','Kristen')!!}
				{!! Form::text('kristen',null,['class'=>'form-control'])!!}
			</p>
		</div>
		<div class="col-md-4">
			<p>
				{!! Form::label('title','Budha')!!}
				{!! Form::text('budha',null,['class'=>'form-control'])!!}
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<p>
				{!! Form::label('title','Katolik')!!}
				{!! Form::text('katolik',null,['class'=>'form-control'])!!}
			</p>
		</div>
		<div class="col-md-4">
			<p>
				{!! Form::label('title','Hindu')!!}
				{!! Form::text('hindu',null,['class'=>'form-control'])!!}
			</p>
		</div>
		<div class="col-md-4">
			<p>
				{!! Form::label('title','Konghucu')!!}
				{!! Form::text('konghucu',null,['class'=>'form-control'])!!}
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<p>
				{!! Form::label('title','Lainnya')!!}
				{!! Form::text('Lainnya',null,['class'=>'form-control'])!!}
			</p>
		</div>
		
	</div>
	<hr>
	<h3>Jumlah Siswa Berdasarkan Kebutuhan Khusus</h3>
	<div class="row">
		<div class="col-md-3">
			<p>
				{!! Form::label('title','Netra')!!}
				{!! Form::text('netra',null,['class'=>'form-control'])!!}
			</p>
		</div>
		<div class="col-md-3">
			<p>
				{!! Form::label('title','Runggu')!!}
				{!! Form::text('runggu',null,['class'=>'form-control'])!!}
			</p>
		</div>
		<div class="col-md-3">
			<p>
				{!! Form::label('title','Grahita Sedang')!!}
				{!! Form::text('grahita_sedang',null,['class'=>'form-control'])!!}
			</p>
		</div>
		<div class="col-md-3">
			<p>
				{!! Form::label('title','Grahita Ringan')!!}
				{!! Form::text('grahita_ringan',null,['class'=>'form-control'])!!}
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
			<p>
				{!! Form::label('title','Daksa Sedang')!!}
				{!! Form::text('daksa_sedang',null,['class'=>'form-control'])!!}
			</p>
		</div>
		<div class="col-md-3">
			<p>
				{!! Form::label('title','Daksa Ringan')!!}
				{!! Form::text('daksa_ringan',null,['class'=>'form-control'])!!}
			</p>
		</div>
		<div class="col-md-3">
			<p>
				{!! Form::label('title','Laras')!!}
				{!! Form::text('laras',null,['class'=>'form-control'])!!}
			</p>
		</div>
		<div class="col-md-3">
			<p>
				{!! Form::label('title','Wicara')!!}
				{!! Form::text('wicara',null,['class'=>'form-control'])!!}
			</p>
		</div>
	</div>




	<div class="row">
		<div class="col-md-3">
			<p>
				{!! Form::label('title','Hyperaktiv')!!}
				{!! Form::text('hyperaktiv',null,['class'=>'form-control'])!!}
			</p>
		</div>
		<div class="col-md-3">
			<p>
				{!! Form::label('title','Cerdas Instimewa')!!}
				{!! Form::text('cerdas_instimewa',null,['class'=>'form-control'])!!}
			</p>
		</div>
		<div class="col-md-3">
			<p>
				{!! Form::label('title','Bakat Istimewa')!!}
				{!! Form::text('bakat_istimewa',null,['class'=>'form-control'])!!}
			</p>
		</div>
		<div class="col-md-3">
			<p>
				{!! Form::label('title','Kesulitan Belajar')!!}
				{!! Form::text('kesulitan_belajar',null,['class'=>'form-control'])!!}
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
			<p>
				{!! Form::label('title','Narkoba')!!}
				{!! Form::text('narkoba',null,['class'=>'form-control'])!!}
			</p>
		</div>
		<div class="col-md-3">
			<p>
				{!! Form::label('title','Indigo')!!}
				{!! Form::text('indigo',null,['class'=>'form-control'])!!}
			</p>
		</div>
		<div class="col-md-3">
			<p>
				{!! Form::label('title','Down Syndrom')!!}
				{!! Form::text('down_syndrom',null,['class'=>'form-control'])!!}
			</p>
		</div>
		<div class="col-md-3">
			<p>
				{!! Form::label('title','Autis')!!}
				{!! Form::text('autis',null,['class'=>'form-control'])!!}
			</p>
		</div>
	</div>
</div>

