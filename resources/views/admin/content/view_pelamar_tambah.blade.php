@extends('admin/index')

@section('content')
<div class="row">
  <div class="col s12">
    <div id="validation" class="card card card-default scrollspy">
      <div class="card-content">
        <h4 class="card-title">Form Data Pelamar Baru</h4>
        <form class="col s12" method="post" action="/admin/simpan-data-pelamar" enctype="multipart/form-data">
        <input type="hidden" name="tipe_pelamar" value="REGULAR">

          @csrf
          <h6 style="color: blue;">Akun Pelamar</h6>
          <div class="row">
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">art_track</i>
              <input name="inpusername" id="inpusername" type="text" class="validate" required>
              <label for="inpusername">username / id user*</label>
              @error('inpusername')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">vpn_key</i>
              <input name="inppassword" id="inppassword" type="password" class="validate" required>
              <label for="inppassword">Password*</label>
              @error('inppassword')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">vpn_key</i>
              <input name="inpconfirm" id="inpconfirm" type="password" class="validate" required>
              <label for="inpconfirm">Ulangi Password*</label>
              @error('inpconfirm')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">email</i>
              <input name="inpemail" id="inpemail" type="email" class="validate" required>
              <label for="inpemail">Email*</label>
              @error('inpemail')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="file-field input-field col s12">
              <div class="btn">
                <span>Foto Pelamar*</span>
                <input type="file" name="inpfoto" id="inpfoto">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" name="inpfoto" type="text" required>
                <label for="inpfoto">* foto pelamar saat ini</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">wc</i>
              <select name="inpstatus" id="inpstatus">
                <option value="Aktif">Aktif</option>
                <option value="Non-Aktif">Non-Aktif</option>
              </select>
              <label>Status</label>
              @error('inpstatus')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <h6 style="color: blue;">Data Pelamar</h6>
          <div class="row">
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">chrome_reader_mode</i>
              <input name="inpnik" id="inpnik" type="text" class="validate" required>
              <label for="inpnik">NIK / Nomor KTP*</label>
              @error('inpnik')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">assignment</i>
              <input name="inpnama" id="inpnama" type="text" class="validate" required>
              <label for="inpnama">Nama Lengkap*</label>
              @error('inpnama')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6 m6 l6">
              <i class="material-icons prefix"></i>
              <input name="inpgelardepan" id="inpgelardepan" type="text" class="validate">
              <label for="inpgelardepan">Gelar Depan</label>
              @error('inpgelardepan')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
            <div class="input-field col s6 m6 l6">
              <input name="inpgelarbelakang" id="inpgelarbelakang" type="text" class="validate">
              <label for="inpgelarbelakang">Gelar Belakang</label>
              @error('inpgelarbelakang')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">child_care</i>
              <input name="inptempatlhr" id="inptempatlhr" type="text" class="validate" required>
              <label for="inptempatlhr">Tempat Lahir*</label>
              @error('inptempatlhr')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">event</i>
              <input name="inptanggallhr" id="inptanggallhr" type="date" class="validate" required>
              <label for="inptanggallhr">Tanggal Lahir*</label>
              @error('inptanggallhr')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">wc</i>
              <select name="inpkelamin" id="inpkelamin" required>
                <option value="">- Pilih Jenis Kelamin -</option>
                <option value="L">Laki - Laki</option>
                <option value="P">Perempuan</option>
              </select>
              <label>Jenis Kelamin*</label>
              @error('inpkelamin')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">all_inclusive</i>
              <select name="inpagama" id="inpagama" required>
                <option value="">- Pilih Agama -</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Konghuchu">Konghuchu</option>
              </select>
              <label>Agama*</label>
              @error('inpagama')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">accessibility</i>
              <select name="inpkonfis" id="inpkonfis" required>
                <option value="">- Pilih Kondisi Fisik -</option>
                <option value="Non Disabilitas">Non Disabilitas</option>
                <option value="Disabilitas">Disabilitas</option>
<!--
                <option value="Tuna Daksa">Tuna Daksa</option>
                <option value="Tuna Grahita">Tuna Grahita</option>
                <option value="Tuna Wicara">Tuna Wicara</option>
                <option value="Tuna Netra">Tuna Netra</option>
                <option value="Tuna Netra">Tuna Rungu</option>
                <option value="Tuna Netra">Tuna Ganda</option>
