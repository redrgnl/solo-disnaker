@extends('admin/index')

@section('content')
<div class="row">
  <div class="col s12">
    <div id="validation" class="card card card-default scrollspy">
      <div class="card-content">
        <h4 class="card-title">Form Data Pelamar Baru</h4>
        <form class="col s12" method="post" action="/admin/simpan-data-pelamar">
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
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">email</i>
              <input name="inpemail" id="inpemail" type="text" class="validate" required>
              <label for="inpemail">Email</label>
              @error('a')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="file-field input-field col s12">
              <div class="btn">
                <span>Foto Pelamar</span>
                <input type="file" name="inppict">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">wc</i>
              <select name="e" id="inpgender">
                <option value="Aktif">Aktif</option>
                <option value="Non-Aktif">Non-Aktif</option>
              </select>
              <label>Status</label>
              @error('e')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">chrome_reader_mode</i>
              <input name="a" id="inpnik" type="text" class="validate">
              <label for="a">NIK</label>
              @error('a')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">account_balance</i>
              <input name="b" id="inpnpwp" type="text" class="validate">
              <label for="b">NPWP</label>
              @error('b')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">assignment</i>
              <input name="c" id="inpnama" type="text" class="validate">
              <label for="c">Nama</label>
              @error('c')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix"></i>
              <input name="inpgelardepan" id="inpgelardepan" type="text" class="validate">
              <label for="inpgelardepan">Gelar Depan</label>
              @error('inpgelardepan')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
            <div class="input-field col s12 m6 l6">
              <input name="inpgelarbelakang" id="inpgelarbelakang" type="text" class="validate">
              <label for="inpgelarbelakang">Gelar Belakang</label>
              @error('inpgelarbelakang')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">place</i>
              <textarea name="d" id="inpalamat" type="text" class="validate materialize-textarea"></textarea>
              <label for="d">Alamat</label>
              @error('d')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">wc</i>
              <select name="e" id="inpgender">
                <option value="">- Pilih Gender -</option>
                <option value="L">Laki - Laki</option>
                <option value="P">Perempuan</option>
              </select>
              <label>Jenis Kelamin</label>
              @error('e')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">child_care</i>
              <input name="f" id="inptempat" type="text" class="validate">
              <label for="f">Tempat Lahir</label>
              @error('f')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">event</i>
              <input name="g" id="inptanggal" type="date" class="validate">
              <label for="g">Tanggal Lahir</label>
              @error('g')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">all_inclusive</i>
              <select name="h" id="inpagama">
                <option value="">- Pilih Agama -</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Konghuchu">Konghuchu</option>
              </select>
              <label>Agama</label>
              @error('h')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">group</i>
              <select name="i" id="inpstatus">
                <option value="">- Pilih Status -</option>
                <option value="Belum Kawin"> Belum Kawin </option>
                <option value="Kawin"> Kawin </option>
                <option value="Duda"> Duda </option>
                <option value="Janda"> Janda </option>
              </select>
              <label>Status Perkawinan</label>
              @error('i')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">group</i>
              <select name="i" id="inpstatus">
                <option value="">- Pilih Status -</option>
                <option value="Belum Kawin"> WARGA NEGARA INDONESIA (WNI) </option>
                <option value="Kawin"> WARGA NEGARA ASING (WNA) </option>
              </select>
              <label>KEWARGANEGARAAN</label>
              @error('i')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">keyboard_capslock</i>
              <input name="j" id="inptinggi" type="number" min="1" class="validate">
              <label for="j">Tinggi Badan</label>
              @error('j')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">last_page</i>
              <input name="k" id="inpberat" type="number" min="1" class="validate">
              <label for="k">Berat Badan</label>
              @error('k')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">call</i>
              <input name="l" id="inptelepon" type="text" class="validate">
              <label for="l">Nomor Telepon</label>
              @error('l')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m4 l4">
              <i class="material-icons prefix">domain</i>
              <select name="prov" id="prov">
                <option value="">- Pilih Provinsi -</option>
                @foreach($provinsi as $prov)
                <option value="{{ $prov->id }}">{{ $prov->name }}</option>
                @endforeach
              </select>
              @error('d')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
            <div class="input-field col s12 m4 l4">
              <select class="browser-default" name="kota" id="inpkota">
                <option value="">- Pilih Kota -</option>
              </select>
              @error('d')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
            <div class="input-field col s12 m4 l4">
              <select class="browser-default" name="kecamatan" id="inpkecamatan">
                <option value="">- Pilih Kecamatan -</option>
              </select>
              @error('d')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">call</i>
              <input name="l" id="inptelepon" type="text" class="validate">
              <label for="l">Kode Pos</label>
              @error('l')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <option class="input-field col s12 m6 l6">
              <i class="material-icons prefix">group</i>
              <select name="i" id="inpstatus">
                <option value="">- Pilih Tingkat Pendidikan -</option>
              </select>
              <label>Tingkat Pendidikan</label>
              @error('i')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </option>
          </div>
          <div class="row">
            <span class="input-field col s12 m6 l6">
              <i class="material-icons prefix">group</i>
              <select name="i" id="inpstatus">
                <option value="">- Pilih Jenis Jurusan -</option>
              </select>
              <label>Jenis Jurusan</label>
              @error('i')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </span>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">call</i>
              <input name="l" id="inptelepon" type="text" class="validate">
              <label for="l">Nama Institusi Pendidikan</label>
              @error('l')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">call</i>
              <input name="l" id="inptelepon" type="text" class="validate">
              <label for="l">Tahun Lulus</label>
              @error('l')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">call</i>
              <input name="l" id="inptelepon" type="text" class="validate">
              <label for="l">Nilai (Ijazah/IPK)</label>
              @error('l')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 l12 ml">
              <div class="row ml-3">
                <label style="font-size: 18px">Harapan Penempatan</label>
                <label>
                  <input name="inppos" type="radio" value="1" />
                  <span>Dalam Negeri</span>
                </label> &emsp;
                <label>
                  <input name="inppos" type="radio" value="2" />
                  <span>Luar Negeri</span>
                </label>
              </div>
              @error('c2')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
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
              @error('d')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
            <div class="input-field col s12 m4 l4">
              <select class="browser-default" name="kota_pdd" id="kota_pdd">
                <option value="">- Pilih Kota -</option>
              </select>
              @error('d')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">

            <div class="input-field col s12 m4 l4">
              <i class="material-icons prefix">group</i>
              <select class="form-control select2" name="kelompok_jabatan" id="kelompok_jabatan" data-placeholder="Pilih Kelompok Jabatan">
                <option value=""></option>
                <optgroup label="0111 - PERWIRA MABES TNI">
                  <option value="0111.01">0111.01 - PANGLIMA TNI</option>
                  <option value="0111.02">0111.02 - KEPALA STAF UMUM TNI (KASUM TNI)</option>
                  <option value="0111.03">0111.03 - INSPEKTUR JENDERAL TNI (IRJEN TNI)</option>
                  <option value="0111.04">0111.04 - STAF AHLI PANGLIMA TNI (SAHLI PANGLIMA TNI)</option>
                  <option value="0111.05">0111.05 - ASISTEN KEBIJAKAN STRATEGIS DAN PERENCANAAN UMUM PANGLIMA TNI (ASRENUM PANGLIMA TNI)</option>
                  <option value="0111.06">0111.06 - ASISTEN INTELIJEN PANGLIMA TNI (ASINTEL PANGLIMA TNI)</option>
                  <option value="0111.07">0111.07 - ASISTEN OPERASI PANGLIMA TNI (ASOPS PANGLIMA TNI)</option>
                  <option value="0111.08">0111.08 - ASISTEN PERSONALIA PANGLIMA TNI (ASPERS PANGLIMA TNI)</option>
                  <option value="0111.09">0111.09 - ASISTEN LOGISTIK PANGLIMA TNI (ASLOG PANGLIMA TNI)</option>
                  <option value="0111.10">0111.10 - ASISTEN TERITORIAL PANGLIMA TNI (ASTER PANGLIMA TNI)</option>
                  <option value="0111.11">0111.11 - ASISTEN KOMUNIKASI DAN ELEKTRONIKA PANGLIMA TNI (ASKOMLEK PANGLIMA TNI)</option>
                  <option value="0111.12">0111.12 - PERWIRA STAF KHUSUS POLISI MILITER (PASSUSPOM TNI)</option>
                  <option value="0111.13">0111.13 - KOMANDAN SATUAN KOMUNIKASI DAN ELEKTRONIKA TNI (DANSATKOMLEK TNI)</option>
                  <option value="0111.14">0111.14 - KEPALA PUSAT PENGENDALIAN OPERASI TNI (KAPUSDALOPS TNI)</option>
                  <option value="0111.15">0111.15 - KEPALA SEKRETARIAT UMUM TNI (KASETUM TNI)</option>
                  <option value="0111.16">0111.16 - KOMANDAN SEKOLAH STAF DAN KOMANDO TNI (DANSESKO TNI)</option>
                  <option value="0111.17">0111.17 - KOMANDAN KOMANDO PENDIDIKAN DAN LATIHAN TNI (DANKODIKLAT TNI)</option>
                  <option value="0111.18">0111.18 - KOMANDAN JENDERAL AKADEMI TNI (DANJEN AKADEMI TNI)</option>
                  <option value="0111.19">0111.19 - KEPALA BADAN INTELIJEN STRATEGIS TNI (KABAIS TNI)</option>
                  <option value="0111.20">0111.20 - KOMANDAN PASUKAN PENGAMANAN PRESIDEN (DANPASPAMPRES)</option>
                  <option value="0111.21">0111.21 - KEPALA BADAN PEMBINAAN HUKUM TNI (KABABINKUM TNI)</option>
                  <option value="0111.22">0111.22 - KEPALA PUSAT PENERANGAN TNI (KAPUSPEN TNI)</option>
                  <option value="0111.23">0111.23 - KAPALA PUSAT KESEHATAN TNI (KAPUSKES TNI)</option>
                  <option value="0111.24">0111.24 - KEPALA BADAN PERBEKALAN TNI (KABABEK TNI)</option>
                  <option value="0111.25">0111.25 - KEPALA PUSAT PEMBINAAN MENTAL TNI (KAPUSBINTAL TNI)</option>
                  <option value="0111.26">0111.26 - KEPALA PUSAT KEUANGAN TNI (KAPUSKU TNI)</option>
                  <option value="0111.27">0111.27 - KEPALA PUSAT SEJARAH TNI (KAPUSJARAH TNI)</option>
                  <option value="0111.28">0111.28 - KEPALA PUSAT INFORMASI DAN PENGOLAHAN DATA TNI (KAPUSINFOLAHTA TNI)</option>
                  <option value="0111.29">0111.29 - KEPALA PUSAT MISI PEMELIHARAAN PERDAMAIAN (KA PMPP TNI)</option>
                  <option value="0111.30">0111.30 - KEPALA PUSAT PENGKAJIAN STRATEGI TNI (KAPUSJIANSTRA TNI)</option>
                  <option value="0111.31">0111.31 - KEPALA PUSAT PENGEMBANGAN KEPEMIMPINAN TNI (KAPUSBANGPIM TNI)</option>
                  <option value="0111.32">0111.32 - KOMANDAN PASUKAN REAKSI CEPAT PENANGGULANGAN BENCANA (DAN PRCPB)</option>
                  <option value="0111.33">0111.33 - KOMANDAN PASUKAN PEMUKUL REAKSI CEPAT (DAN PPRC)</option>
                  <option value="0111.34">0111.34 - KOMANDAN KOMANDO GARNISUN TETAP (DANKOGARTAP)</option>
                  <option value="0111.35">0111.35 - PANGLIMA KOMANDO PERTAHANAN UDARA NASIONAL (PANGKOHANUDNAS)</option>
                  <option value="0111.36">0111.36 - PANGLIMA KOMANDO GABUNGAN WILAYAH PERTAHANAN (PANGKOGABWILHAN)</option>
                  <option value="0111.37">0111.37 - PANGLIMA KOMANDO CADANGAN STRATEGIS TNI ANGKATAN DARAT (PANGKOSTRAD)</option>
                  <option value="0111.38">0111.38 - KOMANDAN JENDERAL KOMANDO PASUKAN KHUSUS (DANJEN KOPASSUS)</option>
                  <option value="0111.39">0111.39 - PANGLIMA KOMANDO DAERAH MILITER (PANGDAM)</option>
                  <option value="0111.40">0111.40 - PANGLIMA KOMANDO ARMADA (PANGKOARMADA)</option>
                  <option value="0111.41">0111.41 - PANGLIMA KOMANDO LINTAS LAUT MILITER (PANGKOLINLAMIL)</option>
                  <option value="0111.42">0111.42 - PANGLIMA KOMANDO OPERASI TNI ANGKATAN UDARA (PANGKOOPSAU)</option>
                  <option value="0111.99">0111.99 - ANGGOTA MABES TNI BERPANGKAT PERWIRA LAINNYA</option>
                </optgroup>
                <optgroup label="0112 - PERWIRA TNI AD">
                  <option value="0112.01">0112.01 - KEPALA STAF TNI ANGKATAN DARAT (KASAD)</option>
                  <option value="0112.02">0112.02 - WAKIL KEPALA STAF TNI ANGKATAN DARAT (WAKASAD)</option>
                  <option value="0112.03">0112.03 - INSPEKTUR JENDERAL TNI ANGKATAN DARAT (IRJENAD)</option>
                  <option value="0112.04">0112.04 - STAF AHLI KASAD (SAHLI KASAD)</option>
                  <option value="0112.05">0112.05 - ASISTEN PERENCANAAN & ANGGARAN KASAD (ASRENA KASAD)</option>
                  <option value="0112.06">0112.06 - ASISTEN PENGAMANAN KASAD (ASPAM KASAD)</option>
                  <option value="0112.07">0112.07 - ASISTEN OPERASI KASAD (ASOPS KASAD)</option>
                  <option value="0112.08">0112.08 - ASISTEN PERSONEL KASAD (ASPERS KASAD)</option>
                  <option value="0112.09">0112.09 - ASISTEN LOGISTIK KASAD (ASLOG KASAD)</option>
                  <option value="0112.10">0112.10 - ASISTEN TERITORIAL KASAD (ASTER KASAD)</option>
                  <option value="0112.11">0112.11 - KOMANDAN PUSAT KESENJATAAN INFANTERI (DANPUSSENIF)</option>
                  <option value="0112.12">0112.12 - KOMANDAN PUSAT KESENJATAAN KAVALERI (DANPUSSENKAV)</option>
                  <option value="0112.13">0112.13 - KOMANDAN PUSAT KESENJATAAN ARTILERI MEDAN (DANPUSSENARMED)</option>
                  <option value="0112.14">0112.14 - KOMANDAN PUSAT KESENJATAAN ARTILERI PERTAHANAN UDARA (DANPUSSENARHANUD)</option>
                  <option value="0112.15">0112.15 - KOMANDAN PUSAT PENERBANG TNI ANGKATAN DARAT (DANPUSPENERBAD)</option>
                  <option value="0112.16">0112.16 - KOMANDAN PUSAT POLISI MILITER TNI ANGKATAN DARAT (DANPUSPOMAD)</option>
                  <option value="0112.17">0112.17 - KOMANDAN PUSAT TERITORIAL TNI ANGKATAN DARAT (DANPUSTERAD)</option>
                  <option value="0112.18">0112.18 - KOMANDAN PUSAT INTELIJEN TNI ANGKATAN DARAT (DANPUSINTELAD)</option>
                  <option value="0112.19">0112.19 - DIREKTUR ZENI TNI ANGKATAN DARAT (DIRZIAD)</option>
                  <option value="0112.20">0112.20 - DIREKTUR PERHUBUNGAN TNI ANGKATAN DARAT (DIRHUBAD)</option>
                  <option value="0112.21">0112.21 - DIREKTUR PERALATAN TNI ANGKATAN DARAT (DIRPALAD)</option>
                  <option value="0112.22">0112.22 - DIREKTUR PEMBEKALAN ANGKUTAN TNI ANGKATAN DARAT (DIRBEKANGAD)</option>
                  <option value="0112.23">0112.23 - DIREKTUR KESEHATAN TNI ANGKATAN DARAT (DIRKESAD)</option>
                  <option value="0112.24">0112.24 - DIREKTUR AJUDAN JENDERAL TNI ANGKATAN DARAT (DIRAJENAD)</option>
                  <option value="0112.25">0112.25 - DIREKTUR TOPOGRAFI TNI ANGKATAN DARAT (DIRTOPAD)</option>
                  <option value="0112.26">0112.26 - DIREKTUR HUKUM TNI ANGKATAN DARAT (DIRKUMAD)</option>
                  <option value="0112.27">0112.27 - DIREKTUR KEUANGAN TNI ANGKATAN DARAT (DIRKUAD)</option>
                  <option value="0112.28">0112.28 - KEPALA DINAS JASMANI TNI ANGKATAN DARAT (KADISJASAD)</option>
                  <option value="0112.29">0112.29 - KEPALA DINAS PEMBINAAN MENTAL TNI ANGKATAN DARAT (KADISBINTALAD)</option>
                  <option value="0112.30">0112.30 - KEPALA DINAS PSIKOLOGI TNI ANGKATAN DARAT (KADISPSIAD)</option>
                  <option value="0112.31">0112.31 - KEPALA DINAS PENELITIAN DAN PENGEMBANGAN TNI ANGKATAN DARAT (KADISLITBANGAD)</option>
                  <option value="0112.32">0112.32 - KEPALA DINAS SEJARAH TNI ANGKATAN DARAT (KADISJARAHAD)</option>
                  <option value="0112.33">0112.33 - KEPALA DINAS INFORMASI DAN PENGOLAHAN DATA TNI ANGKATAN DARAT (KADISINFOLAHTAAD)</option>
                  <option value="0112.34">0112.34 - KEPALA DINAS PENERANGAN TNI ANGKATAN DARAT (KADISPENAD)</option>
                  <option value="0112.35">0112.35 - GUBERNUR AKADEMI MILITER TNI ANGKATAN DARAT (GUBERNUR AKMIL)</option>
                  <option value="0112.36">0112.36 - KOMANDAN SEKOLAH STAF DAN KOMANDO TNI ANGKATAN DARAT (DANSESKOAD)</option>
                  <option value="0112.37">0112.37 - KOMANDAN SEKOLAH CALON PERWIRA TNI ANGKATAN DARAT (DANSECAPA AD)</option>
                  <option value="0112.38">0112.38 - KOMANDAN KOMANDO PEMBINAAN DOKTRIN PENDIDIKAN DAN LATIHAN TNI ANGKATAN DARAT (DANKODIKLATAD)</option>
                  <option value="0112.99">0112.99 - ANGGOTA TNI ANGKATAN DARAT BERPANGKAT PERWIRA LAINNYA</option>
                </optgroup>
                <optgroup label="0113 - PERWIRA TNI AL">
                  <option value="0113.01">0113.01 - KEPALA STAF TNI ANGKATAN LAUT (KASAL)</option>
                  <option value="0113.02">0113.02 - WAKIL KEPALA STAF TNI ANGKATAN LAUT (WAKASAL)</option>
                  <option value="0113.03">0113.03 - INSPEKTUR JENDERAL TNI ANGKATAN LAUT (IRJENAL)</option>
                  <option value="0113.04">0113.04 - STAF AHLI KASAL (SAHLI KASAL)</option>
                  <option value="0113.05">0113.05 - ASISTEN PERENCANAAN DAN ANGGARAN KASAL (ASRENA KASAL)</option>
                  <option value="0113.06">0113.06 - ASISTEN PENGAMANAN KASAL (ASPAM KASAL)</option>
                  <option value="0113.07">0113.07 - ASISTEN OPERASI KASAL (ASOPS KASAL)</option>
                  <option value="0113.08">0113.08 - ASISTEN PERSONEL KASAL (ASPERS KASAL)</option>
                  <option value="0113.09">0113.09 - ASISTEN LOGISTIK KASAL (ASLOG KASAL)</option>
                  <option value="0113.10">0113.10 - KEPALA DINAS PENGAMANAN TNI ANGKATAN LAUT (KADISPAMAL)</option>
                  <option value="0113.11">0113.11 - KEPALA DINAS PENERANGAN TNI ANGKATAN LAUT (KADISPENAL)</option>
                  <option value="0113.12">0113.12 - KEPALA DINAS HIDROGRAFI DAN OCEANOGRAFI TNI ANGKATAN LAUT (KADISHIDROSAL)</option>
                  <option value="0113.13">0113.13 - KEPALA DINAS KOMUNIKASI DAN ELEKTRONIKA TNI ANGKATAN LAUT (KADISKOMLEKAL)</option>
                  <option value="0113.14">0113.14 - KEPALA DINAS PEMBINAAN HUKUM TNI ANGKATAN LAUT (KADISKUMAL)</option>
                  <option value="0113.15">0113.15 - KEPALA DINAS PEMBINAAN POTENSI MARITIM (KADISBINPOTMAR)</option>
                  <option value="0113.16">0113.16 - KEPALA DINAS ADMINISTRASI PERSONEL TNI ANGKATAN LAUT (KADISMINPERSAL)</option>
                  <option value="0113.17">0113.17 - KEPALA DINAS PENDIDIKAN TNI ANGKATAN LAUT (KADISDIKAL)</option>
                  <option value="0113.18">0113.18 - KEPALA DINAS PERAWATAN PERSONEL TNI ANGKATAN LAUT (KADISWATPERSAL)</option>
                  <option value="0113.19">0113.19 - KEPALA DINAS KESEHATAN TNI ANGKATAN LAUT (KADISKESAL)</option>
                  <option value="0113.20">0113.20 - KEPALA DINAS MATERIIL TNI ANGKATAN LAUT (KADISMATAL)</option>
                  <option value="0113.21">0113.21 - KEPALA DINAS SENJATA DAN ELEKTRONIKA TNI ANGKATAN LAUT (KADISSENLEKAL)</option>
                  <option value="0113.22">0113.22 - KEPALA DINAS KELAIKAN MATERIIL TNI ANGKATAN LAUT (KADISLAIKMATAL)</option>
                  <option value="0113.23">0113.23 - KEPALA DINAS FASILITAS PANGKALAN TNI ANGKATAN LAUT (KADISFASLANAL)</option>
                  <option value="0113.24">0113.24 - KEPALA DINAS PENGADAAN TNI ANGKATAN LAUT (KADISADAL)</option>
                  <option value="0113.25">0113.25 - KEPALA DINAS PEMBEKALAN TNI ANGKATAN LAUT (KADISBEKAL)</option>
                  <option value="0113.26">0113.26 - KEPALA DINAS KEUANGAN TNI ANGKATAN LAUT (KADISKUAL)</option>
                  <option value="0113.27">0113.27 - KEPALA DINAS PENELITIAN DAN PENGEMBANGAN TNI ANGKATAN LAUT (KADISLITBANGAL)</option>
                  <option value="0113.28">0113.28 - KEPALA DINAS INFORMASI DAN PENGOLAHAN DATA TNI ANGKATAN LAUT (KADISINFOLAHTAAL)</option>
                  <option value="0113.29">0113.29 - KEPALA DINAS PSIKOLOGI TNI ANGKATAN LAUT (KADISPSIAL)</option>
                  <option value="0113.30">0113.30 - KOMANDAN PUSAT PENERBANGAN TNI ANGKATAN LAUT (DANPUSPENERBAL)</option>
                  <option value="0113.31">0113.31 - KOMANDAN PUSAT POLISI MILITER TNI ANGKATAN LAUT (DANPUSPOMAL)</option>
                  <option value="0113.32">0113.32 - GUBERNUR AKADEMI TNI ANGKATAN LAUT (GUBERNUR AAL)</option>
                  <option value="0113.33">0113.33 - KOMANDAN SEKOLAH STAF DAN KOMANDO TNI ANGKATAN LAUT (DANSESKOAL)</option>
                  <option value="0113.34">0113.34 - KOMANDAN KORPS MARINIR (DANKORMAR)</option>
                  <option value="0113.35">0113.35 - KOMANDAN KOMANDO PENGEMBANGAN PENDIDIKAN TNI ANGKATAN LAUT (DANKOBANGDIKAL)</option>
                  <option value="0113.36">0113.36 - ANGGOTA TNI ANGKATAN LAUT BERPANGKAT PERWIRA LAINNYA</option>
                </optgroup>
                <optgroup label="0114 - PERWIRA TNI AU">
                  <option value="0114.01">0114.01 - KEPALA STAF TNI ANGKATAN UDARA (KASAU)</option>
                  <option value="0114.02">0114.02 - WAKIL KEPALA STAF TNI ANGKATAN UDARA (WAKASAU)</option>
                  <option value="0114.03">0114.03 - INSPEKTUR JENDERAL TNI ANGKATAN UDARA (IRJENAU)</option>
                  <option value="0114.04">0114.04 - STAF AHLI KASAU (SAHLI KASAU)</option>
                  <option value="0114.05">0114.05 - ASISTEN PERENCANAAN DAN ANGGARAN KASAU (ASRENA KASAU)</option>
                  <option value="0114.06">0114.06 - ASISTEN PENGAMANAN KASAU (ASPAM KASAU)</option>
                  <option value="0114.07">0114.07 - ASISTEN OPERASI KASAU (ASOPS KASAU)</option>
                  <option value="0114.08">0114.08 - ASISTEN PERSONEL KASAU (ASPERS KASAU)</option>
                  <option value="0114.09">0114.09 - ASISTEN LOGISTIK KASAU (ASLOG KASAU)</option>
                  <option value="0114.10">0114.10 - KEPALA DINAS KEUANGAN TNI ANGKATAN UDARA (KADISKUAU)</option>
                  <option value="0114.11">0114.11 - KEPALA DINAS INFORMASI DAN PENGOLAHAN DATA TNI ANGKATAN UDARA (KADISINFOLAHTAAU)</option>
                  <option value="0114.12">0114.12 - KEPALA DINAS PENELITIAN DAN PENGEMBANGAN TNI ANGKATAN UDARA (KADISLITBANGAU)</option>
                  <option value="0114.13">0114.13 - KEPALA DINAS PENGAMANAN DAN SANDI TNI ANGKATAN UDARA (KADISPAMSANAU)</option>
                  <option value="0114.14">0114.14 - KEPALA DINAS SURVEI DAN PEMOTRETAN UDARA TNI ANGKATAN UDARA (KADISSURPOTRUDAU)</option>
                  <option value="0114.15">0114.15 - KEPALA DINAS PENERANGAN TNI ANGKATAN UDARA (KADISPENAU)</option>
                  <option value="0114.16">0114.16 - KEPALA DINAS PENGEMBANGAN OPERASI TNI ANGKATAN UDARA (KADISBANGOPSAU)</option>
                  <option value="0114.17">0114.17 - KEPALA DINAS KESELAMATAN TERBANG DAN KERJA TNI ANGKATAN UDARA (KADISLAMBANGJAAU)</option>
                  <option value="0114.18">0114.18 - KEPALA DINAS POTENSI KEDIRGANTARAAN (KADISPOTDIRGA)</option>
                  <option value="0114.19">0114.19 - KEPALA DINAS HUKUM TNI ANGKATAN UDARA (KADISKUMAU)</option>
                  <option value="0114.20">0114.20 - KEPALA DINAS ADMINISTRASI PERSONEL TNI ANGKATAN UDARA (KADISMINPERSAU)</option>
                  <option value="0114.21">0114.21 - KEPALA DINAS PENDIDIKAN TNI ANGKATAN UDARA (KADISDIKAU)</option>
                  <option value="0114.22">0114.22 - KEPALA DINAS PERAWATAN PERSONEL TNI ANGKATAN UDARA (KADISWATPERSAU)</option>
                  <option value="0114.23">0114.23 - KEPALA DINAS KESEHATAN TNI ANGKATAN UDARA (KADISKESAU)</option>
                  <option value="0114.24">0114.24 - KEPALA DINAS PSIKOLOGI TNI ANGKATAN UDARA (KADISPSIAU)</option>
                  <option value="0114.25">0114.25 - KEPALA DINAS MATERIIL TNI ANGKATAN UDARA (KADISMATAU)</option>
                  <option value="0114.26">0114.26 - KEPALA DINAS AERONAUTIKA TNI ANGKATAN UDARA (KADISAEROAU)</option>
                  <option value="0114.27">0114.27 - KEPALA DINAS KOMUNIKASI DAN ELEKTRONIKA TNI ANGKATAN UDARA (KADISKOMLEKAU)</option>
                  <option value="0114.28">0114.28 - KEPALA DINAS FASILITAS DAN KONSTRUKSI TNI ANGKATAN UDARA (KADISFASKONAU)</option>
                  <option value="0114.29">0114.29 - KEPALA DINAS PENGADAAN TNI ANGKATAN UDARA (KADISADAAU)</option>
                  <option value="0114.30">0114.30 - KEPALA LEMBAGA KESEHATAN PENERBANGAN DAN RUANG ANGKASA "SARYANTO" (KALAKESPRA "SARYANTO")</option>
                  <option value="0114.31">0114.31 - KOMANDAN PUSAT POLISI MILITER TNI ANGKATAN UDARA (DANPUSPOMAU)</option>
                  <option value="0114.32">0114.32 - GUBERNUR AKADEMI TNI ANGKATAN UDARA (GUBERNUR AAU)</option>
                  <option value="0114.33">0114.33 - KOMANDAN SEKOLAH STAF DAN KOMANDO TNI ANGKATAN UDARA (DANSESKOAU)</option>
                  <option value="0114.34">0114.34 - KOMANDAN KOMANDO PENDIDIKAN TNI ANGKATAN UDARA (DANKODIKAU)</option>
                  <option value="0114.35">0114.35 - KOMANDAN KOMANDO PEMELIHARAAN MATERIIL TNI ANGKATAN UDARA (DANKOHARMATAU)</option>
                  <option value="0114.36">0114.36 - KOMANDAN KORPS PASUKAN KHAS ANGKATAN UDARA (DANKORPASKHAS)</option>
                  <option value="0114.99">0114.99 - ANGGOTA TNI ANGKATAN UDARA BERPANGKAT PERWIRA LAINNYA</option>
                </optgroup>
                <optgroup label="0115 - PERWIRA POLRI">
                  <option value="0115.01">0115.01 - KEPALA KEPOLISIAN REPUBLIK INDONESIA (KAPOLRI)</option>
                  <option value="0115.02">0115.02 - WAKIL KEPALA KEPOLISIAN REPUBLIK INDONESIA (WAKAPOLRI)</option>
                  <option value="0115.03">0115.03 - INSPEKTUR PENGAWAS UMUM (IRWASUM)</option>
                  <option value="0115.04">0115.04 - ASISTEN KAPOLRI BIDANG OPERASIONAL (ASOPS KAPOLRI)</option>
                  <option value="0115.05">0115.05 - ASISTEN KAPOLRI BIDANG PERENCANAAN UMUM DAN ANGGARAN (ASRENA KAPOLRI)</option>
                  <option value="0115.06">0115.06 - ASISTEN KAPOLRI BIDANG SUMBER DAYA MANUSIA (AS SDM)</option>
                  <option value="0115.07">0115.07 - ASISTEN KAPOLRI BIDANG SARANA DAN PRASARANA (ASSARPRAS KAPOLRI)</option>
                  <option value="0115.08">0115.08 - KEPALA DIVISI PROFESI DAN PENGAMANAN (KADIVPROPAM)</option>
                  <option value="0115.09">0115.09 - KEPALA DIVISI HUKUM (KADIVKUM)</option>
                  <option value="0115.10">0115.10 - KEPALA DIVISI HUBUNGAN MASYARAKAT (KADIVHUMAS)</option>
                  <option value="0115.11">0115.11 - KEPALA DIVISI HUBUNGAN INTERNASIONAL (KADIVHUBINTER)</option>
                  <option value="0115.12">0115.12 - KEPALA DIVISI TEKNOLOGI INFORMASI (KADIV TI)</option>
                  <option value="0115.13">0115.13 - STAF AHLI KAPOLRI (SAHLI KAPOLRI)</option>
                  <option value="0115.14">0115.14 - KEPALA BADAN INTELJEN KEAMANAN (KABAINTELKAM)</option>
                  <option value="0115.15">0115.15 - KEPALA BADAN PEMELIHARA KEAMANAN (KABAHARKAM)</option>
                  <option value="0115.16">0115.16 - KEPALA BADAN RESERSE KRIMINAL (KABARESKRIM)</option>
                  <option value="0115.17">0115.17 - KEPALA KORPS LALU LINTAS (KAKORLATAS)</option>
                  <option value="0115.18">0115.18 - KEPALA KORPS BRIGADE MOBIL (KAKORBRIMOB)</option>
                  <option value="0115.19">0115.19 - KEPALA DETASEMEN KHUSUS 88 ANTI TEROR (KADENSUS 88 AT)</option>
                  <option value="0115.20">0115.20 - KEPALA LEMBAGA PENDIDIKAN POLRI (KALEMDIKPOL)</option>
                  <option value="0115.21">0115.21 - KEPALA SEKOLAH STAF DAN PIMPINAN (KASESPIM)</option>
                  <option value="0115.22">0115.22 - KEPALA SEKOLAH STAF DAN PIMPINAN PERTAMA (KASESPIMMA)</option>
                  <option value="0115.23">0115.23 - KEPALA SEKOLAH STAF DAN PIMPINAN MENEGAH (KASESPIMMEN)</option>
                  <option value="0115.24">0115.24 - KEPALA SEKOLAH STAF DAN PIMPINAN TINGGI (KASESPIMTI)</option>
                  <option value="0115.25">0115.25 - KETUA SEKOLAH TINGGI ILMU KEPOLISIAN (KETUA STIK)</option>
                  <option value="0115.26">0115.26 - GUBERNUR AKADEMI KEPOLISIAN (GUB AKPOL)</option>
                  <option value="0115.27">0115.27 - KEPALA SEKOLAH PEMBENTUKAN PERWIRA (KASETUKPA)</option>
                  <option value="0115.28">0115.28 - KEPALA PENDIDIKAN DAN PELATIHAN KHUSUS KEJAHATAN TRANSNASIONAL (KADIKLATSUS JATRANS)</option>
                  <option value="0115.29">0115.29 - KEPALA PUSAT PENELITIAN DAN PENGEMBANGAN (KAPUSLITBANG)</option>
                  <option value="0115.30">0115.30 - KEPALA KEUANGAN (KAPUSKEU)</option>
                  <option value="0115.31">0115.31 - KEPALA PUSAT KEDOKTERAN DAN KESEHATAN (KAPUSDOKKES)</option>
                  <option value="0115.32">0115.32 - KEPALA PUSAT SEJARAH (KAPUSJARAH)</option>
                  <option value="0115.33">0115.33 - KEPALA KEPOLISIAN DAERAH (KAPOLDA)</option>
                  <option value="0115.34">0115.34 - KEPALA KEPOLISIAN RESORT (KAPOLRES)</option>
                  <option value="0115.35">0115.35 - KEPALA KEPOLISIAN SEKTOR (KAPOLSEK)</option>
                  <option value="0115.99">0115.99 - ANGGOTA KEPOLISIAN RI BERPANGKAT PERWIRA LAINNYA</option>
                </optgroup>
                <optgroup label="0211 - BINTARA MARKAS BESAR (MABES) TNI">
                  <option value="0211.01">0211.01 - BINTARA MARKAS BESAR (MABES) TNI</option>
                </optgroup>
                <optgroup label="0212 - BINTARA TNI AD">
                  <option value="0212.01">0212.01 - BINTARA TNI AD</option>
                </optgroup>
                <optgroup label="0213 - BINTARA TNI AL">
                  <option value="0213.01">0213.01 - BINTARA TNI AL</option>
                </optgroup>
                <optgroup label="0214 - BINTARA TNI AU">
                  <option value="0214.01">0214.01 - BINTARA TNI AU</option>
                </optgroup>
                <optgroup label="0215 - BINTARA POLRI">
                  <option value="0215.01">0215.01 - BINTARA POLRI</option>
                </optgroup>
                <optgroup label="0311 - TAMTAMA MARKAS BESAR (MABES) TNI">
                  <option value="0311.01">0311.01 - TAMTAMA MARKAS BESAR (MABES) TNI</option>
                </optgroup>
                <optgroup label="0312 - TAMTAMA TNI AD">
                  <option value="0312.01">0312.01 - TAMTAMA TNI AD</option>
                </optgroup>
                <optgroup label="0313 - TAMTAMA TNI AL">
                  <option value="0313.01">0313.01 - TAMTAMA TNI AL</option>
                </optgroup>
                <optgroup label="0314 - TAMTAMA TNI AU">
                  <option value="0314.01">0314.01 - TAMTAMA TNI AU</option>
                </optgroup>
                <optgroup label="0315 - TAMTAMA POLRI">
                  <option value="0315.01">0315.01 - TAMTAMA POLRI</option>
                </optgroup>
                <optgroup label="1111 - PEJABAT PEMBUAT PERATURAN PERUNDANG-UNDANGAN">
                  <option value="1111.01">1111.01 - ANGGOTA PARLEMEN (MPR, DPR, DPRD DAN DPD)</option>
                  <option value="1111.02">1111.02 - PRESIDEN DAN WAKIL PRESIDEN</option>
                  <option value="1111.03">1111.03 - GUBERNUR</option>
                  <option value="1111.04">1111.04 - WALIKOTA DAN BUPATI</option>
                  <option value="1111.05">1111.05 - MENTERI</option>
                  <option value="1111.99">1111.99 - PEJABAT PEMBUAT PERATURAN PERUNDANG-UNDANGAN LAINNYA</option>
                </optgroup>
                <optgroup label="1112 - PEJABAT TINGGI PEMERINTAH">
                  <option value="1112.01">1112.01 - DUTA BESAR</option>
                  <option value="1112.02">1112.02 - KONSULAT JENDERAL</option>
                  <option value="1112.03">1112.03 - SEKRETARIS KABINET</option>
                  <option value="1112.04">1112.04 - INSPEKTUR JENDERAL DAN INSPEKTUR UTAMA (KEMENTERIAN/LEMBAGA)</option>
                  <option value="1112.05">1112.05 - DIREKTUR JENDERAL DAN DEPUTI (KEMENTERIAN/LEMBAGA)</option>
                  <option value="1112.06">1112.06 - JAKSA AGUNG</option>
                  <option value="1112.07">1112.07 - SEKRETARIS DAERAH</option>
                  <option value="1112.99">1112.99 - PEJABAT TINGGI PEMERINTAH LAINNYA</option>
                </optgroup>
                <optgroup label="1113 - KETUA ADAT DAN KEPALA WILAYAH">
                  <option value="1113.01">1113.01 - CAMAT</option>
                  <option value="1113.02">1113.02 - KEPALA DESA</option>
                  <option value="1113.03">1113.03 - LURAH</option>
                  <option value="1113.99">1113.99 - KETUA ADAT DAN KEPALA WILAYAH LAINNYA</option>
                </optgroup>
                <optgroup label="1114 - PIMPINAN ORGANISASI BIDANG KHUSUS">
                  <option value="1114.99">1114.99 - PIMPINAN ORGANISASI BIDANG KHUSUS LAINNYA</option>
                </optgroup>
                <optgroup label="1120 - PIMPINAN EKSEKUTIF DAN DIREKTUR PELAKSANA">
                  <option value="1120.01">1120.01 - CHIEF EXECUTIVE OFFICER/DIREKTUR EKSEKUTIF</option>
                  <option value="1120.02">1120.02 - DIREKTUR UTAMA</option>
                  <option value="1120.03">1120.03 - DIREKTUR PELAKSANA</option>
                  <option value="1120.04">1120.04 - MANAJER REGIONAL/WILAYAH</option>
                  <option value="1120.99">1120.99 - PIMPINAN EKSEKUTIF DAN DIREKTUR PELAKSANA LAINNYA</option>
                </optgroup>
                <optgroup label="1211 - MANAJER KEUANGAN">
                  <option value="1211.01">1211.01 - MANAJER ADMINISTRASI</option>
                  <option value="1211.02">1211.02 - SEKRETARIS PERUSAHAAN</option>
                  <option value="1211.03">1211.03 - MANAJER ADMINISTRASI KEUANGAN</option>
                  <option value="1211.99">1211.99 - MANAJER KEUANGAN LAINNYA</option>
                </optgroup>
                <optgroup label="1212 - MANAJER SUMBER DAYA MANUSIA">
                  <option value="1212.01">1212.01 - MANAJER HUBUNGAN INDUSTRIAL</option>
                  <option value="1212.02">1212.02 - MANAJER PERSONALIA</option>
                  <option value="1212.03">1212.03 - MANAJER PEREKRUTAN</option>
                  <option value="1212.99">1212.99 - MANAJER SUMBER DAYA MANUSIA LAINNYA</option>
                </optgroup>
                <optgroup label="1213 - MANAJER PERENCANAAN DAN KEBIJAKAN">
                  <option value="1213.01">1213.01 - MANAJER KEBIJAKAN</option>
                  <option value="1213.02">1213.02 - MANAJER PERENCANAAN STRATEGIS</option>
                  <option value="1213.03">1213.03 - MANAJER PERENCANAAN KORPORASI</option>
                  <option value="1213.99">1213.99 - MANAJER KEBIJAKAN DAN PERENCANAAN LAINNYA</option>
                </optgroup>
                <optgroup label="1219 - MANAJER PELAYANAN BISNIS DAN ADMINISTRASI BISNIS YTDL">
                  <option value="1219.01">1219.01 - MANAJER JASA ADMINISTRASI</option>
                  <option value="1219.02">1219.02 - MANAJER JASA KEBERSIHAN</option>
                  <option value="1219.03">1219.03 - MANAJER JASA PERUSAHAAN</option>
                  <option value="1219.04">1219.04 - MANAJER SARANA DAN PRASARANA</option>
                  <option value="1219.99">1219.99 - MANAJER PELAYANAN BISNIS DAN ADMINISTRASI BISNIS YTDL LAINNYA</option>
                </optgroup>
                <optgroup label="1221 - MANAJER PENJUALAN DAN PEMASARAN">
                  <option value="1221.01">1221.01 - MANAJER PENJUALAN</option>
                  <option value="1221.02">1221.02 - MANAJER PEMASARAN</option>
                  <option value="1221.99">1221.99 - MANAJER PENJUALAN DAN PEMASARAN LAINNYA</option>
                </optgroup>
                <optgroup label="1222 - MENAJER PERIKLANAN DAN HUBUNGAN MASYARAKAT">
                  <option value="1222.01">1222.01 - MANAJER PERIKLANAN</option>
                  <option value="1222.02">1222.02 - MANAJER HUBUNGAN MASYARAKAT</option>
                  <option value="1222.99">1222.99 - MANAJER PERIKLANAN DAN HUBUNGAN MASYARAKAT LAINNYA</option>
                </optgroup>
                <optgroup label="1223 - MANAJER PENELITIAN DAN PENGEMBANGAN">
                  <option value="1223.01">1223.01 - MANAJER PENELITIAN</option>
                  <option value="1223.02">1223.02 - MANAJER PENGEMBANGAN PRODUK</option>
                  <option value="1223.99">1223.99 - MANAJER PENELITIAN DAN PENGEMBANGAN PRODUK LAINNYA</option>
                </optgroup>
                <optgroup label="1311 - MANAJER PRODUKSI PERTANIAN DAN KEHUTANAN">
                  <option value="1311.01">1311.01 - MANAJER PERTANIAN TANAMAN PANGAN</option>
                  <option value="1311.02">1311.02 - MANAJER PERTANIAN HORTIKULTURA</option>
                  <option value="1311.03">1311.03 - MANAJER PERKEBUNAN</option>
                  <option value="1311.04">1311.04 - MANAJER PETERNAKAN</option>
                  <option value="1311.05">1311.05 - MANAJER KEHUTANAN</option>
                  <option value="1311.99">1311.99 - MANAJER PRODUKSI PERTANIAN DAN KEHUTANAN LAINNYA</option>
                </optgroup>
                <optgroup label="1312 - MANAJER PRODUKSI PERIKANAN TANGKAP DAN PERIKANAN BUDIDAYA">
                  <option value="1312.01">1312.01 - MANAJER PRODUKSI BUDIDAYA PERIKANAN</option>
                  <option value="1312.02">1312.02 - MANAJER OPERASIONAL PENANGKAPAN IKAN</option>
                  <option value="1312.03">1312.03 - KAPTEN KAPAL PENANGKAP IKAN</option>
                  <option value="1312.99">1312.99 - MANAJER PRODUKSI PERIKANAN TANGKAP DAN PERIKANAN BUDIDAYA LAINNYA</option>
                </optgroup>
                <optgroup label="1321 - MANAJER INDUSTRI PENGOLAHAN">
                  <option value="1321.01">1321.01 - MANUFAKTURER (PENGUSAHA INDUSTRI PENGOLAHAN)</option>
                  <option value="1321.02">1321.02 - MANAJER UMUM INDUSTRI PENGOLAHAN</option>
                  <option value="1321.03">1321.03 - MANAJER PRODUKSI DAN OPERASIONAL INDUSTRI PENGOLAHAN</option>
                  <option value="1321.99">1321.99 - MANAJER INDUSTRI PENGOLAHAN LAINNYA</option>
                </optgroup>
                <optgroup label="1322 - MANAJER PERTAMBANGAN DAN PENGGALIAN">
                  <option value="1322.01">1322.01 - MANAJER UMUM PERTAMBANGAN DAN PENGGALIAN</option>
                  <option value="1322.02">1322.02 - MANAJER PRODUKSI PERTAMBANGAN</option>
                  <option value="1322.03">1322.03 - MANAJER PRODUKSI EKSTRAKSI MINYAK DAN GAS</option>
                  <option value="1322.04">1322.04 - MANAJER PRODUKSI PENGGALIAN</option>
                  <option value="1322.99">1322.99 - MANAJER PERTAMBANGAN DAN PENGGALIAN LAINNYA</option>
                </optgroup>
                <optgroup label="1323 - MANAJER KONSTRUKSI">
                  <option value="1323.01">1323.01 - MANAJER PROYEK KONSTRUKSI BANGUNAN SIPIL</option>
                  <option value="1323.02">1323.02 - MANAJER PROYEK KONSTRUKSI BANGUNAN DAN TEMPAT TINGGAL</option>
                  <option value="1323.99">1323.99 - MANAJER KONSTRUKSI LAINNYA</option>
                </optgroup>
                <optgroup label="1324 - MANAJER PENGADAAN, DISTRIBUSI DAN YBDI">
                  <option value="1324.01">1324.01 - MANAJER LOGISTIK</option>
                  <option value="1324.02">1324.02 - MANAJER PENGADAAN DAN DISTRIBUSI</option>
                  <option value="1324.03">1324.03 - MANAJER RANTAI PASOKAN</option>
                  <option value="1324.04">1324.04 - MANAJER GUDANG</option>
                  <option value="1324.05">1324.05 - MANAJER PERUSAHAAN ANGKUTAN</option>
                  <option value="1324.06">1324.06 - KEPALA STASIUN KERETA</option>
                  <option value="1324.07">1324.07 - KEPALA TERMINAL BUS</option>
                  <option value="1324.08">1324.08 - KEPALA ANGKUTAN SUNGAI, DANAU, DAN PENYEBERANGAN (ASDP)</option>
                  <option value="1324.09">1324.09 - KEPALA PELABUHAN LAUT</option>
                  <option value="1324.10">1324.10 - KEPALA BANDAR UDARA</option>
                  <option value="1324.99">1324.99 - MANAJER PENGADAAN, DISTRIBUSI DAN YBDI LAINNYA</option>
                </optgroup>
                <optgroup label="1330 - MANAJER LAYANAN TEKNOLOGI INFORMASI DAN KOMUNIKASI">
                  <option value="1330.01">1330.01 - MANAJER PENGEMBANGAN APLIKASI TEKNOLOGI INFORMASI DAN KOMUNIKASI</option>
                  <option value="1330.02">1330.02 - MANAJER TEKNOLOGI INFORMASI</option>
                  <option value="1330.03">1330.03 - MANAJER OPERASI DATA</option>
                  <option value="1330.04">1330.04 - MANAJER PENGOLAHAN DATA</option>
                  <option value="1330.05">1330.05 - MANAJER PENGEMBANGAN TEKNOLOGI INFORMASI DAN KOMUNIKASI</option>
                  <option value="1330.06">1330.06 - MANAJER SISTEM INFORMASI</option>
                  <option value="1330.07">1330.07 - MANAJER PENYEDIA JASA INTERNET (INTERNET SERVICE PROVIDER/ISP)</option>
                  <option value="1330.08">1330.08 - MANAJER JARINGAN</option>
                  <option value="1330.09">1330.09 - MANAJER POS DAN TELEKOMUNIKASI</option>
                  <option value="1330.99">1330.99 - MANAJER LAYANAN TEKNOLOGI INFORMASI DAN KOMUNIKASI LAINNYA</option>
                </optgroup>
                <optgroup label="1341 - MANAJER JASA PENITIPAN ANAK">
                  <option value="1341.99">1341.99 - MANAJER JASA PENITIPAN ANAK LAINNYA</option>
                </optgroup>
                <optgroup label="1342 - MANAJER JASA KESEHATAN">
                  <option value="1342.01">1342.01 - DIREKTUR KLINIS</option>
                  <option value="1342.02">1342.02 - KOORDINATOR KESEHATAN MASYARAKAT (TERMASUK KEPALA PUSKESMAS)</option>
                  <option value="1342.03">1342.03 - DIREKTUR KEPERAWATAN</option>
                  <option value="1342.04">1342.04 - KEPALA BIDANG PELAYANAN KESEHATAN</option>
                  <option value="1342.05">1342.05 - ADMINISTRATOR KESEHATAN</option>
                  <option value="1342.99">1342.99 - MANAJER JASA KESEHATAN LAINNYA</option>
                </optgroup>
                <optgroup label="1343 - MANAJER JASA PERAWATAN LANJUT USIA">
                  <option value="1343.01">1343.01 - DIREKTUR RUMAH PERAWATAN LANJUT USIA</option>
                  <option value="1343.02">1343.02 - KOORDINATOR KOMUNITAS PERAWATAN LANJUT USIA</option>
                  <option value="1343.03">1343.03 - DIREKTUR RUMAH PERAWATAN INTENSIF LANJUT USIA</option>
                  <option value="1343.04">1343.04 - KOORDINATOR PERKAMPUNGAN PENSIUN</option>
                  <option value="1343.99">1343.99 - MANAJER JASA PERAWATAN LANJUT USIA LAINNYA</option>
                </optgroup>
                <optgroup label="1344 - MANAJER KESEJAHTERAAN SOSIAL">
                  <option value="1344.01">1344.01 - MANAJER PUSAT KOMUNITAS MASYARAKAT</option>
                  <option value="1344.02">1344.02 - MANAJER PELAYANAN KELUARGA</option>
                  <option value="1344.03">1344.03 - MANAJER JASA PERUMAHAN</option>
                  <option value="1344.04">1344.04 - MANAJER PUSAT KESEJAHTERAAN</option>
                  <option value="1344.99">1344.99 - MANAJER KESEJAHTERAAN SOSIAL LAINNYA</option>
                </optgroup>
                <optgroup label="1345 - MANAJER PENDIDIKAN">
                  <option value="1345.01">1345.01 - REKTOR</option>
                  <option value="1345.02">1345.02 - DEKAN</option>
                  <option value="1345.03">1345.03 - KEPALA SEKOLAH SMA DAN SEDERAJAT</option>
                  <option value="1345.04">1345.04 - KEPALA SEKOLAH SMP DAN SEDERAJAT</option>
                  <option value="1345.05">1345.05 - KEPALA SEKOLAH SD DAN SEDERAJAT</option>
                  <option value="1345.06">1345.06 - KEPALA SEKOLAH TK DAN SEDERAJAT</option>
                  <option value="1345.07">1345.07 - KEPALA SEKOLAH KELOMPOK BERMAIN/PENDIDIKAN ANAK USIA DINI</option>
                  <option value="1345.08">1345.08 - MANAJER LEMBAGA BIMBINGAN BELAJAR</option>
                  <option value="1345.09">1345.09 - MANAJER LEMBAGA PENDIDIKAN BAHASA</option>
                  <option value="1345.10">1345.10 - MANAJER LEMBAGA PENDIDIKAN MATEMATIKA</option>
                  <option value="1345.11">1345.11 - MANAJER LEMBAGA PENDIDIKAN KOMPUTER</option>
                  <option value="1345.12">1345.12 - MANAJER LEMBAGA PENDIDIKAN AKUNTANSI DAN PEMBUKUAN MANAJEMEN DAN PERBANKAN</option>
                  <option value="1345.13">1345.13 - MANAJER LEMBAGA PENDIDIKAN BUDAYA</option>
                  <option value="1345.99">1345.99 - MANAJER PENDIDIKAN LAINNYA</option>
                </optgroup>
                <optgroup label="1346 - MANAJER CABANG JASA KEUANGAN DAN ASURANSI">
                  <option value="1346.01">1346.01 - MANAJER BANK</option>
                  <option value="1346.02">1346.02 - MANAJER LEMBAGA PERKREDITAN</option>
                  <option value="1346.03">1346.03 - MANAJER KOPERASI</option>
                  <option value="1346.04">1346.04 - MANAJER INVESTASI</option>
                  <option value="1346.05">1346.05 - MANAJER LEMBAGA ASURANSI</option>
                  <option value="1346.06">1346.06 - MANAJER DANA PENSIUN</option>
                  <option value="1346.07">1346.07 - MANAJER PEGADAIAN</option>
                  <option value="1346.99">1346.99 - MANAJER JASA KEUANGAN DAN ASURANSI LAINNYA</option>
                </optgroup>
                <optgroup label="1349 - MANAJER JASA PROFESIONAL LAINNYA">
                  <option value="1349.01">1349.01 - MANAJER ARSIP</option>
                  <option value="1349.02">1349.02 - MANAJER GALERI SENI</option>
                  <option value="1349.03">1349.03 - MANAJER PERPUSTAKAAN</option>
                  <option value="1349.04">1349.04 - MANAJER MUSEUM</option>
                  <option value="1349.05">1349.05 - MANAJER LAYANAN HUKUM</option>
                  <option value="1349.06">1349.06 - KEPALA LEMBAGA PERMASYARAKATAN</option>
                  <option value="1349.99">1349.99 - MANAJER JASA PROFESIONAL LAINNYA YTDL</option>
                </optgroup>
                <optgroup label="1411 - MANAJER HOTEL">
                  <option value="1411.01">1411.01 - MANAJER HOTEL BINTANG</option>
                  <option value="1411.02">1411.02 - MANAJER HOTEL MELATI, MOTEL, DAN WISMA</option>
                  <option value="1411.03">1411.03 - MANAJER PENGINAPAN</option>
                  <option value="1411.04">1411.04 - MANAJER APARTEMEN HOTEL</option>
                  <option value="1411.99">1411.99 - MANAJER HOTEL LAINNYA</option>
                </optgroup>
                <optgroup label="1412 - MANAJER RESTORAN">
                  <option value="1412.01">1412.01 - MANAJER RESTORAN</option>
                  <option value="1412.02">1412.02 - MANAJER WARUNG MAKAN</option>
                  <option value="1412.03">1412.03 - MANAJER KATERING</option>
                  <option value="1412.04">1412.04 - MANAJER KAFE</option>
                  <option value="1412.99">1412.99 - MANAJER RESTORAN LAINNYA</option>
                </optgroup>
                <optgroup label="1420 - MANAJER PERDAGANGAN BESAR DAN ECERAN">
                  <option value="1420.01">1420.01 - MANAJER RITEL (DEPARTEMENT STORE)</option>
                  <option value="1420.02">1420.02 - MANAJER SUPERMAKET/MINIMARKET</option>
                  <option value="1420.03">1420.03 - MANAJER TOKO</option>
                  <option value="1420.04">1420.04 - MANAJER PERDAGANGAN BESAR</option>
                  <option value="1420.99">1420.99 - MANAJER PERDAGANGAN BESAR DAN ECERAN LAINNYA</option>
                </optgroup>
                <optgroup label="1431 - MANAJER PUSAT OLAHRAGA, REKREASI DAN BUDAYA">
                  <option value="1431.01">1431.01 - MANAJER TAMAN HIBURAN/REKREASI</option>
                  <option value="1431.02">1431.02 - MANAJER BILIAR</option>
                  <option value="1431.03">1431.03 - MANAJER BIOSKOP</option>
                  <option value="1431.04">1431.04 - MANAJER TEATER</option>
                  <option value="1431.05">1431.05 - MANAJER PUSAT OLAHRAGA ATAU KEBUGARAN</option>
                  <option value="1431.06">1431.06 - MANAJER SEKOLAH MENGEMUDI</option>
                  <option value="1431.07">1431.07 - MANAJER KLUB OLAHRAGA</option>
                  <option value="1431.99">1431.99 - MANAJER PUSAT OLAHRAGA, REKREASI DAN BUDAYA LAINNYA</option>
                </optgroup>
                <optgroup label="1439 - MANAJER JASA LAINNYA YTDL">
                  <option value="1439.01">1439.01 - MANAJER AGEN PERJALANAN</option>
                  <option value="1439.02">1439.02 - MANAJER PUSAT KONFERENSI</option>
                  <option value="1439.03">1439.03 - MANAJER PUSAT PERBELANJAAN</option>
                  <option value="1439.04">1439.04 - MANAJER BUMI PERKEMAHAN</option>
                  <option value="1439.05">1439.05 - MANAJER PONDOK WISATA</option>
                  <option value="1439.06">1439.06 - MANAJER VILA</option>
                  <option value="1439.07">1439.07 - MANAJER RUMAH KOST</option>
                  <option value="1439.08">1439.08 - MANAJER PUSAT INFORMASI</option>
                  <option value="1439.99">1439.99 - MANAJER JASA LAINNYA YTDL</option>
                </optgroup>
                <optgroup label="2111 - AHLI FISIKA DAN ASTRONOMI">
                  <option value="2111.01">2111.01 - AHLI FISIKA</option>
                  <option value="2111.02">2111.02 - AHLI FISIKA NUKLIR</option>
                  <option value="2111.03">2111.03 - AHLI FISIKA MEKANIKA</option>
                  <option value="2111.04">2111.04 - AHLI FISIKA PANAS</option>
                  <option value="2111.05">2111.05 - AHLI FISIKA SINAR</option>
                  <option value="2111.06">2111.06 - AHLI FISIKA SUARA</option>
                  <option value="2111.07">2111.07 - AHLI FISIKA LISTRIK DAN MAGNIT</option>
                  <option value="2111.08">2111.08 - AHLI FISIKA ELEKTRONIKA</option>
                  <option value="2111.09">2111.09 - AHLI FISIKA MEDIS</option>
                  <option value="2111.10">2111.10 - AHLI ASTRONOMI</option>
                  <option value="2111.99">2111.99 - AHLI FISIKA DAN ASTRONOMI LAINNYA</option>
                </optgroup>
                <optgroup label="2112 - AHLI METEOROLOGI">
                  <option value="2112.01">2112.01 - AHLI METEOROLOGI</option>
                  <option value="2112.02">2112.02 - AHLI KLIMATOLOGI</option>
                  <option value="2112.03">2112.03 - AHLI PRAKIRAAN CUACA</option>
                  <option value="2112.04">2112.04 - AHLI HIDROMETEOROLOGI</option>
                  <option value="2112.99">2112.99 - AHLI METEOROLOGI LAINNYA</option>
                </optgroup>
                <optgroup label="2113 - AHLI KIMIA">
                  <option value="2113.01">2113.01 - AHLI KIMIA (UMUM)</option>
                  <option value="2113.02">2113.02 - AHLI KIMIA ORGANIK</option>
                  <option value="2113.03">2113.03 - AHLI KIMIA ANORGANIK</option>
                  <option value="2113.04">2113.04 - AHLI KIMIA FISIKA</option>
                  <option value="2113.05">2113.05 - AHLI KIMIA ANALITIK</option>
                  <option value="2113.99">2113.99 - AHLI KIMIA LAINNYA</option>
                </optgroup>
                <optgroup label="2114 - AHLI GEOLOGI DAN GEOFISIKA">
                  <option value="2114.01">2114.01 - AHLI GEOLOGI</option>
                  <option value="2114.02">2114.02 - AHLI GEOLOGI KELAUTAN</option>
                  <option value="2114.03">2114.03 - AHLI GEOFISIKA</option>
                  <option value="2114.04">2114.04 - AHLI GEOFISIKA KELAUTAN</option>
                  <option value="2114.99">2114.99 - AHLI GEOLOGI DAN GEOFISIKA LAINNYA</option>
                </optgroup>
                <optgroup label="2120 - AHLI MATEMATIKA, AKTUARIA DAN STATISTIKA">
                  <option value="2120.01">2120.01 - AHLI MATEMATIKA MURNI</option>
                  <option value="2120.02">2120.02 - AHLI MATEMATIKA TERAPAN</option>
                  <option value="2120.03">2120.03 - AHLI ANALISIS RISET OPERASI (QUALITY CONTROL MANAGEMENT)</option>
                  <option value="2120.04">2120.04 - AKTUARIS</option>
                  <option value="2120.05">2120.05 - AHLI STATISTIKA (UMUM)</option>
                  <option value="2120.06">2120.06 - AHLI STATISTIKA MATEMATIKA</option>
                  <option value="2120.07">2120.07 - AHLI STATISTIKA (TERAPAN)</option>
                  <option value="2120.99">2120.99 - AHLI MATEMATIKA, AKTUARIA DAN STATISTIKA LAINNYA</option>
                </optgroup>
                <optgroup label="2131 - AHLI BIOLOGI, BOTANI, ZOOLOGI DAN YBDI">
                  <option value="2131.01">2131.01 - AHLI PERILAKU HEWAN</option>
                  <option value="2131.02">2131.02 - AHLI BAKTERIOLOGI</option>
                  <option value="2131.03">2131.03 - AHLI BIOLOGI (UMUM)</option>
                  <option value="2131.04">2131.04 - AHLI BIOLOGI KELAUTAN</option>
                  <option value="2131.05">2131.05 - AHLI BIOLOGI MOLEKULER</option>
                  <option value="2131.06">2131.06 - AHLI BOTANI</option>
                  <option value="2131.07">2131.07 - AHLI ZOOLOGI</option>
                  <option value="2131.08">2131.08 - AHLI BIOKIMIA</option>
                  <option value="2131.09">2131.09 - AHLI ANATOMI</option>
                  <option value="2131.10">2131.10 - AHLI FISIOLOGI</option>
                  <option value="2131.11">2131.11 - AHLI PATOLOGIS MEDIS</option>
                  <option value="2131.12">2131.12 - AHLI PATOLOGIS HEWAN</option>
                  <option value="2131.13">2131.13 - AHLI FARMAKOLOGI</option>
                  <option value="2131.99">2131.99 - AHLI BIOLOGI, BOTANI, ZOOLOGI DAN YBDI LAINNYA</option>
                </optgroup>
                <optgroup label="2132 - PENASEHAT PERTANIAN, KEHUTANAN DAN PERIKANAN">
                  <option value="2132.01">2132.01 - AHLI AGRONOMI</option>
                  <option value="2132.02">2132.02 - AHLI KEHUTANAN</option>
                  <option value="2132.03">2132.03 - KONSULTAN PERTANIAN, KEHUTANAN DAN PERIKANAN</option>
                  <option value="2132.04">2132.04 - AHLI PENELITIAN TANAH</option>
                  <option value="2132.05">2132.05 - AHLI HORTIKULTURA</option>
                  <option value="2132.99">2132.99 - PENASEHAT PERTANIAN, KEHUTANAN DAN PERIKANAN LAINNYA</option>
                </optgroup>
                <optgroup label="2133 - AHLI PERLINDUNGAN LINGKUNGAN">
                  <option value="2133.01">2133.01 - AHLI EKOLOGI</option>
                  <option value="2133.02">2133.02 - ANALIS POLUSI UDARA</option>
                  <option value="2133.03">2133.03 - ILMUWAN KONSERVASI</option>
                  <option value="2133.04">2133.04 - AUDITOR LINGKUNGAN</option>
                  <option value="2133.05">2133.05 - KONSULTAN LINGKUNGAN</option>
                  <option value="2133.06">2133.06 - ILMUWAN LINGKUNGAN</option>
                  <option value="2133.07">2133.07 - ANALIS MUTU AIR</option>
                  <option value="2133.99">2133.99 - AHLI PERLINDUNGAN LINGKUNGAN LAINNYA</option>
                </optgroup>
                <optgroup label="2141 - AHLI TEKNIK INDUSTRI DAN PRODUKSI">
                  <option value="2141.01">2141.01 - AHLI TEKNIK EFISIENSI INDUSTRI</option>
                  <option value="2141.02">2141.02 - AHLI TEKNIK SISTEM DAN METODA KERJA INDUSTRI</option>
                  <option value="2141.03">2141.03 - AHLI TEKNIK PENGUKURAN KERJA INDUSTRI</option>
                  <option value="2141.04">2141.04 - AHLI TEKNIK MESIN INDUSTRI (PLANT INDUSTRIAL ENGINEER)</option>
                  <option value="2141.05">2141.05 - AHLI TEKNIK PRODUKSI INDUSTRI</option>
                  <option value="2141.99">2141.99 - AHLI TEKNIK INDUSTRI DAN PRODUKSI LAINNYA</option>
                </optgroup>
                <optgroup label="2142 - AHLI TEKNIK SIPIL">
                  <option value="2142.01">2142.01 - AHLI TEKNIK SIPIL (UMUM)</option>
                  <option value="2142.02">2142.02 - AHLI TEKNIK KONSTRUKSI BANGUNAN</option>
                  <option value="2142.03">2142.03 - AHLI TEKNIK KONSTRUKSI JALAN</option>
                  <option value="2142.04">2142.04 - AHLI TEKNIK KONSTRUKSI LANDASAN PESAWAT UDARA</option>
                  <option value="2142.05">2142.05 - AHLI TEKNIK KONSTRUKSI JALAN KERETA API</option>
                  <option value="2142.06">2142.06 - AHLI TEKNIK KONSTRUKSI JEMBATAN</option>
                  <option value="2142.07">2142.07 - AHLI TEKNIK PENYEHATAN LINGKUNGAN</option>
                  <option value="2142.08">2142.08 - AHLI TEKNIK PENGAIRAN</option>
                  <option value="2142.09">2142.09 - AHLI TEKNIK MEKANIKA TANAH</option>
                  <option value="2142.99">2142.99 - AHLI TEKNIK SIPIL LAINNYA</option>
                </optgroup>
                <optgroup label="2143 - AHLI TEKNIK LINGKUNGAN">
                  <option value="2143.01">2143.01 - AHLI TEKNIK LINGKUNGAN</option>
                  <option value="2143.02">2143.02 - ANALIS LINGKUNGAN</option>
                  <option value="2143.03">2143.03 - SPESIALIS REHABILITASI LINGKUNGAN</option>
                  <option value="2143.99">2143.99 - AHLI TEKNIK LINGKUNGAN LAINNYA</option>
                </optgroup>
                <optgroup label="2144 - AHLI TEKNIK MEKANIKA">
                  <option value="2144.01">2144.01 - AHLI TEKNIK MESIN (UMUM)</option>
                  <option value="2144.02">2144.02 - AHLI TEKNIK MESIN DAN PERALATAN INDUSTRI</option>
                  <option value="2144.03">2144.03 - AHLI TEKNIK MESIN MOTOR PENGGERAK (SELAIN MESIN KAPAL)</option>
                  <option value="2144.04">2144.04 - AHLI TEKNIK MESIN KAPAL</option>
                  <option value="2144.05">2144.05 - AHLI TEKNIK KONSTRUKSI KAPAL</option>
                  <option value="2144.06">2144.06 - AHLI TEKNIK INDUSTRI PESAWAT TERBANG</option>
                  <option value="2144.07">2144.07 - AHLI TEKNIK MOBIL</option>
                  <option value="2144.08">2144.08 - AHLI TEKNIK PEMANASAN, VENTILASI DAN PENDINGINAN</option>
                  <option value="2144.09">2144.09 - AHLI TEKNIK MESIN TENAGA ATOM</option>
                  <option value="2144.99">2144.99 - AHLI TEKNIK MEKANIKAL LAINNYA</option>
                </optgroup>
                <optgroup label="2145 - AHLI TEKNIK KIMIA">
                  <option value="2145.01">2145.01 - AHLI TEKNIK KIMIA (UMUM)</option>
                  <option value="2145.02">2145.02 - AHLI TEKNIK KIMIA BAHAN BAKAR</option>
                  <option value="2145.03">2145.03 - AHLI TEKNIK KIMIA PLASTIK</option>
                  <option value="2145.99">2145.99 - AHLI TEKNIK KIMIA LAINNYA</option>
                </optgroup>
                <optgroup label="2146 - AHLI TEKNIK PERTAMBANGAN, METALURGI DAN YBDI">
                  <option value="2146.01">2146.01 - AHLI TEKNIK PERTAMBANGAN (UMUM)</option>
                  <option value="2146.02">2146.02 - AHLI TEKNIK PERTAMBANGAN BATU BARA</option>
                  <option value="2146.03">2146.03 - AHLI TEKNIK PERTAMBANGAN LOGAM</option>
                  <option value="2146.04">2146.04 - AHLI TEKNIK PERTAMBANGAN MINYAK BUMI DAN GAS ALAM</option>
                  <option value="2146.05">2146.05 - AHLI METALURGI EKSTRAKSI</option>
                  <option value="2146.06">2146.06 - AHLI METALURGI FISIKA</option>
                  <option value="2146.99">2146.99 - AHLI TEKNIK PERTAMBANGAN, METALURGI DAN YBDI LAINNYA</option>
                </optgroup>
                <optgroup label="2149 - AHLI TEKNIK LAIN YTDL">
                  <option value="2149.01">2149.01 - AHLI TEKNIK KERAMIK DAN KACA</option>
                  <option value="2149.02">2149.02 - AHLI TEKNIK PERTANIAN</option>
                  <option value="2149.03">2149.03 - AHLI TEKNIK BAHAN MAKANAN DAN MINUMAN</option>
                  <option value="2149.04">2149.04 - AHLI TEKNIK TEKSTIL</option>
                  <option value="2149.05">2149.05 - AHLI TEKNIK PERENCANAAN SISTEM LALU-LINTAS</option>
                  <option value="2149.06">2149.06 - AHLI TEKNIK BIOMEDIS</option>
                  <option value="2149.07">2149.07 - AHLI TEKNIK BAHAN PELEDAK</option>
                  <option value="2149.08">2149.08 - AHLI TEKNIK SALVAGE (PENYELAMATAN LAUT)</option>
                  <option value="2149.09">2149.09 - AHLI TEKNIK KESELAMATAN</option>
                  <option value="2149.10">2149.10 - AHLI TEKNIK OPTIKAL</option>
                  <option value="2149.99">2149.99 - AHLI TEKNIK LAIN YTDL</option>
                </optgroup>
                <optgroup label="2151 - AHLI TEKNIK LISTRIK">
                  <option value="2151.01">2151.01 - AHLI TEKNIK LISTRIK (UMUM)</option>
                  <option value="2151.02">2151.02 - AHLI TEKNIK PEMBANGKIT TENAGA LISTRIK</option>
                  <option value="2151.03">2151.03 - AHLI TEKNIK DISTRIBUSI DAN TRANSMISI TENAGA LISTRIK</option>
                  <option value="2151.04">2151.04 - AHLI TEKNIK ELEKTROMEKANIK</option>
                  <option value="2151.99">2151.99 - AHLI TEKNIK LISTRIK LAINNYA</option>
                </optgroup>
                <optgroup label="2152 - AHLI TEKNIK ELEKTRONIK">
                  <option value="2152.01">2152.01 - AHLI TEKNIK ELEKTRONIK (UMUM)</option>
                  <option value="2152.02">2152.02 - AHLI TEKNIK PERANGKAT KERAS KOMPUTER</option>
                  <option value="2152.03">2152.03 - AHLI TEKNIK INSTRUMENTASI (ALAT UKUR)</option>
                  <option value="2152.99">2152.99 - AHLI TEKNIK ELEKTRONIK LAINNYA</option>
                </optgroup>
                <optgroup label="2153 - AHLI TEKNIK TELEKOMUNIKASI">
                  <option value="2153.01">2153.01 - AHLI TEKNIK TELEKOMUNIKASI</option>
                  <option value="2153.02">2153.02 - AHLI TEKNIK PENYIARAN DAN AUDIO VISUAL</option>
                  <option value="2153.03">2153.03 - AHLI TEKNOLOGI REKAYASA TELEKOMUNIKASI</option>
                  <option value="2153.99">2153.99 - AHLI TEKNIK TELEKOMUNIKASI LAINNYA</option>
                </optgroup>
                <optgroup label="2161 - ARSITEK BANGUNAN">
                  <option value="2161.01">2161.01 - ARSITEK BANGUNAN</option>
                  <option value="2161.02">2161.02 - ARSITEK INTERIOR</option>
                  <option value="2161.99">2161.99 - ARSITEK BANGUNAN LAINNYA</option>
                </optgroup>
                <optgroup label="2162 - ARSITEK PERTAMANAN/LANSEKAP">
                  <option value="2162.01">2162.01 - ARSITEK PERTAMANAN/LANSEKAP</option>
                </optgroup>
                <optgroup label="2163 - PERANCANG PRODUK DAN PAKAIAN JADI">
                  <option value="2163.01">2163.01 - PERANCANG KOSTUM</option>
                  <option value="2163.02">2163.02 - PERANCANG BUSANA</option>
                  <option value="2163.03">2163.03 - PERANCANG PERHIASAN</option>
                  <option value="2163.04">2163.04 - PERANCANG PRODUK INDUSTRI</option>
                  <option value="2163.99">2163.99 - PERANCANG PRODUK DAN PAKAIAN JADI LAINNYA</option>
                </optgroup>
                <optgroup label="2164 - PERENCANA TATA KOTA DAN LALU LINTAS">
                  <option value="2164.01">2164.01 - PERENCANA LAHAN</option>
                  <option value="2164.02">2164.02 - PERENCANA TATA KOTA</option>
                  <option value="2164.03">2164.03 - PERENCANA LALU LINTAS</option>
                  <option value="2164.99">2164.99 - PERENCANA TATA KOTA DAN LALU LINTAS LAINNYA</option>
                </optgroup>
                <optgroup label="2165 - AHLI PEMETAAN DAN SURVEYOR">
                  <option value="2165.01">2165.01 - SURVEYOR TANAH</option>
                  <option value="2165.02">2165.02 - SURVEYOR PERTAMBANGAN</option>
                  <option value="2165.03">2165.03 - SURVEYOR HIDROGRAFI</option>
                  <option value="2165.04">2165.04 - SURVEYOR TOPOGRAFI</option>
                  <option value="2165.05">2165.05 - SURVEYOR AERIAL</option>
                  <option value="2165.06">2165.06 - SURVEYOR CADASTRAL</option>
                  <option value="2165.07">2165.07 - AHLI PEMETAAN (KARTOGRAFER)</option>
                  <option value="2165.99">2165.99 - AHLI PEMETAAN DAN SURVEYOR LAINNYA</option>
                </optgroup>
                <optgroup label="2166 - PERANCANG GRAFIS DAN MULTIMEDIA">
                  <option value="2166.01">2166.01 - ANIMATOR</option>
                  <option value="2166.02">2166.02 - SENIMAN DIGITAL</option>
                  <option value="2166.03">2166.03 - PERANCANG GRAFIS</option>
                  <option value="2166.04">2166.04 - ILUSTRATOR TEKNIK</option>
                  <option value="2166.05">2166.05 - PERANCANG PERMAINAN INTERAKTIF</option>
                  <option value="2166.06">2166.06 - ILUSTRATOR</option>
                  <option value="2166.07">2166.07 - SENIMAN LITHOGRAFI</option>
                  <option value="2166.08">2166.08 - DESAINER MULTIMEDIA</option>
                  <option value="2166.09">2166.09 - DESAINER PUBLIKASI</option>
                  <option value="2166.10">2166.10 - DESAINER WEB</option>
                  <option value="2166.99">2166.99 - PERANCANG GRAFIS DAN MULTIMEDIA LAINNYA</option>
                </optgroup>
                <optgroup label="2211 - PRAKTISI DOKTER UMUM">
                  <option value="2211.01">2211.01 - DOKTER UMUM</option>
                  <option value="2211.02">2211.02 - DOKTER/TERAPIS MEDIS WILAYAH</option>
                  <option value="2211.03">2211.03 - DOKTER KELUARGA</option>
                  <option value="2211.99">2211.99 - PRAKTISI DOKTER UMUM LAINNYA</option>
                </optgroup>
                <optgroup label="2212 - PRAKTISI DOKTER SPESIALIS">
                  <option value="2212.01">2212.01 - DOKTER SPESIALIS ANESTHESIA</option>
                  <option value="2212.02">2212.02 - DOKTER SPESIALIS JANTUNG</option>
                  <option value="2212.03">2212.03 - DOKTER SPESIALIS KULIT DAN KELAMIN</option>
                  <option value="2212.04">2212.04 - DOKTER SPESIALIS TELINGA, HIDUNG DAN TENGGOROKAN</option>
                  <option value="2212.05">2212.05 - DOKTER SPESIALIS KANDUNGAN</option>
                  <option value="2212.06">2212.06 - DOKTER SPESIALIS MATA</option>
                  <option value="2212.07">2212.07 - DOKTER SPESIALIS ANAK</option>
                  <option value="2212.08">2212.08 - PSIKIATER</option>
                  <option value="2212.09">2212.09 - DOKTER SPESIALIS PENYAKIT DALAM</option>
                  <option value="2212.10">2212.10 - DOKTER SPESIALIS SARAF</option>
                  <option value="2212.11">2212.11 - DOKTER SPESIALIS PATOLOGI</option>
                  <option value="2212.12">2212.12 - DOKTER SPESIALIS PARU</option>
                  <option value="2212.13">2212.13 - DOKTER SPESIALIS RADIOLOGI</option>
                  <option value="2212.14">2212.14 - DOKTER SPESIALIS BEDAH UMUM</option>
                  <option value="2212.15">2212.15 - DOKTER SPESIALIS BEDAH DIGESTIF</option>
                  <option value="2212.16">2212.16 - DOKTER SPESIALIS BEDAH SYARAF</option>
                  <option value="2212.17">2212.17 - DOKTER SPESIALIS BEDAH ORTHOPEDI DAN TRAUMATOLOGI</option>
                  <option value="2212.18">2212.18 - DOKTER SPESIALIS BEDAH ONKOLOGI</option>
                  <option value="2212.99">2212.99 - PRAKTISI DOKTER SPESIALIS LAINNYA</option>
                </optgroup>
                <optgroup label="2221 - PROFESIONAL KEPERAWATAN">
                  <option value="2221.01">2221.01 - PERAWAT AHLI</option>
                  <option value="2221.02">2221.02 - PERAWAT SPESIALIS</option>
                  <option value="2221.03">2221.03 - PERAWAT KESEHATAN MASYARAKAT</option>
                  <option value="2221.04">2221.04 - PERAWAT KESEHATAN KERJA</option>
                  <option value="2221.05">2221.05 - PERAWAT</option>
                  <option value="2221.06">2221.06 - PERAWAT ANASTESI</option>
                  <option value="2221.07">2221.07 - PERAWAT PENDIDIK</option>
                  <option value="2221.99">2221.99 - PROFESIONAL KEPERAWATAN LAINNYA</option>
                </optgroup>
                <optgroup label="2222 - PROFESIONAL KEBIDANAN">
                  <option value="2222.01">2222.01 - BIDAN AHLI</option>
                  <option value="2222.02">2222.02 - BIDAN</option>
                  <option value="2222.99">2222.99 - PROFESIONAL KEBIDANAN LAINNYA</option>
                </optgroup>
                <optgroup label="2230 - PROFESIONAL PENGOBATAN TRADISIONAL DAN KOMPLEMENTER">
                  <option value="2230.01">2230.01 - AHLI AKUPUNTUR</option>
                  <option value="2230.02">2230.02 - AHLI PENGOBATAN HERBAL CINA</option>
                  <option value="2230.03">2230.03 - PRAKTISI AYURVEDIC</option>
                  <option value="2230.04">2230.04 - AHLI HOMEOPATI</option>
                  <option value="2230.05">2230.05 - AHLI NATUROPATI</option>
                  <option value="2230.06">2230.06 - PRAKTISI UNANI</option>
                  <option value="2230.99">2230.99 - PROFESIONAL PENGOBATAN TRADISIONAL DAN KOMPLEMENTER LAINNYA</option>
                </optgroup>
                <optgroup label="2240 - PRAKTISI PARAMEDIC">
                  <option value="2240.01">2240.01 - ASISTEN MEDIK</option>
                  <option value="2240.02">2240.02 - PARAMEDIS</option>
                  <option value="2240.03">2240.03 - TEKNISI BEDAH</option>
                  <option value="2240.99">2240.99 - PRAKTISI PARAMEDIS LAINNYA</option>
                </optgroup>
                <optgroup label="2250 - DOKTER HEWAN">
                  <option value="2250.01">2250.01 - DOKTER HEWAN (UMUM)</option>
                  <option value="2250.02">2250.02 - DOKTER HEWAN KESEHATAN MASYARAKAT</option>
                  <option value="2250.03">2250.03 - DOKTER BEDAH HEWAN</option>
                  <option value="2250.04">2250.04 - AHLI PENYAKIT HEWAN (PATOLOGI)</option>
                  <option value="2250.05">2250.05 - AHLI EPIDEMIOLOGI HEWAN</option>
                  <option value="2250.99">2250.99 - DOKTER HEWAN LAINNYA</option>
                </optgroup>
                <optgroup label="2261 - DOKTER GIGI">
                  <option value="2261.01">2261.01 - DOKTER GIGI (UMUM)</option>
                  <option value="2261.02">2261.02 - DOKTER GIGI SPESIALIS</option>
                  <option value="2261.03">2261.03 - DOKTER GIGI KESEHATAN MASYARAKAT</option>
                  <option value="2261.04">2261.04 - ASISTEN BEDAH GIGI</option>
                  <option value="2261.05">2261.05 - AHLI KESEHATAN GIGI</option>
                  <option value="2261.06">2261.06 - BEDAH GIGI</option>
                  <option value="2261.07">2261.07 - ENDODONTIST</option>
                  <option value="2261.08">2261.08 - AHLI BEDAH MULUT DAN MAXILLOFACIAL</option>
                  <option value="2261.09">2261.09 - AHLI PENYAKIT MULUT</option>
                  <option value="2261.10">2261.10 - ORTODONTIS</option>
                  <option value="2261.11">2261.11 - PAEDODONTIST</option>
                  <option value="2261.12">2261.12 - PERIODONTIST</option>
                  <option value="2261.13">2261.13 - PROSTHODONTIST</option>
                  <option value="2261.14">2261.14 - STOMATOLOGIST</option>
                  <option value="2261.99">2261.99 - DOKTER GIGI LAINNYA</option>
                </optgroup>
                <optgroup label="2262 - APOTEKER">
                  <option value="2262.01">2262.01 - APOTEKER</option>
                  <option value="2262.99">2262.99 - APOTEKER LAINNYA</option>
                </optgroup>
                <optgroup label="2263 - AHLI KESEHATAN DAN KEBERSIHAN LINGKUNGAN KERJA">
                  <option value="2263.01">2263.01 - PETUGAS KESEHATAN LINGKUNGAN</option>
                  <option value="2263.02">2263.02 - PENASIHAT KESEHATAN DAN KESELAMATAN KERJA</option>
                  <option value="2263.03">2263.03 - AHLI KEBERSIHAN LINGKUNGAN KERJA</option>
                  <option value="2263.04">2263.04 - AHLI PROTEKSI RADIASI</option>
                  <option value="2263.99">2263.99 - AHLI KESEHATAN DAN KEBERSIHAN LINGKUNGAN LAINNYA</option>
                </optgroup>
                <optgroup label="2264 - AHLI FISIOTERAPI">
                  <option value="2264.01">2264.01 - AHLI FISIOTERAPI</option>
                  <option value="2264.02">2264.02 - AHLI TERAPI REHABILITASI ORANG CACAT</option>
                  <option value="2264.03">2264.03 - TERAPIS GERIATRI (TERAPIS LANSIA)</option>
                  <option value="2264.04">2264.04 - TERAPIS PEDIATRI (TERAPIS ANAK)</option>
                  <option value="2264.05">2264.05 - TERAPIS ORTOPEDI (TERAPIS ALAT GERAK)</option>
                  <option value="2264.99">2264.99 - AHLI FISIOTERAPI LAINNYA</option>
                </optgroup>
                <optgroup label="2265 - AHLI DIET DAN GIZI">
                  <option value="2265.01">2265.01 - AHLI DIET (UMUM)</option>
                  <option value="2265.02">2265.02 - AHLI DIET KLINIS</option>
                  <option value="2265.03">2265.03 - AHLI DIET LAYANAN MAKANAN</option>
                  <option value="2265.04">2265.04 - AHLI GIZI</option>
                  <option value="2265.05">2265.05 - AHLI GIZI KESEHATAN MASYARAKAT</option>
                  <option value="2265.06">2265.06 - AHLI GIZI OLAHRAGA</option>
                  <option value="2265.99">2265.99 - AHLI DIET DAN GIZI LAINNYA</option>
                </optgroup>
                <optgroup label="2266 - AHLI TERAPIS PENDENGARAN DAN TERAPIS BICARA">
                  <option value="2266.01">2266.01 - AHLI TERAPIS PENDENGARAN</option>
                  <option value="2266.02">2266.02 - AHLI TERAPIS BICARA</option>
                  <option value="2266.99">2266.99 - AHLI TERAPIS PENDENGARAN DAN TERAPIS BICARA</option>
                </optgroup>
                <optgroup label="2267 - AHLI OPTOMETRIK DAN OPTIK OFTALMIK">
                  <option value="2267.01">2267.01 - OPTOMETRIST</option>
                  <option value="2267.02">2267.02 - OPHTHALMIC OPTICIAN</option>
                  <option value="2267.03">2267.03 - ORTHOPTIST</option>
                  <option value="2267.99">2267.99 - AHLI OPTIK OPTOMETRIK DAN OFTALMIK LAINNYA</option>
                </optgroup>
                <optgroup label="2269 - AHLI KESEHATAN YTDL">
                  <option value="2269.01">2269.01 - TERAPIS SENI</option>
                  <option value="2269.02">2269.02 - TERAPIS TARI DAN GERAKAN</option>
                  <option value="2269.03">2269.03 - OKUPASI TERAPIS</option>
                  <option value="2269.04">2269.04 - AHLI PODIATRI (PENYAKIT KAKI)</option>
                  <option value="2269.05">2269.05 - TERAPIS REKREASIONAL</option>
                  <option value="2269.99">2269.99 - AHLI KESEHATAN YTDL LAINNYA</option>
                </optgroup>
                <optgroup label="2310 - DOSEN UNIVERSITAS DAN PENDIDIKAN TINGGI">
                  <option value="2310.01">2310.01 - DOSEN ILMU FISIKA</option>
                  <option value="2310.02">2310.02 - DOSEN ILMU TEKNIK DAN ARSITEKTUR</option>
                  <option value="2310.03">2310.03 - DOSEN ILMU KEDOKTERAN DAN ILMU HAYATI</option>
                  <option value="2310.04">2310.04 - DOSEN ILMU MATEMATIKA</option>
                  <option value="2310.05">2310.05 - DOSEN ILMU STATISTIKA</option>
                  <option value="2310.06">2310.06 - DOSEN ILMU EKONOMI DAN ADMINISTRASI NIAGA</option>
                  <option value="2310.07">2310.07 - DOSEN ILMU HUKUM</option>
                  <option value="2310.08">2310.08 - DOSEN ILMU PENDIDIKAN</option>
                  <option value="2310.09">2310.09 - DOSEN ILMU PERTANIAN</option>
                  <option value="2310.10">2310.10 - DOSEN ILMU SOSIAL DAN POLITIK</option>
                  <option value="2310.11">2310.11 - DOSEN ILMU BAHASA, SASTRA, BUDAYA DAN SEJARAH</option>
                  <option value="2310.12">2310.12 - DOSEN ILMU KEAGAMAAN</option>
                  <option value="2310.13">2310.13 - DOSEN ILMU KESEHATAN MASYARAKAT</option>
                  <option value="2310.14">2310.14 - DOSEN ILMU TERAPI KESEHATAN, KEBIDANAN DAN YANG SEJENIS</option>
                  <option value="2310.15">2310.15 - DOSEN ILMU OLAHRAGA</option>
                  <option value="2310.16">2310.16 - DOSEN ILMU TEKNOLOGI INDUSTRI</option>
                  <option value="2310.17">2310.17 - DOSEN ILMU KOMPUTER</option>
                  <option value="2310.99">2310.99 - DOSEN UNIVERSITAS DAN PENDIDIKAN TINGGI LAINNYA</option>
                </optgroup>
                <optgroup label="2320 - PENGAJAR PENDIDIKAN KEJURUAN">
                  <option value="2320.01">2320.01 - INSTRUKTUR TEKNOLOGI OTOMOTIF</option>
                  <option value="2320.02">2320.02 - INSTRUKTUR TATA KECANTIKAN</option>
                  <option value="2320.03">2320.03 - GURU PENDIDIKAN KEJURUAN MENENGAH PERTAMA</option>
                  <option value="2320.04">2320.04 - GURU PENDIDIKAN KEJURUAN MENENGAH ATAS</option>
                  <option value="2320.99">2320.99 - PENGAJAR PENDIDIKAN KEJURUAN LAINNYA</option>
                </optgroup>
                <optgroup label="2330 - GURU PENDIDIKAN MENENGAH">
                  <option value="2330.01">2330.01 - GURU PENDIDIKAN MENENGAH PERTAMA</option>
                  <option value="2330.02">2330.02 - GURU PENDIDIKAN MENENGAH ATAS</option>
                </optgroup>
                <optgroup label="2341 - GURU SEKOLAH DASAR">
                  <option value="2341.01">2341.01 - GURU SEKOLAH DASAR</option>
                </optgroup>
                <optgroup label="2342 - PENDIDIK ANAK USIA DINI">
                  <option value="2342.01">2342.01 - GURU SEKOLAH TAMAN KANAK-KANAK</option>
                  <option value="2342.02">2342.02 - GURU SEKOLAH PENDIDIKAN USIA DINI</option>
                  <option value="2342.99">2342.99 - PENDIDIK ANAK USIA DINI LAINNYA</option>
                </optgroup>
                <optgroup label="2351 - SPESIALIS METODE PENDIDIKAN">
                  <option value="2351.01">2351.01 - KOORDINATOR KURIKULUM</option>
                  <option value="2351.02">2351.02 - PENGEMBANG KURIKULUM</option>
                  <option value="2351.03">2351.03 - SPESIALIS METODE PENDIDIKAN</option>
                  <option value="2351.04">2351.04 - SPESIALIS ALAT BANTU/PERANGKAT</option>
                  <option value="2351.05">2351.05 - PENGAWAS SEKOLAH</option>
                  <option value="2351.99">2351.99 - SPESIALIS METODE PENDIDIKAN LAINNYA</option>
                </optgroup>
                <optgroup label="2352 - GURU SISWA BERKEBUTUHAN KHUSUS">
                  <option value="2352.01">2352.01 - GURU PENDIDIKAN KHUSUS PENYANDANG CACAT</option>
                  <option value="2352.02">2352.02 - GURU PENDUKUNG PEMBELAJARAN</option>
                  <option value="2352.03">2352.03 - GURU REMEDIAL</option>
                  <option value="2352.04">2352.04 - GURU ANAK BERBAKAT</option>
                  <option value="2352.05">2352.05 - GURU TUNA RUNGU</option>
                  <option value="2352.06">2352.06 - GURU TUNA NETRA</option>
                  <option value="2352.99">2352.99 - GURU SISWA BERKEBUTUHAN KHUSUS LAINNYA</option>
                </optgroup>
                <optgroup label="2353 - GURU KURSUS BAHASA">
                  <option value="2353.01">2353.01 - GURU BAHASA INTENSIF</option>
                  <option value="2353.02">2353.02 - GURU PENDIDIKAN UNTUK KEPERLUAN MIGRASI</option>
                  <option value="2353.03">2353.03 - GURU BAHASA PRAKTEK</option>
                  <option value="2353.04">2353.04 - GURU BAHASA ASING</option>
                  <option value="2353.99">2353.99 - GURU KURSUS BAHASA LAINNYA</option>
                </optgroup>
                <optgroup label="2354 - GURU KURSUS MUSIK">
                  <option value="2354.01">2354.01 - GURU GITAR</option>
                  <option value="2354.02">2354.02 - GURU PIANO</option>
                  <option value="2354.03">2354.03 - GURU NYANYI</option>
                  <option value="2354.04">2354.04 - GURU BIOLA</option>
                  <option value="2354.99">2354.99 - GURU KURSUS MUSIK LAINNYA</option>
                </optgroup>
                <optgroup label="2355 - GURU KURSUS SENI">
                  <option value="2355.01">2355.01 - GURU TARI</option>
                  <option value="2355.02">2355.02 - GURU TEATER/DRAMA</option>
                  <option value="2355.03">2355.03 - GURU LUKIS</option>
                  <option value="2355.04">2355.04 - GURU PAHAT/UKIR</option>
                  <option value="2355.99">2355.99 - GURU KURSUS SENI LAINNYA</option>
                </optgroup>
                <optgroup label="2356 - PENGAJAR TEKNOLOGI INFORMASI">
                  <option value="2356.01">2356.01 - PENGAJAR KOMPUTER</option>
                  <option value="2356.02">2356.02 - PENGAJAR SOFTWARE</option>
                  <option value="2356.99">2356.99 - PENGAJAR TEKNOLOGI INFORMASI LAINNYA</option>
                </optgroup>
                <optgroup label="2359 - PROFESIONAL BIDANG PENDIDIKAN LAINNYA YTDL">
                  <option value="2359.01">2359.01 - TUTOR (PENDIDIKAN KHUSUS)</option>
                  <option value="2359.02">2359.02 - PELATIH MATEMATIKA</option>
                  <option value="2359.03">2359.03 - KONSELOR SEKOLAH</option>
                  <option value="2359.99">2359.99 - PROFESIONAL BIDANG PENDIDIKAN LAINNYA YTDL</option>
                </optgroup>
                <optgroup label="2411 - AKUNTAN">
                  <option value="2411.01">2411.01 - AKUNTAN</option>
                  <option value="2411.02">2411.02 - AUDITOR</option>
                  <option value="2411.03">2411.03 - AKUNTAN KONTRAK</option>
                  <option value="2411.04">2411.04 - AKUNTAN BERSERTIFIKAT</option>
                  <option value="2411.05">2411.05 - PENGAWAS KEUANGAN</option>
                  <option value="2411.06">2411.06 - AKUNTAN MANAJEMEN</option>
                  <option value="2411.07">2411.07 - AKUNTAN PAJAK</option>
                  <option value="2411.99">2411.99 - AKUNTAN LAINNYA</option>
                </optgroup>
                <optgroup label="2412 - KONSULTAN KEUANGAN DAN INVESTASI">
                  <option value="2412.01">2412.01 - PERENCANA ESTATE/INVESTASI FISIK</option>
                  <option value="2412.02">2412.02 - PERENCANA KEUANGAN</option>
                  <option value="2412.99">2412.99 - KONSULTAN KEUANGAN DAN INVESTASI LAINNYA</option>
                </optgroup>
                <optgroup label="2413 - ANALIS KEUANGAN">
                  <option value="2413.01">2413.01 - ANALIS OBLIGASI</option>
                  <option value="2413.02">2413.02 - KONSULTAN INVESTASI</option>
                  <option value="2413.03">2413.03 - KONSULTAN SAHAM</option>
                  <option value="2413.99">2413.99 - ANALIS KEUANGAN LAINNYA</option>
                </optgroup>
                <optgroup label="2421 - ANALIS MANAJEMEN DAN ORGANISASI">
                  <option value="2421.01">2421.01 - ANALIS ORGANISASI DAN METODE</option>
                  <option value="2421.02">2421.02 - KONSULTAN BISNIS</option>
                  <option value="2421.03">2421.03 - KONSULTAN MANAJEMEN</option>
                  <option value="2421.99">2421.99 - ANALIS MANAJEMEN DAN ORGANISASI LAINNYA</option>
                </optgroup>
                <optgroup label="2422 - PROFESIONAL KEBIJAKAN ADMINISTRASI">
                  <option value="2422.01">2422.01 - ANALIS KEBIJAKAN</option>
                  <option value="2422.02">2422.02 - PETUGAS INTELIJEN</option>
                  <option value="2422.99">2422.99 - PROFESIONAL KEBIJAKAN ADMINISTRASI LAINNYA</option>
                </optgroup>
                <optgroup label="2423 - PROFESIONAL PERSONALIA DAN KARIR">
                  <option value="2423.01">2423.01 - PENASIHAT KARIR</option>
                  <option value="2423.02">2423.02 - ANALIS PEKERJAAN</option>
                  <option value="2423.03">2423.03 - ANALIS JABATAN</option>
                  <option value="2423.04">2423.04 - KONSELOR BIMBINGAN KEJURUAN</option>
                  <option value="2423.05">2423.05 - PAKAR SUMBER DAYA MANUSIA</option>
                  <option value="2423.06">2423.06 - AHLI PENEMPATAN KERJA</option>
                  <option value="2423.99">2423.99 - PROFESIONAL PERSONALIA DAN KARIR LAINNYA</option>
                </optgroup>
                <optgroup label="2424 - PROFESIONAL PELATIHAN DAN PENGEMBANGAN STAF">
                  <option value="2424.01">2424.01 - PETUGAS PELATIHAN</option>
                  <option value="2424.02">2424.02 - SPESIALIS PENGEMBANGAN TENAGA KERJA</option>
                  <option value="2424.99">2424.99 - PROFESIONAL PELATIHAN DAN PENGEMBANGAN STAF LAINNYA</option>
                </optgroup>
                <optgroup label="2431 - PROFESIONAL PERIKLANAN DAN PEMASARAN">
                  <option value="2431.01">2431.01 - SPESIALIS PERIKLANAN</option>
                  <option value="2431.02">2431.02 - ANALIS PENELITIAN PASAR</option>
                  <option value="2431.03">2431.03 - SPESIALIS PEMASARAN</option>
                  <option value="2431.99">2431.99 - PROFESIONAL PERIKLANAN DAN PEMASARAN LAINNYA</option>
                </optgroup>
                <optgroup label="2432 - PROFESIONAL HUBUNGAN MASYARAKAT">
                  <option value="2432.01">2432.01 - PROFESIONAL HUBUNGAN MASYARAKAT</option>
                </optgroup>
                <optgroup label="2433 - PROFESIONAL PENJUALAN PRODUK TEKNIK DAN KESEHATAN (SELAIN TIK)">
                  <option value="2433.01">2433.01 - PERWAKILAN PENJUALAN (PRODUK INDUSTRI)</option>
                  <option value="2433.02">2433.02 - PERWAKILAN PENJUALAN (PRODUK MEDIS DAN FARMASI)</option>
                  <option value="2433.03">2433.03 - PERWAKILAN PENJUALAN PRODUK TEKNIK</option>
                  <option value="2433.99">2433.99 - PROFESIONAL PENJUALAN PRODUK TEKNIK DAN KESEHATAN (SELAIN TIK) LAINNYA</option>
                </optgroup>
                <optgroup label="2434 - PROFESIONAL PENJUALAN PRODUK TEKNOLOGI KOMUNIKASI DAN INFORMASI">
                  <option value="2434.01">2434.01 - PROFESIONAL PENJUALAN PRODUK TEKNOLOGI KOMUNIKASI DAN INFORMASI</option>
                </optgroup>
                <optgroup label="2511 - ANALIS SISTEM">
                  <option value="2511.01">2511.01 - ANALIS BISNIS (TI)</option>
                  <option value="2511.02">2511.02 - ANALIS KOMUNIKASI (KOMPUTER)</option>
                  <option value="2511.03">2511.03 - KONSULTAN SISTEM</option>
                  <option value="2511.04">2511.04 - DESAINER SISTEM (TI)</option>
                  <option value="2511.05">2511.05 - ILMUWAN KOMPUTER</option>
                  <option value="2511.99">2511.99 - ANALIS SISTEM LAINNYA</option>
                </optgroup>
                <optgroup label="2512 - PENGEMBANG PERANGKAT LUNAK">
                  <option value="2512.01">2512.01 - ANALIS PROGRAMMER</option>
                  <option value="2512.02">2512.02 - DESAINER SOFTWARE</option>
                  <option value="2512.03">2512.03 - PENGEMBANG SOFTWARE</option>
                  <option value="2512.04">2512.04 - TEKNISI PERANGKAT LUNAK</option>
                  <option value="2512.99">2512.99 - PENGEMBANG PERANGKAT LUNAK LAINNYA</option>
                </optgroup>
                <optgroup label="2513 - PENGEMBANG WEB DAN MULTIMEDIA">
                  <option value="2513.01">2513.01 - PROGRAMMER ANIMASI</option>
                  <option value="2513.02">2513.02 - PROGRAMMER GAME KOMPUTER</option>
                  <option value="2513.03">2513.03 - PENGEMBANG INTERNET</option>
                  <option value="2513.04">2513.04 - PROGRAMMER MULTIMEDIA</option>
                  <option value="2513.05">2513.05 - ARSITEK SITUS</option>
                  <option value="2513.06">2513.06 - PENGEMBANG SITUS</option>
                  <option value="2513.99">2513.99 - PENGEMBANG WEB DAN MULTIMEDIA LAINNYA</option>
                </optgroup>
                <optgroup label="2514 - PEMROGRAM APLIKASI">
                  <option value="2514.01">2514.01 - PEMROGRAM APLIKASI</option>
                </optgroup>
                <optgroup label="2519 - ANALIS DAN PENGEMBANG PERANGKAT LUNAK DAN APLIKASI YTDL">
                  <option value="2519.01">2519.01 - ANALIS JAMINAN MUTU (KOMPUTER)</option>
                  <option value="2519.02">2519.02 - TESTER SOFTWARE</option>
                  <option value="2519.03">2519.03 - TESTER SISTEM</option>
                  <option value="2519.99">2519.99 - ANALIS DAN PENGEMBANG PERANGKAT LUNAK DAN APLIKASI YTDL</option>
                </optgroup>
                <optgroup label="2521 - PENGELOLA DAN PERANCANG DATABASE">
                  <option value="2521.01">2521.01 - ADMINISTRATOR DATA</option>
                  <option value="2521.02">2521.02 - ADMINISTRATOR DATABASE</option>
                  <option value="2521.03">2521.03 - ANALIS DATABASE</option>
                  <option value="2521.04">2521.04 - ARSITEK DATABASE</option>
                  <option value="2521.99">2521.99 - PENGELOLA DAN PERANCANG DATABASE LAINNYA</option>
                </optgroup>
                <optgroup label="2522 - PENGELOLA SISTEM">
                  <option value="2522.01">2522.01 - ADMINISTRATOR SISTEM</option>
                  <option value="2522.02">2522.02 - ADMINISTRATOR JARINGAN</option>
                  <option value="2522.99">2522.99 - PENGELOLA SISTEM LAINNYA</option>
                </optgroup>
                <optgroup label="2523 - PROFESIONAL JARINGAN KOMPUTER">
                  <option value="2523.01">2523.01 - ANALIS KOMUNIKASI (KOMPUTER)</option>
                  <option value="2523.02">2523.02 - ANALIS JARINGAN</option>
                  <option value="2523.99">2523.99 - PROFESIONAL JARINGAN KOMPUTER LAINNYA</option>
                </optgroup>
                <optgroup label="2529 - PROFESIONAL DATABASE DAN JARINGAN YTDL">
                  <option value="2529.01">2529.01 - SPESIALIS FORENSIK DIGITAL</option>
                  <option value="2529.02">2529.02 - SPESIALIS KEAMANAN (TIK)</option>
                  <option value="2529.99">2529.99 - PROFESIONAL DATABASE DAN JARINGAN YTDL</option>
                </optgroup>
                <optgroup label="2611 - PENGACARA">
                  <option value="2611.01">2611.01 - ATTORNEY (JAKSA)</option>
                  <option value="2611.02">2611.02 - BARRISTER (ADVOKAT PADA PENGADILAN TINGGI)</option>
                  <option value="2611.03">2611.03 - LAWYER (PENGACARA)</option>
                  <option value="2611.04">2611.04 - PROSECUTOR (JAKSA PENUNTUT)</option>
                  <option value="2611.05">2611.05 - SOLICITOR (JAKSA AGUNG)</option>
                  <option value="2611.99">2611.99 - PENGACARA LAINNYA</option>
                </optgroup>
                <optgroup label="2612 - HAKIM">
                  <option value="2612.01">2612.01 - HAKIM AGUNG</option>
                  <option value="2612.02">2612.02 - HAKIM</option>
                  <option value="2612.03">2612.03 - HAKIM PENGADILAN NEGERI</option>
                  <option value="2612.99">2612.99 - HAKIM LAINNYA</option>
                </optgroup>
                <optgroup label="2619 - PROFESIONAL HUKUM YTDL">
                  <option value="2619.01">2619.01 - KORONER (PEMERIKSA PENYEBAB KEMATIAN)</option>
                  <option value="2619.02">2619.02 - AHLI HUKUM (SELAIN PENGACARA DAN HAKIM)</option>
                  <option value="2619.03">2619.03 - NOTARIS</option>
                  <option value="2619.99">2619.99 - PROFESIONAL HUKUM YTDL</option>
                </optgroup>
                <optgroup label="2621 - ARSIPARIS DAN KURATOR">
                  <option value="2621.01">2621.01 - PENGARSIP</option>
                  <option value="2621.02">2621.02 - KURATOR GALERI SENI</option>
                  <option value="2621.03">2621.03 - KURATOR MUSEUM</option>
                  <option value="2621.04">2621.04 - MANAJER PENCATATAN (RECORD)</option>
                  <option value="2621.99">2621.99 - ARSIPARIS DAN KURATOR LAINNYA</option>
                </optgroup>
                <optgroup label="2622 - PUSTAKAWAN DAN PROFESIONAL INFORMASI YBDI">
                  <option value="2622.01">2622.01 - AHLI BIBLIOGRAFI</option>
                  <option value="2622.02">2622.02 - JURU KATALOG</option>
                  <option value="2622.03">2622.03 - PUSTAKAWAN</option>
                  <option value="2622.99">2622.99 - PUSTAKAWAN DAN PROFESIONAL INFORMASI YBDI</option>
                </optgroup>
                <optgroup label="2631 - AHLI EKONOMI">
                  <option value="2631.01">2631.01 - AHLI EKONOMI</option>
                  <option value="2631.02">2631.02 - AHLI EKONOMETRIK</option>
                  <option value="2631.03">2631.03 - PENASEHAT EKONOMI</option>
                  <option value="2631.04">2631.04 - ANALIS EKONOMI</option>
                  <option value="2631.05">2631.05 - AHLI EKONOMI PERBURUHAN</option>
                  <option value="2631.99">2631.99 - AHLI EKONOMI LAINNYA</option>
                </optgroup>
                <optgroup label="2632 - AHLI SOSIOLOGI, ANTROPOLOGI DAN PROFESIONAL YBDI">
                  <option value="2632.01">2632.01 - AHLI ANTROPOLOGI</option>
                  <option value="2632.02">2632.02 - AHLI ARKEOLOGI</option>
                  <option value="2632.03">2632.03 - AHLI ETNOLOGI</option>
                  <option value="2632.04">2632.04 - AHLI GEOGRAFI</option>
                  <option value="2632.05">2632.05 - AHLI SOSIOLOGI</option>
                  <option value="2632.99">2632.99 - AHLI SOSIOLOGI, ANTROPOLOGI DAN PROFESIONAL YBDI</option>
                </optgroup>
                <optgroup label="2633 - AHLI FILSAFAT, SEJARAWAN DAN AHLI POLITIK">
                  <option value="2633.01">2633.01 - AHLI FILSAFAT</option>
                  <option value="2633.02">2633.02 - AHLI SEJARAH</option>
                  <option value="2633.03">2633.03 - AHLI POLITIK</option>
                  <option value="2633.04">2633.04 - AHLI GENEALOGI (AHLI SILSILAH)</option>
                  <option value="2633.99">2633.99 - AHLI FILSAFAT, SEJARAWAN DAN AHLI POLITIK LAINNYA</option>
                </optgroup>
                <optgroup label="2634 - PSIKOLOG">
                  <option value="2634.01">2634.01 - PSIKOLOG KLINIS</option>
                  <option value="2634.02">2634.02 - PSIKOLOG PENDIDIKAN</option>
                  <option value="2634.03">2634.03 - PSIKOLOG ORGANISASI</option>
                  <option value="2634.04">2634.04 - PSIKOTERAPIS</option>
                  <option value="2634.05">2634.05 - PSIKOLOG OLAHRAGA</option>
                  <option value="2634.99">2634.99 - PSIKOLOG LAINNYA</option>
                </optgroup>
                <optgroup label="2635 - PROFESIONAL KONSELING DAN PEKERJA SOSIAL">
                  <option value="2635.01">2635.01 - KONSELOR KECANDUAN</option>
                  <option value="2635.02">2635.02 - KONSELOR DUKACITA</option>
                  <option value="2635.03">2635.03 - KONSELOR ANAK DAN REMAJA</option>
                  <option value="2635.04">2635.04 - KONSELOR KELUARGA</option>
                  <option value="2635.05">2635.05 - KONSELOR PERNIKAHAN</option>
                  <option value="2635.06">2635.06 - PETUGAS PAROLE (PEMBEBASAN TAHANAN BERSYARAT)</option>
                  <option value="2635.07">2635.07 - PETUGAS MASA PERCOBAAN</option>
                  <option value="2635.08">2635.08 - PEKERJA SOSIAL</option>
                  <option value="2635.09">2635.09 - ORGANISATOR KESEJAHTERAAN PEREMPUAN</option>
                  <option value="2635.99">2635.99 - PROFESIONAL KONSELING DAN PEKERJA SOSIAL LAINNYA</option>
                </optgroup>
                <optgroup label="2636 - PROFESIONAL PEMIMPIN KEAGAMAAN">
                  <option value="2636.01">2636.01 - IMAM MUSLIM (KYAI)</option>
                  <option value="2636.02">2636.02 - PENDETA KATOLIK</option>
                  <option value="2636.03">2636.03 - PENDETA KRISTEN</option>
                  <option value="2636.04">2636.04 - PENDETA HINDU</option>
                  <option value="2636.05">2636.05 - PENDETA BUDHA</option>
                  <option value="2636.06">2636.06 - PENDETA KONG HU CU</option>
                  <option value="2636.99">2636.99 - PROFESIONAL PEMIMPIN KEAGAMAAN LAINNYA</option>
                </optgroup>
                <optgroup label="2641 - PENGARANG DAN PENULIS YBDI">
                  <option value="2641.01">2641.01 - PENULIS (AUTHOR, WRITER)</option>
                  <option value="2641.02">2641.02 - EDITOR BUKU</option>
                  <option value="2641.03">2641.03 - PENULIS ESSAY</option>
                  <option value="2641.04">2641.04 - PENULIS MEDIA INTERACTIVE</option>
                  <option value="2641.05">2641.05 - NOVELIS</option>
                  <option value="2641.06">2641.06 - PENULIS DRAMA (PLAYWRIGHT)</option>
                  <option value="2641.07">2641.07 - PENULIS PUISI (PENYAIR)</option>
                  <option value="2641.08">2641.08 - PENULIS SCRIPT</option>
                  <option value="2641.09">2641.09 - PENULIS PIDATO (SPEECH WRITER)</option>
                  <option value="2641.10">2641.10 - PENULIS TEKNIK (TECHNICAL WRITER)</option>
                  <option value="2641.99">2641.99 - PENGARANG DAN PENULIS YBDI</option>
                </optgroup>
                <optgroup label="2642 - WARTAWAN">
                  <option value="2642.01">2642.01 - JOURNALIST</option>
                  <option value="2642.02">2642.02 - EDITOR COPY</option>
                  <option value="2642.03">2642.03 - EDITOR SURAT KABAR</option>
                  <option value="2642.04">2642.04 - REPORTER SURAT KABAR</option>
                  <option value="2642.05">2642.05 - WARTAWAN OLAHRAGA</option>
                  <option value="2642.06">2642.06 - SUB EDITOR</option>
                  <option value="2642.07">2642.07 - REPORTER BERITA TV/RADIO</option>
                  <option value="2642.99">2642.99 - WARTAWAN LAINNYA</option>
                </optgroup>
                <optgroup label="2643 - PENERJEMAH, ALIH BAHASA DAN PROFESIONAL BAHASA LAINNYA">
                  <option value="2643.01">2643.01 - PENERJEMAH/INTERPRETER</option>
                  <option value="2643.02">2643.02 - LEXICOGRAPHER (AHLI PERKAMUSAN)</option>
                  <option value="2643.03">2643.03 - PHILOLOGIST (AHLI MANUSKRIP)</option>
                  <option value="2643.04">2643.04 - PENERJEMAH BAHASA ISYARAT (SIGN LANGUAGE INTERPRETER)</option>
                  <option value="2643.05">2643.05 - SUBTITLER</option>
                  <option value="2643.06">2643.06 - TRANSLATOR</option>
                  <option value="2643.07">2643.07 - TRANSLATOR-REVISER</option>
                  <option value="2643.99">2643.99 - PENERJEMAH, ALIH BAHASA DAN PROFESIONAL BAHASA LAINNYA</option>
                </optgroup>
                <optgroup label="2651 - SENIMAN VISUAL">
                  <option value="2651.01">2651.01 - KARTUNIS</option>
                  <option value="2651.02">2651.02 - SENIMAN KERAMIK</option>
                  <option value="2651.03">2651.03 - SENIMAN KOMERSIAL</option>
                  <option value="2651.04">2651.04 - PEMULIH GAMBAR</option>
                  <option value="2651.05">2651.05 - PELUKIS POTRET</option>
                  <option value="2651.06">2651.06 - PEMATUNG</option>
                  <option value="2651.99">2651.99 - SENIMAN VISUAL LAINNYA</option>
                </optgroup>
                <optgroup label="2652 - MUSISI, PENYANYI DAN KOMPOSER">
                  <option value="2652.01">2652.01 - PEMIMPIN BAND</option>
                  <option value="2652.02">2652.02 - KOMPOSER</option>
                  <option value="2652.03">2652.03 - PEMAIN MUSIK</option>
                  <option value="2652.04">2652.04 - KONDUKTOR MUSIK</option>
                  <option value="2652.05">2652.05 - MUSISI KLUB MALAM</option>
                  <option value="2652.06">2652.06 - PENYANYI KLUB MALAM</option>
                  <option value="2652.07">2652.07 - ORCHESTRATOR</option>
                  <option value="2652.08">2652.08 - PENYANYI</option>
                  <option value="2652.09">2652.09 - MUSISI JALAN</option>
                  <option value="2652.10">2652.10 - PENYANYI JALAN</option>
                  <option value="2652.99">2652.99 - MUSISI, PENYANYI DAN KOMPOSER LAINNYA</option>
                </optgroup>
                <optgroup label="2653 - PENARI DAN KOREOGRAFER">
                  <option value="2653.01">2653.01 - KOREOGRAFER</option>
                  <option value="2653.02">2653.02 - PENARI BALET</option>
                  <option value="2653.03">2653.03 - PENARI KLUB MALAM</option>
                  <option value="2653.04">2653.04 - PENARI JALAN</option>
                  <option value="2653.05">2653.05 - PENARI TRADISIONAL</option>
                  <option value="2653.06">2653.06 - PENARI MODERN</option>
                  <option value="2653.99">2653.99 - PENARI DAN KOREOGRAFER LAINNYA</option>
                </optgroup>
                <optgroup label="2654 - PRODUSER DAN SUTRADARA FILM, PEMENTASAN DAN YBDI">
                  <option value="2654.01">2654.01 - SUTRADARA FILM DOKUMENTER</option>
                  <option value="2654.02">2654.02 - EDITOR FILM</option>
                  <option value="2654.03">2654.03 - SUTRADARA FILM</option>
                  <option value="2654.04">2654.04 - PENGARAH FOTOGRAFI</option>
                  <option value="2654.05">2654.05 - SUTRADARA PANGGUNG</option>
                  <option value="2654.06">2654.06 - PENGARAH TEKNIS</option>
                  <option value="2654.07">2654.07 - PENGARAH TEKNIS TELEVISI ATAU RADIO</option>
                  <option value="2654.08">2654.08 - PRODUSER TEATER</option>
                  <option value="2654.99">2654.99 - PRODUSER DAN SUTRADARA FILM, PEMENTASAN DAN YBDI</option>
                </optgroup>
                <optgroup label="2655 - AKTOR">
                  <option value="2655.01">2655.01 - AKTOR</option>
                  <option value="2655.02">2655.02 - ARTIS PANTOMIM</option>
                  <option value="2655.03">2655.03 - PENCERITA</option>
                  <option value="2655.99">2655.99 - AKTOR LAINNYA</option>
                </optgroup>
                <optgroup label="2656 - PENYIAR RADIO, TELEVISI DAN MEDIA LAINNYA">
                  <option value="2656.01">2656.01 - PENYIAR RADIO</option>
                  <option value="2656.02">2656.02 - PENYIAR TELEVISI</option>
                  <option value="2656.03">2656.03 - PEMBACA BERITA</option>
                  <option value="2656.04">2656.04 - PENYIAR OLAHRAGA</option>
                  <option value="2656.99">2656.99 - PENYIAR RADIO, TELEVISI DAN MEDIA LAINNYA</option>
                </optgroup>
                <optgroup label="2659 - SENIMAN KREATIF DAN PETUNJUKAN YTDL">
                  <option value="2659.01">2659.01 - PEMAIN AKROBAT</option>
                  <option value="2659.02">2659.02 - PEMAIN AKROBAT UDARA</option>
                  <option value="2659.03">2659.03 - BADUT</option>
                  <option value="2659.04">2659.04 - AHLI HIPNOTIS</option>
                  <option value="2659.05">2659.05 - PESULAP</option>
                  <option value="2659.06">2659.06 - PEMAIN BONEKA</option>
                  <option value="2659.07">2659.07 - PELAWAK STAND UP KOMEDI</option>
                  <option value="2659.08">2659.08 - VENTRILOQUIST</option>
                  <option value="2659.99">2659.99 - SENIMAN KREATIF DAN PETUNJUKAN YTDL</option>
                </optgroup>
                <optgroup label="3111 - TEKNISI ILMU KIMIA DAN FISIKA">
                  <option value="3111.01">3111.01 - TEKNISI KIMIA</option>
                  <option value="3111.02">3111.02 - TEKNISI GEOLOGI</option>
                  <option value="3111.03">3111.03 - TEKNISI METEOROLOGI</option>
                  <option value="3111.04">3111.04 - TEKNISI FISIKA</option>
                  <option value="3111.99">3111.99 - TEKNISI ILMU KIMIA DAN FISIKA LAINNYA</option>
                </optgroup>
                <optgroup label="3112 - TEKNISI TEKNIK SIPIL">
                  <option value="3112.01">3112.01 - INSPEKTUR BANGUNAN (BUILDING INSPECTOR)</option>
                  <option value="3112.02">3112.02 - TEKNISI BANGUNAN</option>
                  <option value="3112.03">3112.03 - TEKNISI TEKNIK SIPIL</option>
                  <option value="3112.04">3112.04 - INSPEKTUR KEBAKARAN</option>
                  <option value="3112.05">3112.05 - TEKNISI GEOTEKNIK</option>
                  <option value="3112.06">3112.06 - ASISTEN SURVEYOR</option>
                  <option value="3112.99">3112.99 - TEKNISI TEKNIK SIPIL LAINNYA</option>
                </optgroup>
                <optgroup label="3113 - TEKNISI TEKNIK LISTRIK">
                  <option value="3113.01">3113.01 - TEKNISI REKAYASA LISTRIK</option>
                  <option value="3113.02">3113.02 - TEKNISI TEKNIK TRANSMISI TENAGA LISTRIK</option>
                  <option value="3113.03">3113.03 - INSPEKTUR KETENAGALISTRIKAN</option>
                  <option value="3113.99">3113.99 - TEKNISI TEKNIK LISTRIK LAINNYA</option>
                </optgroup>
                <optgroup label="3114 - TEKNISI TEKNIK ELEKTRONIK">
                  <option value="3114.01">3114.01 - TEKNISI TEKNIK ELEKTRONIK</option>
                </optgroup>
                <optgroup label="3115 - TEKNISI TEKNIK MEKANIS">
                  <option value="3115.01">3115.01 - TEKNISI TEKNIK PENERBANGAN</option>
                  <option value="3115.02">3115.02 - TEKNISI TEKNIK KELAUTAN</option>
                  <option value="3115.03">3115.03 - TEKNISI TEKNIK MESIN</option>
                  <option value="3115.99">3115.99 - TEKNISI TEKNIK MEKANIS LAINNYA</option>
                </optgroup>
                <optgroup label="3116 - TEKNISI TEKNIK KIMIA">
                  <option value="3116.01">3116.01 - TEKNISI TEKNIK KIMIA</option>
                  <option value="3116.02">3116.02 - TEKNISI TEKNIK PERMINYAKAN</option>
                  <option value="3116.99">3116.99 - TEKNISI TEKNIK KIMIA LAINNYA</option>
                </optgroup>
                <optgroup label="3117 - TEKNISI PERTAMBANGAN DAN METALURGI">
                  <option value="3117.01">3117.01 - INSPEKTUR TAMBANG</option>
                  <option value="3117.02">3117.02 - TEKNISI TEKNIK PERTAMBANGAN</option>
                  <option value="3117.03">3117.03 - TEKNISI METALURGI</option>
                  <option value="3117.04">3117.04 - INSPEKTUR MINYAK DAN GAS BUMI</option>
                  <option value="3117.99">3117.99 - TEKNISI PERTAMBANGAN DAN METALURGI LAINNYA</option>
                </optgroup>
                <optgroup label="3118 - JURU GAMBAR TEKNIK">
                  <option value="3118.01">3118.01 - JURU GAMBAR TEKNIK/ DRAFTER/OPERATOR CAD</option>
                  <option value="3118.02">3118.02 - ILUSTRATOR TEKNIK</option>
                  <option value="3118.99">3118.99 - JURU GAMBAR TEKNIK LAINNYA</option>
                </optgroup>
                <optgroup label="3119 - TEKNISI ILMU FISIKA DAN TEKNIK YTDL">
                  <option value="3119.01">3119.01 - TEKNISI REKAYASA (PRODUKSI)</option>
                  <option value="3119.02">3119.02 - TEKNISI ROBOT</option>
                  <option value="3119.99">3119.99 - TEKNISI ILMU FISIKA DAN TEKNIK YTDL LAINNYA</option>
                </optgroup>
                <optgroup label="3121 - SUPERVISOR PERTAMBANGAN">
                  <option value="3121.01">3121.01 - SUPERVISOR PERTAMBANGAN LAINNYA</option>
                </optgroup>
                <optgroup label="3122 - SUPERVISOR INDUSTRI PENGOLAHAN">
                  <option value="3122.01">3122.01 - KOORDINATOR AREA MANUFAKTUR</option>
                  <option value="3122.02">3122.02 - SUPERVISOR PERAKITAN</option>
                  <option value="3122.03">3122.03 - MANDOR PEKERJA</option>
                  <option value="3122.04">3122.04 - SUPERVISOR FINISHING</option>
                  <option value="3122.05">3122.05 - SUPERVISOR PRODUKSI MANUFAKTUR</option>
                  <option value="3122.99">3122.99 - SUPERVISOR INDUSTRI PENGOLAHAN LAINNYA</option>
                </optgroup>
                <optgroup label="3123 - SUPERVISOR KONSTRUKSI">
                  <option value="3123.01">3123.01 - PENGAWAS KONSTRUKSI BANGUNAN</option>
                  <option value="3123.02">3123.02 - MANAJER LOKASI KONSTRUKSI (SITE MANAGER)</option>
                  <option value="3123.99">3123.99 - SUPERVISOR KONSTRUKSI LAINNYA</option>
                </optgroup>
                <optgroup label="3131 - OPERATOR MESIN PEMBANGKIT LISTRIK">
                  <option value="3131.01">3131.01 - OPERATOR PEMBANGKIT LISTRIK TENAGA AIR</option>
                  <option value="3131.02">3131.02 - OPERATOR PEMBANGKIT LISTRIK TENAGA NUKLIR</option>
                  <option value="3131.03">3131.03 - OPERATOR PEMBANGKIT LISTRIK TENAGA SURYA</option>
                  <option value="3131.04">3131.04 - OPERATOR MESIN TRANSMISI TENAGA LISTRIK</option>
                  <option value="3131.05">3131.05 - OPERATOR MESIN DISTRIBUSI TENAGA LISTRIK</option>
                  <option value="3131.99">3131.99 - OPERATOR MESIN PEMBANGKIT TENAGA LISTRIK LAINNYA</option>
                </optgroup>
                <optgroup label="3132 - OPERATOR MESIN PEMBAKARAN SAMPAH DAN PENGOLAHAN AIR">
                  <option value="3132.01">3132.01 - OPERATOR MESIN PEMBAKARAN SAMPAH</option>
                  <option value="3132.02">3132.02 - OPERATOR MESIN POMPA</option>
                  <option value="3132.03">3132.03 - OPERATOR PROSES LIMBAH CAIR</option>
                  <option value="3132.04">3132.04 - OPERATOR PENGOLAHAN LIMBAH PADAT</option>
                  <option value="3132.05">3132.05 - OPERATOR PENGOLAHAN AIR LIMBAH</option>
                  <option value="3132.06">3132.06 - OPERATOR MESIN PENGOLAHAN AIR</option>
                  <option value="3132.99">3132.99 - OPERATOR MESIN PEMBAKARAN SAMPAH DAN PENGOLAHAN AIR LAINNYA</option>
                </optgroup>
                <optgroup label="3133 - PENGAWAS MESIN PENGOLAHAN BAHAN KIMIA PENGAWAS MESIN PENGOLAHAN">
                  <option value="3133.01">3133.01 - KIMIA PANAS PENGAWAS MESIN</option>
                  <option value="3133.02">3133.02 - PEMISAHAN DAN PENYARINGAN BAHAN KIMIA</option>
                  <option value="3133.03">3133.03 - PENGAWAS REAKTOR DAN PENYULINGAN BAHAN KIMIA</option>
                  <option value="3133.04">3133.04 - TEKNISI PROSES KIMIA</option>
                  <option value="3133.99">3133.99 - PENGAWAS MESIN PENGOLAHAN BAHAN KIMIA LAINNYA</option>
                </optgroup>
                <optgroup label="3134 - OPERATOR MESIN PENYULINGAN MINYAK TANAH DAN GAS ALAM">
                  <option value="3134.01">3134.01 - PENGAWAS MESIN PENYULINGAN MINYAK BUMI DAN GAS ALAM</option>
                  <option value="3134.02">3134.02 - PENGAWAS PABRIK PARAFFIN</option>
                  <option value="3134.99">3134.99 - PENGAWAS MESIN PENYULINGAN MINYAK BUMI DAN GAS ALAM LAINNYA</option>
                </optgroup>
                <optgroup label="3135 - PENGAWAS PROSES PRODUKSI LOGAM">
                  <option value="3135.01">3135.01 - PENGAWAS TANUR (BLAST FURNACE)</option>
                  <option value="3135.02">3135.02 - PENGAWAS PUSAT KONTROL MESIN CASTER</option>
                  <option value="3135.03">3135.03 - PENGAWAS KONTROL PENGOLAHAN LOGAM</option>
                  <option value="3135.99">3135.99 - PENGAWAS PROSES PRODUKSI LOGAM LAINNYA</option>
                </optgroup>
                <optgroup label="3139 - TEKNISI PROSES KONTROL YTDL">
                  <option value="3139.01">3139.01 - TEKNISI PROSES KONTROL YTDL</option>
                </optgroup>
                <optgroup label="3141 - TEKNISI ILMU HAYATI (SELAIN KEDOKTERAN)">
                  <option value="3141.01">3141.01 - TEKNISI BAKTERIOLOGI</option>
                  <option value="3141.02">3141.02 - TEKNISI BIOKIMIA</option>
                  <option value="3141.03">3141.03 - TEKNISI HERBARIUM</option>
                  <option value="3141.04">3141.04 - TEKNISI FARMAKOLOGI</option>
                  <option value="3141.05">3141.05 - TEKNISI SEROLOGI</option>
                  <option value="3141.06">3141.06 - TEKNISI KULTUR JARINGAN</option>
                  <option value="3141.07">3141.07 - TEKNISI ZOOLOGI</option>
                  <option value="3141.99">3141.99 - TEKNISI ILMU HAYATI (SELAIN KEDOKTERAN) LAINNYA</option>
                </optgroup>
                <optgroup label="3142 - TEKNISI PERTANIAN">
                  <option value="3142.01">3142.01 - TEKNISI PRODUKSI SUSU</option>
                  <option value="3142.02">3142.02 - TEKNISI PERTANIAN TANAMAN PANGAN</option>
                  <option value="3142.03">3142.03 - HERD TESTER (SAMPLING AND ANALYSING MILK FROM EACH COW IN A HERD)</option>
                  <option value="3142.04">3142.04 - TEKNISI PERTANIAN HOLTIKULTURA</option>
                  <option value="3142.05">3142.05 - TEKNISI PERKEBUNAN</option>
                  <option value="3142.06">3142.06 - TEKNISI PETERNAKAN UNGGAS</option>
                  <option value="3142.99">3142.99 - TEKNISI PERTANIAN LAINNYA</option>
                </optgroup>
                <optgroup label="3143 - TEKNISI KEHUTANAN">
                  <option value="3143.01">3143.01 - TEKNISI KEHUTANAN</option>
                  <option value="3143.02">3143.02 - TEKNISI SILVIKULTUR</option>
                  <option value="3143.99">3143.99 - TEKNISI KEHUTANAN LAINNYA</option>
                </optgroup>
                <optgroup label="3151 - TEKNISI KAPAL">
                  <option value="3151.01">3151.01 - TEKNISI KAPAL</option>
                </optgroup>
                <optgroup label="3152 - NAHKODA DAN PERWIRA DEK KAPAL">
                  <option value="3152.01">3152.01 - KAPTEN KAPAL</option>
                  <option value="3152.02">3152.02 - NAHKODA KAPAL</option>
                  <option value="3152.03">3152.03 - KAPTEN KAPAL PESIAR</option>
                  <option value="3152.99">3152.99 - NAHKODA DAN PERWIRA DEK KAPAL LAINNYA</option>
                </optgroup>
                <optgroup label="3153 - PILOT DAN PROFESIONAL YBDI">
                  <option value="3153.01">3153.01 - TEKNISI PESAWAT UDARA</option>
                  <option value="3153.02">3153.02 - INSTRUKTUR PENERBANGAN</option>
                  <option value="3153.03">3153.03 - NAVIGATOR PENERBANGAN</option>
                  <option value="3153.04">3153.04 - PILOT</option>
                  <option value="3153.99">3153.99 - PILOT DAN ASISTEN AHLI YBDI LAINNYA</option>
                </optgroup>
                <optgroup label="3154 - PENGAWAS LALU LINTAS UDARA">
                  <option value="3154.01">3154.01 - PENGAWAS LALU LINTAS UDARA</option>
                </optgroup>
                <optgroup label="3155 - TEKNISI PERANGKAT ELEKTRONIK KESELAMATAN LALU LINTAS UDARA">
                  <option value="3155.01">3155.01 - TEKNISI KESELAMATAN LALU LINTAS UDARA</option>
                  <option value="3155.99">3155.99 - TEKNISI PERANGKAT ELEKTRONIK KESELAMATAN LALU LINTAS UDARA LAINNYA</option>
                </optgroup>
                <optgroup label="3211 - TEKNISI PERALATAN PEREKAM MEDIS DAN TERAPEUTIK">
                  <option value="3211.01">3211.01 - AHLI DIAGNOSTIK RADIOGRAFI MEDIS</option>
                  <option value="3211.02">3211.02 - TEKNISI MAMMOGRAPHY</option>
                  <option value="3211.03">3211.03 - TEKNISI TERAPI RADIASI</option>
                  <option value="3211.04">3211.04 - TEKNISI MEDIS NUKLIR</option>
                  <option value="3211.05">3211.05 - SONOGRAPHER</option>
                  <option value="3211.06">3211.06 - RADIOGRAFER</option>
                  <option value="3211.99">3211.99 - TEKNISI PERALATAN PEREKAM MEDIS DAN TERAPEUTIK LAINNYA</option>
                </optgroup>
                <optgroup label="3212 - TEKNISI LABORATORIUM MEDIS DAN PATOLOGI">
                  <option value="3212.01">3212.01 - TEKNISI BANK DARAH</option>
                  <option value="3212.02">3212.02 - TEKNISI SITOLOGI</option>
                  <option value="3212.03">3212.03 - TEKNISI LABORATORIUM MEDIS</option>
                  <option value="3212.04">3212.04 - TEKNISI PATOLOGI</option>
                  <option value="3212.99">3212.99 - TEKNISI LABORATORIUM MEDIS DAN PATOLOGI LAINNYA</option>
                </optgroup>
                <optgroup label="3213 - TEKNISI DAN ASISTEN FARMASI">
                  <option value="3213.01">3213.01 - TEKNISI FARMASI</option>
                  <option value="3213.02">3213.02 - ASISTEN APOTEKER</option>
                </optgroup>
                <optgroup label="3214 - TEKNISI PROSTETIK MEDIS DAN GIGI">
                  <option value="3214.01">3214.01 - TEKNISI KESEHATAN GIGI</option>
                  <option value="3214.02">3214.02 - DENTURIS</option>
                  <option value="3214.03">3214.03 - ORTHOTIS</option>
                  <option value="3214.04">3214.04 - PROSTETIS</option>
                  <option value="3214.99">3214.99 - TEKNISI PROSTETIK MEDIS DAN GIGI LAINNYA</option>
                </optgroup>
                <optgroup label="3221 - ASISTEN PROFESIONAL KEPERAWATAN">
                  <option value="3221.01">3221.01 - ASISTEN PROFESIONAL PENDAMPING KEPERAWATAN</option>
                  <option value="3221.02">3221.02 - ASISTEN PERAWAT</option>
                  <option value="3221.03">3221.03 - PERAWAT BAGIAN PENDAFTARAN PASIEN</option>
                  <option value="3221.04">3221.04 - PERAWAT PRAKTEK</option>
                  <option value="3221.99">3221.99 - ASISTEN PROFESIONAL KEPERAWATAN LAINNYA</option>
                </optgroup>
                <optgroup label="3222 - ASISTEN PROFESIONAL KEBIDANAN">
                  <option value="3222.01">3222.01 - ASISTEN BIDAN</option>
                  <option value="3222.02">3222.02 - BIDAN TRADISIONAL</option>
                  <option value="3222.99">3222.99 - ASISTEN PROFESIONAL KEBIDANAN LAINNYA</option>
                </optgroup>
                <optgroup label="3230 - ASISTEN PROFESIONAL PENGOBATAN TRADISIONAL DAN KOMPLEMENTER">
                  <option value="3230.01">3230.01 - AHLI PATAH TULANG</option>
                  <option value="3230.02">3230.02 - HERBALIS</option>
                  <option value="3230.03">3230.03 - DUKUN</option>
                  <option value="3230.04">3230.04 - AHLI TERAPI KEROK DAN BEKAM</option>
                  <option value="3230.99">3230.99 - ASISTEN PROFESIONAL PENGOBATAN TRADISIONAL DAN KOMPLEMENTER LAINNYA</option>
                </optgroup>
                <optgroup label="3240 - TEKNISI DAN ASISTEN KEDOKTERAN HEWAN">
                  <option value="3240.01">3240.01 - INSEMINATOR</option>
                  <option value="3240.02">3240.02 - ASISTEN DOKTER HEWAN</option>
                  <option value="3240.03">3240.03 - PERAWAT VETERINER</option>
                  <option value="3240.04">3240.04 - VAKSINATOR HEWAN</option>
                  <option value="3240.99">3240.99 - TEKNISI DAN ASISTEN KEDOKTERAN HEWAN LAINNYA</option>
                </optgroup>
                <optgroup label="3251 - ASISTEN DAN TERAPIS GIGI">
                  <option value="3251.01">3251.01 - ASISTEN KESEHATAN GIGI</option>
                  <option value="3251.02">3251.02 - AHLI KEBERSIHAN GIGI</option>
                  <option value="3251.03">3251.03 - AHLI TERAPI GIGI</option>
                  <option value="3251.99">3251.99 - ASISTEN DAN TERAPIS GIGI LAINNYA</option>
                </optgroup>
                <optgroup label="3252 - TEKNISI INFORMASI KESEHATAN DAN REKAM MEDIS">
                  <option value="3252.01">3252.01 - PETUGAS KODE KLINIK</option>
                  <option value="3252.02">3252.02 - PETUGAS REKAM MEDIK</option>
                  <option value="3252.99">3252.99 - TEKNISI INFORMASI KESEHATAN DAN REKAM MEDIS LAINNYA</option>
                </optgroup>
                <optgroup label="3253 - PEKERJA KESEHATAN MASYARAKAT">
                  <option value="3253.01">3253.01 - PETUGAS BANTUAN KESEHATAN MASYARAKAT</option>
                  <option value="3253.02">3253.02 - PEKERJA KESEHATAN MASYARAKAT DESA</option>
                  <option value="3253.99">3253.99 - PEKERJA KESEHATAN MASYARAKAT LAINNYA</option>
                </optgroup>
                <optgroup label="3254 - OPTISIEN">
                  <option value="3254.01">3254.01 - REFRAKSIONIS OPTISIEN</option>
                  <option value="3254.02">3254.02 - PENYALUR PERALATAN OPTISIEN</option>
                  <option value="3254.99">3254.99 - OPTISIEN LAINNYA</option>
                </optgroup>
                <optgroup label="3255 - TEKNISI DAN ASISTEN FISIOTERAPI">
                  <option value="3255.01">3255.01 - TERAPIS AKUPRESUR</option>
                  <option value="3255.02">3255.02 - TERAPIS ELEKTRO</option>
                  <option value="3255.03">3255.03 - TERAPIS HIDRO</option>
                  <option value="3255.04">3255.04 - TERAPIS PIJAT</option>
                  <option value="3255.05">3255.05 - TERAPIS FISIOTERAPI</option>
                  <option value="3255.06">3255.06 - TERAPIS REHABILITASI FISIK</option>
                  <option value="3255.07">3255.07 - TERAPIS SHIATSU</option>
                  <option value="3255.99">3255.99 - TEKNISI DAN ASISTEN FISIOTERAPI LAINNYA</option>
                </optgroup>
                <optgroup label="3256 - ASISTEN MEDIS">
                  <option value="3256.01">3256.01 - ASISTEN KLINIK</option>
                  <option value="3256.02">3256.02 - ASISTEN DOKTER</option>
                  <option value="3256.03">3256.03 - ASISTEN DOKTER MATA</option>
                  <option value="3256.99">3256.99 - ASISTEN MEDIS LAINNYA</option>
                </optgroup>
                <optgroup label="3257 - ASISTEN DAN PENGAWAS KESEHATAN LINGKUNGAN DAN PEKERJAAN">
                  <option value="3257.01">3257.01 - PENGAWAS KESEHATAN DAN KESELAMATAN KERJA</option>
                  <option value="3257.02">3257.02 - SANITARIAN</option>
                  <option value="3257.03">3257.03 - PENGAWAS SANITASI</option>
                  <option value="3257.99">3257.99 - ASISTEN DAN PENGAWAS KESEHATAN LINGKUNGAN DAN PEKERJAAN LAINNYA</option>
                </optgroup>
                <optgroup label="3258 - PEKERJA AMBULAN">
                  <option value="3258.01">3258.01 - PETUGAS AMBULAN</option>
                  <option value="3258.02">3258.02 - PARAMEDIS AMBULAN</option>
                  <option value="3258.03">3258.03 - TEKNISI MEDIS DARURAT</option>
                  <option value="3258.04">3258.04 - PARAMEDIS DARURAT</option>
                  <option value="3258.99">3258.99 - PEKERJA AMBULAN LAINNYA</option>
                </optgroup>
                <optgroup label="3259 - ASISTEN PROFESIONAL KESEHATAN YTDL">
                  <option value="3259.01">3259.01 - CHIROPRACTOR</option>
                  <option value="3259.02">3259.02 - OSTEOPATH</option>
                  <option value="3259.99">3259.99 - ASISTEN PROFESIONAL KESEHATAN YTDL LAINNYA</option>
                </optgroup>
                <optgroup label="3311 - DEALER DAN BROKER SURAT BERHARGA (SEKURITAS) DAN KEUANGAN">
                  <option value="3311.01">3311.01 - BROKER VALUTA ASING</option>
                  <option value="3311.02">3311.02 - BROKER SEKURITAS</option>
                  <option value="3311.03">3311.03 - BROKER EFEK</option>
                  <option value="3311.04">3311.04 - BROKER SAHAM</option>
                  <option value="3311.99">3311.99 - DEALER DAN BROKER (PIALANG), SEKURITAS DAN KEUANGAN LAINNYA</option>
                </optgroup>
                <optgroup label="3312 - PETUGAS KREDIT DAN PINJAMAN">
                  <option value="3312.01">3312.01 - PETUGAS PINJAMAN</option>
                  <option value="3312.02">3312.02 - PETUGAS HIPOTEK</option>
                  <option value="3312.99">3312.99 - PETUGAS KREDIT DAN PINJAMAN LAINNYA</option>
                </optgroup>
                <optgroup label="3313 - ASISTEN PROFESIONAL AKUNTANSI">
                  <option value="3313.01">3313.01 - PETUGAS PEMBUKUAN</option>
                  <option value="3313.99">3313.99 - ASISTEN PROFESIONAL AKUNTANSI LAINNYA</option>
                </optgroup>
                <optgroup label="3314 - ASISTEN PROFESIONAL STATISTIKA, MATEMATIKA DAN YBDI">
                  <option value="3314.01">3314.01 - ASISTEN AKTUARIA</option>
                  <option value="3314.02">3314.02 - ASISTEN MATEMATIKA</option>
                  <option value="3314.03">3314.03 - ASISTEN STATISTIKA</option>
                  <option value="3314.99">3314.99 - ASISTEN PROFESIONAL STATISTIKA, MATEMATIKA DAN YBDI LAINNYA</option>
                </optgroup>
                <optgroup label="3315 - JURU TAKSIR NILAI DAN KERUGIAN">
                  <option value="3315.01">3315.01 - JURU TAKSIR</option>
                  <option value="3315.02">3315.02 - JURU TAKSIR REAL ESTATE</option>
                  <option value="3315.03">3315.03 - JURU NILAI</option>
                  <option value="3315.99">3315.99 - JURU TAKSIR NILAI DAN KERUGIAN LAINNYA</option>
                </optgroup>
                <optgroup label="3321 - PERWAKILAN ASURANSI">
                  <option value="3321.01">3321.01 - AGEN ASURANSI</option>
                  <option value="3321.02">3321.02 - BROKER ASURANSI</option>
                  <option value="3321.03">3321.03 - PENJAMIN ASURANSI</option>
                  <option value="3321.99">3321.99 - PERWAKILAN ASURANSI LAINNYA</option>
                </optgroup>
                <optgroup label="3322 - PERWAKILAN PENJUALAN KOMERSIAL">
                  <option value="3322.01">3322.01 - PENASIHAT LAYANAN PURNA JUAL</option>
                  <option value="3322.02">3322.02 - CANVASSER</option>
                  <option value="3322.03">3322.03 - COMMERCIAL TRAVELLER</option>
                  <option value="3322.99">3322.99 - PERWAKILAN PENJUALAN KOMERSIAL LAINNYA</option>
                </optgroup>
                <optgroup label="3323 - JURU PEMBELIAN">
                  <option value="3323.01">3323.01 - JURU PEMBELIAN</option>
                  <option value="3323.02">3323.02 - AGEN PEMBELIAN</option>
                  <option value="3323.03">3323.03 - PETUGAS PENGADAAN</option>
                  <option value="3323.04">3323.04 - PETUGAS PASOKAN</option>
                  <option value="3323.05">3323.05 - PENYEDIA PEMBELIAN (PURCHASING MERCHANDISER)</option>
                  <option value="3323.99">3323.99 - JURU PEMBELIAN LAINNYA</option>
                </optgroup>
                <optgroup label="3324 - BROKER PERDAGANGAN">
                  <option value="3324.01">3324.01 - PERANTARA</option>
                  <option value="3324.02">3324.02 - BROKER KOMODITAS</option>
                  <option value="3324.03">3324.03 - BROKER KOMODITAS BERJANGKA</option>
                  <option value="3324.04">3324.04 - BROKER PENGIRIMAN</option>
                  <option value="3324.99">3324.99 - BROKER/ PERANTARA PERDAGANGAN LAINNYA</option>
                </optgroup>
                <optgroup label="3331 - AGEN KLIRING DAN PENGIRIMAN">
                  <option value="3331.01">3331.01 - AGEN KLIRING (CLEARING)</option>
                  <option value="3331.02">3331.02 - AGEN PENGANGKUTAN (FORWARDING)</option>
                  <option value="3331.03">3331.03 - AGEN PENGIRIMAN (SHIPPING)</option>
                  <option value="3331.99">3331.99 - AGEN KLIRING DAN PENGIRIMAN LAINNYA</option>
                </optgroup>
                <optgroup label="3332 - PERENCANA KONFERENSI DAN ACARA">
                  <option value="3332.01">3332.01 - PENYELENGGARA ACARA (EVENT ORGANIZER) DAN KONFERENSI</option>
                  <option value="3332.02">3332.02 - PERENCANA KONFERENSI</option>
                  <option value="3332.03">3332.03 - PERENCANA ACARA PERNIKAHAN (WEDDING PLANNER)</option>
                  <option value="3332.99">3332.99 - PERENCANA KONFERENSI DAN ACARA LAINNYA</option>
                </optgroup>
                <optgroup label="3333 - AGEN DAN KONTRAKTOR TENAGA KERJA">
                  <option value="3333.01">3333.01 - AGEN PEKERJAAN</option>
                  <option value="3333.02">3333.02 - KONTRAKTOR PERBURUHAN</option>
                  <option value="3333.03">3333.03 - PETUGAS PENEMPATAN KERJA</option>
                  <option value="3333.99">3333.99 - AGEN DAN KONTRAKTOR TENAGA KERJA LAINNYA</option>
                </optgroup>
                <optgroup label="3334 - AGEN REAL ESTATE DAN MANAJER PROPERTI">
                  <option value="3334.01">3334.01 - AGEN REAL ESTATE</option>
                  <option value="3334.02">3334.02 - MANAJER PROPERTI</option>
                  <option value="3334.03">3334.03 - TENAGA PENJUALAN REAL ESTATE</option>
                  <option value="3334.99">3334.99 - AGEN REAL ESTATE DAN MANAJER PROPERTI LAINNYA</option>
                </optgroup>
                <optgroup label="3339 - AGEN JASA BISNIS YTDL">
                  <option value="3339.01">3339.01 - JURU LELANG</option>
                  <option value="3339.02">3339.02 - PENJUAL PERIKLANAN</option>
                  <option value="3339.03">3339.03 - AGEN SASTRA</option>
                  <option value="3339.04">3339.04 - AGEN PERTUNJUKAN MUSIK</option>
                  <option value="3339.05">3339.05 - AGEN OLAHRAGA</option>
                  <option value="3339.06">3339.06 - AGEN TEATER</option>
                  <option value="3339.99">3339.99 - AGEN JASA BISNIS YTDL LAINNYA</option>
                </optgroup>
                <optgroup label="3341 - SUPERVISOR KANTOR">
                  <option value="3341.01">3341.01 - SUPERVISOR ADMINISTRASI</option>
                  <option value="3341.02">3341.02 - SUPERVISOR ENTRY DATA</option>
                  <option value="3341.03">3341.03 - SUPERVISOR ARSIPARIS</option>
                  <option value="3341.04">3341.04 - SUPERVISOR KPERSONALIA</option>
                  <option value="3341.99">3341.99 - SUPERVISOR KANTOR LAINNYA</option>
                </optgroup>
                <optgroup label="3342 - SEKRETARIS HUKUM">
                  <option value="3342.01">3342.01 - SEKRETARIS HUKUM (PENGACARA)</option>
                  <option value="3342.02">3342.02 - MANAJER PRAKTISI HUKUM (PENGACARA)</option>
                  <option value="3342.99">3342.99 - SEKRETARIS HUKUM LAINNYA</option>
                </optgroup>
                <optgroup label="3343 - SEKRETARIS ADMINSTRASI DAN EKSEKUTIF">
                  <option value="3343.01">3343.01 - SEKRETARIS ADMINSTRASI</option>
                  <option value="3343.02">3343.02 - ASISTEN KORESPONDEN</option>
                  <option value="3343.03">3343.03 - ASISTEN PRIBADI</option>
                  <option value="3343.04">3343.04 - REPORTER PENGADILAN</option>
                  <option value="3343.05">3343.05 - ASISTEN EKSEKUTIF</option>
                  <option value="3343.99">3343.99 - SEKRETARIS ADMINSTRASI DAN EKSEKUTIF LAINNYA</option>
                </optgroup>
                <optgroup label="3344 - SEKRETARIS MEDIS">
                  <option value="3344.01">3344.01 - SEKRETARIS MEDIS</option>
                  <option value="3344.02">3344.02 - MANAJER PRAKTEK KESEHATAN</option>
                  <option value="3344.03">3344.03 - ASISTEN ADMINISTRASI KANTOR MEDIS</option>
                  <option value="3344.04">3344.04 - MEDIS ASURANSI</option>
                  <option value="3344.05">3344.05 - TRANSKRIPSIONIS MEDIS</option>
                  <option value="3344.99">3344.99 - SEKRETARIS MEDIS LAINNYA</option>
                </optgroup>
                <optgroup label="3351 - PENGAWAS BEA CUKAI DAN PERBATASAN">
                  <option value="3351.01">3351.01 - PENGAWAS PERBATASAN</option>
                  <option value="3351.02">3351.02 - PENGAWAS BEA CUKAI</option>
                  <option value="3351.03">3351.03 - PETUGAS PEMERIKSA PASPOR</option>
                  <option value="3351.04">3351.04 - PETUGAS IMIGRASI</option>
                  <option value="3351.05">3351.05 - PETUGAS BEA CUKAI</option>
                  <option value="3351.99">3351.99 - PENGAWAS BEA CUKAI DAN PERBATASAN LAINNYA</option>
                </optgroup>
                <optgroup label="3352 - PETUGAS PAJAK DAN RETRIBUSI PEMERINTAH">
                  <option value="3352.01">3352.01 - PETUGAS PAJAK</option>
                  <option value="3352.02">3352.02 - PENGAWAS PERPAJAKAN</option>
                  <option value="3352.99">3352.99 - PETUGAS PAJAK DAN RETRIBUSI PEMERINTAH LAINNYA</option>
                </optgroup>
                <optgroup label="3353 - PEGAWAI BADAN SOSIAL PEMERINTAH">
                  <option value="3353.01">3353.01 - PETUGAS JAMINAN PENSIUN</option>
                  <option value="3353.02">3353.02 - PETUGAS JAMINAN SOSIAL</option>
                  <option value="3353.03">3353.03 - PETUGAS KLAIM JAMINAN SOSIAL</option>
                  <option value="3353.99">3353.99 - PEGAWAI PEMERINTAH BIDANG JAMINAN SOSIAL LAINNYA</option>
                </optgroup>
                <optgroup label="3354 - PEGAWAI PEMERINTAH BIDANG PERIJINAN">
                  <option value="3354.01">3354.01 - PETUGAS PERIZINAN</option>
                  <option value="3354.02">3354.02 - PETUGAS PENERBIT PASPOR</option>
                  <option value="3354.03">3354.03 - PETUGAS PERIZINAN PENDIRIAN BANGUNAN</option>
                  <option value="3354.04">3354.04 - PETUGAS PERIZINAN USAHA</option>
                  <option value="3354.99">3354.99 - PEGAWAI PEMERINTAH BIDANG PERIJINAN LAINNYA</option>
                </optgroup>
                <optgroup label="3359 - PROFESIONAL PEMERINTAHAN YTDL">
                  <option value="3359.01">3359.01 - PENGAWAS PERTANIAN</option>
                  <option value="3359.02">3359.02 - PENGAWAS PERIKANAN</option>
                  <option value="3359.03">3359.03 - PENGAWAS KEHUTANAN</option>
                  <option value="3359.04">3359.04 - PENGAWAS HARGA</option>
                  <option value="3359.05">3359.05 - PENGAWAS KETENAGAKERJAAN</option>
                  <option value="3359.99">3359.99 - PROFESIONAL PEMERINTAHAN YTDL LAINNYA</option>
                </optgroup>
                <optgroup label="3411 - ASISTEN PROFESIONAL HUKUM DAN YBDI">
                  <option value="3411.01">3411.01 - JURU SITA</option>
                  <option value="3411.02">3411.02 - JUDGES PARK</option>
                  <option value="3411.03">3411.03 - PANITERA PENGADILAN</option>
                  <option value="3411.04">3411.04 - JUSTICE OF THE PEACE</option>
                  <option value="3411.05">3411.05 - PARALEGAL</option>
                  <option value="3411.06">3411.06 - ASISTEN PENGACARA</option>
                  <option value="3411.07">3411.07 - DETEKTIF SWASTA</option>
                  <option value="3411.08">3411.08 - TITLE SEARCHER</option>
                  <option value="3411.99">3411.99 - ASISTEN PROFESIONAL HUKUM DANYBDI LAINNYA</option>
                </optgroup>
                <optgroup label="3412 - ASISTEN PROFESIONAL PEKERJAAN SOSIAL">
                  <option value="3412.01">3412.01 - PEKERJA PENGEMBANGAN MASYARAKAT</option>
                  <option value="3412.02">3412.02 - PEKERJA PELAYANAN MASYARAKAT</option>
                  <option value="3412.99">3412.99 - ASISTEN PROFESIONAL PEKERJAAN SOSIAL LAINNYA</option>
                </optgroup>
                <optgroup label="3413 - ASISTEN PROFESIONAL KEAGAMAAN">
                  <option value="3413.01">3413.01 - PENASEHAT SPIRITUAL</option>
                  <option value="3413.02">3413.02 - KHATIB</option>
                  <option value="3413.03">3413.03 - BIKSU</option>
                  <option value="3413.04">3413.04 - SUSTER</option>
                  <option value="3413.99">3413.99 - ASISTEN PROFESIONAL KEAGAMAAN LAINNYA</option>
                  <option value="3415.01">3415.01 - ADMINISTRATOR WEBSITE</option>
                  <option value="3415.02">3415.02 - TEKNISI WEBSITE</option>
                  <option value="3415.03">3415.03 - WEB MASTER</option>
                  <option value="3415.99">3415.99 - TEKNISI WEB LAINNYA</option>
                </optgroup>
                <optgroup label="3421 - ATLET DAN OLAHRAGAWAN">
                  <option value="3421.01">3421.01 - ATLET DAN OLAHRAGAWAN</option>
                  <option value="3421.02">3421.02 - PROFESIONAL OLAHRAGAWAN</option>
                </optgroup>
                <optgroup label="3422 - PELATIH, INSTRUKTUR DAN KRU OLAHRAGA">
                  <option value="3422.01">3422.01 - PELATIH OLAHRAGA</option>
                  <option value="3422.99">3422.99 - PELATIH, INSTRUKTUR DAN KRU OLAHRAGA LAINNYA</option>
                </optgroup>
                <optgroup label="3423 - INSTRUKTUR DAN PELATIH PROGRAM KEBUGARAN DAN REKREASI">
                  <option value="3423.01">3423.01 - INSTRUKTUR KEBUGARAN</option>
                  <option value="3423.02">3423.02 - INSTRUKTUR BERKUDA</option>
                  <option value="3423.03">3423.03 - INSTRUKTUR PELAYANAN</option>
                  <option value="3423.04">3423.04 - INSTRUKTUR MENYELAM</option>
                  <option value="3423.99">3423.99 - INSTRUKTUR DAN PELATIH PROGRAM KEBUGARAN DAN REKREASI LAINNYA</option>
                </optgroup>
                <optgroup label="3431 - FOTOGRAFER">
                  <option value="3431.01">3431.01 - WARTAWAN FOTO</option>
                  <option value="3431.02">3431.02 - FOTOGRAFER</option>
                  <option value="3431.99">3431.99 - FOTOGRAFER LAINNYA</option>
                </optgroup>
                <optgroup label="3432 - DESAINER DAN DEKORASI INTERIOR">
                  <option value="3432.01">3432.01 - DEKORASI INTERIOR</option>
                  <option value="3432.02">3432.02 - DESAINER TATA LETAK</option>
                  <option value="3432.03">3432.03 - VISUAL MERCHANDISER</option>
                  <option value="3432.99">3432.99 - DESAINER DAN DEKORASI INTERIOR LAINNYA</option>
                </optgroup>
                <optgroup label="3433 - TEKNISI GALERI, MUSEUM DAN PERPUSTAKAAN">
                  <option value="3433.01">3433.01 - TEKNISI GALERI</option>
                  <option value="3433.02">3433.02 - TEKNISI PERPUSTAKAAN</option>
                  <option value="3433.03">3433.03 - TEKNISI MUSEUM</option>
                  <option value="3433.99">3433.99 - TEKNISI GALERI, MUSEUM DAN PERPUSTAKAAN LAINNYA</option>
                </optgroup>
                <optgroup label="3434 - CHEF">
                  <option value="3434.01">3434.01 - CHEF</option>
                </optgroup>
                <optgroup label="3435 - ASISTEN PROFESIONAL KESENIAN DAN BUDAYA LAINNYA">
                  <option value="3435.01">3435.01 - BODY ARTIST</option>
                  <option value="3435.02">3435.02 - MANAJER LAPANGAN (PENYIARAN)</option>
                  <option value="3435.03">3435.03 - TEKNISI TATA LAMPU/ CAHAYA</option>
                  <option value="3435.04">3435.04 - KOORDINATOR PROGRAM (PENYIARAN)</option>
                  <option value="3435.05">3435.05 - KOORDINATOR PROPERTY/ PERALATAN (PENYIARAN)</option>
                  <option value="3435.06">3435.06 - SCRIPT GIRL/ BOY</option>
                  <option value="3435.07">3435.07 - TEKNISI EFEK KHUSUS</option>
                  <option value="3435.08">3435.08 - MANAJER PANGGUNG</option>
                  <option value="3435.09">3435.09 - STUNTMAN</option>
                  <option value="3435.10">3435.10 - PENATA RIAS</option>
                  <option value="3435.99">3435.99 - ASISTEN PROFESIONAL KESENIAN DAN BUDAYA LAINNYA</option>
                </optgroup>
                <optgroup label="3511 - TEKNISI OPERASI TEKNOLOGI INFORMASI DAN KOMUNIKASI">
                  <option value="3511.01">3511.01 - OPERATOR KOMPUTER</option>
                  <option value="3511.02">3511.02 - OPERATOR PERALATAN PERIFER KOMPUTER</option>
                  <option value="3511.99">3511.99 - TEKNISI OPERASI TEKNOLOGI INFORMASI DAN KOMUNIKASI LAINNYA</option>
                </optgroup>
                <optgroup label="3512 - TEKNISI PENDUKUNG PENGGUNAAN TEKNOLOGI INFORMASI DAN KOMUNIKASI">
                  <option value="3512.01">3512.01 - ASISTEN PEMROGRAMAN KOMPUTER</option>
                  <option value="3512.99">3512.99 - TEKNISI PENDUKUNG PENGGUNAAN TEKNOLOGI INFORMASI DAN KOMUNIKASI LAINNYA</option>
                </optgroup>
                <optgroup label="3513 - TEKNISI JARINGAN DAN SISTEM KOMPUTER">
                  <option value="3513.01">3513.01 - TEKNISI JARINGAN KOMPUTER</option>
                  <option value="3513.02">3513.02 - TEKNISI PENDUKUNG JARINGAN</option>
                  <option value="3513.99">3513.99 - TEKNISI JARINGAN DAN SISTEM KOMPUTER LAINNYA</option>
                </optgroup>
                <optgroup label="3514 - TEKNISI WEB">
                <optgroup label="3521 - TEKNISI PENYIARAN DAN AUDIO VISUAL">
                  <option value="3521.01">3521.01 - OPERATOR AUDIO VISUAL</option>
                  <option value="3521.02">3521.02 - OPERATOR PERALATAN BROADCASTING/ PENYIARAN</option>
                  <option value="3521.03">3521.03 - TEKNISI BROADCAST</option>
                  <option value="3521.04">3521.04 - JURU KAMERA FOTO</option>
                  <option value="3521.05">3521.05 - JURU KAMERA VIDEO</option>
                  <option value="3521.06">3521.06 - ASISTEN PRODUKSI MEDIA</option>
                  <option value="3521.99">3521.99 - TEKNISI PENYIARAN DAN AUDIO VISUAL LAINNYA</option>
                </optgroup>
                <optgroup label="3522 - TEKNISI REKAYASA TELEKOMUNIKASI">
                  <option value="3522.01">3522.01 - TEKNISI REKAYASA TELEKOMUNIKASI</option>
                </optgroup>
                <optgroup label="4110 - TENAGA PERKANTORAN UMUM">
                  <option value="4110.01">4110.01 - TENAGA PERKANTORAN UMUM</option>
                </optgroup>
                <optgroup label="4120 - SEKRETARIS">
                  <option value="4120.01">4120.01 - SEKRETARIS</option>
                </optgroup>
                <optgroup label="4131 - JURU KETIK DAN OPERATOR MESIN PENGOLAH KATA">
                  <option value="4131.01">4131.01 - JURU KETIK</option>
                  <option value="4131.02">4131.02 - OPERATOR MESIN PENGOLAH KATA</option>
                  <option value="4131.03">4131.03 - STENOGRAFER</option>
                  <option value="4131.04">4131.04 - JURU KETIK CEPAT</option>
                  <option value="4131.99">4131.99 - JURU KETIK DAN OPERATOR MESIN PENGOLAH KATA LAINNYA</option>
                </optgroup>
                <optgroup label="4132 - TENAGA PENGENTRI DATA">
                  <option value="4132.01">4132.01 - OPERATOR ENTRY DATA</option>
                  <option value="4132.02">4132.02 - PETUGAS INPUT DATA</option>
                  <option value="4132.03">4132.03 - PETUGAS ENTRI PEMBAYARAN</option>
                  <option value="4132.99">4132.99 - TENAGA ENTRI DATA LAINNYA</option>
                </optgroup>
                <optgroup label="4211 - KASIR BANK DAN YBDI">
                  <option value="4211.01">4211.01 - TELLER BANK</option>
                  <option value="4211.02">4211.02 - PETUGAS PENUKARAN UANG</option>
                  <option value="4211.03">4211.03 - PEGAWAI COUNTER KANTOR POS</option>
                  <option value="4211.99">4211.99 - TELLER BANK DAN YBDI LAINNYA</option>
                </optgroup>
                <optgroup label="4212 - JURU TARUH, BANDAR DAN PERMAINAN YBDI">
                  <option value="4212.01">4212.01 - JURU TARUH</option>
                  <option value="4212.02">4212.02 - BANDAR</option>
                  <option value="4212.99">4212.99 - JURU TARUH, BANDAR DAN PERMAINAN YBDI LAINNYA</option>
                </optgroup>
                <optgroup label="4213 - JURU GADAI DAN PEMBERI PINJAMAN UANG">
                  <option value="4213.01">4213.01 - JURU GADAI</option>
                  <option value="4213.02">4213.02 - PEMBERI PINJAMAN UANG</option>
                  <option value="4213.99">4213.99 - JURU GADAI DAN PEMBERI PINJAMAN UANG LAINNYA</option>
                </optgroup>
                <optgroup label="4214 - PENAGIH HUTANG DAN YBDI">
                  <option value="4214.01">4214.01 - PENAGIH TAGIHAN DAN REKENING</option>
                  <option value="4214.02">4214.02 - KOLEKTOR SUMBANGAN</option>
                  <option value="4214.03">4214.03 - PENAGIH HUTANG</option>
                  <option value="4214.99">4214.99 - PENAGIH HUTANG DAN YBDI LAINNYA</option>
                </optgroup>
                <optgroup label="4221 - TENAGA TATA USAHA PERJALANAN DAN KONSULTAN PERJALANAN">
                  <option value="4221.01">4221.01 - TENAGA TATA USAHA TIKET (TRAVEL)</option>
                  <option value="4221.02">4221.02 - TENAGA TATA USAHA PERJALANAN (PERUSAHAAN PENERBANGAN)</option>
                  <option value="4221.03">4221.03 - TENAGA TATA USAHA AGEN PERJALANAN</option>
                  <option value="4221.04">4221.04 - KONSULTAN PERJALANAN</option>
                  <option value="4221.05">4221.05 - ORGANIZER PERJALANAN</option>
                  <option value="4221.99">4221.99 - TENAGA TATA USAHA PERJALANAN DAN KONSULTAN PERJALANAN LAINNYA</option>
                </optgroup>
                <optgroup label="4222 - TENAGA TATA USAHA INFORMASI PUSAT KONTAK">
                  <option value="4222.01">4222.01 - TENAGA TATA USAHA INFORMASI PUSAT KONTAK</option>
                </optgroup>
                <optgroup label="4223 - OPERATOR TELEPON">
                  <option value="4223.01">4223.01 - OPERATOR LAYANAN PENJAWAB</option>
                  <option value="4223.02">4223.02 - OPERATOR TELEPON</option>
                  <option value="4223.99">4223.99 - OPERATOR TELEPON LAINNYA</option>
                </optgroup>
                <optgroup label="4224 - RESEPSIONIS HOTEL">
                  <option value="4224.01">4224.01 - RESEPSIONIS HOTEL</option>
                </optgroup>
                <optgroup label="4225 - TENAGA TATA USAHA PENERANGAN">
                  <option value="4225.01">4225.01 - TENAGA TATA USAHA PENERANGAN</option>
                </optgroup>
                <optgroup label="4226 - RESEPSIONIS">
                  <option value="4226.01">4226.01 - RESEPSIONIS KANTOR PEMERINTAH</option>
                  <option value="4226.02">4226.02 - RESEPSIONIS RUMAH SAKIT</option>
                  <option value="4226.99">4226.99 - RESEPSIONIS LAINNYA</option>
                </optgroup>
                <optgroup label="4227 - TENAGA WAWANCARA SURVEI DAN PENELITIAN PASAR">
                  <option value="4227.01">4227.01 - PEWAWANCARA PENELITIAN PASAR</option>
                  <option value="4227.02">4227.02 - PEWAWANCARA OPINI PUBLIK</option>
                  <option value="4227.03">4227.03 - PEWAWANCARA SURVEI</option>
                  <option value="4227.99">4227.99 - PEWAWANCARA SURVEI DAN PENELITIAN PASAR LAINNYA</option>
                </optgroup>
                <optgroup label="4229 - TENAGA TATA USAHA INFORMASI PELANGGAN YTDL">
                  <option value="4229.01">4229.01 - TENAGA TATA USAHA INFORMASI PELANGGAN YTDL</option>
                </optgroup>
                <optgroup label="4311 - TENAGA TATA USAHA AKUNTANSI DAN PEMBUKUAN">
                  <option value="4311.01">4311.01 - JURU TATA USAHA AKUNTANSI</option>
                  <option value="4311.02">4311.02 - JURU TATA USAHA PEMBUKUAN</option>
                  <option value="4311.99">4311.99 - JURU TATA USAHA AKUNTANSI DAN PEMBUKUAN LAINNYA</option>
                </optgroup>
                <optgroup label="4312 - TENAGA TATA USAHA STATISTIK, KEUANGAN DAN ASURANSI">
                  <option value="4312.01">4312.01 - JURU TATA USAHA AKTUARIA</option>
                  <option value="4312.02">4312.02 - JURU TATA USAHA BROKER</option>
                  <option value="4312.03">4312.03 - JURU TATA USAHA KEUANGAN</option>
                  <option value="4312.04">4312.04 - JURU TATA USAHA ASURANSI</option>
                  <option value="4312.05">4312.05 - JURU TATA USAHA BURSA EFEK</option>
                  <option value="4312.06">4312.06 - JURU TATA USAHA STATISTIK</option>
                  <option value="4312.07">4312.07 - JURU TATA USAHA PAJAK</option>
                  <option value="4312.99">4312.99 - JURU TATA USAHA STATISTIK, KEUANGAN DAN ASURANSI LAINNYA</option>
                </optgroup>
                <optgroup label="4313 - TENAGA TATA USAHA PENGGAJIAN">
                  <option value="4313.01">4313.01 - JURU TATA USAHA PENGGAJIAN</option>
                </optgroup>
                <optgroup label="4321 - JURU TATA USAHA PERGUDANGAN">
                  <option value="4321.01">4321.01 - JURU TATA USAHA PENGIRIMAN BARANG (FREIGTH)</option>
                  <option value="4321.02">4321.02 - JURU TATA USAHA PETUGAS PENGIRIMAN BARANG (DISPATCH)</option>
                  <option value="4321.03">4321.03 - JURU TATA USAHA PERSEDIAAN</option>
                  <option value="4321.04">4321.04 - JURU TATA USAHA PERGUDANGAN</option>
                  <option value="4321.05">4321.05 - JURU TATA USAHA PENIMBANGAN</option>
                  <option value="4321.99">4321.99 - JURU TATA USAHA PERGUDANGAN LAINNYA</option>
                </optgroup>
                <optgroup label="4322 - JURU TATA USAHA PRODUKSI">
                  <option value="4322.01">4322.01 - JURU TATA USAHA PRODUKSI</option>
                  <option value="4322.02">4322.02 - JURU TATA USAHA PENJADWALAN PRODUKSI (BAHAN)</option>
                  <option value="4322.99">4322.99 - JURU TATA USAHA PRODUKSI LAINNYA</option>
                </optgroup>
                <optgroup label="4323 - JURU TATA USAHA TRANSPORTASI">
                  <option value="4323.01">4323.01 - JURU TATA USAHA PENGAWASAN (JASA TRANSPORTASI )</option>
                  <option value="4323.02">4323.02 - JURU TATA USAHA PEMBERANGKATAN DISPATCH ( JASA TRANSPORTASI)</option>
                  <option value="4323.99">4323.99 - JURU TATA USAHA TRANSPORTASI LAINNYA</option>
                </optgroup>
                <optgroup label="4411 - JURU TATA USAHA PERPUSTAKAAN">
                  <option value="4411.01">4411.01 - TENAGA TATA USAHA PERPUSTAKAAN</option>
                  <option value="4411.02">4411.02 - TENAGA PENGARSIP PERPUSTAKAAN</option>
                  <option value="4411.99">4411.99 - TENAGA TATA USAHA PERPUSTAKAAN LAINNYA</option>
                </optgroup>
                <optgroup label="4412 - JURU TATA USAHA PENGIRIMAN DAN PENYORTIRAN SURAT">
                  <option value="4412.01">4412.01 - JURU TATA USAHA SORTIR SURAT</option>
                  <option value="4412.02">4412.02 - TUKANG POS</option>
                  <option value="4412.99">4412.99 - JURU TATA USAHA PENGIRIMAN DAN PENYORTIRAN SURAT LAINNYA</option>
                </optgroup>
                <optgroup label="4413 - JURU KODE, JURU KOREKSI DAN YBDI">
                  <option value="4413.01">4413.01 - JURU KODE</option>
                  <option value="4413.02">4413.02 - JURU KOREKSI</option>
                  <option value="4413.99">4413.99 - JURU KODE, JURU KOREKSI DAN YBDI LAINNYA</option>
                </optgroup>
                <optgroup label="4414 - JURU TULIS DAN YBDI">
                  <option value="4414.01">4414.01 - JURU TULIS</option>
                  <option value="4414.99">4414.99 - JURU TULIS DAN YBDI LAINNYA</option>
                </optgroup>
                <optgroup label="4415 - JURU TATA USAHA KEARSIPAN DAN PENGGANDAAN">
                  <option value="4415.01">4415.01 - JURU TATA USAHA PENGGANDAAN</option>
                  <option value="4415.02">4415.02 - JURU TATA USAHA PENGARSIPAN</option>
                  <option value="4415.99">4415.99 - JURU TATA USAHA KEARSIPAN DAN PENGGANDAAN LAINNYA</option>
                </optgroup>
                <optgroup label="4416 - JURU TATA USAHA PERSONALIA">
                  <option value="4416.01">4416.01 - ASISTEN SUMBER DAYA MANUSIA</option>
                  <option value="4416.02">4416.02 - JURU TATA USAHA SUMBER DAYA MANUSIA</option>
                  <option value="4416.99">4416.99 - JURU TATA USAHA PERSONALIA LAINNYA</option>
                </optgroup>
                <optgroup label="4419 - JURU TATA USAHA YTDL">
                  <option value="4419.01">4419.01 - JURU TATA USAHA PERIKLANAN</option>
                  <option value="4419.02">4419.02 - JURU TATA USAHA SURAT MENYURAT</option>
                  <option value="4419.03">4419.03 - JURU TATA USAHA PUBLIKASI</option>
                  <option value="4419.04">4419.04 - CLIPPER BERITA</option>
                  <option value="4419.99">4419.99 - JURU TATA USAHA YTDL LAINNYA</option>
                </optgroup>
                <optgroup label="5111 - TENAGA PELAYANAN PERJALANAN">
                  <option value="5111.01">5111.01 - PETUGAS BANDAR UDARA</option>
                  <option value="5111.02">5111.02 - PRAMUGARI/PRAMUGARA</option>
                  <option value="5111.03">5111.03 - PELAYAN KAPAL LAUT</option>
                  <option value="5111.99">5111.99 - TENAGA PELAYANAN PERJALANAN LAINNYA</option>
                </optgroup>
                <optgroup label="5112 - KONDEKTUR TRANSPORTASI">
                  <option value="5112.01">5112.01 - KONDEKTUR BUS</option>
                  <option value="5112.02">5112.02 - PEMERIKSA TIKET (ANGKUTAN UMUM)</option>
                  <option value="5112.03">5112.03 - KONDEKTUR KERETA</option>
                  <option value="5112.99">5112.99 - KONDEKTUR TRANSPORTASI LAINNYA</option>
                </optgroup>
                <optgroup label="5113 - PRAMUWISATA">
                  <option value="5113.01">5113.01 - PEMANDU GALERI SENI</option>
                  <option value="5113.02">5113.02 - PENDAMPING WISATA</option>
                  <option value="5113.99">5113.99 - PRAMUWISATA LAINNYA</option>
                </optgroup>
                <optgroup label="5120 - JURU MASAK">
                  <option value="5120.01">5120.01 - JURU MASAK</option>
                </optgroup>
                <optgroup label="5131 - PRAMUSAJI">
                  <option value="5131.01">5131.01 - PRAMUSAJI</option>
                </optgroup>
                <optgroup label="5132 - PRAMUTAMA BAR/BARTENDER">
                  <option value="5132.01">5132.01 - PRAMUTAMA BAR/ BARTENDER</option>
                </optgroup>
                <optgroup label="5141 - KECANTIKAN/ BEAUTICIAN DAN YBDI PENATA RAMBUT">
                  <option value="5141.01">5141.01 - TUKANG CUKUR</option>
                  <option value="5141.02">5141.02 - PENATA RAMBUT (HAIRSTYLIST/ HAIRDRESSER)</option>
                  <option value="5141.03">5141.03 - SPESIALIS PERAWATAN RAMBUT</option>
                  <option value="5141.99">5141.99 - PENATA RAMBUT LAINNYA</option>
                </optgroup>
                <optgroup label="5142 - PERAWATAN KECANTIKAN/BEAUTICIAN DAN YBDI">
                  <option value="5142.01">5142.01 - AHLI KECANTIKAN/ BEAUTICIAN</option>
                  <option value="5142.02">5142.02 - PEDICURIS</option>
                  <option value="5142.03">5142.03 - MANICURIS</option>
                  <option value="5142.04">5142.04 - PENATA RIAS</option>
                  <option value="5142.05">5142.05 - KONSULTASI PELANGSING TUBUH</option>
                  <option value="5142.99">5142.99 - PERAWATAN KECANTIKAN/BEAUTICIAN DAN YBDI LAINNYA</option>
                </optgroup>
                <optgroup label="5151 - PENGAWAS KEBERSIHAN DAN KERUMAHTANGGAAN DI KANTOR, HOTEL DAN BANGUNAN LAINNYA">
                  <option value="5151.01">5151.01 - PENGURUS KERUMAHTANGGAAN/HOUSEKEEPING (HOTEL)</option>
                  <option value="5151.02">5151.02 - KEPALA ASRAMA</option>
                  <option value="5151.99">5151.99 - PENGAWAS KEBERSIHAN DAN KERUMAHTANGGAAN DI KANTOR, HOTEL DAN BANGUNAN LAINNYA</option>
                </optgroup>
                <optgroup label="5152 - PEMBANTU RUMAH TANGGA">
                  <option value="5152.01">5152.01 - PENGURUS KERUMAHTANGGAAN</option>
                  <option value="5152.02">5152.02 - KEPALA PELAYAN</option>
                  <option value="5152.99">5152.99 - PENGURUS KERUMAHTANGGAAN LAINNYA</option>
                </optgroup>
                <optgroup label="5153 - PENGELOLA GEDUNG">
                  <option value="5153.01">5153.01 - PEMELIHARA/ PENGELOLA GEDUNG</option>
                  <option value="5153.02">5153.02 - JANITOR (PETUGAS KEBERSIHAN GEDUNG)</option>
                  <option value="5153.03">5153.03 - CONCIERGE (DOORMAN, DOORKEEPER, PORTER, ATTENDANT)</option>
                  <option value="5153.04">5153.04 - PENGURUS RUMAH IBADAH</option>
                  <option value="5153.99">5153.99 - PENGELOLA GEDUNG LAINNYA</option>
                </optgroup>
                <optgroup label="5161 - ASTROLOG, PERAMAL DAN YBDI">
                  <option value="5161.01">5161.01 - ASTROLOG (PERAMAL DENGAN ILMU PERBINTANGAN)</option>
                  <option value="5161.02">5161.02 - PERAMAL TELAPAK TANGAN</option>
                  <option value="5161.03">5161.03 - FORTUNE TELLER (PERAMAL DENGAN BOLA KRISTAL DAN SEJENISNYA)</option>
                  <option value="5161.04">5161.04 - NUMEROLOG (PERAMAL DENGAN ANGKA)</option>
                  <option value="5161.99">5161.99 - ASTROLOG, PERAMAL DAN YBDI LAINNYA</option>
                </optgroup>
                <optgroup label="5162 - AJUDAN DAN PEMBANTU PRIBADI">
                  <option value="5162.01">5162.01 - AJUDAN</option>
                  <option value="5162.02">5162.02 - PEMBANTU PRIBADI</option>
                  <option value="5162.99">5162.99 - AJUDAN DAN PELAYAN PRIBADI LAINNYA</option>
                </optgroup>
                <optgroup label="5163 - PENGURUS PEMBALSEMAN DAN PEMAKAMAN JENAZAH">
                  <option value="5163.01">5163.01 - PENGURUS PEMBALSEMAN JENAZAH</option>
                  <option value="5163.02">5163.02 - PENGURUS PEMAKAMAN JENAZAH</option>
                  <option value="5163.99">5163.99 - PENGURUS PEMBALSEMAN DAN PEMAKAMAN JENAZAH LAINNYA</option>
                </optgroup>
                <optgroup label="5164 - PELATIH DAN PEKERJA PERAWATAN HEWAN">
                  <option value="5164.01">5164.01 - PELATIH ANJING</option>
                  <option value="5164.02">5164.02 - PEMBANTU DOKTER HEWAN</option>
                  <option value="5164.03">5164.03 - PENJAGA KEBUN BINATANG</option>
                  <option value="5164.04">5164.04 - PENJINAK KUDA</option>
                  <option value="5164.99">5164.99 - PELATIH DAN PEKERJA PERAWATAN HEWAN LAINNYA</option>
                </optgroup>
                <optgroup label="5165 - INSTRUKTUR MENGEMUDI">
                  <option value="5165.01">5165.01 - INSTRUKTUR MENGEMUDI</option>
                </optgroup>
                <optgroup label="5169 - TENAGA USAHA PERORANGAN YTDL">
                  <option value="5169.01">5169.01 - SOCIAL ESCORT</option>
                  <option value="5169.02">5169.02 - PRAMURIA (CLUB HOST, HOSTESS)</option>
                  <option value="5169.03">5169.03 - PASANGAN DANSA</option>
                  <option value="5169.99">5169.99 - TENAGA USAHA PERORANGAN YTDL LAINNYA</option>
                </optgroup>
                <optgroup label="5211 - PEDAGANG DI KIOS DAN LOS PASAR">
                  <option value="5211.01">5211.01 - PEDAGANG KIOS</option>
                  <option value="5211.02">5211.02 - PEDAGANG LOS PASAR</option>
                  <option value="5211.99">5211.99 - PEDAGANG DI KIOS DAN LOS PASAR LAINNYA</option>
                </optgroup>
                <optgroup label="5212 - PEDAGANG MAKANAN KAKI LIMA">
                  <option value="5212.01">5212.01 - PENJUAL MAKANAN KAKI LIMA</option>
                  <option value="5212.02">5212.02 - PENJAJA MAKANAN</option>
                  <option value="5212.99">5212.99 - PEDAGANG MAKANAN KAKI LIMA LAINNYA</option>
                </optgroup>
                <optgroup label="5221 - PEMILIK TOKO">
                  <option value="5221.01">5221.01 - PEMILIK TOKO</option>
                  <option value="5221.02">5221.02 - PENGELOLA TOKO</option>
                  <option value="5221.03">5221.03 - AGEN KORAN</option>
                  <option value="5221.99">5221.99 - PEMILIK TOKO LAINNYA</option>
                </optgroup>
                <optgroup label="5222 - PENGAWAS TOKO">
                  <option value="5222.01">5222.01 - SUPERVISOR KASIR/ CHECKOUT</option>
                  <option value="5222.02">5222.02 - SUPERVISOR SUPERMARKET</option>
                  <option value="5222.03">5222.03 - SUPERVISOR DEPARTEMENT STORE</option>
                  <option value="5222.99">5222.99 - SUPERVISOR TOKO LAINNYA</option>
                </optgroup>
                <optgroup label="5223 - ASISTEN PENJUALAN TOKO">
                  <option value="5223.01">5223.01 - TENAGA PENJUAL RITEL</option>
                  <option value="5223.02">5223.02 - TENAGA PENJUAL GROSIR</option>
                  <option value="5223.03">5223.03 - PELAYAN TOKO</option>
                  <option value="5223.99">5223.99 - ASISTEN PENJUALAN TOKO LAINNYA</option>
                </optgroup>
                <optgroup label="5230 - KASIR DAN PETUGAS TIKET">
                  <option value="5230.01">5230.01 - KASIR TOKO</option>
                  <option value="5230.02">5230.02 - PETUGAS TIKET (HIBURAN DAN ACARA OLAHRAGA LAINNYA)</option>
                  <option value="5230.99">5230.99 - KASIR DAN PETUGAS TIKET LAINNYA</option>
                </optgroup>
                <optgroup label="5241 - MODEL FESYEN DAN MODEL LAINNYA">
                <optgroup label="5242 - PERAGA PENJUALAN">
                  <option value="5242.01">5242.01 - SALES MERCHANDISER</option>
                  <option value="5242.02">5242.02 - PERAGA PENJUALAN</option>
                  <option value="5242.99">5242.99 - PERAGA PENJUALAN LAINNYA</option>
                </optgroup>
                <optgroup label="5243 - PEDAGANG RUMAH KE RUMAH">
                  <option value="5243.01">5243.01 - PEDAGANG RUMAH KE RUMAH</option>
                </optgroup>
                <optgroup label="5244 - PEDAGANG MELALUI PUSAT INFORMASI">
                  <option value="5244.01">5244.01 - PEDAGANG MELALUI TELEPON (TELEMARKETING)</option>
                  <option value="5244.02">5244.02 - PEDAGANG MELALUI INTERNET</option>
                  <option value="5244.03">5244.03 - PEDAGANG MELALUI CALL CENTRE</option>
                  <option value="5244.99">5244.99 - PEDAGANG MELALUI PUSAT INFORMASI LAINNYA</option>
                </optgroup>
                <optgroup label="5245 - PETUGAS STASIUN PENGISIAN BAHAN BAKAR">
                  <option value="5245.01">5245.01 - PETUGAS MARINA (PENGISIAN BAHAN BAKAR KAPAL/ PERAHU)</option>
                  <option value="5245.02">5245.02 - PEGAWAI TEMPAT CUCI KENDARAAN</option>
                  <option value="5245.03">5245.03 - PETUGAS STASIUN PENGISIAN BAHAN BAKAR UMUM (SPBU)</option>
                  <option value="5245.99">5245.99 - PETUGAS STASIUN PENGISIAN BAHAN BAKAR LAINNYA</option>
                </optgroup>
                <optgroup label="5246 - PETUGAS KIOS LAYANAN MAKANAN">
                  <option value="5246.01">5246.01 - PETUGAS KONTER KAFETARIA</option>
                  <option value="5246.99">5246.99 - PETUGAS KONTER LAYANAN MAKANAN LAINNYA</option>
                </optgroup>
                <optgroup label="5249 - PEKERJA PENJUALAN YTDL">
                  <option value="5249.01">5249.01 - TENAGA PENJUALAN DI RENTAL</option>
                  <option value="5249.99">5249.99 - PEKERJA PENJUALAN YTDL LAINNYA</option>
                </optgroup>
                <optgroup label="5311 - PEKERJA PERAWATAN ANAK">
                  <option value="5311.01">5311.01 - BABY SITTER</option>
                  <option value="5311.02">5311.02 - PEKERJA PENITIPAN ANAK</option>
                  <option value="5311.03">5311.03 - PENGASUH ANAK</option>
                  <option value="5311.99">5311.99 - PEKERJA PERAWATAN ANAK LAINNYA</option>
                </optgroup>
                <optgroup label="5312 - ASISTEN PENGAJAR">
                  <option value="5312.01">5312.01 - ASISTEN PENGAJAR PRA-SEKOLAH</option>
                  <option value="5312.02">5312.02 - ASISTEN PENGAJAR SEKOLAH DASAR</option>
                  <option value="5312.99">5312.99 - ASISTEN PENGAJAR LAINNYA</option>
                </optgroup>
                <optgroup label="5321 - ASISTEN PERAWATAN KESEHATAN">
                  <option value="5321.01">5321.01 - ASISTEN KELAHIRAN (KLINIK ATAU RUMAH SAKIT)</option>
                  <option value="5321.02">5321.02 - ASISTEN PERAWATAN (KLINIK ATAU RUMAH SAKIT)</option>
                  <option value="5321.03">5321.03 - PEMBANTU DOKTER JIWA (PEMBANTU PSIKIATER)</option>
                  <option value="5321.99">5321.99 - ASISTEN PERAWATAN KESEHATAN LAINNYA</option>
                </optgroup>
                <optgroup label="5322 - PEKERJA PERAWATAN PRIBADI DI RUMAH">
                  <option value="5322.01">5322.01 - ASISTEN PERAWATAN DI RUMAH</option>
                  <option value="5322.02">5322.02 - ASISTEN PERSALINAN DI RUMAH</option>
                  <option value="5322.99">5322.99 - PEKERJA PERAWATAN PRIBADI DI RUMAH LAINNYA</option>
                </optgroup>
                <optgroup label="5329 - PEKERJA PERAWATAN PRIBADI DALAM JASA KESEHATAN YTDL">
                  <option value="5329.01">5329.01 - PEMBANTU DOKTER GIGI</option>
                  <option value="5329.02">5329.02 - PETUGAS PERTOLONGAN PERTAMA</option>
                  <option value="5329.03">5329.03 - PETUGAS RUMAH SAKIT</option>
                  <option value="5329.04">5329.04 - ASISTEN RONTGEN MEDIK</option>
                  <option value="5329.05">5329.05 - PEMBANTU APOTEKER</option>
                  <option value="5329.06">5329.06 - PHLEBOTOMIST</option>
                  <option value="5329.07">5329.07 - ASISTEN STERILISASI</option>
                  <option value="5329.99">5329.99 - PEKERJA PERAWATAN PRIBADI DALAM JASA KESEHATAN YTDL LAINNYA</option>
                </optgroup>
                <optgroup label="5411 - PEMADAM KEBAKARAN">
                  <option value="5411.01">5411.01 - PETUGAS PEMADAM KEBAKARAN</option>
                  <option value="5411.02">5411.02 - PETUGAS PEMADAM KEBAKARAN HUTAN</option>
                  <option value="5411.99">5411.99 - PETUGAS PEMADAM KEBAKARAN LAINNYA</option>
                </optgroup>
                <optgroup label="5413 - PENJARA LEMBAGA PEMASYARAKATAN">
                  <option value="5413.01">5413.01 - PENJAGA LEMBAGA PEMASYARAKATAN</option>
                </optgroup>
                <optgroup label="5414 - PENJAGA KEAMANAN">
                  <option value="5414.01">5414.01 - PENJAGA KEAMANAN</option>
                  <option value="5414.02">5414.02 - PENGAWAL PRIBADI</option>
                  <option value="5414.03">5414.03 - PENJAGA MUSEUM</option>
                  <option value="5414.04">5414.04 - PETUGAS PATROLI KEAMANAN</option>
                  <option value="5414.99">5414.99 - PENJAGA KEAMANAN LAINNYA</option>
                </optgroup>
                <optgroup label="5419 - TENAGA USAHA JASA PERLINDUNGAN YTDL">
                  <option value="5419.01">5419.01 - PETUGAS PATROLI PANTAI</option>
                  <option value="5419.02">5419.02 - PETUGAS PENYELAMAT PANTAI</option>
                  <option value="5419.03">5419.03 - PETUGAS PENGAWAS BINATANG</option>
                  <option value="5419.04">5419.04 - PETUGAS PENYEBERANGAN JALAN</option>
                  <option value="5419.99">5419.99 - TENAGA USAHA JASA PERLINDUNGAN YTDL LAINNYA</option>
                  <option value="5421.01">5421.01 - MODEL IKLAN</option>
                  <option value="5421.02">5421.02 - MODEL FESYEN</option>
                  <option value="5421.99">5421.99 - MODEL FESYEN DAN MODEL LAINNYA YTDL</option>
                </optgroup>
                <optgroup label="6111 - PEKERJA PERTANIAN TANAMAN PANGAN DAN TANAMAN SEMUSIM">
                  <option value="6111.01">6111.01 - PETANI PADI</option>
                  <option value="6111.02">6111.02 - PETANI SEREALIA SELAIN PADI</option>
                  <option value="6111.03">6111.03 - PETANI KAPAS</option>
                  <option value="6111.04">6111.04 - PETANI TEBU</option>
                  <option value="6111.05">6111.05 - PETANI SAYURAN SEMUSIM</option>
                  <option value="6111.06">6111.06 - PETANI BUAH SEMUSIM</option>
                  <option value="6111.99">6111.99 - PEKERJA PERTANIAN TANAMAN PANGAN DAN TANAMAN SEMUSIM LAINNYA</option>
                </optgroup>
                <optgroup label="6112 - PEKERJA PERTANIAN TANAMAN TAHUNAN DAN TANAMAN SEMAK">
                  <option value="6112.01">6112.01 - PETANI KARET</option>
                  <option value="6112.02">6112.02 - PENYADAP KARET</option>
                  <option value="6112.03">6112.03 - PETANI TEEH</option>
                  <option value="6112.04">6112.04 - PETANI ANGGUR</option>
                  <option value="6112.05">6112.05 - PETANI BUAH TAHUNAN SELAIN ANGGUR</option>
                  <option value="6112.06">6112.06 - PETANI SAYURAN TAHUNAN</option>
                  <option value="6112.99">6112.99 - PEKERJA PERTANIAN TANAMAN TAHUNAN DAN TANAMAN SEMAK LAINNYA</option>
                </optgroup>
                <optgroup label="6113 - PEKERJA PERTANIAN TANAMAN KEBUN BIBIT DAN TANAMAN TAMAN">
                  <option value="6113.01">6113.01 - PETANI KEBUN BIBIT</option>
                  <option value="6113.02">6113.02 - PETANI TANAMAN TAMAN</option>
                  <option value="6113.03">6113.03 - PEMBUDIDAYA JAMUR</option>
                  <option value="6113.99">6113.99 - PEKERJA PERTANIAN TANAMAN KEBUN BIBIT DAN TANAMAN TAMAN LAINNYA</option>
                </optgroup>
                <optgroup label="6114 - PEKERJA PERTANIAN TANAMAN CAMPURAN (TUMPANG SARI)">
                  <option value="6114.01">6114.01 - PETANI TANAMAN CAMPURAN (TUMPANG SARI)</option>
                  <option value="6114.02">6114.02 - PEKERJA TERAMPIL TANAMAN CAMPURAN (TUMPANG SARI)</option>
                  <option value="6114.99">6114.99 - PEKERJA PERTANIAN TANAMAN CAMPURAN (TUMPANG SARI) LAINNYA</option>
                </optgroup>
                <optgroup label="6121 - PEKERJA PETERNAKAN HEWAN BESAR DAN KECIL SERTA PENGHASIL SUSU">
                  <option value="6121.01">6121.01 - PETERNAK SAPI POTONG</option>
                  <option value="6121.02">6121.02 - PETERNAK KERBAU</option>
                  <option value="6121.03">6121.03 - PETERNAK KUDA</option>
                  <option value="6121.04">6121.04 - PETERNAK KAMBING</option>
                  <option value="6121.05">6121.05 - PETERNAK DOMBA</option>
                  <option value="6121.06">6121.06 - PETERNAK BABI</option>
                  <option value="6121.07">6121.07 - PETERNAK PENGHASIL SUSU</option>
                  <option value="6121.08">6121.08 - PEMBIAK ANJING</option>
                  <option value="6121.09">6121.09 - PENGGIRING TERNAK</option>
                  <option value="6121.10">6121.10 - SHEARER (PETUGAS PEMANGKAS BULU TERNAK)</option>
                  <option value="6121.99">6121.99 - PEKERJA PETERNAKAN HEWAN BESAR DAN KECIL SERTA PENGHASIL SUSU LAINNYA</option>
                </optgroup>
                <optgroup label="6122 - PEKERJA PETERNAKAN UNGGAS">
                  <option value="6122.01">6122.01 - PEMBIAK UNGGAS</option>
                  <option value="6122.02">6122.02 - PETERNAK UNGGAS</option>
                  <option value="6122.99">6122.99 - PEKERJA PETERNAKAN UNGGAS LAINNYA</option>
                </optgroup>
                <optgroup label="6123 - PEKERJA PETERNAKAN LEBAH DAN ULAT SUTERA">
                  <option value="6123.01">6123.01 - PETERNAK LEBAH</option>
                  <option value="6123.02">6123.02 - PETERNAK ULAT SUTERA</option>
                  <option value="6123.99">6123.99 - PEKERJA PETERNAKAN LEBAH DAN ULAT SUTERA LAINNYA</option>
                </optgroup>
                <optgroup label="6129 - PEKERJA PETERNAKAN YTDL">
                  <option value="6129.01">6129.01 - PETERNAK BULU HEWAN (NON-HEWAN PIARAAN)</option>
                  <option value="6129.02">6129.02 - PETERNAK BURUNG HIAS</option>
                  <option value="6129.03">6129.03 - PETERNAK BURUNG UNTA</option>
                  <option value="6129.99">6129.99 - PEKERJA PETERNAKAN YTDL LAINNYA</option>
                </optgroup>
                <optgroup label="6130 - PEKERJA CAMPURAN PERTANIAN DAN PETERNAKAN">
                  <option value="6130.01">6130.01 - PETANI CAMPURAN (PERTANIAN DAN PETERNAKAN)</option>
                  <option value="6130.02">6130.02 - PEKERJA TERAMPIL PERTANIAN CAMPURAN (PERTANIAN DAN PETERNAKAN)</option>
                  <option value="6130.99">6130.99 - PEKERJA CAMPURAN PERTANIAN DAN PETERNAKAN LAINNYA</option>
                </optgroup>
                <optgroup label="6210 - PEKERJA KEHUTANAN DAN YBDI">
                  <option value="6210.01">6210.01 - PEMBUAT ARANG</option>
                  <option value="6210.02">6210.02 - TUKANG TEBANG KAYU</option>
                  <option value="6210.03">6210.03 - PENEBANG PENDAKI</option>
                  <option value="6210.04">6210.04 - PEKERJA TERAMPIL KEHUTANAN</option>
                  <option value="6210.05">6210.05 - PENCARI KAYU</option>
                  <option value="6210.06">6210.06 - PENEBANG POHON DENGAN ALAT PERKAKAS</option>
                  <option value="6210.99">6210.99 - PEKERJA KEHUTANAN DAN YBDI LAINNYA</option>
                </optgroup>
                <optgroup label="6221 - PEKERJA BUDIDAYA PERIKANAN">
                  <option value="6221.01">6221.01 - PETANI BUDIDAYA GANGGANG</option>
                  <option value="6221.02">6221.02 - PETANI BUDIDAYA IKAN</option>
                  <option value="6221.03">6221.03 - PETANI BUDIDAYA TIRAM</option>
                  <option value="6221.04">6221.04 - PETANI BUDIDAYA MUTIARA</option>
                  <option value="6221.05">6221.05 - PETANI BUDIDAYA SEAFOOD</option>
                  <option value="6221.06">6221.06 - PEKERJA TERAMPIL BUDIDAYA PERIKANAN</option>
                  <option value="6221.07">6221.07 - PEKERJA TERAMPIL BUDIDAYA SEAFOOD</option>
                  <option value="6221.08">6221.08 - PEKERJA BUDIDAYA BUAYA</option>
                  <option value="6221.09">6221.09 - PEKERJA BUDIDAYA SIPUT</option>
                  <option value="6221.99">6221.99 - PEKERJA BUDIDAYA PERIKANAN LAINNYA</option>
                </optgroup>
                <optgroup label="6222 - PEKERJA PERIKANAN TANGKAP DI PERAIRAN UMUM DAN PESISIR">
                  <option value="6222.01">6222.01 - KAPTEN KAPAL NELAYAN</option>
                  <option value="6222.02">6222.02 - NELAYAN (PERAIRAN PESISIR)</option>
                  <option value="6222.03">6222.03 - NELAYAN (PERAIRAN UMUM)</option>
                  <option value="6222.99">6222.99 - PEKERJA PERIKANAN TANGKAP DI PERAIRAN UMUM DAN PESISIR LAINNYA</option>
                </optgroup>
                <optgroup label="6223 - PEKERJA PERIKANAN TANGKAP DI PERAIRAN LAUT DALAM">
                  <option value="6223.01">6223.01 - NELAYAN LAUT DALAM</option>
                  <option value="6223.02">6223.02 - KAPTEN KAPAL PUKAT</option>
                  <option value="6223.99">6223.99 - PEKERJA PERIKANAN TANGKAP DI PERAIRAN LAUT DALAM LAINNYA</option>
                </optgroup>
                <optgroup label="6224 - PEMBURU DAN PENANGKAPAN SATWA LIAR">
                  <option value="6224.01">6224.01 - PENANGKAP HEWAN BERBULU</option>
                  <option value="6224.02">6224.02 - PEMBURU ANJING LAUT</option>
                  <option value="6224.03">6224.03 - PEMBURU IKAN PAUS</option>
                  <option value="6224.99">6224.99 - PEMBURU DAN PENANGKAPAN SATWA LIAR LAINNYA</option>
                </optgroup>
                <optgroup label="6310 - PETANI SUBSISTEN">
                  <option value="6310.01">6310.01 - PETANI SUBSISTEN</option>
                </optgroup>
                <optgroup label="6320 - PETERNAK SUBSISTEN">
                  <option value="6320.01">6320.01 - PETERNAK SUBSISTEN</option>
                </optgroup>
                <optgroup label="6330 - PETANI DAN PETERNAK (CAMPURAN) SUBSISTEN">
                  <option value="6330.01">6330.01 - PETANI DAN PETERNAK (CAMPURAN) SUBSISTEN</option>
                </optgroup>
                <optgroup label="6340 - NELAYAN, PEMBURU, PENANGKAP, DAN PENGUMPUL SUBSISTEN">
                  <option value="6340.01">6340.01 - NELAYAN SUBSISTEN</option>
                  <option value="6340.02">6340.02 - PEMBURU DAN PENANGKAP SATWA LIAR SUBSISTEN</option>
                  <option value="6340.03">6340.03 - PENGUMPUL SUBSISTEN</option>
                  <option value="6340.99">6340.99 - NELAYAN, PEMBURU, PENANGKAP, DAN PENGUMPUL SUBSISTEN LAINNYA</option>
                </optgroup>
                <optgroup label="7111 - PEKERJA BANGUNAN RUMAH">
                  <option value="7111.01">7111.01 - PEKERJA BANGUNAN RUMAH</option>
                </optgroup>
                <optgroup label="7112 - TUKANG TEMBOK YBDI">
                  <option value="7112.01">7112.01 - TUKANG TEMBOK</option>
                  <option value="7112.02">7112.02 - TUKANG PASANG BLOK</option>
                  <option value="7112.99">7112.99 - TUKANG TEMBOK YBDI LAINNYA</option>
                </optgroup>
                <optgroup label="7113 - PEMBELAH, PEMOTONG, PEMECAH DAN PEMAHAT BATU">
                  <option value="7113.01">7113.01 - PEMBELAH, PEMOTONG DAN PEMECAH BATU</option>
                  <option value="7113.02">7113.02 - PEMAHAT BATU</option>
                  <option value="7113.99">7113.99 - PEMBELAH, PEMOTONG, PEMECAH, DAN PEMAHAT BATU LAINNYA</option>
                </optgroup>
                <optgroup label="7114 - TUKANG BETON DAN YBDI">
                  <option value="7114.01">7114.01 - TUKANG COR BETON</option>
                  <option value="7114.02">7114.02 - TUKANG PASANG BETON</option>
                  <option value="7114.03">7114.03 - TUKANG TERASO</option>
                  <option value="7114.99">7114.99 - TUKANG BETON DAN YBDI LAINNYA</option>
                </optgroup>
                <optgroup label="7115 - TUKANG KAYU BANGUNAN">
                  <option value="7115.01">7115.01 - TUKANG KAYU</option>
                  <option value="7115.02">7115.02 - TUKANG KAYU PENYEMPURNA</option>
                  <option value="7115.03">7115.03 - PEMBUAT KERANGKA KAYU</option>
                  <option value="7115.04">7115.04 - PEMBUAT GALANGAN KAPAL</option>
                  <option value="7115.99">7115.99 - TUKANG KAYU BANGUNAN LAINNYA</option>
                </optgroup>
                <optgroup label="7119 - PEKERJA KERANGKA BANGUNAN YTDL">
                  <option value="7119.01">7119.01 - PEKERJA PEMBONGKARAN</option>
                  <option value="7119.02">7119.02 - PERANCAH</option>
                  <option value="7119.03">7119.03 - PEKERJA PANJAT MENARA</option>
                  <option value="7119.99">7119.99 - PEKERJA KERANGKA BANGUNAN YTDL LAINNYA</option>
                </optgroup>
                <optgroup label="7121 - PEKERJA ATAP BANGUNAN">
                  <option value="7121.01">7121.01 - PEKERJA ATAP GENTENG</option>
                  <option value="7121.02">7121.02 - PEKERJA ATAP LOGAM</option>
                  <option value="7121.03">7121.03 - PEKERJA ATAP RUMBIA</option>
                  <option value="7121.99">7121.99 - PEKERJA ATAP BANGUNAN LAINNYA</option>
                </optgroup>
                <optgroup label="7122 - PEKERJA LANTAI DAN UBIN">
                  <option value="7122.01">7122.01 - PEMASANG PARKET</option>
                  <option value="7122.02">7122.02 - PEMASANG MARMER</option>
                  <option value="7122.03">7122.03 - PEMASANG UBIN</option>
                  <option value="7122.04">7122.04 - PEMASANG LAPISAN KARPET</option>
                  <option value="7122.99">7122.99 - PEKERJA LANTAI DAN UBIN LAINNYA</option>
                </optgroup>
                <optgroup label="7123 - PEKERJA PLESTER">
                  <option value="7123.01">7123.01 - PEKERJA PLESTERBOARD</option>
                  <option value="7123.02">7123.02 - PEKERJA PLESTER GYPSUM</option>
                  <option value="7123.03">7123.03 - PEKERJA PLESTER STUKO</option>
                  <option value="7123.04">7123.04 - PEKERJA PLESTER ORNAMEN</option>
                  <option value="7123.05">7123.05 - PEKERJA PLESTER SEMEN</option>
                  <option value="7123.99">7123.99 - PEKERJA PLESTER BAHAN LAINNYA</option>
                </optgroup>
                <optgroup label="7124 - PEKERJA ISOLASI">
                  <option value="7124.01">7124.01 - PEKERJA ISOLASI AKUSTIK</option>
                  <option value="7124.02">7124.02 - PEKERJA ISOLASI BOILER DAN PIPA</option>
                  <option value="7124.03">7124.03 - PEKERJA ISOLASI PERALATAN PENDINGIN DAN AC</option>
                  <option value="7124.04">7124.04 - PEKERJA ISOLASI BANGUNAN</option>
                  <option value="7124.99">7124.99 - PEKERJA ISOLASI LAINNYA</option>
                </optgroup>
                <optgroup label="7125 - PEKERJA KACA">
                  <option value="7125.01">7125.01 - PEKERJA KACA OTOMATIS</option>
                  <option value="7125.02">7125.02 - PEKERJA KACA</option>
                  <option value="7125.03">7125.03 - PEKERJA KACA ATAP</option>
                  <option value="7125.04">7125.04 - PEKERJA KACA KENDARAAN</option>
                  <option value="7125.99">7125.99 - PEKERJA KACA LAINNYA</option>
                </optgroup>
                <optgroup label="7126 - PEKERJA PERPIPAAN">
                  <option value="7126.01">7126.01 - PEKERJA PIPA</option>
                  <option value="7126.02">7126.02 - PEKERJA SAMBUNGAN PIPA</option>
                  <option value="7126.03">7126.03 - PEKERJA SALURAN PEMBUANGAN</option>
                  <option value="7126.99">7126.99 - PEKERJA PERPIPAAN LAINNYA</option>
                </optgroup>
                <optgroup label="7127 - MEKANIK PENDINGIN UDARA DAN LEMARI PENDINGIN">
                  <option value="7127.01">7127.01 - MEKANIK PERALATAN PENDINGIN UDARA</option>
                  <option value="7127.02">7127.02 - MEKANIK LEMARI PENDINGIN</option>
                  <option value="7127.99">7127.99 - MEKANIK PENDINGIN UDARA DAN LEMARI PENDINGIN LAINNYA</option>
                </optgroup>
                <optgroup label="7131 - PEKERJA PENGECETAN BANGUNAN DAN YBDI">
                  <option value="7131.01">7131.01 - PENGECET BANGUNAN</option>
                  <option value="7131.02">7131.02 - PEMASANG WALLPAPER</option>
                  <option value="7131.99">7131.99 - PEKERJA PENGECETAN BANGUNAN DAN YBDI LAINNYA</option>
                </optgroup>
                <optgroup label="7132 - PEKERJA CAT SEMPROT DAN VERNIS">
                  <option value="7132.01">7132.01 - PENGECAT BARANG INDUSTRI</option>
                  <option value="7132.02">7132.02 - PENGECAT KENDARAAN</option>
                  <option value="7132.03">7132.03 - PEKERJA VERNIS</option>
                  <option value="7132.99">7132.99 - PEKERJA CAT SEMPROT DAN VERNIS LAINNYA</option>
                </optgroup>
                <optgroup label="7133 - PEMBERSIH BANGUNAN">
                  <option value="7133.01">7133.01 - PEMBERSIH CEROBONG</option>
                  <option value="7133.02">7133.02 - PEMBERSIH EKSTERIOR BANGUNAN</option>
                  <option value="7133.03">7133.03 - PEKERJA SANDBLASTING</option>
                  <option value="7133.99">7133.99 - PEMBERSIH BANGUNAN LAINNYA</option>
                </optgroup>
                <optgroup label="7211 - PELEBUR DAN PENCETAK INTI LOGAM">
                  <option value="7211.01">7211.01 - PEKERJA INTI LOGAM</option>
                  <option value="7211.02">7211.02 - PEKERJA LOGAM CETAKAN</option>
                  <option value="7211.99">7211.99 - PELEBUR DAN PENCETAK INTI LOGAM LAINNYA</option>
                </optgroup>
                <optgroup label="7212 - PEKERJA PENGELASAN">
                  <option value="7212.01">7212.01 - PEKERJA PENGELASAN</option>
                  <option value="7212.02">7212.02 - PEMOTONG LOGAM</option>
                  <option value="7212.99">7212.99 - PEKERJA PENGELASAN LAINNYA</option>
                </optgroup>
                <optgroup label="7213 - PEKERJA LOGAM LEMBARAN">
                  <option value="7213.01">7213.01 - PEKERJA LOGAM WADAH KETEL UAP AIR</option>
                  <option value="7213.02">7213.02 - PEKERJA LOGAM TEMBAGA</option>
                  <option value="7213.03">7213.03 - TUKANG PATRI</option>
                  <option value="7213.99">7213.99 - PEKERJA LOGAM LEMBARAN LAINNYA</option>
                </optgroup>
                <optgroup label="7214 - PEKERJA PENYIAPAN DAN PEMANCANGAN STRUKTUR LOGAM">
                  <option value="7214.01">7214.01 - PEKERJA PENYIAPAN STRUKTUR LOGAM</option>
                  <option value="7214.02">7214.02 - PEKERJA PEMANCANGAN STRUKTUR LOGAM</option>
                  <option value="7214.03">7214.03 - PEKERJAKELING PAKU LOGAM</option>
                  <option value="7214.99">7214.99 - PEKERJA PENYIAPAN DAN PEMANCANGAN STRUKTUR LOGAM LAINNYA</option>
                </optgroup>
                <optgroup label="7215 - PEMASANG DAN PENYAMBUNG TALI KABEL">
                  <option value="7215.01">7215.01 - PEMASANG TALI KABEL</option>
                  <option value="7215.02">7215.02 - PEMASANG TALI KABEL KAPAL</option>
                  <option value="7215.03">7215.03 - PENYAMBUNG TALI KABEL</option>
                  <option value="7215.04">7215.04 - PEMASANGTALI KABEL MENARA</option>
                  <option value="7215.05">7215.05 - PEMASANGTALI KABEL PEMENTASAN TEATER</option>
                  <option value="7215.99">7215.99 - PEMASANG DAN PENYAMBUNG TALI KABEL LAINNYA</option>
                </optgroup>
                <optgroup label="7221 - PANDAI BESI, PEKERJA TEMPA DAN PRESS LOGAM">
                  <option value="7221.01">7221.01 - PANDAI BESI</option>
                  <option value="7221.02">7221.02 - PEKERJA TEMPA</option>
                  <option value="7221.99">7221.99 - PANDAI BESI, PEKERJA TEMPA DAN PRESS LOGAM LAINNYA</option>
                </optgroup>
                <optgroup label="7222 - PEMBUAT PERKAKAS DAN YBDI">
                  <option value="7222.01">7222.01 - PEMBUAT BAUT, MUR DAN SEJENISNYA</option>
                  <option value="7222.02">7222.02 - PEMBUAT SENAPAN</option>
                  <option value="7222.03">7222.03 - PEMBUAT KUNCI</option>
                  <option value="7222.99">7222.99 - PEMBUAT PERKAKAS DAN YBDI LAINNYA</option>
                </optgroup>
                <optgroup label="7223 - OPERATOR DAN PENYETEL MESIN PENGERJAAN LOGAM">
                  <option value="7223.01">7223.01 - OPERATOR MESIN BOR</option>
                  <option value="7223.02">7223.02 - OPERATOR PERKAKAS MESIN</option>
                  <option value="7223.03">7223.03 - TUKANG BUBUT</option>
                  <option value="7223.04">7223.04 - PENYETEL PERKAKAS MESIN</option>
                  <option value="7223.05">7223.05 - OPERATOR PENYETEL PERKAKAS MESIN</option>
                  <option value="7223.99">7223.99 - OPERATOR DAN PENYETEL MESIN PENGERJAAN LOGAM</option>
                </optgroup>
                <optgroup label="7224 - PEMOLES LOGAM, PENGASAH, DAN PENAJAM PERKAKAS LOGAM">
                  <option value="7224.01">7224.01 - PEKERJA PENYELESAIAN (FINISHING) LOGAM</option>
                  <option value="7224.02">7224.02 - PENGASAH PERKAKAS</option>
                  <option value="7224.03">7224.03 - PEMOLES LOGAM</option>
                  <option value="7224.04">7224.04 - PENGASAH PISAU</option>
                  <option value="7224.99">7224.99 - PEMOLES LOGAM, PENGASAH, DAN PENAJAM PERKAKAS LOGAM LAINNYA</option>
                </optgroup>
                <optgroup label="7231 - MEKANIK DAN TUKANG REPARASI KENDARAAN BERMOTOR">
                  <option value="7231.01">7231.01 - TEKNISI PERBAIKAN SISTEM REM OTOMOTIF</option>
                  <option value="7231.02">7231.02 - TEKNISI PERBAIKAN SISTEM BAHAN BAKAR OTOMOTIF</option>
                  <option value="7231.03">7231.03 - MEKANIK DAN TUKANG REPARASI MOBIL</option>
                  <option value="7231.04">7231.04 - MEKANIK DAN TUKANG REPARASI SEPEDA MOTOR</option>
                  <option value="7231.05">7231.05 - PENYETEL MESIN KENDARAAN BERMOTOR</option>
                  <option value="7231.99">7231.99 - MEKANIK DAN TUKANG REPARASI KENDARAAN BERMOTOR LAINNYA</option>
                </optgroup>
                <optgroup label="7232 - MEKANIK DAN TUKANG REPARASI MESIN PESAWAT">
                  <option value="7232.01">7232.01 - PEMASANG MESIN PESAWAT</option>
                  <option value="7232.02">7232.02 - MEKANIK PESAWAT UDARA</option>
                  <option value="7232.03">7232.03 - MEKANIK PESAWAT HELIKOPTER</option>
                  <option value="7232.04">7232.04 - MEKANIK PESAWAT JET</option>
                  <option value="7232.05">7232.05 - MEKANIK SISTEM PNEUDRAULIC PESAWAT</option>
                  <option value="7232.06">7232.06 - MEKANIK MESIN DAYA PESAWAT</option>
                  <option value="7232.07">7232.07 - MEKANIK KOMPONEN MESIN ROKET</option>
                  <option value="7232.99">7232.99 - MEKANIK DAN TUKANG REPARASI MESIN PESAWAT LAINNYA</option>
                </optgroup>
                <optgroup label="7233 - MEKANIK DAN TUKANG REPARASI MESIN PERTANIAN DAN INDUSTRI">
                  <option value="7233.01">7233.01 - MEKANIK DAN TUKANG REPARASI MESIN KONSTRUKSI</option>
                  <option value="7233.02">7233.02 - MEKANIK DAN TUKANG REPARASI MESIN INDUSTRI</option>
                  <option value="7233.03">7233.03 - MEKANIK DAN TUKANG REPARASI MESIN PERTANIAN</option>
                  <option value="7233.04">7233.04 - MEKANIK DAN TUKANG REPARASI MESIN PERTAMBANGAN</option>
                  <option value="7233.05">7233.05 - MEKANIK DAN TUKANG REPARASI MESIN KERETA API</option>
                  <option value="7233.99">7233.99 - MEKANIK DAN TUKANG REPARASI MESIN PERTANIAN DAN INDUSTRI LAINNYA</option>
                </optgroup>
                <optgroup label="7234 - TUKANG REPARASI SEPEDA DAN YBDI">
                  <option value="7234.01">7234.01 - MEKANIK DAN TUKANG REPARASI SEPEDA</option>
                  <option value="7234.02">7234.02 - MEKANIK DAN TUKANG REPARASI KURSI RODA</option>
                  <option value="7234.99">7234.99 - TUKANG REPARASI SEPEDA DAN YBDI LAINNYA</option>
                </optgroup>
                <optgroup label="7311 - PEMBUAT DAN TUKANG REPARASI PERALATAN PRESISI">
                  <option value="7311.01">7311.01 - PEMBUAT DAN TUKANG REPARASI ALAT METEOROLOGI</option>
                  <option value="7311.02">7311.02 - PEMBUAT DAN TUKANG REPARASI ALAT ORTOPEDI</option>
                  <option value="7311.03">7311.03 - PEMBUAT DAN TUKANG REPARASI JAM DAN JAM TANGAN</option>
                  <option value="7311.04">7311.04 - PEMBUAT DAN TUKANG REPARASI ALAT OPTIK</option>
                  <option value="7311.05">7311.05 - PEMBUAT DAN TUKANG REPARASI ALAT UKUR</option>
                  <option value="7311.99">7311.99 - PEMBUAT DAN TUKANG REPARASI PERALATAN PRESISI LAINNYA</option>
                </optgroup>
                <optgroup label="7312 - PEMBUAT DAN PENYETEM ALAT MUSIK">
                  <option value="7312.01">7312.01 - PEMBUAT DAN TUKANG REPARASI ALAT MUSIK TIUP DARI KUNINGAN</option>
                  <option value="7312.02">7312.02 - PEMBUAT DAN TUKANG REPARASI ALAT MUSIK PIANO</option>
                  <option value="7312.03">7312.03 - PENYETEM ALAT MUSIK PIANO</option>
                  <option value="7312.04">7312.04 - PEMBUAT DAN TUKANG REPARASI ALAT MUSIK BERSENAR</option>
                  <option value="7312.05">7312.05 - PEMBUAT DAN TUKANG REPARASI ALAT MUSIK TIUP KAYU</option>
                  <option value="7312.99">7312.99 - PEMBUAT DAN PENYETEM ALAT MUSIK LAINNYA</option>
                </optgroup>
                <optgroup label="7313 - PEKERJA PEMBUAT PERHIASAN DAN BARANG DARI LOGAM MULIA">
                  <option value="7313.01">7313.01 - PEKERJA PENYEPUHAN PERHIASAN</option>
                  <option value="7313.02">7313.02 - PEKERJA PERHIASAN EMAS</option>
                  <option value="7313.03">7313.03 - PEKERJA PERHIASAN BATU PERMATA</option>
                  <option value="7313.04">7313.04 - PEKERJA PEMASANG BATU MULIA</option>
                  <option value="7313.05">7313.05 - PEKERJA PEMOTONG DAN PENGGOSOK BATU MULIA</option>
                  <option value="7313.06">7313.06 - PEKERJA PERHIASAN PERAK</option>
                  <option value="7313.99">7313.99 - PEKERJA PEMBUAT PERHIASAN DAN BARANG DARI LOGAM MULIA</option>
                </optgroup>
                <optgroup label="7314 - PEMBUAT TEMBIKAR DAN YBDI">
                  <option value="7314.01">7314.01 - PEMBUAT TEMBIKAR DAN PORSELEN</option>
                  <option value="7314.02">7314.02 - PEMBUAT DESAIN TEMBIKAR DAN PORSELEN</option>
                  <option value="7314.03">7314.03 - PENGGOSOK TEMBIKAR</option>
                  <option value="7314.99">7314.99 - PEMBUAT TEMBIKAR DAN YBDI LAINNYA</option>
                </optgroup>
                <optgroup label="7315 - PEMBUAT, PEMOTONG, PENGASAH DAN PENYELESAI KACA">
                  <option value="7315.01">7315.01 - TUKANG TIUP KACA</option>
                  <option value="7315.02">7315.02 - PEMOTONG KACA</option>
                  <option value="7315.03">7315.03 - PENYELESAI KACA</option>
                  <option value="7315.04">7315.04 - PENGASAH KACA</option>
                  <option value="7315.99">7315.99 - PEMBUAT, PEMOTONG, PENGASAH DAN PENYELESAI KACA LAINNYA</option>
                </optgroup>
                <optgroup label="7316 - PEMBUAT PAPAN TANDA, PELUKIS DEKORATIF, PENGUKIR DAN PENGETSA">
                  <option value="7316.01">7316.01 - PENGUKIR KACA</option>
                  <option value="7316.02">7316.02 - PENGETSA KACA</option>
                  <option value="7316.03">7316.03 - PELAPIS KACA</option>
                  <option value="7316.04">7316.04 - PELUKIS DEKORATIF</option>
                  <option value="7316.05">7316.05 - PEMBUAT PAPAN TANDA</option>
                  <option value="7316.99">7316.99 - PEMBUAT PAPAN TANDA, PELUKIS DEKORATIF, PENGUKIR DAN PENGETSA LAINNYA</option>
                </optgroup>
                <optgroup label="7317 - PEMBUAT KERAJINAN DARI KAYU, KERANJANG ANYAMAN, DAN DARI BAHAN YBDI">
                  <option value="7317.01">7317.01 - PEMBUAT KERAJINAN DARI KAYU</option>
                  <option value="7317.02">7317.02 - PEMBUAT KERAJINAN ANYAMAN</option>
                  <option value="7317.03">7317.03 - PEMBUAT KERAJINAN KERANJANG ANYAMAN</option>
                  <option value="7317.04">7317.04 - PEMBUAT KERAJINAN FURNITUR ANYAMAN</option>
                  <option value="7317.05">7317.05 - PEMBUAT KERAJINAN SIKAT DAN SEJENISNYA</option>
                  <option value="7317.06">7317.06 - PEMBUAT KERAJINAN DARI BATU</option>
                  <option value="7317.99">7317.99 - PEMBUAT KERAJINAN DARI KAYU, KERANJANG ANYAMAN, DAN DARI BAHAN YBDI LAINNYA</option>
                </optgroup>
                <optgroup label="7318 - PEMBUAT KERAJINAN DARI TEKSTIL, KULIT, DAN BAHAN YBDI">
                  <option value="7318.01">7318.01 - PEMBUAT KERAJINAN BARANG DARI KARPET</option>
                  <option value="7318.02">7318.02 - PEMBUAT KERAJINAN BARANG DARI KULIT</option>
                  <option value="7318.03">7318.03 - PEMBUAT KERAJINAN BARANG DARI TEKSTIL</option>
                  <option value="7318.04">7318.04 - PEMBUAT BENANG TRADISIONAL (DRAWER, COMBER, ROVER)</option>
                  <option value="7318.05">7318.05 - PEMBUAT KERAJINAN RAJUTAN</option>
                  <option value="7318.06">7318.06 - PEMBUAT BENANG</option>
                  <option value="7318.07">7318.07 - PEMBUAT KERAJINAN KAIN TENUN</option>
                  <option value="7318.99">7318.99 - PEMBUAT KERAJINAN DARI TEKSTIL, KULIT, DAN BAHAN YBDI LAINNYA</option>
                </optgroup>
                <optgroup label="7319 - PEMBUAT KERAJINAN YTDL">
                  <option value="7319.01">7319.01 - PEMBUAT KERAJINAN LOGAM</option>
                  <option value="7319.02">7319.02 - PEMBUAT KERAJINAN PERHIASAN IMITASI DARI LOGAM</option>
                  <option value="7319.99">7319.99 - PEMBUAT KERAJINAN YTDL LAINNYA</option>
                </optgroup>
                <optgroup label="7321 - PEKERJA PRACETAK">
                  <option value="7321.01">7321.01 - PEKERJA PENYUSUN HURUF</option>
                  <option value="7321.02">7321.02 - OPERATOR DEKSTOP PUBLISHING</option>
                  <option value="7321.03">7321.03 - TEKNISI ELEKTRONIK PRACETAK</option>
                  <option value="7321.04">7321.04 - PEMBUAT MASTER CETAK</option>
                  <option value="7321.99">7321.99 - PEKERJA PRACETAK LAINNYA</option>
                </optgroup>
                <optgroup label="7322 - PEKERJA PENCETAKAN">
                  <option value="7322.01">7322.01 - PENCETAK DENGAN BLOK</option>
                  <option value="7322.02">7322.02 - OPERATOR MESIN CETAK DIGITAL</option>
                  <option value="7322.03">7322.03 - OPERATOR FEEDER</option>
                  <option value="7322.04">7322.04 - OPERATOR MESIN CETAK FLEXOGRAPHY</option>
                  <option value="7322.05">7322.05 - OPERATOR MESIN CETAK GRAVURE</option>
                  <option value="7322.06">7322.06 - TUKANG SABLON</option>
                  <option value="7322.07">7322.07 - OPERATOR MESIN CETAK SABLON</option>
                  <option value="7322.08">7322.08 - OPERATOR MESIN CETAK WEB</option>
                  <option value="7322.99">7322.99 - PEKERJA PENCETAKAN LAINNYA</option>
                </optgroup>
                <optgroup label="7323 - PEKERJA PENYELESAIAN DAN PENJILIDAN CETAKAN">
                  <option value="7323.01">7323.01 - PENJILID BUKU</option>
                  <option value="7323.02">7323.02 - OPERATOR MESIN PENYUSUN CETAKAN</option>
                  <option value="7323.03">7323.03 - OPERATOR MESIN PEMOTONG</option>
                  <option value="7323.04">7323.04 - OPERATOR MESIN PELIPAT</option>
                  <option value="7323.05">7323.05 - OPERATOR MESIN PENJILID</option>
                  <option value="7323.99">7323.99 - PEKERJA PENYELESAIAN DAN PENJILIDAN CETAKAN LAINNYA</option>
                </optgroup>
                <optgroup label="7411 - PEKERJA KELISTRIKAN BANGUNAN DAN YBDI">
                  <option value="7411.01">7411.01 - MONTIR LISTRIK</option>
                  <option value="7411.02">7411.02 - PEKERJA REPARASI LISTRIK BANGUNAN</option>
                  <option value="7411.99">7411.99 - PEKERJA KELISTRIKAN BANGUNAN DAN YBDI LAINNYA</option>
                </optgroup>
                <optgroup label="7412 - MEKANIK DAN PEMASANG PERALATAN LISTRIK">
                  <option value="7412.01">7412.01 - PEMBANGUN ANGKER DINAMO</option>
                  <option value="7412.02">7412.02 - PEMASANG GENERATOR LISTRIK</option>
                  <option value="7412.03">7412.03 - MEKANIK LIFT</option>
                  <option value="7412.99">7412.99 - MEKANIK DAN PEMASANG PERALATAN LISTRIK LAINNYA</option>
                </optgroup>
                <optgroup label="7413 - PEKERJA INSTALASI DAN REPARASI JARINGAN LISTRIK">
                  <option value="7413.01">7413.01 - PEKERJA PENYAMBUNG KABEL LISTRIK</option>
                  <option value="7413.02">7413.02 - PEKERJA JARINGAN TENAGA LISTRIK</option>
                  <option value="7413.99">7413.99 - PEKERJA INSTALASI DAN REPARASI JARINGAN LISTRIK LAINNYA</option>
                </optgroup>
                <optgroup label="7421 - PEKERJA MEKANIK DAN SERVIS PERALATAN ELEKTRONIK">
                  <option value="7421.01">7421.01 - TEKNISI DAN PEKERJA SERVIS AVIONIK</option>
                  <option value="7421.02">7421.02 - MEKANIK MESIN ATM</option>
                  <option value="7421.03">7421.03 - TEKNISI MESIN FOTOKOPI</option>
                  <option value="7421.04">7421.04 - MEKANIK DAN SERVIS PERALATAN ELEKTRONIK RUMAH TANGGA</option>
                  <option value="7421.99">7421.99 - PEKERJA MEKANIK DAN SERVIS PERALATAN ELEKTRONIK LAINNYA</option>
                </optgroup>
                <optgroup label="7422 - PEKERJA INSTALASI DAN SERVIS PERALATAN TEKNOLOGI INFORMASI DAN KOMUNIKASI">
                  <option value="7422.01">7422.01 - PEKERJA INSTALASI DAN TEKNISI JARINGAN DATA DAN TELEKOMUNIKASI</option>
                  <option value="7422.02">7422.02 - PEMASANG PERALATAN KOMPUTER</option>
                  <option value="7422.03">7422.03 - TEKNISI PERALATAN KOMUNIKASI</option>
                  <option value="7422.04">7422.04 - TEKNISI PERANGKAT KERAS/HARDWARE</option>
                  <option value="7422.99">7422.99 - PEKERJA INSTALASI DAN SERVIS PERALATAN TEKNOLOGI INFORMASI DAN KOMUNIKASI LAINNYA</option>
                </optgroup>
                <optgroup label="7511 - PEMOTONG HEWAN, PENJUAL IKAN SEGAR DAN PENGOLAH MAKANAN YBDI">
                  <option value="7511.01">7511.01 - PEMOTONG DAGING</option>
                  <option value="7511.02">7511.02 - PENYEMBELIH HEWAN</option>
                  <option value="7511.03">7511.03 - TUKANG FILLET IKAN</option>
                  <option value="7511.04">7511.04 - PENJUAL IKAN SEGAR</option>
                  <option value="7511.99">7511.99 - PEMOTONG HEWAN, PENJUAL IKAN SEGAR DAN PENGOLAH MAKANAN YBDI LAINNYA</option>
                </optgroup>
                <optgroup label="7512 - PEMBUAT ROTI, KUE DAN KEMBANG GULA">
                  <option value="7512.01">7512.01 - PEMBUAT ROTI</option>
                  <option value="7512.02">7512.02 - PEMBUAT KEMBANG GULA</option>
                  <option value="7512.03">7512.03 - PEMBUAT COKLAT</option>
                  <option value="7512.04">7512.04 - PEMBUAT KUE</option>
                  <option value="7512.99">7512.99 - PEMBUAT ROTI, KUE DAN KEMBANG GULA LAINNYA</option>
                </optgroup>
                <optgroup label="7513 - PEMBUAT PRODUK SUSU">
                  <option value="7513.01">7513.01 - PEMBUAT YOGHURT</option>
                  <option value="7513.02">7513.02 - PEMBUAT MENTEGA</option>
                  <option value="7513.03">7513.03 - PEMBUAT KEJU</option>
                  <option value="7513.99">7513.99 - PEMBUAT PRODUK SUSU LAINNYA</option>
                </optgroup>
                <optgroup label="7514 - PENGAWET BUAH, SAYUR DAN YBDI">
                  <option value="7514.01">7514.01 - PENGAWET SARI BUAH</option>
                  <option value="7514.02">7514.02 - PENGAWET BUAH</option>
                  <option value="7514.03">7514.03 - PEMBUAT SELAI</option>
                  <option value="7514.04">7514.04 - PENGEKSTRAK MINYAK</option>
                  <option value="7514.05">7514.05 - PEMBUAT MANISAN BUAH-BUAHAN</option>
                  <option value="7514.06">7514.06 - PENGAWET SAYUR</option>
                  <option value="7514.99">7514.99 - PENGAWET BUAH, SAYUR DAN YBDI LAINNYA</option>
                </optgroup>
                <optgroup label="7515 - AHLI PENCICIP DAN PENILAI KUALITAS MAKANAN DAN MINUMAN">
                  <option value="7515.01">7515.01 - PENILAI KUALITAS MAKANAN</option>
                  <option value="7515.02">7515.02 - PENILAI KUALITAS MINUMAN</option>
                  <option value="7515.03">7515.03 - AHLI PENCICIP KUALITAS MAKANAN</option>
                  <option value="7515.04">7515.04 - AHLI PENCICIP MINUMAN KERAS</option>
                  <option value="7515.05">7515.05 - AHLI PENCICIP MINUMAN THE</option>
                  <option value="7515.06">7515.06 - AHLI PENCICIP MINUMAN ANGGUR</option>
                  <option value="7515.07">7515.07 - AHLI PENCICIP MINUMAN KOPI</option>
                  <option value="7515.99">7515.99 - AHLI PENCICIP DAN PENILAI KUALITAS MAKANAN DAN MINUMAN LAINNYA</option>
                </optgroup>
                <optgroup label="7516 - PENGOLAH TEMBAKAN DAN PEMBUAT PRODUK TEMBAKAU">
                  <option value="7516.01">7516.01 - PEMBUAT CERUTU</option>
                  <option value="7516.02">7516.02 - PEMBUAT ROKOK</option>
                  <option value="7516.03">7516.03 - PENILAI KUALITAS TEMBAKAU</option>
                  <option value="7516.04">7516.04 - PENGOLAH DAUN TEMBAKAU</option>
                  <option value="7516.99">7516.99 - PENGOLAH TEMBAKAN DAN PEMBUAT PRODUK TEMBAKAU LAINNYA</option>
                </optgroup>
                <optgroup label="7521 - PEKERJA PENGAWETAN KAYU">
                  <option value="7521.01">7521.01 - OPERATOR PENGERINGAN KAYU</option>
                  <option value="7521.02">7521.02 - PEKERJA PENJEMURAN KAYU</option>
                  <option value="7521.99">7521.99 - PEKERJA PENGAWETAN KAYU LAINNYA</option>
                </optgroup>
                <optgroup label="7522 - PEMBUAT FURNITUR DAN YBDI">
                  <option value="7522.01">7522.01 - PEMBUAT LEMARI</option>
                  <option value="7522.02">7522.02 - PEMBUAT FURNITUR</option>
                  <option value="7522.03">7522.03 - PEMBUAT POLA KAYU</option>
                  <option value="7522.04">7522.04 - PEMBUAT RODA</option>
                  <option value="7522.05">7522.05 - PEMBUAT PEDATI</option>
                  <option value="7522.99">7522.99 - PEMBUAT FURNITUR DAN YBDI LAINNYA</option>
                </optgroup>
                <optgroup label="7523 - PENYETEL DAN OPERATOR MESIN PERKAKAS PENGOLAHAN KAYU">
                  <option value="7523.01">7523.01 - OPERATOR MESIN PERKAKAS PENGUKIR KAYU</option>
                  <option value="7523.02">7523.02 - OPERATOR MESIN PERKAKAS PEMBUATAN FURNITUR</option>
                  <option value="7523.03">7523.03 - OPERATOR MESIN PERKAKAS GERGAJI KAYU</option>
                  <option value="7523.04">7523.04 - OPERATOR MESIN PERKAKAS PEMBUATAN PRODUK KAYU</option>
                  <option value="7523.05">7523.05 - OPERATOR MESIN PERKAKAS BUBUT KAYU</option>
                  <option value="7523.06">7523.06 - PENYETEL MESIN PERKAKAS PENGERJAAN KAYU</option>
                  <option value="7523.99">7523.99 - PENYETEL DAN OPERATOR MESIN PERKAKAS PENGOLAHAN KAYU LAINNYA</option>
                </optgroup>
                <optgroup label="7531 - PEMBUAT PAKAIAN, PAKAIAN DARI KULIT DAN PENUTUP KEPALA">
                  <option value="7531.01">7531.01 - PEMBUAT PAKAIAN</option>
                  <option value="7531.02">7531.02 - PEMBUAT PAKAIAN DARI KULIT</option>
                  <option value="7531.03">7531.03 - PEMBUAT PENUTUP KEPALA</option>
                  <option value="7531.99">7531.99 - PEMBUAT PAKAIAN, PAKAIAN DARI KULIT DAN PENUTUP KEPALA LAINNYA</option>
                </optgroup>
                <optgroup label="7532 - PEMBUAT DAN PEMOTONG POLA GARMEN DAN YBDI">
                  <option value="7532.01">7532.01 - PEMOTONG GARMEN</option>
                  <option value="7532.02">7532.02 - PEMOTONG SARUNG TANGAN</option>
                  <option value="7532.03">7532.03 - PEMBUAT POLA BAHAN BAKU</option>
                  <option value="7532.04">7532.04 - PEMBUAT POLA GARMEN</option>
                  <option value="7532.99">7532.99 - PEMBUAT DAN PEMOTONG POLA GARMEN DAN YBDI LAINNYA</option>
                </optgroup>
                <optgroup label="7533 - TUKANG JAHIT, PENYULAM DAN YBDI">
                  <option value="7533.01">7533.01 - PENYULAM</option>
                  <option value="7533.02">7533.02 - TUKANG JAHIT</option>
                  <option value="7533.03">7533.03 - TUKANG JAHIT PAYUNG</option>
                  <option value="7533.99">7533.99 - TUKANG JAHIT, PENYULAM DAN YBDI LAINNYA</option>
                </optgroup>
                <optgroup label="7534 - PELAPIS FURNITUR (UPHOLSTER) DAN YBDI">
                  <option value="7534.01">7534.01 - PEMBUAT KASUR</option>
                  <option value="7534.02">7534.02 - PELAPIS PERABOT RUMAH</option>
                  <option value="7534.03">7534.03 - PELAPIS FURNITUR KENDARAAN</option>
                  <option value="7534.04">7534.04 - PELAPIS PERALATAN ORTOPEDIK</option>
                  <option value="7534.99">7534.99 - PELAPIS FURNITUR (UPHOLSTER) DAN YBDI LAINNYA</option>
                </optgroup>
                <optgroup label="7535 - PEMBERSIH KULIT, PENYAMAK KULIT DAN PEWARNA KULIT">
                  <option value="7535.01">7535.01 - PEMBERSIH KULIT</option>
                  <option value="7535.02">7535.02 - PENGUJI KUALITAS KULIT</option>
                  <option value="7535.03">7535.03 - PENYAMAK KULIT</option>
                  <option value="7535.99">7535.99 - PEMBERSIH KULIT, PENYAMAK KULIT DAN PEWARNA KULIT LAINNYA</option>
                </optgroup>
                <optgroup label="7536 - PEMBUAT SEPATU YBDI">
                  <option value="7536.01">7536.01 - PEMBUAT SEPATU</option>
                  <option value="7536.02">7536.02 - TUKANG REPARASI SEPATU</option>
                  <option value="7536.03">7536.03 - PEMBUAT SEPATU ORTOPEDIK</option>
                  <option value="7536.04">7536.04 - PEMBUAT PELANA</option>
                  <option value="7536.99">7536.99 - PEMBUAT SEPATU YBDI LAINNYA</option>
                </optgroup>
                <optgroup label="7541 - PEKERJA BAWAH AIR">
                  <option value="7541.01">7541.01 - PETUGAS PENYELAMAT BAWAH AIR</option>
                  <option value="7541.02">7541.02 - PEKERJA BAWAH AIR PERKAPALAN</option>
                  <option value="7541.03">7541.03 - PEKERJA BAWAH AIR PERTAMBANGAN</option>
                  <option value="7541.04">7541.04 - PEKERJA BAWAH AIR KONSTRUKSI</option>
                  <option value="7541.05">7541.05 - PEKERJA BAWAH AIR PERIKANAN</option>
                  <option value="7541.99">7541.99 - PEKERJA BAWAH AIR LAINNYA</option>
                </optgroup>
                <optgroup label="7542 - PELEDAK DINAMIT (PERTAMBANGAN DAN PENGGALIAN)">
                  <option value="7542.01">7542.01 - PEKERJA JURU LEDAK</option>
                  <option value="7542.99">7542.99 - PELEDAK DINAMIT (PERTAMBANGAN DAN PENGGALIAN) LAINNYA</option>
                </optgroup>
                <optgroup label="7543 - PENGUJI DAN PENILAI KUALITAS PRODUK (SELAIN PRODUK MAKANAN DAN MINUMAN)">
                  <option value="7543.01">7543.01 - PENGUJI KUALITAS PRODUK (SELAIN PRODUK MAKANAN DAN MINUMAN)</option>
                  <option value="7543.02">7543.02 - PENILAI KUALITAS PRODUK (SELAIAN PRODUK MAKANAN DAN MINUMAN)</option>
                  <option value="7543.99">7543.99 - PENGUJI DAN PENILAI KUALITAS PRODUK (SELAIN PRODUK MAKANAN DAN MINUMAN) LAINNYA</option>
                </optgroup>
                <optgroup label="7544 - PENGENDALI DAN PEMBASMI HAMA DAN GULMA">
                  <option value="7544.01">7544.01 - PKERJA PENGASAPAN DISINFEKTAN</option>
                  <option value="7544.02">7544.02 - PENGENDALI HAMA</option>
                  <option value="7544.03">7544.03 - PENGENDALI GULMA</option>
                  <option value="7544.99">7544.99 - PENGENDALI DAN PEMBASMI HAMA DAN GULMA LAINNYA</option>
                </optgroup>
                <optgroup label="7549 - PEKERJA PENGOLAHAN LAINNYA YTDL">
                  <option value="7549.01">7549.01 - PEKERJA PEMBENTUK LENSA OPTIK</option>
                  <option value="7549.02">7549.02 - PEKERJA PENYELESAIAN LENSA OPTIK</option>
                  <option value="7549.99">7549.99 - PEKERJA PENGOLAHAN LAINNYA YTDL LAINNYA</option>
                </optgroup>
                <optgroup label="8111 - PEKERJA TAMBANG DAN PEKERJA PENGGALIAN">
                  <option value="8111.01">8111.01 - PEKERJA TAMBANG</option>
                  <option value="8111.02">8111.02 - PEKERJA PENGGALIAN</option>
                  <option value="8111.03">8111.03 - OPERATOR MESIN PERTAMBANGAN</option>
                  <option value="8111.04">8111.04 - OPERATOR MESIN PERTAMBANGAN LANJUTAN</option>
                  <option value="8111.05">8111.05 - OPERATOR BOGGER</option>
                  <option value="8111.06">8111.06 - OPERATOR DRAGLINE</option>
                  <option value="8111.07">8111.07 - ROOF BOTLER</option>
                  <option value="8111.99">8111.99 - PEKERJA TAMBANG DAN PEKERJA PENGGALIAN LAINNYA</option>
                </optgroup>
                <optgroup label="8112 - OPERATOR MESIN PENGOLAHAN BIJIH MINERAL DAN BATU">
                  <option value="8112.01">8112.01 - OPERATOR MESIN PEMECAH BIJIH MINERAL DAN BATU</option>
                  <option value="8112.02">8112.02 - PEKERJA FLOTASI</option>
                  <option value="8112.03">8112.03 - PENAMBANG EMAS</option>
                  <option value="8112.04">8112.04 - OPERATOR MESIN PEMOTONG DAN PENGOLAH BATU</option>
                  <option value="8112.05">8112.05 - OPERATOR MESIN PENGGILING MINERAL</option>
                  <option value="8112.99">8112.99 - OPERATOR PENGOLAH BIJIH MINERAL DAN BATU LAINNYA</option>
                </optgroup>
                <optgroup label="8113 - PEKERJA PENGEBORAN DAN PENGGALIAN YBDI">
                  <option value="8113.01">8113.01 - OPERATOR PERALATAN PENGEBORAN</option>
                  <option value="8113.02">8113.02 - PEKERJA BOOR</option>
                  <option value="8113.03">8113.03 - PEKERJA DEREK</option>
                  <option value="8113.04">8113.04 - OPERATOR MESIN DEREK</option>
                  <option value="8113.99">8113.99 - PEKERJA PENGEBORAN DAN PENGGALIAN YBDI LAINNYA</option>
                </optgroup>
                <optgroup label="8114 - OPERATOR MESIN PENGOLAHAN SEMEN, BATU DAN MINERAL LAINNYA">
                  <option value="8114.01">8114.01 - OPERATOR MESIN PRODUKSI BETON</option>
                  <option value="8114.02">8114.02 - OPERATOR MESIN PRODUKSI BATU CETAK</option>
                  <option value="8114.03">8114.03 - OPERATOR MESIN INDUSTRI PEMOLESAN INTAN</option>
                  <option value="8114.04">8114.04 - OPERATOR KILN (MESIN PEMBAKARAN) PRODUK SEMEN</option>
                  <option value="8114.99">8114.99 - OPERATOR MESIN PENGOLAHAN SEMEN, BATU DAN MINERAL LAINNYA</option>
                </optgroup>
                <optgroup label="8121 - OPERATOR MESIN PENGOLAHAN LOGAM">
                  <option value="8121.01">8121.01 - OPERATOR MESIN PENUANG (LADLE POURER)</option>
                  <option value="8121.02">8121.02 - PEKERJA PENGGULUNG BAJA</option>
                  <option value="8121.03">8121.03 - OPERATOR MESIN PENGOLAHAN PANAS LOGAM</option>
                  <option value="8121.04">8121.04 - OPERATOR MESIN PENGEKSTRUSI LOGAM</option>
                  <option value="8121.99">8121.99 - OPERATOR MESIN PENGOLAHAN LOGAM LAINNYA</option>
                </optgroup>
                <optgroup label="8122 - OPERATOR MESIN PENYELESAIAN, PENYEPUHAN DAN PELAPISAN LOGAM">
                  <option value="8122.01">8122.01 - OPERATOR MESIN PELAPIS LOGAM/SEPUH (LISTRIK)</option>
                  <option value="8122.02">8122.02 - OPERATOR MESIN PELAPIS LOGAM/SEPUH (CELUP)</option>
                  <option value="8122.03">8122.03 - OPERATOR MESIN PELAPIS LOGAM/SEMPROT LOGAM</option>
                  <option value="8122.99">8122.99 - OPERATOR MESIN PENYELESAIAN, PENYEPUHAN DAN PELAPISAN LOGAM LAINNYA</option>
                </optgroup>
                <optgroup label="8131 - OPERATOR MESIN PENGOLAHAN BAHAN KIMIA">
                  <option value="8131.01">8131.01 - OPERATOR MESIN BLENDER</option>
                  <option value="8131.02">8131.02 - OPERATOR MESIN PENYULINGAN MINYAK BUMI DAN GAS ALAM</option>
                  <option value="8131.03">8131.03 - OPERATOR MESIN PENYULINGAN SELAIN MINYAK BUMI DAN GAS ALAM</option>
                  <option value="8131.04">8131.04 - OPERATOR MESIN FARMASI DAN KEPERLUAN KEBERSIHAN PRIBADI</option>
                  <option value="8131.05">8131.05 - OPERATOR MESIN PRODUKSI LILIN</option>
                  <option value="8131.06">8131.06 - OPERATOR MESIN PRODUK BAHAN PELEDAK</option>
                  <option value="8131.99">8131.99 - OPERATOR MESIN PENGOLAHAN BAHAN KIMIA LAINNYA</option>
                </optgroup>
                <optgroup label="8132 - OPERATOR MESIN PENGOLAHAN PRODUK FOTOGRAFI">
                  <option value="8132.01">8132.01 - TEKNISI KAMAR GELAP</option>
                  <option value="8132.02">8132.02 - JURU PEMROSES FOTOGRAFI</option>
                  <option value="8132.03">8132.03 - OPERATOR MESIN FOTOGRAFI</option>
                  <option value="8132.04">8132.04 - JURU PENCETAK FOTOGRAFI</option>
                  <option value="8132.05">8132.05 - OPERATOR MESIN PEMBUAT KERTAS DAN FILM FOTOGRAFI</option>
                  <option value="8132.99">8132.99 - OPERATOR MESIN PENGOLAHAN PRODUK FOTOGRAFI LAINNYA</option>
                </optgroup>
                <optgroup label="8141 - OPERATOR MESIN PENGOLAHAN KARET">
                  <option value="8141.01">8141.01 - OPERATOR MESIN EKSTRUSI KARET</option>
                  <option value="8141.02">8141.02 - OPERATOR MESIN PENGGILINGAN KARET</option>
                  <option value="8141.03">8141.03 - OPERATOR MESIN PENCETAK KARET</option>
                  <option value="8141.04">8141.04 - OPERATOR MESIN PRODUK KARET</option>
                  <option value="8141.05">8141.05 - OPERATOR MESIN PEMBUAT BAN</option>
                  <option value="8141.06">8141.06 - JURU VULKANISIR BAN</option>
                  <option value="8141.99">8141.99 - OPERATOR MESIN PRODUK KARET LAINNYA</option>
                </optgroup>
                <optgroup label="8142 - OPERATOR MESIN PENGOLAHAN PLASTIK">
                  <option value="8142.01">8142.01 - OPERATOR MESIN PENIUP BOTOL PLASTIK</option>
                  <option value="8142.02">8142.02 - OPERATOR MESIN PRES LAMINASI PLASTIK</option>
                  <option value="8142.03">8142.03 - OPERATOR MESIN EKSTRUSI PLASTIK</option>
                  <option value="8142.04">8142.04 - OPERATOR MESIN PRODUK PLASTIK</option>
                  <option value="8142.05">8142.05 - OPERATOR MESIN PENGHANCUR PLASTIK</option>
                  <option value="8142.99">8142.99 - OPERATOR MESIN PRODUK PLASTIK LAINNYA</option>
                </optgroup>
                <optgroup label="8143 - OPERATOR MESIN PENGOLAHAN KERTAS">
                  <option value="8143.01">8143.01 - OPERATOR MESIN PRODUK KARTON</option>
                  <option value="8143.02">8143.02 - OPERATOR MESIN PRODUK KOTAK KERTAS</option>
                  <option value="8143.03">8143.03 - OPERATOR MESIN PRODUK AMPLOP DAN KANTONG KERTAS</option>
                  <option value="8143.04">8143.04 - OPERATOR MESIN PRODUK KERTAS</option>
                  <option value="8143.05">8143.05 - PENGHANCUR BUBUR KERTAS</option>
                  <option value="8143.99">8143.99 - OPERATOR MESIN PENGOLAHAN KERTAS LAINNYA</option>
                </optgroup>
                <optgroup label="8151 - OPERATOR MESIN PENYIAPAN, PEMINTALAN DAN PENGGULUNGAN SERAT">
                  <option value="8151.01">8151.01 - OPERATOR MESIN PENYIAPAN SERAT</option>
                  <option value="8151.02">8151.02 - OPERATOR MESIN PEMINTALAN BENANG</option>
                  <option value="8151.03">8151.03 - OPERATOR MESIN PEMILINAN BENANG</option>
                  <option value="8151.04">8151.04 - OPERATOR MESIN PENGGULUNGAN BENANG</option>
                  <option value="8151.99">8151.99 - OPERATOR MESIN PENYIAPAN, PEMINTALAN DAN PENGGULUNGAN SERAT LAINNYA</option>
                </optgroup>
                <optgroup label="8152 - OPERATOR MESIN TENUN DAN RAJUT">
                  <option value="8152.01">8152.01 - OPERATOR MESIN RAJUT</option>
                  <option value="8152.02">8152.02 - OPERATOR MESIN PRODUKSI JARING</option>
                  <option value="8152.03">8152.03 - OPERATOR MESIN TENUN</option>
                  <option value="8152.99">8152.99 - OPERATOR MESIN TENUN DAN RAJUT LAINNYA</option>
                </optgroup>
                <optgroup label="8153 - OPERATOR MESIN JAHIT">
                  <option value="8153.01">8153.01 - OPERATOR MESIN JAHIT</option>
                  <option value="8153.02">8153.02 - OPERATOR MESIN SULAM ATAU BORDIR</option>
                  <option value="8153.99">8153.99 - OPERATOR MESIN JAHIT LAINNYA</option>
                </optgroup>
                <optgroup label="8154 - OPERATOR MESIN PEMUTIHAN, PENCELUPAN DAN PEMBERSIHAN KAIN">
                  <option value="8154.01">8154.01 - OPERATOR MESIN PEMUTIHAN KAIN</option>
                  <option value="8154.02">8154.02 - OPERATOR MESIN PENCELUPAN KAIN</option>
                  <option value="8154.99">8154.99 - OPERATOR MESIN PEMUTIH, PENCELUPAN DAN PEMBERSIHAN KAIN LAINNYA</option>
                </optgroup>
                <optgroup label="8155 - OPERATOR MESIN PENYIAPAN BULU DAN KULIT">
                  <option value="8155.01">8155.01 - OPERATOR MESIN PEMBERSIHAN BULU JANGAT</option>
                  <option value="8155.02">8155.02 - OPERATOR MESIN PEWARNAAN KULIT</option>
                  <option value="8155.03">8155.03 - OPERATOR MESIN PENYAMAKAN KULIT</option>
                  <option value="8155.99">8155.99 - OPERATOR MESIN PENYIAPAN BULU DAN KULIT LAINNYA</option>
                </optgroup>
                <optgroup label="8156 - OPERATOR MESIN PEMBUAT SEPATU DAN YBDI">
                  <option value="8156.01">8156.01 - OPERATOR MESIN PEMBUATAN SEPATU DAN YBDI</option>
                </optgroup>
                <optgroup label="8157 - OPERATOR MESIN BINATU">
                  <option value="8157.01">8157.01 - OPERATOR MESIN CUCI KERING</option>
                  <option value="8157.02">8157.02 - OPERATOR MESIN BINATU</option>
                  <option value="8157.03">8157.03 - OPERATOR MESIN PRESS</option>
                  <option value="8157.99">8157.99 - OPERATOR MESIN BINATU LAINNYA</option>
                </optgroup>
                <optgroup label="8159 - OPERATOR MESIN PENGOLAHAN TEKSTIL, BULU DAN KULIT YTDL">
                  <option value="8159.01">8159.01 - OPERATOR MESIN PEMBUAT TOPI</option>
                  <option value="8159.02">8159.02 - OPERATOR MESIN PEMBUAT POLA TEKSTIL</option>
                  <option value="8159.99">8159.99 - OPERATOR MESIN PENGOLAHAN TEKSTIL, BULU DAN KULIT YTDL LAINNYA</option>
                </optgroup>
                <optgroup label="8160 - OPERATOR MESIN PENGOLAHAN MAKANAN DAN YBDI">
                  <option value="8160.01">8160.01 - OPERATOR MESIN PEMBUATAN ROTI DAN KUE</option>
                  <option value="8160.02">8160.02 - OPERATOR MESIN PEMBUATAN COKLAT</option>
                  <option value="8160.03">8160.03 - OPERATOR MESIN PEMBUATAN PRODUK SUSU</option>
                  <option value="8160.04">8160.04 - OPERATOR MESIN PENGOLAHAN IKAN</option>
                  <option value="8160.05">8160.05 - OPERATOR MESIN PENGOLAHAN DAGING</option>
                  <option value="8160.06">8160.06 - OPERATOR MESIN PENGOLAHAN SUSU</option>
                  <option value="8160.07">8160.07 - OPERATOR MESIN PRODUKSI ROKOK DAN CERUTU</option>
                  <option value="8160.99">8160.99 - OPERATOR MESIN PENGOLAHAN MAKANAN, TEMBAKAU DAN YBDI LAINNYA</option>
                </optgroup>
                <optgroup label="8171 - OPERATOR MESIN PENGOLAHAN KAYU DAN PEMBUATAN KERTAS">
                  <option value="8171.01">8171.01 - PEKERJA PEMBUATAN BUBUR KERTAS</option>
                  <option value="8171.02">8171.02 - OPERATOR PEMUTIHAN BUBUR KERTAS</option>
                  <option value="8171.03">8171.03 - OPERATOR PENYARING BUBUR KERTAS</option>
                  <option value="8171.04">8171.04 - TEKNISI MESIN BUBUR KERTAS</option>
                  <option value="8171.05">8171.05 - OPERATOR MESIN PRODUKSI KERTAS</option>
                  <option value="8171.99">8171.99 - OPERATOR MESIN PENGOLAHAN KAYU DAN PEMBUATAN KERTAS LAINNYA</option>
                </optgroup>
                <optgroup label="8172 - OPERATOR MESIN PENGOLAHAN KAYU">
                  <option value="8172.01">8172.01 - OPERATOR MESIN GERGAJI SIRKULAR</option>
                  <option value="8172.02">8172.02 - OPERATOR MESIN PEMOTONGAN KAYU GELONDONGAN</option>
                  <option value="8172.03">8172.03 - OPERATOR MESIN PRES KAYU LAPIS/PLYWOOD</option>
                  <option value="8172.04">8172.04 - OPERATOR PENGGERGAJIAN KAYU</option>
                  <option value="8172.99">8172.99 - OPERATOR MESIN PENGOLAHAN KAYU LAINNYA</option>
                </optgroup>
                <optgroup label="8181 - OPERATOR MESIN PENGOLAHAN KACA DAN KERAMIK">
                  <option value="8181.01">8181.01 - OPERATOR TUNGKU PRODUKSI KACA</option>
                  <option value="8181.02">8181.02 - OPERATOR KILN (MESIN PEMBAKARAN) BATU BATA, UBIN DAN GENTENG</option>
                  <option value="8181.03">8181.03 - OPERATOR KILN (MESIN PEMBAKARAN) TEMBIKAR DAN PORSELEN</option>
                  <option value="8181.04">8181.04 - OPERATOR MESIN PENIUP KACA</option>
                  <option value="8181.05">8181.05 - OPERATOR MESIN PENCAMPUR TANAH LIAT</option>
                  <option value="8181.06">8181.06 - OPERATOR MESIN PENCAMPUR BAHAN KACA</option>
                  <option value="8181.99">8181.99 - OPERATOR MESIN PENGOLAHAN KACA DAN KERAMIK LAINNYA</option>
                </optgroup>
                <optgroup label="8182 - OPERATOR MESIN UAP DAN KETEL UAP">
                  <option value="8182.01">8182.01 - PEKERJA KETEL UAP</option>
                  <option value="8182.02">8182.02 - OPERATOR KETEL UAP KAPAL</option>
                  <option value="8182.03">8182.03 - OPERATOR MESIN UAP</option>
                  <option value="8182.04">8182.04 - JURU API</option>
                  <option value="8182.05">8182.05 - OPERATOR MESIN PEMBANGKIT TENAGA PANAS</option>
                  <option value="8182.99">8182.99 - OPERATOR MESIN UAP DAN KETEL UAP LAINNYA</option>
                </optgroup>
                <optgroup label="8183 - OPERATOR MESIN PENGISIAN BOTOL, PELABELAN DAN PENGEMASAN">
                  <option value="8183.01">8183.01 - OPERATOR MESIN PENGISIAN BOTOL</option>
                  <option value="8183.02">8183.02 - OPERATOR MESIN PELABELAN</option>
                  <option value="8183.03">8183.03 - OPERATOR MESIN PENGEMASAN</option>
                  <option value="8183.04">8183.04 - OPERATOR MESIN PEMBUNGKUSAN</option>
                  <option value="8183.99">8183.99 - OPERATOR MESIN PENGISIAN BOTOL, PELABELAN DAN PENGEMASAN LAINNYA</option>
                </optgroup>
                <optgroup label="8189 - OPERATOR MESIN STATIONER YTDL">
                  <option value="8189.01">8189.01 - OPERATOR MESIN CHIP SILIKON</option>
                  <option value="8189.02">8189.02 - OPERATOR MESIN PENYAMBUNGAN KABEL DAN TALI TEMALI</option>
                  <option value="8189.99">8189.99 - OPERATOR MESIN STATIONER YTDL LAINNYA</option>
                </optgroup>
                <optgroup label="8211 - PERAKIT MESIN MEKANIK">
                  <option value="8211.01">8211.01 - PERAKIT GEARBOX</option>
                  <option value="8211.02">8211.02 - PERAKIT MESIN PENGGERAK</option>
                  <option value="8211.03">8211.03 - PEMASANGAN/PENGINSTALAN MESIN PENGGERAK</option>
                  <option value="8211.04">8211.04 - PERAKIT KENDARAAN</option>
                  <option value="8211.05">8211.05 - BENCH FITTER</option>
                  <option value="8211.06">8211.06 - PERAKIT PESAWAT TERBANG</option>
                  <option value="8211.07">8211.07 - PERAKIT TURBIN</option>
                  <option value="8211.99">8211.99 - PERAKIT MESIN MEKANIK LAINNYA</option>
                </optgroup>
                <optgroup label="8212 - PERAKIT PERALATAN LISTRIK DAN ELEKTRONIK">
                  <option value="8212.01">8212.01 - PERAKIT PERALATAN ELEKTRONIK</option>
                  <option value="8212.02">8212.02 - PERAKIT PERALATAN LISTRIK</option>
                  <option value="8212.03">8212.03 - PERAKIT PERALATAN ELEKTRO-MEKANIK</option>
                  <option value="8212.99">8212.99 - PERAKIT PERALATAN LISTRIK DAN ELEKTRONIK LAINNYA</option>
                </optgroup>
                <optgroup label="8219 - PERAKIT YTDL">
                  <option value="8219.01">8219.01 - PERAKIT PRODUK LOGAM (KECUALI MESIN MEKANIK)</option>
                  <option value="8219.02">8219.02 - PERAKIT PRODUK PLASTIK</option>
                  <option value="8219.03">8219.03 - PERAKIT PRODUK KARET</option>
                  <option value="8219.04">8219.04 - PERAKIT PRODUK KAYU</option>
                  <option value="8219.05">8219.05 - PERAKIT PINTU</option>
                  <option value="8219.06">8219.06 - PERAKIT PERHIASAN</option>
                  <option value="8219.07">8219.07 - PERAKIT PRODUK DARI KULIT</option>
                  <option value="8219.08">8219.08 - PERAKIT PRODUK DARI KARTON</option>
                  <option value="8219.09">8219.09 - PEMBUAT PAYUNG</option>
                  <option value="8219.99">8219.99 - PERAKIT YTDL LAINNYA</option>
                </optgroup>
                <optgroup label="8311 - MASINIS MESIN LOKOMOTIF DAN YBDI">
                  <option value="8311.01">8311.01 - MASINIS LOKOMOTIF</option>
                  <option value="8311.02">8311.02 - MASINIS KERETA API</option>
                  <option value="8311.99">8311.99 - MASINIS MESIN LOKOMOTIF LAINNYA</option>
                </optgroup>
                <optgroup label="8312 - OPERATOR REM, SINYAL DAN LANGSIR KERETA API">
                  <option value="8312.01">8312.01 - OPERATOR/ JURU REM KERETA API</option>
                  <option value="8312.02">8312.02 - OPERATOR/ JURU LANGSIR KERETA API</option>
                  <option value="8312.03">8312.03 - OPERATOR/ JURU SINYAL KERETA API</option>
                  <option value="8312.99">8312.99 - OPERATOR REM, SINYAL DAN LANGSIR KERETA API LAINNYA</option>
                </optgroup>
                <optgroup label="8321 - PENGEMUDI SEPEDA MOTOR">
                  <option value="8321.01">8321.01 - PENGEMUDI SEPEDA MOTOR PENGIRIMAN BARANG/PESANAN</option>
                  <option value="8321.02">8321.02 - PENGEMUDI BECAK BERMOTOR</option>
                  <option value="8321.03">8321.03 - PENGEMUDI KENDARAAN BERMOTOR RODA TIGA</option>
                  <option value="8321.04">8321.04 - PENGEMUDI SEPEDA MOTOR</option>
                  <option value="8321.99">8321.99 - PENGEMUDI SEPEDA MOTOR LAINNYA</option>
                </optgroup>
                <optgroup label="8322 - PENGEMUDI MOBIL, TAKSI DAN VAN">
                  <option value="8322.01">8322.01 - PENGEMUDI MOBIL</option>
                  <option value="8322.02">8322.02 - PENGEMUDI TAKSI</option>
                  <option value="8322.03">8322.03 - PENGEMUDI VAN/MOBIL BOX</option>
                  <option value="8322.99">8322.99 - PENGEMUDI MOBIL, TAKSI DAN VAN LAINNYA</option>
                </optgroup>
                <optgroup label="8331 - PENGEMUDI BUS DAN TREM">
                  <option value="8331.01">8331.01 - PENGEMUDI BUS</option>
                  <option value="8331.02">8331.02 - PENGEMUDI BUS WISATA</option>
                  <option value="8331.03">8331.03 - PENGEMUDI TREM</option>
                  <option value="8331.99">8331.99 - PENGEMUDI BUS DAN TREM LAINNYA</option>
                </optgroup>
                <optgroup label="8332 - PENGEMUDI TRUK BERAT DAN TRUK KONTAINER">
                  <option value="8332.01">8332.01 - PENGEMUDI TRUK BERAT</option>
                  <option value="8332.02">8332.02 - PENGEMUDI KENDARAAN PENCAMPUR BETON</option>
                  <option value="8332.03">8332.03 - PENGEMUDI TRUK KONTAINER</option>
                  <option value="8332.99">8332.99 - PENGEMUDI TRUK BERAT DAN TRUK KONTAINER LAINNYA</option>
                </optgroup>
                <optgroup label="8341 - OPERATOR MESIN BERGERAK PERTANIAN DAN KEHUTANAN">
                  <option value="8341.01">8341.01 - OPERATOR MESIN PEMANEN</option>
                  <option value="8341.02">8341.02 - OPERATOR MESIN PEMOTONG KAYU</option>
                  <option value="8341.03">8341.03 - OPERATOR MESIN PENGANGKUT KAYU-KAYUAN</option>
                  <option value="8341.04">8341.04 - OPERATOR TRAKTOR</option>
                  <option value="8341.05">8341.05 - OPERATOR MESIN PENEBANG POHON</option>
                  <option value="8341.99">8341.99 - OPERATOR MESIN BERGERAK PERTANIAN DAN KEHUTANAN LAINNYA</option>
                  <option value="8342.01">8342.01 - OPERATOR BULDOZER</option>
                  <option value="8342.02">8342.02 - OPERATOR ESKAVATOR</option>
                  <option value="8342.03">8342.03 - OPERATOR MESIN PENMANCANG TIANG</option>
                  <option value="8342.04">8342.04 - OPERATOR MESIN PENGHALUS JALAN</option>
                  <option value="8342.05">8342.05 - OPERATOR FRONT-END LOADER</option>
                  <option value="8342.99">8342.99 - OPERATOR MESIN PENGERUK TANAH DAN YBDI LAINNYA</option>
                </optgroup>
                <optgroup label="8343 - OPERATOR MESIN DEREK/ CRANE, PENGEREK/ HOIST DAN YBDI">
                  <option value="8343.01">8343.01 - OPERATOR CRANE STATIONER</option>
                  <option value="8343.02">8343.02 - OPERATOR MESIN PENGGEREK/HOIST</option>
                  <option value="8343.03">8343.03 - OPERATOR MESIN DEREK/ CRANE BERGERAK</option>
                  <option value="8343.04">8343.04 - OPERATOR CRANE MENARA</option>
                  <option value="8343.99">8343.99 - OPERATOR CRANE, PENGEREK/HOIST DAN YBDI LAINNYA</option>
                </optgroup>
                <optgroup label="8344 - OPERATOR MESIN FORKLIFT">
                  <option value="8344.01">8344.01 - OPERATOR FORKLIFT</option>
                </optgroup>
                <optgroup label="8350 - AWAK GELADAK KAPAL DAN YBDI">
                  <option value="8350.01">8350.01 - KEPALA KELASI (BOATSWAIN)</option>
                  <option value="8350.02">8350.02 - PEKERJA KAPAL TUNDA</option>
                  <option value="8350.03">8350.03 - ANAK BUAH KAPAL</option>
                  <option value="8350.99">8350.99 - AWAK KAPAL DAN KELASI LAINNYA</option>
                </optgroup>
                <optgroup label="8432 - OPERATOR MESIN PENGERUK TANAH DAN YBDI">
                <optgroup label="9111 - TENAGA KEBERSIHAN DAN JURU BANTU RUMAH TANGGA">
                  <option value="9111.01">9111.01 - PEMBANTU RUMAH TANGGA</option>
                  <option value="9111.02">9111.02 - JURU BERSIH RUMAH TANGGA</option>
                  <option value="9111.99">9111.99 - TENAGA KEBERSIHAN DAN JURU BANTU RUMAH TANGGA LAINNYA</option>
                </optgroup>
                <optgroup label="9112 - TENAGA KEBERSIHAN DAN JURU BANTU DI KANTOR, HOTEL, DAN TEMPAT LAINNYA">
                  <option value="9112.01">9112.01 - TENAGA KEBERSIHAN PESAWAT TERBANG</option>
                  <option value="9112.02">9112.02 - TENAGA KEBERSIHAN HOTEL</option>
                  <option value="9112.03">9112.03 - TENAGA KEBERSIHAN KANTOR</option>
                  <option value="9112.04">9112.04 - JURU BERSIH TOILET</option>
                  <option value="9112.99">9112.99 - TENAGA KEBRSIHAN DAN JURU BANTU DI KANTOR, HOTEL, DAN TEMPAT LAINNYA</option>
                </optgroup>
                <optgroup label="9121 - TENAGA CUCI DAN SETRIKA DENGAN TANGAN">
                  <option value="9121.01">9121.01 - TENAGA CUCI KIMIA ( DRY - CLEANER) DENGAN TANGAN</option>
                  <option value="9121.02">9121.02 - TENAGA CUCI DENGAN TANGAN</option>
                  <option value="9121.03">9121.03 - TENAGA SETRIKA DENGAN TANGAN</option>
                  <option value="9121.99">9121.99 - TENAGA CUCI DAN SETRIKA LAINNYA DENGAN TANGAN</option>
                </optgroup>
                <optgroup label="9122 - TENAGA CUCI KENDARAAN">
                  <option value="9122.01">9122.01 - TENAGA CUCI KENDARAAN (DENGAN TANGAN)</option>
                  <option value="9122.02">9122.02 - TENAGA CUCI DETAIL KENDARAAN</option>
                  <option value="9122.99">9122.99 - TENAGA CUCI KENDARAAN LAINNYA</option>
                </optgroup>
                <optgroup label="9123 - TENAGA KEBERSIHAN JENDELA">
                  <option value="9123.01">9123.01 - TENAGA KEBERSIHAN JENDELA</option>
                </optgroup>
                <optgroup label="9129 - TENAGA KEBERSIHAN LAINNYA">
                  <option value="9129.01">9129.01 - PEMBERSIH KARPET</option>
                  <option value="9129.02">9129.02 - PEMBERSIH MENARA PENDINGIN</option>
                  <option value="9129.03">9129.03 - PEMBERSIH GRAFITI</option>
                  <option value="9129.04">9129.04 - PEMBERSIH KOLAM RENANG</option>
                  <option value="9129.99">9129.99 - TENAGA KEBERSIHAN LAINNYA</option>
                </optgroup>
                <optgroup label="9211 - BURUH PERTANIAN">
                  <option value="9211.01">9211.01 - BURUH TANI PADI</option>
                  <option value="9211.02">9211.02 - PEMETIK SAYURAN</option>
                  <option value="9211.03">9211.03 - PEMETIK BUAH</option>
                  <option value="9211.04">9211.04 - BURUH TANAM TEBU</option>
                  <option value="9211.99">9211.99 - BURUH PERTANIAN LAINNYA</option>
                </optgroup>
                <optgroup label="9212 - BURUH PETERNAKAN">
                  <option value="9212.01">9212.01 - BURUH PETERNAKAN</option>
                </optgroup>
                <optgroup label="9213 - BURUH PERTANIAN DAN PETERNAKAN">
                  <option value="9213.01">9213.01 - BURUH CAMPURAN PERTANIAN DAN PETERNAKAN</option>
                </optgroup>
                <optgroup label="9214 - BURUH PERTANIAN DAN HORTIKULTURA">
                  <option value="9214.01">9214.01 - BURUH KEBUN BIBIT</option>
                  <option value="9214.02">9214.02 - BURUH TAMAN</option>
                  <option value="9214.03">9214.03 - PEMOTONG RUMPUT</option>
                  <option value="9214.99">9214.99 - BURUH KEBUN BIBIT DAN TAMAN LAINNYA</option>
                </optgroup>
                <optgroup label="9215 - BURUH KEHUTANAN">
                  <option value="9215.01">9215.01 - BURUH TANAM POHON</option>
                  <option value="9215.02">9215.02 - PENEBANG POHON DENGAN KAMPAK</option>
                  <option value="9215.99">9215.99 - BURUH KEHUTANAN LAINNYA</option>
                </optgroup>
                <optgroup label="9216 - BURUH PERIKANAN DAN BUDIDAYA BIOTA AIR">
                  <option value="9216.01">9216.01 - BURUH PENANGKAPAN IKAN</option>
                  <option value="9216.02">9216.02 - BURUH BUDIDAYA IKAN</option>
                  <option value="9216.99">9216.99 - BURUH PENANGKAPAN DAN BUDIDAYA PERIKANAN LAINNYA</option>
                </optgroup>
                <optgroup label="9311 - BURUH PERTAMBANGAN DAN PENGGALIAN">
                  <option value="9311.01">9311.01 - BURUH PERTAMBANGAN</option>
                  <option value="9311.02">9311.02 - BURUH PENGGALIAN</option>
                  <option value="9311.99">9311.99 - BURUH PERTAMBANGAN DAN PENGGALIAN</option>
                </optgroup>
                <optgroup label="9312 - BURUH TEKNIK SIPIL">
                  <option value="9312.01">9312.01 - BURUH KONSTRUKSI BANGUNAN SIPIL</option>
                  <option value="9312.02">9312.02 - BURUH PEMELIHARAAN BANGUNAN SIPIL</option>
                  <option value="9312.03">9312.03 - BURUH PENGERUKAN</option>
                  <option value="9312.99">9312.99 - BURUH TEKNIK SIPIL LAINNYA</option>
                </optgroup>
                <optgroup label="9313 - BURUH BANGUNAN">
                  <option value="9313.01">9313.01 - BURUH KONSTRUKSI BANGUNAN</option>
                  <option value="9313.02">9313.02 - ASISTEN TUKANG BATU</option>
                  <option value="9313.03">9313.03 - BURUH PEMBONGKARAN</option>
                  <option value="9313.04">9313.04 - BURUH PENGANGKUTAN</option>
                  <option value="9313.99">9313.99 - BURUH BANGUNAN LAINNYA</option>
                </optgroup>
                <optgroup label="9321 - BURUH PENGEMASAN">
                  <option value="9321.01">9321.01 - BURUH PELABELAN DENGAN TANGAN</option>
                  <option value="9321.02">9321.02 - BURUH PENGEPAKAN DENGAN TANGAN</option>
                  <option value="9321.03">9321.03 - BURUH PEMBUNGKUS DENGAN TANGAN</option>
                  <option value="9321.99">9321.99 - BURUH PENGEMASAN LAINNYA</option>
                </optgroup>
                <optgroup label="9329 - BURUH INDUSTRI PENGOLAHAN YTDL">
                  <option value="9329.01">9329.01 - PENYORTIR BOTOL</option>
                  <option value="9329.02">9329.02 - BURUH PRODUKSI</option>
                  <option value="9329.03">9329.03 - BURUH BONGKAR MUAT BARANG</option>
                  <option value="9329.99">9329.99 - BURUH INDUSTRI PENGOLAHAN LAINNYA</option>
                </optgroup>
                <optgroup label="9331 - PENGEMUDI BECAK DAN KENDARAAN BERPEDAL">
                  <option value="9331.01">9331.01 - PENGEMUDI BECAK DAN KENDARAAN BERPEDAL</option>
                </optgroup>
                <optgroup label="9332 - PENGEMUDI KENDARAAN DAN MESIN BERTENAGA HEWAN">
                  <option value="9332.01">9332.01 - PENGEMUDI PERALATAN YANG DITARIK HEWAN</option>
                  <option value="9332.02">9332.02 - SAIS BENDI</option>
                  <option value="9332.99">9332.99 - PENGEMUDI KENDARAAN DAN PERALATAN YANG DITARIK HEWAN LAINNYA</option>
                </optgroup>
                <optgroup label="9333 - BURUH ANGKAT BARANG">
                  <option value="9333.01">9333.01 - BURUH ANGKAT BARANG</option>
                </optgroup>
                <optgroup label="9334 - BURUH PENATA BARANG">
                  <option value="9334.01">9334.01 - BURUH PENGISI BARANG</option>
                  <option value="9334.02">9334.02 - BURUH PENGONTROL BARANG</option>
                  <option value="9334.99">9334.99 - BURUH PENATA BARANG LAINNYA</option>
                </optgroup>
                <optgroup label="9411 - ASISTEN JURU MASAK">
                  <option value="9411.01">9411.01 - ASISTEN JURU MASAK</option>
                </optgroup>
                <optgroup label="9412 - JURU BANTU DAPUR">
                  <option value="9412.01">9412.01 - ASISTEN DAPUR</option>
                  <option value="9412.02">9412.02 - PENCUCI PIRING</option>
                  <option value="9412.03">9412.03 - JURU BERSIH DAPUR</option>
                  <option value="9412.04">9412.04 - PORTER DAPUR (KULI)</option>
                  <option value="9412.05">9412.05 - PELAYAN DAPUR</option>
                  <option value="9412.99">9412.99 - JURU BANTU DAPUR LAINNYA</option>
                </optgroup>
                <optgroup label="9510 - PEKERJA JASA JALANAN DAN YBDI">
                  <option value="9510.01">9510.01 - PESURUH</option>
                  <option value="9510.02">9510.02 - PENYEMIR SEPATU</option>
                  <option value="9510.03">9510.03 - PEMBERSIH KACA MOBIL</option>
                  <option value="9510.04">9510.04 - TUKANG PARKIR JALANAN</option>
                  <option value="9510.99">9510.99 - PEKERJA JASA JALANAN LAINNYA</option>
                </optgroup>
                <optgroup label="9520 - PEDAGANG KELILING DAN ASONGAN (SELAIN MAKANAN)">
                  <option value="9520.01">9520.01 - PEDAGANG KELILING (SELAIN MAKANAN)</option>
                  <option value="9520.02">9520.02 - PEDAGANG ASONGAN (SELAIN MAKANAN)</option>
                  <option value="9520.99">9520.99 - PEDAGANG KELILING DAN ASONGAN (SELAIN MAKANAN) LAINNYA</option>
                </optgroup>
                <optgroup label="9611 - TUKANG SAMPAH">
                  <option value="9611.01">9611.01 - TUKANG SAMPAH</option>
                </optgroup>
                <optgroup label="9612 - PENYORTIR SAMPAH">
                  <option value="9612.01">9612.01 - PENYORTIR BARANG DAUR ULANG</option>
                  <option value="9612.02">9612.02 - PENGEPUL BARANG SISA</option>
                  <option value="9612.03">9612.03 - PEMULUNG</option>
                  <option value="9612.99">9612.99 - PENYORTIR SAMPAH LAINNYA</option>
                </optgroup>
                <optgroup label="9613 - TUKANG SAPU DAN YBDI">
                  <option value="9613.01">9613.01 - TUKANG SAPU TAMAN</option>
                  <option value="9613.02">9613.02 - TUKANG SAPU JALANAN</option>
                  <option value="9613.99">9613.99 - TUKANG SAPU LAINNYA</option>
                </optgroup>
                <optgroup label="9621 - KURIR, PENGANTAR PAKET DAN KULI ANGKUT BARANG">
                  <option value="9621.01">9621.01 - LOPER/PENGANTAR KORAN</option>
                  <option value="9621.02">9621.02 - PEMBAWA PESAN</option>
                  <option value="9621.03">9621.03 - KULI ANGKUT BARANG (PORTER)</option>
                  <option value="9621.04">9621.04 - PESURUH POS</option>
                  <option value="9621.99">9621.99 - KURIR, PENGANTAR PAKET DAN KULI ANGKUT BARANG LAINNYA</option>
                </optgroup>
                <optgroup label="9622 - PEKERJA SERABUTAN">
                  <option value="9622.01">9622.01 - PEKERJA SERABUTAN</option>
                  <option value="9622.02">9622.02 - PEKERJA SERBAGUNA HOTEL</option>
                  <option value="9622.99">9622.99 - PEKERJA SERABUTAN LAINNYA</option>
                </optgroup>
                <optgroup label="9623 - PEMBACA METERAN DAN PENGUMPUL MESIN VENDING">
                  <option value="9623.01">9623.01 - PENGISI MESIN PENJUAL OTOMATIS</option>
                  <option value="9623.02">9623.02 - PEMBACA METERAN</option>
                  <option value="9623.99">9623.99 - PEMBACA METERAN DAN PENGUMPUL MESIN VENDING LAINNYA</option>
                </optgroup>
                <optgroup label="9624 - PENGUMPUL AIR DAN KAYU BAKAR">
                  <option value="9624.01">9624.01 - PENGUMPUL KAYU BAKAR</option>
                  <option value="9624.02">9624.02 - PENGUMPUL AIR</option>
                  <option value="9624.99">9624.99 - PENGUMPUL AIR DAN KAYU BAKAR LAINNYA</option>
                </optgroup>
                <optgroup label="9629 - PEKERJA KASAR YTDL">
                  <option value="9629.01">9629.01 - PENJAGA PINTU</option>
                  <option value="9629.02">9629.02 - PETUGAS PARKIR</option>
                  <option value="9629.03">9629.03 - PETUGAS RUANG PAMERAN</option>
                  <option value="9629.04">9629.04 - PETUGAS RUANG MANTEL</option>
                  <option value="9629.05">9629.05 - PENGUMPUL TIKET</option>
                  <option value="9629.99">9629.99 - PEKERJA KASAR LAINNYA</option>
              </select>
              <label>Jabatan Yang Diminati</label>
              @error('i')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
              </option>
            </div>

            <div class="input-field col s12 m4 l4">
              <i class="material-icons prefix">group</i>
              <select class="form-control" name="sistem_pembayaran_harapan">
                <option value="">Pilih Sistem Pengupahan Gaji</option>
                <option value="1">BORONGAN</option>
                <option value="2">HARIAN</option>
                <option value="3">MINGGUAN</option>
                <option value="4">BULANAN</option>
              </select>
              <label>Sistem Pengupahan Gaji</label>
              @error('i')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
            <div class="input-field col s12 m4 l4">
              <i class="material-icons prefix">group</i>
              <select name="i" id="inpstatus">
                <option value="">- Pilih Harapan Gaji Per Bulan -</option>
              </select>
              <label>Harapan Gaji Per Bulan</label>
              @error('i')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
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

<script type="text/javascript">
  $(document).ready(function() {
    $('#prov').on('change', function(e) {
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
</script>

@endsection