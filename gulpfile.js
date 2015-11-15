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
    mix.less([
        '../component/bootstrap/less/bootstrap.less',
        'main.less',
        ]);
    mix.styles([
        '../component/AdminLTE/plugins/iCheck/all.css',
        '../component/AdminLTE/plugins/morris/morris.css',
    	'../component/AdminLTE/plugins/datatables/dataTables.bootstrap.css',
    	'../component/AdminLTE/plugins/select2/select2.min.css',
    	'../component/AdminLTE/plugins/timepicker/bootstrap-timepicker.min.css',
    	]);
    mix.scripts([
        '../component/jquery/dist/jquery.min.js',
        '../component/AdminLTE/bootstrap/js/bootstrap.min.js',
        '../component/toastr/toastr.min.js',
        '../component/AdminLTE/plugins/datepicker/bootstrap-datepicker.js',
        '../component/datatables/media/js/jquery.dataTables.js',
        '../component/datatables/media/js/dataTables.bootstrap.js',
        '../component/AdminLTE/plugins/input-mask/jquery.inputmask.js',
        '../component/AdminLTE/plugins/select2/select2.full.min.js',
        '../component/AdminLTE/plugins/timepicker/bootstrap-timepicker.min.js',
        '../component/fastclick/lib/fastclick.js',
        '../component/iCheck/icheck.min.js',
        '../component/mocha/mocha.js',
        '../component/raphael/raphael-min.js',
        '../component/morris.js/morris.min.js',
        '../component/slimScroll/jquery.slimscroll.min.js',
        '../component/AdminLTE/dist/js/app.js',
        'app.js',
        ]);
    mix.copy('resources/assets/component/Ionicons/fonts','public/component/Ionicons/fonts');
    mix.copy('resources/assets/component/font-awesome/fonts','public/component/font-awesome/fonts');
    mix.copy('resources/assets/component/bootstrap/fonts','public/component/bootstrap/fonts');
});