-->
              </select>
              <label>Konfisi Fisik*</label>
              @error('inpkonfis')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">group</i>
              <select name="inpstatuskwn" id="inpstatuskwn" required>
                <option value="">- Pilih Status Perkawinan -</option>
                <option value="BN"> Belum Menikah </option>
                <option value="SN"> Menikah </option>
                <option value="DA"> Duda </option>
                <option value="JA"> Janda </option>
              </select>
              <label>Status Perkawinan</label>
              @error('inpstatuskwn')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">group</i>
              <select name="inpkewarganegaraan" id="inpkewarganegaraan">
                <option value="WARGA NEGARA INDONESIA (WNI)"> WARGA NEGARA INDONESIA (WNI) </option>
                <option value="WARGA NEGARA ASING (WNA)"> WARGA NEGARA ASING (WNA) </option>
              </select>
              <label>KEWARGANEGARAAN</label>
              @error('inpkewarganegaraan')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">keyboard_capslock</i>
              <input name="inptinggi" id="inptinggi" type="number" min="1" class="validate">
              <label for="inptinggi">Tinggi Badan (<b>CM</b>)</label>
              @error('inptinggi')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">last_page</i>
              <input name="inpberat" id="inpberat" type="number" min="1" class="validate">
              <label for="inpberat">Berat Badan (<b>KG</b>)</label>
              @error('inpberat')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">call</i>
              <input name="inptelepon" id="inptelepon" type="text" class="validate" required>
              <label for="inptelepon">Nomor Telpon / Handphone*</label>
              @error('inptelepon')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m4 l4">
              <i class="material-icons prefix">domain</i>
              <select name="inpprov" id="inpprov" required>
                <option value="">- Pilih Provinsi* -</option>
                @foreach($provinsi as $prov)
                <option value="{{ $prov->id }}">{{ $prov->name }}</option>
                @endforeach
              </select>
              @error('inpprov')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
            <div class="input-field col s12 m4 l4">
              <select class="browser-default" name="inpkota" id="inpkota" required>
                <option value="">- Pilih Kota* -</option>
              </select>
              @error('inpkota')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
            <div class="input-field col s12 m4 l4">
              <select class="browser-default" name="inpkecamatan" id="inpkecamatan" required>
                <option value="">- Pilih Kecamatan* -</option>
              </select>
              @error('inpkecamatan')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">call</i>
              <input name="inpkodepos" id="inpkodepos" type="text" class="validate">
              <label for="inpkodepos">Kode Pos</label>
              @error('inpkodepos')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">place</i>
              <textarea name="inpalamat" id="inpalamat" type="text" class="validate materialize-textarea" required></textarea>
              <label for="inpalamat">Alamat*</label>
              @error('inpalamat')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <h6 style="color: blue;">Data Pendidikan Terakhir</h6>
          <div class="row">
            <span class="input-field col s6 m6 l6">
              <i class="material-icons prefix">group</i>
              <select name="inptingkatpdd" id="inptingkatpdd">
                <option value="">- Pilih Tingkat Pendidikan -</option>
                @foreach($tingkatpdd as $tpdd)
                <option value="{{ $tpdd->id_tingkatpdd }}">{{ $tpdd->jenis_tingkatpdd }}</option>
                @endforeach
              </select>
              @error('i')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </span>
            <span class="input-field col s6 m6 l6">
              <select class="browser-default" name="inpjurusan" id="inpjurusan">
                <option value="">- Pilih Jurusan -</option>
              </select>
              @error('i')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </span>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">domain</i>
              <input name="inpinstitusi" id="inpinstitusi" type="text" class="validate">
              <label for="inpinstitusi">Nama Institusi Pendidikan</label>
              @error('inpinstitusi')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6 m6 l6">
              <i class="material-icons prefix">call</i>
              <input name="inpthnlulus" id="inpthnlulus" type="text" class="validate">
              <label for="inpthnlulus">Tahun Lulus</label>
              @error('inpthnlulus')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
            <div class="input-field col s6 m6 l6">
              <i class="material-icons prefix">call</i>
              <input name="inpnilai" id="inpnilai" type="text" class="validate">
              <label for="inpnilai">Nilai (Ijazah/IPK)</label>
              @error('inpnilai')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <h6 style="color: blue;">Data Harapan Kerja</h6>
          <div class="row">
            <div class="input-field col s12 l12 ml">
              <div class="row ml-3">
                <label style="font-size: 18px">Harapan Penempatan</label>
                <label>
                  <input name="inppos" type="radio" value="Dalam Negeri" checked />
                  <span>Dalam Negeri</span>
                </label> &emsp;
                <label>
                  <input name="inppos" type="radio" value="Luar Negeri" />
                  <span>Luar Negeri</span>
                </label>
              </div>
              @error('inppos')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="field-a">
            <div class="row">
              <div class="input-field col s12 m4 l4">
                <i class="material-icons prefix">domain</i>
                <select name="prov_pdd" id="prov_pdd">
                  <option value="">- Pilih Provinsi -</option>
                  @foreach($provinsi as $prov)
                  <option value="{{ $prov->id }}">{{ $prov->name }}</option>
                  @endforeach
                </select>
                <label>Provinsi</label>
                @error('prov_pdd')
                <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
              <div class="input-field col s12 m4 l4">
                <select class="browser-default" name="kota_pdd" id="kota_pdd">
                  <option value="">- Pilih Kota -</option>
                </select>
                @error('kota_pdd')
                <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
          </div>
          <div class="field-b" style="display: none">
            <div class="row">
              <div class="input-field col s12 m4 l4">
                <i class="material-icons prefix">domain</i>
                <select name="inpnegarahrpn" id="inpnegarahrpn">
                  <option value="-">- Pilih Negara -</option>
                  @foreach($kwn as $kwn)
                  <option value="{{ $kwn->country_code }}">{{ $kwn->country_name }}</option>
                  @endforeach
                </select>
                <label>Negara</label>
                @error('inpnegarahrpn')
                <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
              <div class="file-field input-field col s12">
                <div class="btn">
                  <span>Izin Suami/Istri/Orang Tua</span>
                  <input type="file" name="inpizin" id="inpizin">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" name="inpizin" type="text">
                </div>
              </div>
              <div class="file-field input-field col s12">
                <div class="btn">
                  <span>Buku Nikah</span>
                  <input type="file" name="inpnikah" id="inpnikah">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" name="inpnikah" type="text">
                </div>
              </div>
              <div class="file-field input-field col s12">
                <div class="btn">
                  <span>Surat Sehat</span>
                  <input type="file" name="inpsehat" id="inpsehat">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" name="inpsehat" type="text">
                </div>
              </div>
              <div class="file-field input-field col s12">
                <div class="btn">
                  <span>Sertifikat Keahlian</span>
                  <input type="file" name="inpkeahlian" id="inpkeahlian">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" name="inpkeahlian" type="text">
                </div>
              </div>
              <div class="file-field input-field col s12">
                <div class="btn">
                  <span>Salinan KTP</span>
                  <input type="file" name="inpktp" id="inpktp">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" name="inpktp" type="text">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m4 l4">
              <i class="material-icons prefix">group</i>
              <select class="form-control select2" name="kelompok_jabatan" id="kelompok_jabatan" data-placeholder="Pilih Kelompok Jabatan">
                <option value="">Semua Jabatan</option>
                @foreach($jabatan as $jab)
                <option value="{{ $jab->id_jabatan }}">{{ $jab->nama_jabatan }}</option>
                @endforeach
              </select>
              <label>Jabatan Yang Diminati*</label>
              @error('kelompok_jabatan')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
            <div class="input-field col s12 m4 l4">
              <i class="material-icons prefix">group</i>
              <select class="form-control" name="sistem_pembayaran_harapan" id="sistem_pembayaran_harapan">
                <option value="">Pilih Sistem Pengupahan Gaji</option>
                <option value="BORONGAN">BORONGAN</option>
                <option value="HARIAN">HARIAN</option>
                <option value="MINGGUAN">MINGGUAN</option>
                <option value="BULANAN">BULANAN</option>
              </select>
              <label>Sistem Pembayaran Gaji</label>
              @error('sistem_pembayaran_harapan')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
            <div class="input-field col s12 m4 l4">
              <i class="material-icons prefix">group</i>
              <select name="harapan_gaji" id="harapan_gaji">
                <option value="">- Pilih Harapan Gaji Per Bulan -</option>
                <option value="1">&lt; 1 jt</option>
                <option value="2">&gt; 1 jt - 2 jt</option>
                <option value="3">&gt; 2 jt - 3 jt</option>
                <option value="4">&gt; 3 jt - 4 jt</option>
                <option value="5">&gt; 4jt - 5 jt</option>
                <option value="6">5 jt ke atas</option>
              </select>
              <label>Harapan Gaji Per Bulan</label>
              @error('harapan_gaji')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
            <div class="row">
              <div class="file-field input-field col s12">
                <div class="btn">
                  <span>Data Pengalaman Kerja</span>
                  <input type="file" name="inppengalaman" id="inppengalaman">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" name="inppengalaman" type="text">
                  <label for="inppengalaman">* Upload File Dalam Bentuk PDF</label>

                </div>
              </div>
            </div>
            <div class="row">
              <div class="file-field input-field col s12">
                <div class="btn">
                  <span>Data Keterampilan</span>
                  <input type="file" name="inpketerampilan" id="inpketerampilan">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" name="inpketerampilan" type="text">
                  <label for="inpketerampilan">* Upload File Dalam Bentuk PDF</label>

                </div>
              </div>
            </div>
            <div class="row">
              <div class="file-field input-field col s12">
                <div class="btn">
                  <span>Data Penguasaan Bahasa</span>
                  <input type="file" name="inpbahasa" id="inpbahasa">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" name="inpbahasa" type="text">
                  <label for="inpbahasa">* Upload File Dalam Bentuk PDF</label>

                </div>
                  <!-- <a href="javascript:void(0);" class="waves-effect waves-light btn add_button" title="Add field"><i class="material-icons left">add_box</i>Tambah Pengalaman</a> -->
              </div>
            </div>
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
  $(document).ready(function() {
    $('input[name=inppos]:radio').change(function(e) {
      let value = e.target.value.trim()

      $('[class^="field"]').css('display', 'none');

      switch (value) {
        case 'Dalam Negeri':
          $('.field-a').show()
          break;
        case 'Luar Negeri':
          $('.field-b').show()
          break;
        default:
          break;
      }
    });
  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#inpprov').on('change', function(e) {
      var idprov = e.target.value;

      //ajax

      $.get('/admin/get-kota/' + idprov, function(data) {
        $('#inpkota').html(data)
      });

    });
  });

  $(document).ready(function() {
    $('#inpkota').on('change', function(e) {
      var idkota = e.target.value;

      //ajax

      $.get('/admin/get-kecamatan/' + idkota, function(data) {
        $('#inpkecamatan').html(data)
      });

    });
  });

  $(document).ready(function() {
    $('#prov_pdd').on('change', function(e) {
      var idprov = e.target.value;

      //ajax

      $.get('/admin/get-kota/' + idprov, function(data) {
        $('#kota_pdd').html(data)
      });

    });
  });

  $(document).ready(function() {
    $('#inptingkatpdd').on('change', function(e) {
      var idprov = e.target.value;

      //ajax

      $.get('/admin/get-dettingkatpdd/' + idprov, function(data) {
        $('#inpjurusan').html(data)
      });

    });
  });
