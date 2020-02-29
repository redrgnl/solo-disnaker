@extends('admin/index')

@section('content')
<div class="row">
  <div class="col s12">
    <div id="validation" class="card card card-default scrollspy">
      <div class="card-content">
        <h4 class="card-title">Form Data Lowongan</h4>
        <form class="col s12" method="post" action="/admin/update-data-lowongan">
          @csrf
          <input type="hidden" name="inpid" id="inpid" value="{{ $lowongan->id_lowongan }}">
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">domain</i>
              <select class="js-example-basic-single" name="a" id="inpperusahaan">
                <option value="">- Pilih Perusahaan -</option>
                @foreach($perusahaan as $pr)
                <?php if ($pr->id_perusahaan == $lowongan->id_perusahaan) {
                  $selected = "selected";
                } else {
                  $selected = "";
                } ?>
                <option value="{{ $pr->id_perusahaan }}" <?php echo $selected ?>>{{ $pr->nama_perusahaan }}</option>
                @endforeach
              </select>
              <label for="a">Perusahaan</label>
              @error('a')
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
                <option value="{{ $prov->id }}" <?php if ($lowongan->prov_lowongan == $prov->id) {
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
                <option value="{{ $kt->id }}" <?php if ($lowongan->kota_lowongan == $kt->id) {
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
                @foreach($kecamatan as $kt)
                <option value="{{ $kt->id }}" <?php if ($lowongan->kec_lowongan == $kt->id) {
                                                echo "selected";
                                              } ?>>{{ $kt->name }}</option>
                @endforeach
              </select>
              @error('inpkecamatan')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">work</i>
              <!-- <input name="b" id="inpposisi" type="text" class="validate" > -->
              <select class="" name="b" id="inpposisi">
                <option value="">- Jabatan -</option>
                @foreach($jabatan as $j)

                <option value="{{ $j->nama_jabatan }}" <?php if ($j->nama_jabatan == $lowongan->posisi_lowongan) {
                                                          echo "selected";
                                                        } ?>>{{ $j->nama_jabatan }}</option>


                @endforeach
              </select>
              <label for="b">Jabatan</label>
              @error('b')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">description</i>
              <input name="g" id="inpformasi" type="text" value="{{$lowongan->formasi_jabatan}}" class="validate" required="">
              <label for="g">Nama Formasi</label>
              @error('d')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">history</i>
              <select class="js-example-basic-single" name="c" id="inpstatus">
                <option value="">- Status -</option>
                <option value="Active" <?php if ($lowongan->status_lowongan == "Active") {
                                          echo "selected";
                                        } ?>>Buka</option>
                <option value="Non-Active" <?php if ($lowongan->status_lowongan == "Non-Active") {
                                              echo "selected";
                                            } ?>>Tutup</option>
              </select>
              <label for="c">Status</label>
              @error('c')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>

          </div>
          <div class="row">
            <span class="input-field col s6">
              <i class="material-icons prefix">chrome_reader_mode</i>
              <select class="" name="cc" id="inptingkatpdd">
                <option value="">- Pendidikan -</option>
                @foreach($tingkatpdd as $komp)
                <option value="{{ $komp->id_tingkatpdd }}" <?php if ($lowongan->id_tingkatpdd_lowongan == $komp->id_tingkatpdd) {
                                                              echo "selected";
                                                            } ?>>{{ $komp->jenis_tingkatpdd }}</option>
                @endforeach
              </select>
              <label for="c">Pendidikan</label>
              @error('c')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </span>
            <span class="input-field col s6 m6 l6">
              <select class="browser-default" name="n" id="inpjurusan">
                <option value="">- Pilih Jurusan -</option>
                @foreach($detpdd as $k)
                <option value="{{ $k->id_det_tingkatpdd }}" <?php if ($lowongan->jurusan_pdd_lowongan == $k->id_det_tingkatpdd) {
                                                              echo "selected";
                                                            } ?>>{{ $k->jenis_det_tingkatpdd }}</option>
                @endforeach
              </select>
              @error('i')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </span>
          </div>
          @if($lowongan->detail_kejuruan_lowongan != "-")
          <div class="field-kej row">
            <div class="input-field col s12 s12">
              <i class="material-icons prefix">description</i>
              <input name="m" id="inpkejuruan" type="text" value="{{$lowongan->detail_kejuruan_lowongan}}" class="validate">
              <label for="m">Detail Kejuruan</label>
              @error('d')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          @else
          <div class="field-kej row" style="display: none;">
            <div class="input-field col s12 s12">
              <i class="material-icons prefix">description</i>
              <input name="m" id="inpkejuruan" type="text" value="-" class="validate">
              <label for="m">Detail Kejuruan</label>
              @error('d')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          @endif
          <div class="row">
            <div class="input-field col l6">
              <i class="material-icons prefix">assistant_photo</i>
              <select name="p" id="p" required>
                <option value="">- Pilih Penempatan -</option>
                <option value="DN" <?php if ($lowongan->tempat_lowongan == 'DN') {
                                      echo "selected";
                                    } ?>>Dalam Negeri</option>
                <option value="LN" <?php if ($lowongan->tempat_lowongan == 'LN') {
                                      echo "selected";
                                    } ?>>Luar Negeri</option>
              </select>
              <label>Penempatan Lowongan</label>
              @error('p')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
            <div class="input-field col l6">
              <i class="material-icons prefix">accessibility</i>
              <select name="ccc" id="ccc" required>
                <option value="">- Pilih Kondisi Fisik -</option>
                <option value="Non Disabilitas" <?php if ($lowongan->kondisi_lowongan == 'Non Disabilitas') {
                                                  echo "selected";
                                                } ?>>Non Disabilitas</option>
                <option value="Disabilitas" <?php if ($lowongan->kondisi_lowongan == 'Disabilitas') {
                                              echo "selected";
                                            } ?>>Disabilitas</option>
              </select>
              <label>Konfisi Fisik*</label>
              @error('inpkonfis')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">today</i>
              <input name="h" id="inpawal" type="date" value="{{$lowongan->tgl_mulai_lowongan}}" class="validate">
              <label for="h">Tanggal Mulai</label>
              @error('d')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix">today</i>
              <input name="i" id="inpakhir" type="date" value="{{$lowongan->tgl_akhir_lowongan}}" class="validate">
              <label for="i">Tanggal Akhir</label>
              @error('d')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">face</i>
              <input name="j" id="inppria" type="number" value="{{$lowongan->jml_lowongan_pria}}" class="validate">
              <label for="j">Jumlah Lowongan Pria</label>
              @error('d')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix">face</i>
              <input name="k" id="inpwanita" type="number" value="{{$lowongan->jml_lowongan_wanita}}" class="validate">
              <label for="k">Jumlah Lowongan Wanita</label>
              @error('d')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col l6 s6">
              <i class="material-icons prefix">group</i>
              <select class="form-control" name="l" id="sistem_pembayaran_harapan">
                <option value="">Pilih Sistem Pengupahan Gaji</option>
                <option value="BORONGAN" <?php if ($lowongan->sistem_pengupahan_gaji == 'BORONGAN') {
                                            echo "selected";
                                          } ?>>BORONGAN</option>
                <option value="HARIAN" <?php if ($lowongan->sistem_pengupahan_gaji == 'HARIAN') {
                                          echo "selected";
                                        } ?>>HARIAN</option>
                <option value="MINGGUAN" <?php if ($lowongan->sistem_pengupahan_gaji == 'MINGGUAN') {
                                            echo "selected";
                                          } ?>>MINGGUAN</option>
                <option value="BULANAN" <?php if ($lowongan->sistem_pengupahan_gaji == 'BULANAN') {
                                          echo "selected";
                                        } ?>>BULANAN</option>
              </select>
              <label>Sistem Pembayaran Gaji</label>
              @error('sistem_pembayaran_harapan')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
            <div class="input-field col l6 s6">
              <i class="material-icons prefix">timeline</i>
              <select name="o" id="o" required>
                <option value="">- Pilih Status Hubungan Kerja -</option>
                <option value="WAKTU TERTENTU" <?php if ($lowongan->status_hubungan_kerja == 'WAKTU TERTENTU') {
                                                  echo "selected";
                                                } ?>>WAKTU TERTENTU</option>
                <option value="WAKTU TIDAK TERTENTU" <?php if ($lowongan->status_hubungan_kerja == 'WAKTU TIDAK TERTENTU') {
                                                        echo "selected";
                                                      } ?>>WAKTU TIDAK TERTENTU</option>
              </select>
              <label>Status Hubungan Kerja*</label>
              @error('o')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">attach_money</i>
              <input name="d" id="inpgaji" type="number" class="validate" value="{{ $lowongan->gaji_lowongan }}">
              <label for="d">Gaji</label>
              @error('d')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">airplanemode_active</i>
              <textarea name="e" id="inppengalaman" type="text" class="validate materialize-textarea">{{ $lowongan->pengalaman_lowongan }}</textarea>
              <label for="e">Pengalaman Kerja</label>
              @error('e')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">comment</i>
              <textarea name="f" id="inpdeskripsi" type="text" class="validate materialize-textarea">{{ $lowongan->desk_lowongan }}</textarea>
              <label for="f">Deskripsi</label>
              @error('f')
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
<script type="text/javascript">
  $(document).ready(function() {
    $('#inptingkatpdd').on('change', function(e) {
      var idprov = e.target.value;

      //ajax

      $.get('/admin/get-dettingkatpdd/' + idprov, function(data) {
        $('#inpjurusan').html(data)
      });

    });

    $('#inpjurusan').on('change', function(x) {
      var idkej = x.target.value;

      //ajax

      if (idkej == "1304" || idkej == "1203" || idkej == "1204") {
        $('.field-kej').show()

      } else {
        $(".field-kej").css("display", "none");
      }

    });
  });

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
</script>
@endsection