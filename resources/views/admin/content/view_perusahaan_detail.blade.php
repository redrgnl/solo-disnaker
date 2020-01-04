@extends('admin/index')

@section('content')
<div id="search-page" class="section">
  <div class="row">
    <div class="col s12">
          <div class="card z-depth-1">
            <a href="#modalgambar" class="waves-effect waves-light btn gradient-45deg-light-blue-cyan gradient-shadow mt-2 modal-trigger">TAMBAH GALLERY<i class="material-icons right">collections</i></a>
            <div class="card-content">
              <div class="row">
                <div class="col l8 m12">
                  <h6 class="mt-3">Gallery</h6>
                  <div class="row">
                    @foreach($gallery as $gll)
                    <div class="col s12 m6 grid" style="padding-left: 0px">
                      <figure class="effect-roxy popup-gallery">
                        <img src="{{ asset('perusahaan/gallery') }}/{{ $gll->nama_detgal }}" alt="{{ $gll->id_detgal }}" />
                        <figcaption>
                          <p>{!! Str::limit($gll->ket_detgal, 80, ' ...') !!}</p>
                          <a href="{{ asset('perusahaan/gallery') }}/{{ $gll->nama_detgal }}"></a>
                        </figcaption>
                      </figure>
                    </div>
                    @endforeach
                  </div>
                </div>
                <div class="col l4 m12 right-content border-radius-6">
                  <ul class="navbar-list right mt-0">               
                    <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light modal-trigger" href="#modalper"><i class="material-icons float-right">more_vert</i></a>
                    </li>
                  </ul>
                  <h5 class="mt-0">{{ $perusahaan->nama_perusahaan }}</h5>
                  <p>{{ $perusahaan->lengkap_perusahaan }}</p>
                  <?php if ($perusahaan->logo_perusahaan == '') { ?>
                    <img class="responsive-img mt-4 p-3 border-radius-6" src="{{ asset('admin/images/gallery/404_not_found_2x.png') }}" alt="">
                  <?php } else { ?>
                    <img class="responsive-img mt-4 p-3 border-radius-6" src="{{ asset('perusahaan') }}/{{ $perusahaan->logo_perusahaan }}" alt="">
                  <?php } ?>
                  <p class="mt-2 mb-2">{{ $perusahaan->alamat_perusahaan }}</p>
                  <hr>
                  <p class="mt-2"><b class="blue-grey-text text-darken-4">NPWP :</b> {{ $perusahaan->npwp_perusahaan }}</p>
                  <p class="mt-2"><b class="blue-grey-text text-darken-4">Telepon :</b> {{ $perusahaan->telp_perusahaan }}</p>
                  <p class="mt-2"><b class="blue-grey-text text-darken-4">Email :</b> {{ $perusahaan->email_perusahaan }}</p>
                  <br>
                  @if (Session::get('login-pr') == true)
                  <a class="btn-floating float-right btn-flat waves-effect waves-light gradient-45deg-light-blue-cyan gradient-shadow" href="/perusahaan/halaman-edit-perusahaan/{{ Session::get('iduser') }}" title="Edit Lowongan">
                    <i class="material-icons">build</i>
                  </a>
                  @endif
                </div>
              </div>
            </div>
          </div>
    </div>
  </div>
</div>

<div id="modalgambar" class="modal">
  <div class="modal-content">
    <h5>Form Tambah Gallery</h5>
    <form method="post" action="/admin/tambah-gallery" enctype="multipart/form-data">
      @csrf
      <input type="hidden" value="{{ $perusahaan->id_perusahaan }}" name="idper_gall">
      <input type="hidden" value="{{ $perusahaan->nama_perusahaan }}" name="nmper_gall">
      <div class="row">
        <div class="file-field input-field col s12">
          <div class="btn">
            <span>File</span>
            <input type="file" name="pict_gall">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="ket_gall" name="ket_gall" class="validate materialize-textarea" required></textarea>
          <label for="ket_gall">Keterangan</label>
        </div>
      </div>
      <button class="waves-effect waves-light btn right gradient-45deg-light-blue-cyan gradient-shadow" type="submit">
        <i class="material-icons right">collections</i> Simpan</button><br>
    </form>
  </div>
</div>

<div id="modalper" class="modal">
  <div class="modal-content">
    <h5>Logo Perusahaan</h5>
    <form method="post" action="/admin/ganti-profile-perusahaan" enctype="multipart/form-data">
      @csrf
      <input type="hidden" value="{{ $perusahaan->id_perusahaan }}" name="idper_corp">
      <input type="hidden" value="{{ $perusahaan->nama_perusahaan }}" name="nmper_corp">
      <div class="row">
        <div class="file-field input-field col s12">
          <div class="btn">
            <span>File</span>
            <input type="file" name="pict_corp">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" required>
          </div>
        </div>
      </div>
      <button class="waves-effect waves-light btn right gradient-45deg-light-blue-cyan gradient-shadow" type="submit">
        <i class="material-icons right">collections</i> Simpan</button><br>
    </form>
  </div>
</div>
@endsection

@section('customjs')

@endsection