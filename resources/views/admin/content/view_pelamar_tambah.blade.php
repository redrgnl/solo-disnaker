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
              <label>Provinsi</label>
              @error('d')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
            <div class="input-field col s12 m4 l4">
              <i class="material-icons prefix">home</i>
              <select name="kota" id="kota">
                <option value="">- Pilih Kota -</option>
              </select>
              <label>Kota</label>
              @error('d')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
            <div class="input-field col s12 m4 l4">
              <i class="material-icons prefix">home</i>
              <select name="kota" id="kota">
                <option value="">- Pilih Kecamatan -</option>
              </select>
              <label>Kecamatan</label>
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
              <select name="prov" id="prov">
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
              <i class="material-icons prefix">home</i>
              <select name="kota" id="kota">
                <option value="">- Pilih Kota -</option>
              </select>
              <label>Kota</label>
              @error('d')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <option class="input-field col s12 m6 l6">
              <i class="material-icons prefix">group</i>
              <select name="i" id="inpstatus">
                <option value="">- Pilih Jabatan Yang Diminati -</option>
              </select>
              <label>Jabatan Yang Diminati</label>
              @error('i')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </option>
          </div>
          <div class="row">
            <option class="input-field col s12 m6 l6">
              <i class="material-icons prefix">group</i>
              <select name="i" id="inpstatus">
                <option value="">- Pilih Sistem Pengupahan Gaji -</option>
              </select>
              <label>Sistem Pengupahan Gaji</label>
              @error('i')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </option>
          </div>
          <div class=<div class="row">
            <option class="input-field col s12 m6 l6">
              <i class="material-icons prefix">group</i>
              <select name="i" id="inpstatus">
                <option value="">- Pilih Harapan Gaji Per Bulan -</option>
              </select>
              <label>Harapan Gaji Per Bulan</label>
              @error('i')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </option>
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

@endsection