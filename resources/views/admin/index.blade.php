<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="2019 - Dinas Tenaga Kerja Kota Solo">
  <meta name="keywords" content="">
  <meta name="author" content="Guramin, Yanuardelta, Re">
  <title>Dinas Tenaga Kerja - {{ $title }}</title>
  <link rel="apple-touch-icon" href="{{ asset('admin/images/favicon/apple-touch-icon-152x152.png') }}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/images/favicon/favicon-32x32.png') }}">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- BEGIN: VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/vendors.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/flag-icon/css/flag-icon.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/data-tables/css/jquery.dataTables.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/data-tables/css/select.dataTables.min.css') }}">
  <!-- END: VENDOR CSS-->
  <!-- BEGIN: Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/themes/vertical-dark-menu-template/materialize.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/themes/vertical-dark-menu-template/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/pages/data-tables.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/hover-effects/media-hover-effects.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/pages/page-search.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/magnific-popup/magnific-popup.css') }}">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

  <!-- END: Page Level CSS-->
  <!-- BEGIN: Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/custom/custom.css') }}">
  <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu 2-columns  " data-open="click" data-menu="vertical-dark-menu" data-col="2-columns">

  <!-- BEGIN: Header-->
  <header class="page-topbar" id="header">
    <div class="navbar navbar-fixed">
      <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-light">
        <div class="nav-wrapper">
          <ul class="navbar-list right">
            <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="{{ asset('admin/images/avatar/avatar-7.png') }}" alt="avatar"><i></i></span></a></li>
          </ul>
          <!-- profile-dropdown-->
          <ul class="dropdown-content" id="profile-dropdown">
            <li><a class="grey-text text-darken-1" href="/logout"><i class="material-icons">keyboard_tab</i> Logout</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <!-- END: Header-->

  <!-- BEGIN: SideNav-->
  <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-dark sidenav-active-rounded">
    <div class="brand-sidebar">
      <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="#"><span class="logo-text hide-on-med-and-down">Disnaker Solo</span></a></h1>
    </div>
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="accordion">
      @if (Session::get('login-pr') == false)
      <li class="bold"><a class="waves-effect waves-cyan " href="/admin/halaman-dashboard-admin"><i class="material-icons">laptop_windows</i><span class="menu-title" data-i18n="">Dashboard</span></a>
      </li>
      <li class="navigation-header"><a class="navigation-header-text">main menu</a><i class="navigation-header-icon material-icons">more_horiz</i>
      </li>
      @if (Session::get('roleuser') == 'Super Admin')
      <li class="bold"><a class="waves-effect waves-cyan " href="/admin/halaman-manajemen-user"><i class="material-icons">account_circle</i><span class="menu-title" data-i18n="">Pengguna</span></a>
      </li>
      <li class="bold"><a class="waves-effect waves-cyan " href="/admin/halaman-manajemen-role"><i class="material-icons">vpn_key</i><span class="menu-title" data-i18n="">Role</span></a>
      </li>
      @endif

      <li class="bold"><a class="waves-effect waves-cyan " href="/admin/halaman-manajemen-perusahaan"><i class="material-icons">domain</i><span class="menu-title" data-i18n="">Perusahaan</span></a>
      </li>
      <li class="bold"><a class="waves-effect waves-cyan " href="/admin/halaman-manajemen-pelamar"><i class="material-icons">directions_walk</i><span class="menu-title" data-i18n="">Pelamar</span></a>
      </li>
      <li class="navigation-header"><a class="navigation-header-text">pendaftaran</a><i class="navigation-header-icon material-icons">more_horiz</i>
      </li>
      <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">exit_to_app</i><span class="menu-title" data-i18n="">Lowongan</span></a>
        <div class="collapsible-body">
          <ul class="collapsible collapsible-sub" data-collapsible="accordion">
            <li><a class="collapsible-body" href="/admin/halaman-manajemen-lowongan" data-i18n=""><i class="material-icons" style="color: red">brightness_1</i><span>Semua Lowongan</span></a></li>
            <li><a class="collapsible-body collapsible-header waves-effect waves-cyan" href="#" data-i18n=""><i class="material-icons" style="color: yellow">brightness_1</i><span>Dalam Negeri</span></a>
              <div class="collapsible-body">
                <ul class="collapsible" data-collapsible="accordion">
                  <li><a class="collapsible-body" href="/admin/lowongan-dalam-negeri/disabilitas" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>DN - Disabilitas</span></a></li>
                  <li><a class="collapsible-body" href="/admin/lowongan-dalam-negeri/non-disabilitas" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>DN - Non Disabilitas</span></a></li>
                </ul>
              </div>
            </li>
            <li><a class="collapsible-body collapsible-header waves-effect waves-cyan" href="#" data-i18n=""><i class="material-icons" style="color: green">brightness_1</i><span>Luar Negeri</span></a>
              <div class="collapsible-body">
                <ul class="collapsible" data-collapsible="accordion">
                  <li><a class="collapsible-body" href="/admin/lowongan-luar-negeri/disabilitas" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>LN - Disabilitas</span></a></li>
                  <li><a class="collapsible-body" href="/admin/lowongan-luar-negeri/non-disabilitas" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>LN - Non Disabilitas</span></a></li>
                </ul>
              </div>
            </li>
            <li><a class="collapsible-body" href="/admin/lowongan-non-aktif" data-i18n=""><i class="material-icons" style="color: blue">brightness_1</i><span>Lowongan Non-Aktif</span></a></li>
          </ul>
        </div>
      </li>
      <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">extension</i><span class="menu-title" data-i18n="">Pelatihan</span></a>
        <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="collapsible-body" href="/admin/halaman-manajemen-workshop" data-i18n=""><i class="material-icons" style="color: red">brightness_1</i><span>Daftar Pelatihan</span></a></li>
              <li><a class="collapsible-body" href="/admin/halaman-kompetensi-workshop" data-i18n=""><i class="material-icons" style="color: orange">brightness_1</i><span>Kompetensi Pelatihan</span></a></li>
            </ul>
          </div>
      </li>
      @elseif (Session::get('login-pr') == true)
      <li class="navigation-header"><a class="navigation-header-text">main menu</a><i class="navigation-header-icon material-icons">more_horiz</i>
      <li class="bold"><a class="waves-effect waves-cyan " href="/perusahaan/halaman-profile-perusahaan"><i class="material-icons">domain</i><span class="menu-title" data-i18n="">Profile Perusahaan</span></a>
      </li>
      <li class="bold"><a class="waves-effect waves-cyan " href="/perusahaan/halaman-manajemen-lowongan"><i class="material-icons">exit_to_app</i><span class="menu-title" data-i18n="">Lowongan</span></a>
      </li>
      @endif
    </ul>
    <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
  </aside>
  <!-- END: SideNav-->

  <!-- BEGIN: Page Main-->
  <div id="main">
    <div class="row">
      <div id="breadcrumbs-wrapper" data-image="{{ asset('admin/images/gallery/breadcrumb-bg.jpg') }}">
        <!-- Search for small screen-->
        <div class="container">
          <div class="row">
            <div class="col s12 m6 l6">
              <h5 class="breadcrumbs-title mt-0 mb-0">{{ $breadcrumb }}</h5>
            </div>
            <div class="col s12 m6 l6 right-align-md">
              <ol class="breadcrumbs mb-0">
                <li class="breadcrumb-item active"><a href="#"></a></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="col s12">
        <div class="container">
          <div class="section section-data-tables">
            @if (Session('error-alert'))
            <div class="flash-alert" data-flashalert="{{ Session('error-alert') }}"></div>
            @elseif (Session('success-alert'))
            <div class="flash-data" data-flashdata="{{Session('success-alert')}}"></div>
            @endif
            @yield('content')
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END: Page Main-->

  <!-- BEGIN: Footer-->
  <footer class="page-footer footer footer-static footer-light navbar-border navbar-shadow">
    <div class="footer-copyright">
      <div class="container"><span>&copy; 2019 <a href="#">Dinas Tenaga Kerja Kota Solo</a></span></div>
    </div>
  </footer>
  <!-- END: Footer-->
  <!-- BEGIN VENDOR JS-->
  @yield('customjs')

  <script src="{{ asset('admin/js/vendors.min.js') }}" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="{{ asset('admin/vendors/data-tables/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('admin/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('admin/vendors/data-tables/js/dataTables.select.min.js') }}" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <script src="{{ asset('admin/js/scripts/advance-ui-modals.js') }}" type="text/javascript"></script>
  <!-- BEGIN THEME  JS-->
  <script src="{{ asset('admin/js/plugins.js') }}" type="text/javascript"></script>
  <script src="{{ asset('admin/js/custom/custom-script.js') }}" type="text/javascript"></script>
  <!-- END THEME  JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="{{ asset('admin/js/scripts/data-tables.js') }}" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
  <script src="{{ asset('admin/js/scripts/ui-alerts.js') }}" type="text/javascript"></script>
  <script src="{{ asset('admin/js/scripts/advance-ui-modals.js') }}" type="text/javascript"></script>
  <script src="{{ asset('admin/js/scripts/sweetalert2/sweetalert2.all.min.js') }}"></script>

  <!--  Gallery  -->
  <script src="{{ asset('admin/vendors/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('admin/vendors/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('admin/js/scripts/media-gallery-page.js') }}"></script>

  <script type="text/javascript">
    const flash = $('.flash-data').data('flashdata');
    if (flash) {
      Swal.fire({
        title: 'Data',
        text: 'Berhasil ' + flash,
        type: 'success',
        showConfirmButton: false,
        timer: 1800
      });
    }
  </script>
  <!-- script sweetalert2 -->
  <script type="text/javascript">
    const alert = $('.flash-alert').data('flashalert');
    if (alert) {
      Swal.fire({
        type: 'Error',
        title: 'Oops...',
        text: 'Gagal ' + alert,
        showConfirmButton: true
      });
    }
  </script>



</body>

</html>
