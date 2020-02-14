@extends('admin/index')

@section('content')
<div class="row">
  <div class="col s12">
    <div id="validation" class="card card card-default scrollspy">
      <div class="card-content">
        <h4 class="card-title">Form Data Pelatihan</h4>
        <form class="col s12" method="post" action="/admin/update-data-workshop" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="inpid" id="inpid" value="{{ $workshop->id_workshop }}">
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">art_track</i>
              <input name="a" id="inpnama" type="text" class="validate" value="{{ $workshop->nama_workshop }}">
              <label for="a">Pelatihan</label>
              @error('a')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">location_on</i>
              <textarea name="b" id="inplokasi" type="text" class="validate materialize-textarea">{{ $workshop->lokasi_workshop }}</textarea>
              <label for="b">Tempat Pelatihan</label>
              @error('b')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s11">
              <i class="material-icons prefix">gps_fixed</i>
              <textarea name="b1" id="inplokasi" type="text" class="validate materialize-textarea">{{ $workshop->maps_workshop }}</textarea>
              <label for="b1">Posisi Peta</label>
              @error('b1')
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
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">date_range</i>
              <input name="c" id="inptanggal" type="date" class="validate" value="<?php echo strftime('%Y-%m-%d', strtotime($workshop->tanggal_workshop)); ?>">
              <label for="c">Tanggal Pelatihan</label>
              @error('c')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">directions_run</i>
              <input name="c1" id="inptanggal" type="date" class="validate" value="<?php echo strftime('%Y-%m-%d', strtotime($workshop->str_workshop)); ?>">
              <label for="c1">Tanggal Dibuka Pendaftaran</label>
              @error('c1')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">golf_course</i>
              <input name="c2" id="inptanggal" type="date" class="validate" value="<?php echo strftime('%Y-%m-%d', strtotime($workshop->end_workshop)); ?>">
              <label for="c2">Tanggal Penutupan Pendaftaran</label>
              @error('c2')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6 m6 l6">
              <i class="material-icons prefix">dvr</i>
              <select class="js-example-basic-single" name="e1" id="katpel">
                <option value="">- Kategori Pelatihan -</option>
                <option value="Pencari Kerja" <?php if ($workshop->kategori_workshop == "Pencari Kerja") {
                                                echo "selected";
                                              } ?>>Pencari Kerja</option>
                <option value="Wirausaha" <?php if ($workshop->kategori_workshop == "Wirausaha") {
                                            echo "selected";
                                          } ?>>Wirausaha</option>
              </select>
              <label for="e1">Kategori Pelatihan</label>
              @error('e1')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          @if($workshop->kategori_workshop == "Wirausaha" || $workshop->kategori_workshop == "Pencari Kerja")
            @if($workshop->kategori_workshop == "Wirausaha")
              <div class="field-a">
                <div class="input-field col s6 m6 l6">
                  <i class="material-icons prefix"></i>
                  <select class="js-example-basic-single" name="e2" id="inpstatus">
                    <option value="-">- Kategori Wirausaha -</option>
                    <option value="Wirausaha baru" <?php if ($workshop->kategori_wirausaha == "Wirausaha baru") {
                                                      echo "selected";
                                                    } ?>>Wirausaha baru</option>
                    <option value="IKM" <?php if ($workshop->kategori_wirausaha == "IKM") {
                                          echo "selected";
                                        } ?>>IKM</option>
                  </select>
                  <label for="e1">Kategori Wirausaha</label>
                  @error('e2')
                  <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                  @enderror
                </div>
              </div>

            <div class="field-b" style="display: none">
              <div class="input-field col s6 m6 l6">
                <i class="material-icons prefix"></i>
                <select class="js-example-basic-single" name="ee2" id="inpstatus">
                  <option value="-">- Kompetensi Kelatihan -</option>
                  @foreach($kompetensi as $komp)
                  <option value="{{ $komp->nama_kompetensi }}" <?php if ($workshop->jenis_kompetensi_workshop == $komp->nama_kompetensi ) { echo "selected"; } ?>>{{ $komp->nama_kompetensi }}</option>
                  @endforeach
                </select>
                <label for="ee2">Jenis Kompetensi Pelatihan</label>
                @error('ee2')
                <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
            @else
              <div class="field-b">
                <div class="input-field col s6 m6 l6">
                  <i class="material-icons prefix"></i>
                  <select class="js-example-basic-single" name="ee2" id="inpstatus">
                    <option value="-">- kompetensi pelatihan -</option>
                    <option value="Kompetensi Jabatan"<?php if ($workshop->jenis_kompetensi_workshop == "Kompetensi Jabatan") {
                                                      echo "selected";
                                                    } ?> >Kompetensi Jabatan</option>

                  </select>
                  <label for="ee2">Jenis Kompetensi Pelatihan</label>
                  @error('ee2')
                  <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <div class="field-a" style="display: none;">
              <div class="input-field col s6 m6 l6">
                <i class="material-icons prefix"></i>
                <select class="js-example-basic-single" name="e2" id="inpstatus">
                  <option value="-">- Kategori Wirausaha -</option>
                  <option value="Wirausaha baru" <?php if ($workshop->kategori_wirausaha == "Wirausaha baru") {
                                                    echo "selected";
                                                  } ?>>Wirausaha baru</option>
                  <option value="IKM" <?php if ($workshop->kategori_wirausaha == "IKM") {
                                        echo "selected";
                                      } ?>>IKM</option>
                </select>
                <label for="e1">Kategori Wirausaha</label>
                @error('e2')
                <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>

            @endif

          @else
          <div class="field-a" style="display: none;">
              <div class="input-field col s6 m6 l6">
                <i class="material-icons prefix"></i>
                <select class="js-example-basic-single" name="e2" id="inpstatus">
                  <option value="-">- Kategori Wirausaha -</option>
                  <option value="Wirausaha baru" <?php if ($workshop->kategori_wirausaha == "Wirausaha baru") {
                                                    echo "selected";
                                                  } ?>>Wirausaha baru</option>
                  <option value="IKM" <?php if ($workshop->kategori_wirausaha == "IKM") {
                                        echo "selected";
                                      } ?>>IKM</option>
                </select>
                <label for="e1">Kategori Wirausaha</label>
                @error('e2')
                <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="field-b" style="display: none">
              <div class="input-field col s6 m6 l6">
                <i class="material-icons prefix"></i>
                <select class="js-example-basic-single" name="ee2" id="inpstatus">
                  <option value="-">- kompetensi pelatihan -</option>
                  <option value="Kompetensi Jabatan">Kompetensi Jabatan</option>

                </select>
                <label for="ee2">Jenis Kompetensi Pelatihan</label>
                @error('ee2')
                <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
          @endif
          </div>
          <div class="row">
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">face</i>
              <input name="d" id="inpkuota" type="number" class="validate" value="{{ $workshop->kuota_workshop }}">
              <label for="d">Kuota</label>
              @error('d')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">history</i>
              <select class="js-example-basic-single" name="e" id="inpstatus">
                <option value="">- Status -</option>
                <option value="Active" <?php if ($workshop->status_workshop == "Active") {
                                          echo "selected";
                                        } ?>>Buka</option>
                <option value="Non-Active" <?php if ($workshop->status_workshop == "Non-Active") {
                                              echo "selected";
                                            } ?>>Tutup</option>
              </select>
              <label for="e">Status</label>
              @error('e')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix">playlist_add_check</i>

            <textarea id="p" name="p" class="materialize-textarea">{{ $workshop->persyaratan_workshop }}</textarea>
            <label for="p">Persyaratan</label>
          </div>
          <br>
            <p>Upload Banner atau Logo Pelatihan</p><br>
            <div class="file-field col s12 m6 l6">
            <input type="hidden" name="old_gambar" value="{{ $workshop->poster_workshop }}">

              <div class="btn">
                <span>File</span>
                <input type="file" name="f">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text" value="{{ $workshop->poster_workshop }}" required>

              </div>
              @error('f')
              <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
              @enderror
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
<script>
  $(document).ready(function() {
    $("#katpel").change(function() {
      var val = $(this).val();
      if (val == "Wirausaha") {
        $('.field-a').show()
        $('.field-b').hide()

      } else if (val == "Pencari Kerja") {
        $('.field-a').hide()
        $('.field-b').show()

      }else{
        $('.field-a').hide()
        $('.field-b').hide()

      }
    });
  });
</script>
@endsection