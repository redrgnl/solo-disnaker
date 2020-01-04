@extends('admin/index')

@section('content')
<div class="row">
    <div class="col s12">
      <div id="validation" class="card card card-default scrollspy">
        <div class="card-content">
          <h4 class="card-title">Form Data Perusahaan</h4>
          @if (Session::get('login-pr') == true)
          <form class="col s12" method="post" action="/perusahaan/update-data-perusahaan">
          @else
          <form class="col s12" method="post" action="/admin/update-data-perusahaan">
          @endif
            @csrf
            <input type="hidden" name="inpid" value="{{ $perusahaan->id_perusahaan }}">
            <div class="row">
              <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">art_track</i>
                <input name="inpnama" id="inpnama" type="text" class="validate"  value="{{ $perusahaan->nama_perusahaan }}">
                <label for="inpnama">Nama</label>
                @error('a')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">domain</i>
                <input name="inplengkap" id="inplengkap" type="text" class="validate"  value="{{ $perusahaan->lengkap_perusahaan }}">
                <label for="inplengkap">Nama Lengkap Perusahaan</label>
                @error('b')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">account_balance</i>
                <input name="inpnpwp" id="inpnpwp" type="text" class="validate"  value="{{ $perusahaan->npwp_perusahaan }}">
                <label for="inpnpwp">NPWP</label>
                @error('c')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">location_on</i>
                <textarea name="inpalamat" id="inpalamat" type="text" class="validate materialize-textarea" >{{ $perusahaan->alamat_perusahaan }}</textarea>
                <label for="inpalamat">Alamat</label>
                @error('d')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">call</i>
                <input name="inptelepon" id="inptelepon" type="text" class="validate"  value="{{ $perusahaan->telp_perusahaan }}">
                <label for="inptelepon">Telepon</label>
                @error('e')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
              <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">email</i>
                <input name="inpemail" id="inpemail" type="email" class="validate"  value="{{ $perusahaan->email_perusahaan }}">
                <label for="inpemail">Email</label>
                @error('f')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
              <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">email</i>
                <input name="inppassword" id="inppassword" type="password" class="validate" required>
                <label for="inppassword">Password</label>
                @error('g')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
              <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">email</i>
                <input name="inpconfirm" id="inpconfirm" type="password" class="validate" required>
                <label for="inpconfirm">Confirm Password</label>
                @error('h')
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