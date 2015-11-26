  <!DOCTYPE html>
  <!--
  This is a starter template page. Use this page to start your new project from
  scratch. This page gets rid of all links and provides the needed markup only.
  -->
  <html>
  <head>
      <meta charset="UTF-8">
      <title>{{ $documentTitle or "AdminLTE Dashboard" }}</title>
      <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
      <link href="{{ asset("css/all.css") }}" rel="stylesheet" type="text/css" />
      <link href="{{ asset("css/addons.css") }}" rel="stylesheet" type="text/css" />
      <link href="{{ asset("css/app.css") }}" rel="stylesheet" type="text/css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
  </head>
  <body class="skin-blue">
  <div class="wrapper">
   
      <!-- Header -->
      @include('incl.header')

      <!-- Sidebar -->
      @include('incl.menu')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
       <div id="progress-download" class="progress" style="height:5px; display:none">
          <div id="progress-bar-download" class="progress-bar progress-bar-striped active"style="width: 0%">
          </div>
        </div>
          <!-- Content Header (Page header) -->
          <section class="content-header">
              <h1>
                  {!! $pageTitle or "Page Title" !!}
                  <small>{{ $pageDescription or null }}</small>
              </h1>
          </section>

          <!-- Main content -->
          <section class="content">
              @include('incl.message')
              <!-- Your Page Content Here -->
              <div id="ajaxField">
                @yield('content')
              </div>
          </section><!-- /.content -->

      </div><!-- /.content-wrapper -->

      <!-- Footer -->
      @include('incl.umum.footer')

  </div><!-- ./wrapper -->

  <!-- REQUIRED JS SCRIPTS -->

  <!-- jQuery 2.1.3 -->
  <script src="{{ asset ("js/all.js") }}"></script>
  @yield('javascript')
  <script>
      (function($, window, undefined) {
          //is onprogress supported by browser?
          var hasOnProgress = ("onprogress" in $.ajaxSettings.xhr());

          //If not supported, do nothing
          if (!hasOnProgress) {
              return;
          }
          
          //patch ajax settings to call a progress callback
          var oldXHR = $.ajaxSettings.xhr;
          $.ajaxSettings.xhr = function() {
              var xhr = oldXHR();
              if(xhr instanceof window.XMLHttpRequest) {
                  xhr.addEventListener('progress', this.progress, false);
              }
              
              if(xhr.upload) {
                  xhr.upload.addEventListener('progress', this.progress, false);
              }
              
              return xhr;
          };
      })(jQuery, window);
      window.toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": true,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": true,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            // "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "swing",
                            "showMethod": "slideDown",
                            "hideMethod": "slideUp"
                          };
      function getMessage () {
          $('#message').children().each(function  (index,e) {
                  toastr.options = window.toastr.options;
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
    $(function () {
      
      getMessage();
      $('select.form-control').select2();
      $('.datetime-picker').datepicker({
        format:'yyyy-mm-dd'
      });
    });
  </script>
  </body>
  </html>