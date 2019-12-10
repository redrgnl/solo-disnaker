@extends('admin/index')

@section('content')
<div class="row">
    <div class="col s12">
      <div id="validation" class="card card card-default scrollspy">
        <div class="card-content">
          <h4 class="card-title">Form Data Lowongan Baru</h4>
          <form class="col s12" method="post" action="/perusahaan/simpan-data-lowongan">
            @csrf
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">work</i>
                <input name="b" id="inpposisi" type="text" class="validate" >
                <label for="b">Jabatan</label>
                @error('b')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">history</i>
                <select class="" name="c" id="inpstatus" >
                  <option value="">- Status -</option>
                  <option value="Active">Buka</option>
                  <option value="Non-Active">Tutup</option>
                </select>
                <label for="c">Status</label>
                @error('c')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">attach_money</i>
                <input name="d" id="inpgaji" type="number" class="validate" >
                <label for="d">Gaji</label>
                @error('d')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">airplanemode_active</i>
                <textarea name="e" id="inppengalaman" type="text" class="validate materialize-textarea" ></textarea>
                <label for="e">Pengalaman Kerja</label>
                @error('e')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">comment</i>
                <textarea name="f" id="inpdeskripsi" type="text" class="validate materialize-textarea" ></textarea>
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

@endsection