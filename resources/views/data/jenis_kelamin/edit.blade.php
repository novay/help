@extends('admin_template')
@section('content')
	  {!! Form::model($data,['route'=>[$update,$data->id], 'method'=>'PATCH','class'=>'form']) !!}
		<div class="box box-primary">
			<div class="box-header with-border">
				<div class="box-title">{!! $pageTitle !!}</div>
				<div class="box-tools pull-right">
					<div class="btn-group">
						<button type="button" id="close-window" class="btn btn-box-tool" title="tutup window"><i class="fa fa-remove"></i></button>
					</div>
				</div>
			</div>
			<div class="box-body">
				  	@include($form)
			</div>
			<div class="box-footer">
				<div class="pull-right">
					{!! Form::button('Submit',['class'=>'btn btn btn-primary ink-reaction','type'=>'submit']) !!}
					{!! Form::button('Reset',['class'=>'btn btn btn-danger ink-reaction','type'=>'reset']) !!}
				</div>
			</div>
		</div>
	  {!! Form::close() !!}
@stop