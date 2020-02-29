@extends('admin/index')

@section('content')
<div class="row">
  <div class="col s12">
    <div id="validation" class="card card card-default scrollspy">
      <div class="card-content">
        <h4 class="card-title">Form Data Pelamar</h4>
        <form class="col s12" method="post" action="/admin/update-data-pelamar" enctype="multipart/form-data">
          @csrf
          <h6 style="color: blue;">Akun Pelamar</h6>
          <div class="row">
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">art_track</i>
              <input type="hidden" name="inpid" value="{{ $pelamar->id_pelamar }}">
              <input name="inpusername" id="inpusername" type="text" class="validate" value="{{ $pelamar->nama_pelamar }}" required>
              <label for="inpusername">username / id user*</label>
              @error('inpusername')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">vpn_key</i>
              <input name="inppassword" id="inppassword" type="password" class="validate" >
              <label for="inppassword">Password*</label>
              @error('inppassword')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">vpn_key</i>
              <input name="inpconfirm" id="inpconfirm" type="password" class="validate" >
              <label for="inpconfirm">Ulangi Password*</label>
              @error('inpconfirm')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">email</i>
              <input name="inpemail" id="inpemail" type="email" class="validate" value="{{ $pelamar->email_pelamar }}" required>
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
                <input class="file-path validate" name="inpfoto" value="{{ $pelamar->foto_pelamar }}" type="text">
                <input type="hidden" name="old_foto" value="{{ $pelamar->foto_pelamar }}">
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
              <input name="inpnik" id="inpnik" type="text" class="validate" required value="{{ $pelamar->nik_pelamar }}">
              <label for="inpnik">NIK / Nomor KTP*</label>
              @error('inpnik')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">assignment</i>
              <input name="inpnama" id="inpnama" type="text" class="validate" value="{{ $pelamar->nama_ktp }}" required>
              <label for="inpnama">Nama Lengkap*</label>
              @error('inpnama')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6 m6 l6">
              <i class="material-icons prefix"></i>
              <input name="inpgelardepan" id="inpgelardepan" type="text" class="validate" value="{{ $pelamar->gelardpn_pelamar }}">
              <label for="inpgelardepan">Gelar Depan</label>
              @error('inpgelardepan')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
            <div class="input-field col s6 m6 l6">
              <input name="inpgelarbelakang" id="inpgelarbelakang" type="text" class="validate" value="{{ $pelamar->gelarblk_pelamar }}">
              <label for="inpgelarbelakang">Gelar Belakang</label>
              @error('inpgelarbelakang')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">child_care</i>
              <input name="inptempatlhr" id="inptempatlhr" type="text" class="validate" value="{{ $pelamar->tplahir_pelamar }}" required>
              <label for=" inptempatlhr">Tempat Lahir*</label>
              @error('inptempatlhr')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">event</i>
              <input name="inptanggallhr" id="inptanggallhr" type="date" class="validate" value="{{ $pelamar->tglahir_pelamar }}" required>
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
                <option value="L" <?php if ($pelamar->kelamin_pelamar == "L") {
                                    echo "selected";
                                  } ?>>Laki - Laki</option>
                <option value="P" <?php if ($pelamar->kelamin_pelamar == "P") {
                                    echo "selected";
                                  } ?>>Perempuan</option>
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
                <option value="Islam" <?php if ($pelamar->agama_pelamar == "Islam") {
                                        echo "selected";
                                      } ?>>Islam</option>
                <option value="Kristen" <?php if ($pelamar->agama_pelamar == "Kristen") {
                                          echo "selected";
                                        } ?>>Kristen</option>
                <option value="Katolik" <?php if ($pelamar->agama_pelamar == "Katolik") {
                                          echo "selected";
                                        } ?>>Katolik</option>
                <option value="Hindu" <?php if ($pelamar->agama_pelamar == "Hindu") {
                                        echo "selected";
                                      } ?>>Hindu</option>
                <option value="Budha" <?php if ($pelamar->agama_pelamar == "Budha") {
                                        echo "selected";
                                      } ?>>Budha</option>
                <option value="Konghuchu" <?php if ($pelamar->agama_pelamar == "Konghuchu") {
                                            echo "selected";
                                          } ?>>Konghuchu</option>
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
                <option value="Non Disabilitas" <?php if ($pelamar->kondisi_pelamar == "Non Disabilitas") {
                                                  echo "selected";
                                                } ?>>Non Disabilitas</option>
                <option value="Disabilitas" <?php if ($pelamar->kondisi_pelamar == "Disabilitas") {
                                              echo "selected";
                                            } ?>>Disabilitas</option>
