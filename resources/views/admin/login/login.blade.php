
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Login | Dinas Tenaga Kerja Solo</title>
    <link rel="apple-touch-icon" href="{{ asset('admin/images/favicon/apple-touch-icon-152x152.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/images/favicon/favicon-32x32.png') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/vendors.min.css') }}">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/themes/vertical-dark-menu-template/materialize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/themes/vertical-dark-menu-template/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/pages/login.css') }}">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/custom/custom.css') }}">
    <!-- END: Custom CSS-->
  </head>
  <!-- END: Head-->
  <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu 1-column login-bg  blank-page blank-page" data-open="click" data-menu="vertical-dark-menu" data-col="1-column">
    <div class="row">
      <div class="col s12">
        <div class="container">
        @if (Session('error'))
          <div class="flash-alert" data-flashalert="{{Session('error')}}"></div>
        @elseif (Session('success'))
          <div class="flash-data" data-flashdata="{{Session('success')}}"></div>
        @endif
<div id="login-page" class="row">
  <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
    <form class="login-form" method="post" action="/post-login">
      <div class="row">
        @csrf
        <div class="input-field col s12">
          <h5 class="center-align">Dinas Tenaga Kerja Solo</h5>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">person_outline</i>
          <input id="inpusername" type="text" name="inpusername" autocomplete="off">
          <label for="inpusername" class="center-align">Username</label>
          @error('inpusername')
            <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
          @enderror
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">lock_outline</i>
          <input id="inppassword" type="password" name="inppassword" autocomplete="off">
          <label for="inppassword">Password</label>
          @error('inppassword')
            <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
          @enderror
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">autorenew</i>
          <input id="inpconfirm" type="password" name="inpconfirm" autocomplete="off">
          <label for="inpconfirm">Confirm Password</label>
          @error('inpconfirm')
            <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
          @enderror
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <button type="submit" class="btn waves-effect waves-light border-round gradient-45deg-light-blue-cyan col s12">Login</button>
        </div>
      </div>
    </form>
  </div>
</div>
        </div>
      </div>
    </div>
    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('admin/js/vendors.min.js') }}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="{{ asset('admin/js/plugins.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/custom/custom-script.js') }}" type="text/javascript"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
    <script src="{{ asset('admin/js/scripts/ui-alerts.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/scripts/advance-ui-modals.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/scripts/sweetalert2/sweetalert2.all.min.js') }}"></script>
    
    <script type="text/javascript">
        const flash = $('.flash-data').data('flashdata');
            if (flash) {
              Swal.fire({
                title: 'Data',
                text: 'Berhasil ' + flash,
                type: 'success',
                showConfirmButton: false,
                timer: 1500
              });
            }
    </script>
    <!-- script sweetalert2 -->
    <script type="text/javascript">
        const alert = $('.flash-alert').data('flashalert');
            if (alert) {
              Swal.fire({
                title: 'Oops...',
                text: 'Gagal ' + alert,
                type: 'error',
                showConfirmButton: true,
                showCancelButton: false
              });
            }
    </script>
  </body>
</html>