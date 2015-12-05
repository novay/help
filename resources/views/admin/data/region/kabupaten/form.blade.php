
<div class="row">
	<div class="col-xs-12 form-group">
		{!! Form::label('provinsi_id','Nama Provinsi') !!}
		{!! Form::select('provinsi_id',$ModelProvinsi->lists('title','id'),null,['class'=>'form-control','id'=>'provinsi_id']) !!}
	</div>
	<div class="col-md-6 form-group">
		{!! Form::label('id','ID Kabupaten') !!}
		{!! Form::text('id',null,['class'=>'form-control','id'=>'id']) !!}
	</div>
	<div class="col-md-6 form-group">
		{!! Form::label('title','Nama Kabupaten') !!}
		{!! Form::text('title',null,['class'=>'form-control','id'=>'title']) !!}
	</div>
</div>
@if (Request::ajax())
	<script id="appendScript">
		(function () {
			var readOnlyLength;
				$(document).on('change', '#provinsi_id', function(e) {
					var val = $(e.target).val();
					if(val != "--Pilih salah satu--") $('#id').val(val);
					readOnlyLength = $('#id').val().length;
				});
				$(document).on('keypress, keydown','#id', function(event) {
					var $field = $(this);
					$('#output').text(event.which + '-' + this.selectionStart);
					if ((event.which != 37 && (event.which != 39))
						&& ((this.selectionStart < readOnlyLength)
							|| ((this.selectionStart == readOnlyLength) && (event.which == 8)))) {
						return false;
				}
			});
		})(jQuery); 
	</script>
@endif
@section('javascript')
	<script id="appendScript">
		(function () {
			var readOnlyLength;
				$(document).on('change', '#provinsi_id', function(e) {
					var val = $(e.target).val();
					if(val != "--Pilih salah satu--") $('#id').val(val);
					readOnlyLength = $('#id').val().length;
				});
				$(document).on('keypress, keydown','#id', function(event) {
					var $field = $(this);
					$('#output').text(event.which + '-' + this.selectionStart);
					if ((event.which != 37 && (event.which != 39))
						&& ((this.selectionStart < readOnlyLength)
							|| ((this.selectionStart == readOnlyLength) && (event.which == 8)))) {
						return false;
				}
			});
		})(jQuery); 
	</script>
@stop