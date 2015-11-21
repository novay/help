@inject('sekolah','\App\Repositories\Eloquent\Sekolah')

<div class="col-md-12">
	<h2>SK Pendirian Sekolah</h2>
	<div class="row">

		<div class="col-md-12">
			<p>

				{!! Form::label('title','Sekolah')!!}
				{!! Form::select('sekolah_id',$sekolah->lists('npsn','id'),null,['class'=>'form-control'])!!}
			</p>
			<p>

				{!! Form::label('title','Nomor SK')!!}
				{!! Form::text('no_sk',null,['class'=>'form-control','id_no_sk'])!!}
			</p>
			
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-6">
			
			<p>

				{!! Form::label('title','Tanggal SK')!!}
				{!! Form::text('tgl_sk',null,['class'=>'form-control','id'=>'tgl_sk'])!!}
			</p>

		</div>
		<div class="col-md-6">
			{!! Form::label('title','File SK')!!}
			{!! Form::file('file_sk',null,['class'=>'form-control','id'=>'file_sk'])!!}
		</div>
	</div>


	<hr>

	<h2>SK Izin Operasional</h2>
	<div class="row">
		<div class="col-md-12">
			<p>

				{!! Form::label('title','Nomor SK Operasional')!!}
				{!! Form::text('no_sk_oprasional',null,['class'=>'form-control','id_no_sk_oprasional'])!!}
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<p>

				{!! Form::label('title','Tanggal SK Operasional')!!}
				{!! Form::text('tgl_sk_oprasional',null,['class'=>'form-control','tgl_sk_oprasional'])!!}
			</p>

		</div>
		<div class="col-md-6">
			{!! Form::label('title','File SK Operasional')!!}
			{!! Form::file('file_sk_oprasional',null,['class'=>'form-control','id'=>'file_sk_oprasional'])!!}
		</div>

		
	</div>
<hr>
	<div class="row">

		<div class="col-md-12">
		<h2>Berlaku Sampai</h2>
			{!! Form::label('title','Tanggal')!!}
			{!! Form::text('tgl_berlaku',null,['class'=>'form-control','tgl_berlaku'])!!}
		</div>
	</div>
	
</div>
