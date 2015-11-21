@inject('sekolah','\App\Repositories\Eloquent\Sekolah')
@inject('nilai','\App\Repositories\Eloquent\Nilai')
@inject('lembaga','\App\Repositories\Eloquent\Lembaga')

<div class="row">
	<div class="col-md-12">
		<div class="col-md-6">
			<p>

				{!! Form::label('title','Sekolah')!!}
				{!! Form::select('sekolah_id',$sekolah->lists('npsn','id'),null,['class'=>'form-control'])!!}
			</p>
			<p>

				{!! Form::label('title','Lembaga')!!}
				{!! Form::select('lembaga_id',$lembaga->lists('title','id'),null,['class'=>'form-control'])!!}
			</p>
			
			<p>

				{!! Form::label('title','Nilai')!!}
				{!! Form::select('nilai_id',$nilai->lists('title','id'),null,['class'=>'form-control'])!!}
			</p>
			<p>

				{!! Form::label('title','TMT')!!}
				{!! Form::text('tmt',null,['class'=>'form-control'])!!}
			</p>

		</div>
		<div class="col-md-6">
			<p>

				{!! Form::label('title','Tanggal')!!}
				{!! Form::text('tanggal',null,['class'=>'form-control','id_no_sk'])!!}
			</p>
			
			<p>

				{!! Form::label('title','Nomor SK')!!}
				{!! Form::text('no_sk',null,['class'=>'form-control','id_no_sk'])!!}
			</p>
			<p>
				{!! Form::label('title','File')!!}
				{!! Form::file('file',null,['class'=>'form-control'])!!}
			</p>
		</div>
	</div>
	
</div>

