@extends('admin/index')

@section('content')
<div class="row">
    <div class="col s12">
      <div id="validation" class="card card card-default scrollspy">
        <div class="card-content">
          <h4 class="card-title">Form Data Workshop</h4>
          <form class="col s12" method="post" action="/admin/update-data-workshop">
            @csrf
            <input type="hidden" name="inpid" id="inpid" value="{{ $workshop->id_workshop }}">
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">art_track</i>
                <input name="a" id="inpnama" type="text" class="validate"  value="{{ $workshop->nama_workshop }}">
                <label for="a">Workshop</label>
                @error('a')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">location_on</i>
                <textarea name="b" id="inplokasi" type="text" class="validate materialize-textarea" >{{ $workshop->lokasi_workshop }}</textarea>
                <label for="b">Lokasi</label>
                @error('b')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">date_range</i>
                <input name="c" id="inptanggal" type="date" class="validate"  value="<?php echo strftime('%Y-%m-%d', strtotime($workshop->tanggal_workshop)); ?>">
                <label for="c">Tanggal</label>
                @error('c')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">face</i>
                <input name="d" id="inpkuota" type="number" class="validate"  value="{{ $workshop->kuota_workshop }}">
                <label for="d">Kuota</label>
                @error('d')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
              <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">history</i>
                <select class="js-example-basic-single" name="e" id="inpstatus" >
                  <option value="">- Status -</option>
                  <option value="Active" <?php if ($workshop->status_workshop == "Active"){ echo "selected"; }?>>Buka</option>
                  <option value="Non-Active" <?php if ($workshop->status_workshop == "Non-Active"){ echo "selected"; }?>>Tutup</option>
                </select>
                <label for="e">Status</label>
                @error('e')
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