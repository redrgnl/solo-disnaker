@extends('admin/index')

@section('content')
<div class="row">
    <div class="col s12">
      <div id="validation" class="card card card-default scrollspy">
        <div class="card-content">
          <h4 class="card-title">Form Data Perusahaan Baru</h4>
          <form class="col s12" method="post" action="/admin/simpan-data-perusahaan">
            @csrf
            <div class="row">
              <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">art_track</i>
                <input name="inpnama" id="inpnama" type="text" class="validate" required>
                <label for="inpnama">Nama</label>
                @error('a')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">domain</i>
                <input name="inplengkap" id="inplengkap" type="text" class="validate" required>
                <label for="inplengkap">Nama Lengkap Perusahaan</label>
                @error('b')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">account_balance</i>
                <input name="inpnpwp" id="inpnpwp" type="text" class="validate" required>
                <label for="inpnpwp">NPWP</label>
                @error('c')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">location_on</i>
                <textarea name="inpalamat" id="inpalamat" type="text" class="validate materialize-textarea" required></textarea>
                <label for="inpalamat">Alamat</label>
                @error('d')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">call</i>
                <input name="inptelepon" id="inptelepon" type="text" class="validate" required>
                <label for="inptelepon">Telepon</label>
                @error('e')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
              <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">email</i>
                <input name="inpemail" id="inpemail" type="email" class="validate" required>
                <label for="inpemail">Email</label>
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