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
  <title>Login Perusahaan | Dinas Tenaga Kerja Solo</title>
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
          <div class="col s12 m6 l6 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
            <form class="login-form" method="post" action="/post-perusahaan" name="login_form" id="login_form">
              <div class="row">
                @csrf
                <div class="input-field col s12">
                  <h5 class="center-align">Login Perusahaan - Dinas Tenaga Kerja Solo</h5>
                </div>
              </div>
              <div class="row margin">
                <div class="input-field col s12">
                  <i class="material-icons prefix pt-2">person_outline</i>
                  <input id="iinpusername" type="text" name="iinpusername" autocomplete="off">
                  <label for="iinpusername" class="center-align">Username</label>
                  @error('iinpusername')
                  <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <div class="row margin">
                <div class="input-field col s12">
                  <i class="material-icons prefix pt-2">lock_outline</i>
                  <input id="iinppassword" type="password" name="iinppassword" autocomplete="off">
                  <label for="iinppassword">Password</label>
                  @error('iinppassword')
                  <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <div class="row margin">
                <div class="input-field col s12">
                  <i class="material-icons prefix pt-2">autorenew</i>
                  <input id="iinpconfirm" type="password" name="iinpconfirm" autocomplete="off">
                  <label for="iinpconfirm">Confirm Password</label>
                  @error('iinpconfirm')
                  <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <button type="submit" class="btn waves-effect waves-light border-round gradient-45deg-light-blue-cyan col s12" form="login_form_button" id="login_form_button">Login</button>
                </div>
              </div>
            </form>
            <br class="mb-2">
            <div class="row">
              <div class="input-field col s12" style="margin: 0px">
                <h5 class="center-align" style="font-size: 15px; margin: 0px">Belum Punya Akun?</h5>
              </div>
              <div class="input-field col s12">
                <a href="#modal-daftar" type="button" class="btn waves-effect waves-light border-round gradient-45deg-light-blue-cyan col s12 modal-trigger">Daftar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="modal-daftar" class="modal">
    <div class="modal-content">
      <h5>Data Perusahaan</h5>
      <form class="col s12" method="post" action="/save-perusahaan" name="save_form" id="save_form" enctype="multipart/form-data">
        @csrf
        @csrf
        <div class="row">
          <div class="input-field col s12 m6 l6">
            <i class="material-icons prefix">art_track</i>
            <input name="inpnama" id="inpnama" type="text" class="validate" required>
            <label for="inpnama">User ID</label>
            @error('a')
            <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m6 l6">
            <i class="material-icons prefix">vpn_key</i>
            <input name="inppassword" id="inppassword" type="password" class="validate" required>
            <label for="inppassword">Password</label>
            @error('g')
            <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
            @enderror
          </div>
          <div class="input-field col s12 m6 l6">
            <i class="material-icons prefix">vpn_key</i>
            <input name="inpconfirm" id="inpconfirm" type="password" class="validate" required>
            <label for="inpconfirm">Ulangi Password</label>
            @error('h')
            <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="file-field input-field col s12">
            <div class="btn">
              <span>Gambar</span>
              <input type="file" name="inppict">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">domain</i>
            <input name="inplengkap" id="inplengkap" type="text" class="validate" required>
            <label for="inplengkap">Nama Perusahaan</label>
            @error('b')
            <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m6 l6">
            <i class="material-icons prefix">account_balance</i>
            <input name="inpnpwp" id="inpnpwp" type="text" class="validate">
            <label for="inpnpwp">NPWP</label>
            @error('c')
            <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m6 l6">
            <i class="material-icons prefix">business_center</i>
            <select name="inpjenis" id="inpjenis">
              <option value="">- Pilih Jenis Perusahaan -</option>
              @foreach($jenis as $jn)
              <option value="{{ $jn->id_jenis }}">{{ $jn->nama_jenis }}</option>
              @endforeach
            </select>
            <label>Jenis Perusahaan</label>
            @error('c1')
            <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
            @enderror
          </div>
          <div class="input-field col s12 m6 l6">
            <i class="material-icons prefix">class</i>
            <select name="inpkelas" id="inpkelas">
              <option value="">- Pilih kelas Perusahaan -</option>
              <option value="Kecil">Kecil ( &lt; 20 orang )</option>
              <option value="Menengah">Menengah ( &lt; 100 orang )</option>
              <option value="Besar">Besar ( &gt; 100 orang )</option>
            </select>
            <label>Kelas Perusahaan</label>
            @error('c1')
            <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 l12 ml">
            <div class="row ml-3">
              <label style="font-size: 18px">Lokasi Perusahaan &ensp; - &ensp;</label>
              <label>
                <input name="inppos" type="radio" value="1" id="dalam" onchange="dlm_negeri()" />
                <span>Dalam Solo</span>
              </label> &emsp;
              <label>
                <input name="inppos" type="radio" value="2" id="luar" />
                <span>Luar Solo</span>
              </label>
            </div>
            @error('c2')
            <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">location_on</i>
            <textarea name="inpalamat" id="inpalamat" type="text" class="validate materialize-textarea" required></textarea>
            <label for="inpalamat">Alamat</label>
            @error('d')
            <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="input-field col l4">
            <select class="browser-default" name="inpprov" id="prov" required>
              <option value="">- Pilih Provinsi -</option>
              @foreach($provinsi as $prov)
              <option value="{{ $prov->id }}">{{ $prov->name }}</option>
              @endforeach
            </select>
            @error('d')
            <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
            @enderror
          </div>
          <div class="input-field col l4">
            <select class="browser-default" name="inpkota" id="inpkota" required>
              <option value="">- Pilih Kota -</option>
            </select>
            @error('d')
            <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
            @enderror
          </div>
          <div class="input-field col l4">
            <select class="browser-default" name="inpkecamatan" id="inpkecamatan" required>
              <option value="">- Pilih Kecamatan -</option>
            </select>
            @error('inpkecamatan')
            <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="row">

        </div>
        <div class="row">
          <div class="input-field col s11">
            <i class="material-icons prefix">gps_fixed</i>
            <textarea name="inpmap" id="inpmap" type="text" class="validate materialize-textarea"></textarea>
            <label for="inpmap">Link Posisi Peta</label>
            @error('inpmap')
            <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
            @enderror
          </div>
          <div class="input-field col s1">
            <a class="mb-6 btn-floating waves-effect waves-light gradient-45deg-light-blue-cyan" href="#" onclick="return popup('https://www.google.com/maps')">
              <i class="material-icons">gps_fixed</i>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m4 l4">
            <i class="material-icons prefix">call</i>
            <input name="inptelepon" id="inptelepon" type="text" class="validate" required>
            <label for="inptelepon">Telepon</label>
            @error('e')
            <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
            @enderror
          </div>
          <div class="input-field col s12 m4 l4">
            <i class="material-icons prefix">call</i>
            <input name="inpfax" id="inpfax" type="text" class="validate" required>
            <label for="inpfax">No. Fax</label>
            @error('e1')
            <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
            @enderror
          </div>
          <div class="input-field col s12 m4 l4">
            <i class="material-icons prefix">email</i>
            <input name="inpemail" id="inpemail" type="email" class="validate" required>
            <label for="inpemail">Email</label>
            @error('f')
            <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 l6">
            <i class="material-icons prefix">markunread_mailbox</i>
            <input name="inpkode" id="inpkode" type="number" class="validate" required max="99999999">
            <label>Kode Pos</label>
            @error('d1')
            <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">language</i>
            <input name="inpweb" id="inpweb" type="text" class="validate" required>
            <label>Website</label>
            @error('d2')
            <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">view_headline</i>
            <textarea name="inpdesk" id="inpdesk" type="text" class="validate materialize-textarea" required></textarea>
            <label for="inpdesk">Deskripsi</label>
            @error('d3')
            <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 l6">
            <i class="material-icons prefix">local_activity</i>
            <input name="inpaktivitas" id="inpaktivitas" type="text" class="validate" required>
            <label>Aktivitas Perusahaan</label>
            @error('d4')
            <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 l6">
            <i class="material-icons prefix">devices</i>
            <input name="inpproduk" id="inpproduk" type="text" class="validate" required>
            <label>Produk Perusahaan</label>
            @error('d4')
            <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 l6">
            <i class="material-icons prefix">directions_run</i>
            <input name="inpjawab" id="inpjawab" type="text" class="validate" required>
            <label>Nama Penanggung Jawab</label>
            @error('d4')
            <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 l6">
            <i class="material-icons prefix">link</i>
            <input name="inpasso" id="inpasso" type="text" class="validate" required>
            <label>Association</label>
            @error('d4')
            <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button class="btn waves-effect waves-light gradient-45deg-light-blue-cyan gradient-shadow right text-white" type="submit" name="action">Submit
              <i class="material-icons right">send</i>
            </button>
          </div>
        </div>
      </form>
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
  <script>
    function popup(url) {
      newwindow = window.open(url, 'name', 'height=500,width=1050');
      if (window.focus) {
        newwindow.focus()
      }
      return false;
    };
    $("#modal-daftar").modal({
      "backdrop": "static"
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#prov').on('change', function(e) {
        var idprov = e.target.value;
        $.get('/get-kota/' + idprov, function(data) {
          $('#inpkota').html(data)
        });
      });
      $('#inpkota').on('change', function(e) {
          var idkota = e.target.value;
          $.get('/get-kecamatan/' + idkota, function(data) {
            $('#inpkecamatan').html(data)
          });

        });
    });
      
    function dlm_negeri() {
        $('#prov').val('33');
        var idprov = '33';
        $.get('/get-kota/' + idprov, function(data) {
          $('#inpkota').html(data)
          $('#inpkota').val('3372');
        });
        var idkota = '3372';
        $.get('/get-kecamatan/' + idkota, function(data) {
          $('#inpkecamatan').html(data)
        });
    }
  </script>
</body>

</html>