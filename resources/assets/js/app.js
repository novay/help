(function () {
		$(document).on('click','a.ajax-link',function  (e) {
	        var _this = $(this);
	        e.preventDefault();			
	        $.ajax({
	          url: _this.attr('href'),
	          type: 'GET',
	          dataType: 'json',
	          beforeSend:function  () {
	            $('#progress-download').fadeIn();
	          },
	          progress:function (e) {
	            var pct = (e.loaded / e.total) * 100;
	            $('#progress-bar-download').width(pct+"%");
	          },
	          success:function  (data) {
	            $("#progress-download").fadeOut(800, function() {
	            	if($('#box-ajax').length > 0){
		        			$('#box-ajax').slideUp(600,function  (e) {
		        				console.log($(e));
		        				$(e).remove();
		        				$('#ajaxField').prepend($(data.content).css('display', 'none'));
		        				$('#box-ajax').slideDown(600);
								__bootsrapingAllFunction();
		        			})
		        	}else{
        				$('#ajaxField').prepend(data.content).css('display', 'none').slideDown(400);
        				__bootsrapingAllFunction();
		        	}
	            });
	          },
	          error:function  (e) {
	            $("#progress-download").fadeOut(800, function() {
				  toastr.options = window.toastr.options;
	              toastr.error("Data tidak bisa ditemukan!", '');
	            });
	             
	          }
	        });

	      });
	      $(document).on('submit','form.form-ajax',function  (e) {
	      	var _this = $(this);
	        e.preventDefault();
	        e.stopPropagation();
			toastr.options = window.toastr.options;
				$.ajax({
					url: _this.attr('action'),
					type: _this.attr('method'),
					dataType: 'json',
					data: new FormData(e.target),
					processData:false,
					contentType:false,
					beforeSend:function(){
						$('#box-ajax').slideUp(400,function(){
							$('#progress-download').fadeIn();
						})
					},
					progress:function(){
						var pct = (e.loaded / e.total) * 100;
						$('#progress-bar-download').width(pct+"%");
					},
					success:function (msg) {
						$('#progress-download').fadeOut(400, function() {
							toastr.success(msg.message,'');
							$('#ajaxField').html(msg.content);
							__bootsrapingAllFunction();
						});
					},
					error:function (e) {
						var x =1;
						$('#progress-download').slideUp(400, function() {
							$('#box-ajax').slideDown(400, function() {
								if(e.responseJSON !== undefined){
									if(e.responseJSON.message !== undefined){
										toastr.error(e.responseJSON.message,'');
									}
									if( ! $.isEmptyObject(e.responseJSON.errors)){
										$.each(e.responseJSON.errors, function(index, val) {
											setTimeout(function  () {
											 toastr.error(val,'');
											},x*500);
											x++;
										});
									}
								}else{
									$.each(e.responseJSON, function(index, val) {
										setTimeout(function  () {
										 toastr.error(val,'');
										},x*500);
										x++;
									});
								}
							});
						});
					}
				});			
	      });
	__bootsrapingAllFunction();
})(jQuery);
function __bootsrapingAllFunction() {
	if ( ! $.fn.DataTable.isDataTable( '.datatable' ) ) {
	  $('.datatable').DataTable({
		"paging": true,
		"lengthChange": false,
		"searching": true,
		"ordering": true,
		"info": true,
		"autoWidth": false
	});
	}
	$('select').select2({
		placeholder:"--Pilih salah satu--"
	});
	$('.datechooser').datetimepicker({
		format: "YYYY-MM-DD"
	});
 }