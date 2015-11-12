var elixir = require('laravel-elixir');

/*
|--------------------------------------------------------------------------
| Elixir Asset Management
|--------------------------------------------------------------------------
|
| Elixir provides a clean, fluent API for defining some basic Gulp tasks
| for your Laravel application. By default, we are compiling the Less
| file for our application, as well as publishing vendor resources.
|
*/

elixir(function(mix) {
    mix.less(['main.less']);
    mix.styles([
    	'../component/AdminLTE/plugins/datatables/jquery.dataTables.min.css',
    	'../component/AdminLTE/plugins/iCheck/all.css',
        '../component/AdminLTE/plugins/morris/morris.css',
    	'../component/bootstrap/dist/css/bootstrap.css',
    	// '../component/AdminLTE/plugins/select2/select2.min.css',
    	'../component/AdminLTE/plugins/timepicker/bootstrap-timepicker.min.css',
    	]);
    mix.scripts([
        '../component/jquery/dist/jquery.min.js',
        '../component/AdminLTE/dist/js/app.min.js',
        '../component/AdminLTE/bootstrap/js/bootstrap.min.js',
        '../component/toastr/toastr.min.js',
        '../component/AdminLTE/plugins/datepicker/bootstrap-datepicker.js',
        '../component/AdminLTE/plugins/datatables/jquery.dataTables.min.js',
        '../component/AdminLTE/plugins/input-mask/jquery.inputmask.js',
        '../component/AdminLTE/plugins/iCheck/icheck.min.js',
        '../component/AdminLTE/plugins/morris/morris.min.js',
        '../component/AdminLTE/plugins/select2/select2.full.min.js',
        '../component/AdminLTE/plugins/fastclick/fastclick.min.js',
        '../component/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js',
        '../component/AdminLTE/plugins/timepicker/bootstrap-timepicker.min.js',
        ]);
    mix.copy('resources/assets/component/Ionicons/fonts','public/component/Ionicons/fonts');
    mix.copy('resources/assets/component/font-awesome/fonts','public/component/font-awesome/fonts');
});
