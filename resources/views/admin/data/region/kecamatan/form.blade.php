<div class="row">
	<div class="col-md-6 form-group">
		{!! Form::label('provinsi_id','Nama Provinsi') !!}
		{!! Form::select('provinsi_id',$ModelProvinsi->lists('title','id'),null,['class'=>'form-control chain','data-next-chain'=>'kabupaten_id','id'=>'provinsi_id']) !!}
	</div>
	<div class="col-md-6 form-group">
		{!! Form::label('kabupaten_id','Nama Kabupaten') !!}
		{!! Form::select('kabupaten_id',[],null,['class'=>'form-control','disabled','id'=>'kabupaten_id']) !!}
	</div>
	<div class="col-md-6 form-group">
		{!! Form::label('id','ID Kecamatan') !!}
		{!! Form::text('id',null,['class'=>'form-control','id'=>'id']) !!}
	</div>
	<div class="col-md-6 form-group">
		{!! Form::label('title','Nama Kecamatan') !!}
		{!! Form::text('title',null,['class'=>'form-control','id'=>'title']) !!}
	</div>
</div>
@if (Request::ajax())
<script id="appendScript">
	(function () {
		var readOnlyLength;
		$(document).on('change', '#kabupaten_id', function(e) {
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
		$(document).on('change','select.chain',function (e) {
			var _this = $(e.target),
			target = $('select[name="'+_this.data('next-chain')+'"]'),
			name = _this.attr('name').replace('_id',''),
			url = '/admin/api/'+name+'/'+_this.val();
			$.ajax({
				url: url,
				type: 'GET',
				dataType: 'json',
				beforeSend:function(){
					target.html('');
					target.attr('disabled','disabled');
				},
				success:function (data) {
					if(!$.isEmptyObject(data)){
						target.removeAttr('disabled');
						$.each(data, function(index, val) {
							var option = $('<option>');
							option.text(val).val(index);
							target.append(option);
						});
					}
				}
			})			
		}) 
	})(jQuery); 
</script>
@endif
@section('javascript')
<script id="appendScript">
	(function () {
		var readOnlyLength;
		$(document).on('change', '#kabupaten_id', function(e) {
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
		$(document).on('change','select.chain',function (e) {
			var _this = $(e.target),
			target = $('select[name="'+_this.data('next-chain')+'"]'),
			name = _this.attr('name').replace('_id',''),
			url = '/admin/api/'+name+'/'+_this.val();
			$.ajax({
				url: url,
				type: 'GET',
				dataType: 'json',
				beforeSend:function(){
					target.html('');
					target.attr('disabled','disabled');
				},
				success:function (data) {
					if(!$.isEmptyObject(data)){
						target.removeAttr('disabled');
						$.each(data, function(index, val) {
							var option = $('<option>');
							option.text(val).val(index);
							target.append(option);
						});
					}
				}
			})			
		}) 
	})(jQuery); 
</script>
@stop