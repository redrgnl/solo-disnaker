@extends('admin/index')

@section('content')
<div class="row">
  <div class="col s12">
    <div id="validation" class="card card card-default scrollspy">
      <div class="card-content">
        <h4 class="card-title">Form Data Perusahaan Baru</h4>
        <form class="col s12" method="post" action="/admin/simpan-data-perusahaan" enctype="multipart/form-data">
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
                  <input name="inppos" type="radio" value="1" id="dalam" onclick="dlm_negeri()" />
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
                <option value="">- Pilih Kecamatan* -</option>
              </select>
              @error('inpkecamatan')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
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
  </div>
</div>

@endsection

@section('customjs')
<script>
  function popup(url) {
    newwindow = window.open(url, 'name', 'height=500,width=1050');
    if (window.focus) {
      newwindow.focus()
    }
    return false;
  }
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#prov').on('change', function(e) {
      var idprov = e.target.value;

      //ajax

      $.get('/admin/get-kota/' + idprov, function(data) {
        $('#inpkota').html(data)
      });

    });
      
    $('#inpkota').on('change', function(e) {
      var idkota = e.target.value;

      //ajax

      $.get('/admin/get-kecamatan/' + idkota, function(data) {
        $('#inpkecamatan').html(data)
      });

    });
  });
  function dlm_negeri() {
    $('#prov').val('33');
    var idprov = '33';
    $.get('/admin/get-kota/' + idprov, function(data) {
      $('#inpkota').html(data)
      $('#inpkota').val('3372');
    });
    var idkota = '3372';
    $.get('/admin/get-kecamatan/' + idkota, function(data) {
      $('#inpkecamatan').html(data)
    });
  }
</script>

@endsection