<!--
                <option value="Tuna Daksa" <?php if ($pelamar->kondisi_pelamar == "Tuna Daksa") {
                                              echo "selected";
                                            } ?>>Tuna Daksa</option>
                <option value="Tuna Grahita" <?php if ($pelamar->kondisi_pelamar == "Tuna Grahita") {
                                                echo "selected";
                                              } ?>>Tuna Grahita</option>
                <option value="Tuna Wicara" <?php if ($pelamar->kondisi_pelamar == "Tuna Wicara") {
                                              echo "selected";
                                            } ?>>Tuna Wicara</option>
                <option value="Tuna Netra" <?php if ($pelamar->kondisi_pelamar == "Tuna Netra") {
                                              echo "selected";
                                            } ?>>Tuna Netra</option>
                <option value="Tuna Netra" <?php if ($pelamar->kondisi_pelamar == "Tuna Netra") {
                                              echo "selected";
                                            } ?>>Tuna Rungu</option>
                <option value="Tuna Netra" <?php if ($pelamar->kondisi_pelamar == "Tuna Netra") {
                                              echo "selected";
                                            } ?>>Tuna Ganda</option>
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
                <option value="BN" <?php if ($pelamar->statuskawin_pelamar == "BN") {
                                      echo "selected";
                                    } ?>> Belum Menikah </option>
                <option value="SN" <?php if ($pelamar->statuskawin_pelamar == "SN") {
                                      echo "selected";
                                    } ?>> Menikah </option>
                <option value="DA" <?php if ($pelamar->statuskawin_pelamar == "DA") {
                                      echo "selected";
                                    } ?>> Duda </option>
                <option value="JA" <?php if ($pelamar->statuskawin_pelamar == "JA") {
                                      echo "selected";
                                    } ?>> Janda </option>
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
                <option value="WARGA NEGARA INDONESIA (WNI)" <?php if ($pelamar->statuskawin_pelamar == "WARGA NEGARA INDONESIA (WNI)") {
                                                                echo "selected";
                                                              } ?>> WARGA NEGARA INDONESIA (WNI) </option>
                <option value="WARGA NEGARA ASING (WNA)" <?php if ($pelamar->statuskawin_pelamar == "WARGA NEGARA ASING (WNA)") {
                                                            echo "selected";
                                                          } ?>> WARGA NEGARA ASING (WNA) </option>
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
              <input name="inptinggi" id="inptinggi" type="number" min="1" class="validate" value="{{ $pelamar->tinggi_pelamar }}">
              <label for="inptinggi">Tinggi Badan (<b>CM</b>)</label>
              @error('inptinggi')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">last_page</i>
              <input name="inpberat" id="inpberat" type="number" min="1" class="validate" value="{{ $pelamar->berat_pelamar }}">
              <label for="inpberat">Berat Badan (<b>KG</b>)</label>
              @error('inpberat')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">call</i>
              <input name="inptelepon" id="inptelepon" type="text" class="validate" value="{{ $pelamar->telp_pelamar }}" required>
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
                <option value="{{ $prov->id }}" <?php if ($pelamar->provinsi_pelamar == $prov->id) {
                                                  echo "selected";
                                                } ?>>{{ $prov->name }}</option>
                @endforeach
              </select>
              @error('inpprov')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
            <div class="input-field col s12 m4 l4">
              <select class="browser-default" name="inpkota" id="inpkota" required>
                <option value="">- Pilih Kota* -</option>
                @foreach($kota as $kt)
                <option value="{{ $kt->id }}" <?php if ($pelamar->kota_pelamar == $kt->id) {
                                                echo "selected";
                                              } ?>>{{ $kt->name }}</option>
                @endforeach
              </select>
              @error('inpkota')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
            <div class="input-field col s12 m4 l4">
              <select class="browser-default" name="inpkecamatan" id="inpkecamatan" required>
                <option value="">- Pilih Kecamatan* -</option>
                @foreach($kecamatan as $kec)
                <option value="{{ $kec->id }}" <?php if ($pelamar->kec_pelamar == $kec->id) {
                                                  echo "selected";
                                                } ?>>{{ $kec->name }}</option>
                @endforeach
              </select>
              @error('inpkecamatan')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">call</i>
              <input name="inpkodepos" id="inpkodepos" type="text" class="validate" value="{{ $pelamar->kodepos_pelamar }}">
              <label for="inpkodepos">Kode Pos</label>
              @error('inpkodepos')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">place</i>
              <input name="inpalamat" id="inpalamat" type="text" class="validate materialize-textarea" value="{{ $pelamar->alamat_pelamar }}" required>
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
                <option value="{{ $tpdd->id_tingkatpdd }}" <?php if ($pelamar->id_tingkatpdd == $tpdd->id_tingkatpdd) {
                                                              echo "selected";
                                                            } ?>>{{ $tpdd->jenis_tingkatpdd }}</option>
                @endforeach
              </select>
              @error('i')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </span>
            <span class="input-field col s6 m6 l6">
              <select class="browser-default" name="inpjurusan" id="inpjurusan">
                <option value="">- Pilih Jurusan -</option>
                @foreach($dettingkatpdd as $detpdd)
                <option value="{{ $detpdd->id_det_tingkatpdd }}" <?php if ($pelamar->id_det_tingkatpdd == $detpdd->id_det_tingkatpdd) {
                                                                    echo "selected";
                                                                  } ?>>{{ $detpdd->jenis_det_tingkatpdd }}</option>
                @endforeach
              </select>
              @error('i')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </span>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">domain</i>
              <input name="inpinstitusi" id="inpinstitusi" type="text" class="validate" value="{{ $pelamar->institusi_pelamar }}">
              <label for="inpinstitusi">Nama Institusi Pendidikan</label>
              @error('inpinstitusi')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6 m6 l6">
              <i class="material-icons prefix">call</i>
              <input name="inpthnlulus" id="inpthnlulus" type="text" class="validate" value="{{ $pelamar->tahunlulus_pelamar }}">
              <label for="inpthnlulus">Tahun Lulus</label>
              @error('inpthnlulus')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
            <div class="input-field col s6 m6 l6">
              <i class="material-icons prefix">call</i>
              <input name="inpnilai" id="inpnilai" type="text" class="validate" value="{{ $pelamar->nilai_pelamar }}">
              <label for="inpnilai">Nilai (Ijazah/IPK)</label>
              @error('inpnilai')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <h6 style="color: blue;">Data Pelaku Usaha</h6>
          <div class="row">
            <div class="input-field col s6 m6 l6">
              <i class="material-icons prefix">attach_money
