@inject('kebutuhan','\App\Repositories\Eloquent\DataKebutuhanKhusus')


<div class="row">
	
	<div class="col-md-12">
		<p>
			{!! Form::label('title','Kebutuhan Khusus Yang Dilayani')!!}
			{!! Form::select('kebutuhan_id',$kebutuhan->lists('title','id'),null,['class'=>'form-control','id'=>'kebutuhan_id'])!!}
		</p>

	</div>
</div>
<hr>
<h3>SK Program Inkuisi</h2>
	<div class="row">
		<div class="col-md-6">
			<p>
				{!! Form::label('title','No')!!}
				{!! Form::text('nomor',null,['class'=>'form-control','id'=>'nomor'])!!}
			</p>
		</div>
		<div class="col-md-6">
			<p>
				
				{!! Form::label('title','TMT')!!}
				{!! Form::text('tmt',null,['class'=>'form-control','id'=>'tmt'])!!}
				
			</p>
		</div>
	</div>


	<div class="row">
		<div class="col-md-6">
			<p>
				{!! Form::label('title','TST')!!}
				{!! Form::text('tst',null,['class'=>'form-control','id'=>'tst'])!!}
			</p>
		</div>
		<div class="col-md-6">
			<p>
				{!! Form::label('title','File')!!}
				{!! Form::file('file',null,['class'=>'form-control','id'=>'file'])!!}	
			</p>
		</div>
	</div>