</script>


<script type="text/javascript">
  $(document).ready(function() {
    var maxField = 10; //Maximum Field Nya
    var addButton = $('.add_button'); //Button Class Selectorny
    var wrapper = $('.field_wrapper'); //Field Dinamis ny
    var fieldHTML =
      '<div class="field_pengalaman" ><div class="row"><div class="input-field col s12 m6 l6"><i class="material-icons prefix">location_city</i><input name="aa[]" id="aa" type="text" class="validate"><label for="aa">Nama Perusahaan</label>@error('
    aa ')<span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>@enderror</div><div class="input-field col s12 m6 l6"><i class="material-icons prefix">account_balance</i><input name="bb[]" id="bb" type="text" class="validate"><label for="bb">Jabatan</label>@error('
    b ')<span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>@enderror</div></div><div class="row"><div class="input-field col s6"><i class="material-icons prefix">assignment</i><input name="cc[]" id="cc" type="text" class="validate"><label for="cc">Deskripsi Pekerjaan</label>@error('
    cc ')<span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>@enderror</div><div class="input-field col s6"><i class="material-icons prefix">attach_money</i><input name="dd[]" id="dd" type="text" class="validate"><label for="dd">Besar Gaji</label>@error('
    dd ')<span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>@enderror</div></div><div class="row"><div class="input-field col s12 m6 l6"><i class="material-icons prefix"></i><input type="date" name="ee[]" class="datepicker"><label for="inpgelardepan">Lama Kerja Dari</label>@error('
    ee ')<span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>@enderror</div><div class="input-field col s12 m6 l6"><input type="date" id="ff" name="ff[]" class="datepicker"><label for="ff">Sampai</label>@error('
    ff ')<span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>@enderror</div></div><a href="javascript:void(0);" class="remove_button"><i class="material-icons red-text">delete_forever</i></a></div> '; //input field html


    var x = 1; //Inisiasi 1

    //Tombol Terklik
    $(addButton).click(function() {
      //Check maximum
      if (x < maxField) {
        x++; //Field Hituing
        $(wrapper).append(fieldHTML); //Add field html
      }
    });

    //Remove klik
    $(wrapper).on('click', '.remove_button', function(e) {
      e.preventDefault();
      $(this).parent('div').remove(); //Remove field html
      x--; //Pengurangan hitung
    });
  });
</script>
@endsection