</i>
              <input name="inpmodal" id="inpmodal" type="number" class="validate">
              <label for="inpmodal">Modal yang dimiliki(Rp)</label>
              @error('inpmodal')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
            <div class="input-field col s6 m6 l6">
              <i class="material-icons prefix">attach_money
</i>
              <input name="inpomzet" id="inpomzet" type="number" class="validate">
              <label for="inpomzet">Omzet tiap bulan (Rp)</label>
              @error('inpomzet')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
            <i class="material-icons prefix">assignment</i>
              <textarea id="deskripsi_bisnis" name="deskripsi_bisnis" class="materialize-textarea"></textarea>
              <label for="deskripsi_bisnis">Deskripsi usaha/ bisnis yang digeluti </label>
            </div>
         </div>

                <div class="file-field input-field col s12">
                  <div class="btn">
                    <span>Salinan KTP</span>
                    <input type="file" name="inpktp" id="inpktp">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" name="inpktp" type="text">
                    <input type="hidden" value="{{ $harapan->ktp_harapan }}" name="old_ktp" >
                  </div>
                </div>
              </div>
            </div>
<!-- END LUAR NEGERI -->

          <div class="row">
            <div class="input-field col s12 m4 l4">
              <i class="material-icons prefix">group</i>
              <select class="form-control select2" name="kelompok_jabatan" id="kelompok_jabatan" data-placeholder="Pilih Kelompok Jabatan">
                <option value="">Semua Jabatan</option>
                @foreach($jabatan as $jab)
                <option value="{{ $jab->id_jabatan }}" <?php if($harapan->jabatan_harapan == $jab->id_jabatan){echo "selected";} ?>>{{ $jab->nama_jabatan }}</option>
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
                <option value="BORONGAN" <?php if($harapan->pembayaran_gaji_harapan == "BORONGAN"){echo "selected";} ?>>BORONGAN</option>
                <option value="HARIAN"<?php if($harapan->pembayaran_gaji_harapan == "HARIAN"){echo "selected";} ?>>HARIAN</option>
                <option value="MINGGUAN"<?php if($harapan->pembayaran_gaji_harapan == "MINGGUAN"){echo "selected";} ?>>MINGGUAN</option>
                <option value="BULANAN"<?php if($harapan->pembayaran_gaji_harapan == "BULANAN"){echo "selected";} ?>>BULANAN</option>
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
                <option value="1" <?php if($harapan->besar_gaji_harapan == "1"){echo "selected";} ?>>&lt; 1 jt</option>
                <option value="2" <?php if($harapan->besar_gaji_harapan == "2"){echo "selected";} ?>>&gt; 1 jt - 2 jt</option>
                <option value="3" <?php if($harapan->besar_gaji_harapan == "3"){echo "selected";} ?>>&gt; 2 jt - 3 jt</option>
                <option value="4" <?php if($harapan->besar_gaji_harapan == "4"){echo "selected";} ?>>&gt; 3 jt - 4 jt</option>
                <option value="5" <?php if($harapan->besar_gaji_harapan == "5"){echo "selected";} ?>>&gt; 4jt - 5 jt</option>
                <option value="6" <?php if($harapan->besar_gaji_harapan == "6"){echo "selected";} ?>>5 jt ke atas</option>
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
                  <input class="file-path validate" name="inppengalaman" value="{{ $harapan->pengalaman_kerja }}" type="text">
                  <input type="hidden" value="{{ $harapan->pengalaman_kerja }}" name="old_pengalaman" >

                  <label for="inppengalaman">* Upload File Dalam Bentuk PDF</label>

                </div>
                  <!-- <a href="javascript:void(0);" class="waves-effect waves-light btn add_button" title="Add field"><i class="material-icons left">add_box</i>Tambah Pengalaman</a> -->
              </div>
            </div>
            <div class="row">
              <div class="file-field input-field col s12">
                <div class="btn">
                  <span>Data Keterampilan</span>
                  <input type="file" name="inpketerampilan" id="inpketerampilan">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" name="inpketerampilan" value="{{ $harapan->keterampilan_kerja }}" type="text">
                  <input type="hidden" value="{{ $harapan->keterampilan_kerja }}" name="old_keterampilan" >

                  <label for="inpketerampilan">* Upload File Dalam Bentuk PDF</label>

                </div>
                  <!-- <a href="javascript:void(0);" class="waves-effect waves-light btn add_button" title="Add field"><i class="material-icons left">add_box</i>Tambah Pengalaman</a> -->
              </div>
            </div>
            <div class="row">
              <div class="file-field input-field col s12">
                <div class="btn">
                  <span>Data Penguasaan Bahasa</span>
                  <input type="file" name="inpbahasa" id="inpbahasa">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" name="inpbahasa" value="{{ $harapan->penguasaan_bahasa }}" type="text">
                  <input type="hidden" value="{{ $harapan->penguasaan_bahasa }}" name="old_bahasa" >

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
<script>
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