@extends('admin/index')

@section('content')
<div class="row">
    <div class="col s12">
      <div id="validation" class="card card card-default scrollspy">
        <div class="card-content">
          <h4 class="card-title">Form Data Pelamar</h4>
          <form class="col s12" method="post" action="/admin/update-data-pelamar">
            @csrf
            <input type="hidden" name="inpid" value="{{ $pelamar->id_pelamar }}">
            <div class="row">
              <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">chrome_reader_mode</i>
                <input name="a" id="inpnik" type="text" required value="{{ $pelamar->nik_pelamar }}" readonly>
                <label for="a">NIK</label>
                @error('a')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
              <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">account_balance</i>
                <input name="b" id="inpnpwp" type="text" class="validate" required value="{{ $pelamar->npwp_pelamar }}">
                <label for="b">NPWP</label>
                @error('b')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">assignment</i>
                <input name="c" id="inpnama" type="text" class="validate" required value="{{ $pelamar->nama_pelamar }}">
                <label for="c">Nama</label>
                @error('c')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">place</i>
                <textarea name="d" id="inpalamat" type="text" class="validate materialize-textarea" required>{{ $pelamar->alamat_pelamar }}</textarea>
                <label for="d">Alamat</label>
                @error('d')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">wc</i>
                <select required name="e" id="inpgender">
                  <option value="">- Pilih Gender -</option>
                  <option value="L" <?php if ($pelamar->kelamin_pelamar == "L"){ echo "selected"; }?>>Laki - Laki</option>
                  <option value="P" <?php if ($pelamar->kelamin_pelamar == "P"){ echo "selected"; }?>>Perempuan</option>
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
                <input name="f" id="inptempat" type="text" class="validate" required value="{{ $pelamar->tplahir_pelamar }}">
                <label for="f">Tempat Lahir</label>
                @error('f')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">event</i>
                <input name="g" id="inptanggal" type="date" class="validate" required 
                       value="<?php echo strftime('%Y-%m-%d', strtotime($pelamar->tglahir_pelamar)); ?>">
                <label for="g">Tanggal Lahir</label>
                @error('g')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">all_inclusive</i>
                <select required name="h" id="inpagama">
                  <option value="">- Pilih Agama -</option>
                  <option value="Islam" <?php if ($pelamar->agama_pelamar == "Islam"){ echo "selected"; }?>>Islam</option>
                  <option value="Kristen" <?php if ($pelamar->agama_pelamar == "Kristen"){ echo "selected"; }?>>Kristen</option>
                  <option value="Katolik" <?php if ($pelamar->agama_pelamar == "Katolik"){ echo "selected"; }?>>Katolik</option>
                  <option value="Hindu" <?php if ($pelamar->agama_pelamar == "Hindu"){ echo "selected"; }?>>Hindu</option>
                  <option value="Budha" <?php if ($pelamar->agama_pelamar == "Budha"){ echo "selected"; }?>>Budha</option>
                  <option value="Konghuchu" <?php if ($pelamar->agama_pelamar == "Konghuchu" ){ echo "selected"; }?>>Konghuchu</option>
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
                <select required name="i" id="inpstatus">
                  <option value="">- Pilih Status -</option>
                  <option value="BN" <?php if ($pelamar->status_pelamar == "BN"){ echo "selected"; }?>>Belum Nikah</option>
                  <option value="SN" <?php if ($pelamar->status_pelamar == "SN"){ echo "selected"; }?>>Sudah Nikah</option>
                </select>
                <label>Status Pernikahan</label>
                @error('i')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">keyboard_capslock</i>
                <input name="j" id="inptinggi" type="number" min="1" class="validate" required value="{{ $pelamar->tinggi_pelamar }}">
                <label for="j">Tinggi Badan</label>
                @error('j')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">last_page</i>
                <input name="k" id="inpberat" type="number" min="1" class="validate" required value="{{ $pelamar->berat_pelamar }}">
                <label for="k">Berat Badan</label>
                @error('k')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">call</i>
                <input name="l" id="inptelepon" type="text" class="validate" required value="{{ $pelamar->telp_pelamar }}">
                <label for="l">Nomor Telepon</label>
                @error('l')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input name="m" id="inpemail" type="email" class="validate" required value="{{ $pelamar->email_pelamar }}">
                <label for="m">Email</label>
                @error('m')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">vpn_key</i>
                <input name="n" id="inppassword" type="password" class="validate" required>
                <label for="n">Password</label>
                @error('n')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
              <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">vpn_key</i>
                <input name="o" id="inpconfirm" type="password" class="validate" required>
                <label for="o">Confirm Password</label>
                @error('o')
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

@endsection