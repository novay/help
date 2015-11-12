<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $page_title or "AdminLTE Dashboard" }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="{{ asset("css/app.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("css/all.css") }}" rel="stylesheet" type="text/css" />
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="{{ url('') }}">
        <img src="{{ asset('img/logo2.png') }}" alt="Logo" class="img-responsive">
      </a>
    </div>
    <div class="login-box-body">
      <h3 class="text-center full-divided"> Masuk Sistem</h3>
      @yield('form')
    </div>
  </div>
<!-- REQUIRED JS SCRIPTS -->
<script src="{{ asset ("js/all.js") }}"></script>
@yield('javascript')
<script>
    function getMessage () {
        $('#message').children().each(function  (index,e) {
                toastr.options = {
                          "closeButton": false,
                          "debug": false,
                          "newestOnTop": true,
                          "progressBar": true,
                          "positionClass": "toast-bottom-left",
                          "preventDuplicates": false,
                          "onclick": null,
                          "showDuration": "300",
                          "hideDuration": "1000",
                          "timeOut": "5000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "swing",
                          "showMethod": "slideDown",
                          "hideMethod": "slideUp"
                        };
                if($(e).attr('class') == "error")
                {
                    message = function  (message) 
                    {
                        toastr.error(message, '');
                    }
                }
                else if($(e).attr('class')== "warning")
                {
                    message = function  (message) 
                    {
                        toastr.warning(message, '');
                    }
                }
                else if($(e).attr('class')== "success")
                {
                    message = function  (message) 
                    {
                        toastr.success(message, '');
                    }
                }
                else
                {
                    message = function  (message) 
                    {
                        toastr.info(message, '');
                    }
                };
            $(e).children().each(function  (index,el) {
                setTimeout(function  () {
                    message($(el).text());
                },index*500);
            })
        })
    }
</script>
</body>
</html>