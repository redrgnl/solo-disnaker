@extends('admin/index')

@section('content')
<div class="row">
    <div class="col s12">
      <div id="validation" class="card card card-default scrollspy">
        <div class="card-content">
          <h4 class="card-title">Form Data Pelatihan Baru</h4>
          <form class="col s12" method="post" action="/admin/simpan-data-workshop" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">art_track</i>
                <input name="a" id="inpnama" type="text" class="validate" >
                <label for="a">Pelatihan</label>
                @error('a')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">location_on</i>
                <textarea name="b" id="inplokasi" type="text" class="validate materialize-textarea" ></textarea>
                <label for="b">Tempat Pelatihan</label>
                @error('b')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="input-field col s11">
                <i class="material-icons prefix">gps_fixed</i>
                <textarea name="b1" id="inplokasi" type="text" class="validate materialize-textarea" ></textarea>
                <label for="b1">Link Posisi Peta</label>
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
                <input name="c" id="inptanggal" type="date" class="validate" >
                <label for="c">Tanggal Pelatihan</label>
                @error('c')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
              <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">dvr</i>
                <select class="js-example-basic-single" name="e1" id="inpstatus" >
                  <option value="">- Kategori Pelatihan -</option>
                  <option value="Pemula">Pemula</option>
                  <option value="Advance">Advance</option>
                  <option value="Expert">Expert</option>
                </select>
                <label for="e1">Kategori Pelatihan</label>
                @error('e1')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">directions_run</i>
                <input name="c1" id="inptanggal" type="date" class="validate" >
                <label for="c1">Tanggal Pembukaan</label>
                @error('c1')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
              <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">golf_course</i>
                <input name="c2" id="inptanggal" type="date" class="validate" >
                <label for="c2">Tanggal Penutupan</label>
                @error('c2')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">face</i>
                <input name="d" id="inpkuota" type="number" class="validate" >
                <label for="d">Kuota</label>
                @error('d')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
              <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">history</i>
                <select class="js-example-basic-single" name="e" id="inpstatus" >
                  <option value="">- Status -</option>
                  <option value="Active">Buka</option>
                  <option value="Non-Active">Tutup</option>
                </select>
                <label for="e">Status</label>
                @error('e')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <br>
              <p>Upload Banner atau Logo Pelatihan</p><br>
              <div class="file-field col s12 m6 l6">
                <div class="btn">
                  <span>File</span>
                  <input type="file" name="f">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text" required>
                </div>
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
<script>
function popup(url) {
  newwindow = window.open(url,'name','height=500,width=1050');
  if (window.focus) { newwindow.focus() }
  return false;
}
</script>
@endsection