@extends('admin/index')

@section('content')
<div class="row">
    <div class="col s12">
      <div class="card">
        <?php if ($endworkshop <= date('Y-m-d')) { ?>
          <a class="waves-effect waves-light btn gradient-45deg-red-pink gradient-shadow mt-2 ">PENDAFTARAN DITUTUP<i class="material-icons right">cloud_off</i></a>
        <?php } else { ?>
          <a href="#modalpelamar" class="waves-effect waves-light btn gradient-45deg-light-blue-cyan gradient-shadow mt-2 modal-trigger">TAMBAH PESERTA<i class="material-icons right">vpn_key</i></a>
        <?php } ?>
        <div class="card-content">
          <div class="row">
            <div class="col s8 l8 xl8">
              <table id="page-length-option" class="display">
                <thead>
                  <tr>
                    <th>Keterangan</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <?php if ($detpelamar->count() == 0) { } else { ?>
                    <th>Alamat</th>
                    <th>Gender</th>
                    <th>Tempat / Tanggal Lahir</th>
                    <th>Agama</th>
                    <th>Status</th>
                    <th>Tinggi Badan</th>
                    <th>Berat Badan</th>
                    <th>Telepon</th>
                    <th>Email</th>
                    <th>#</th>
                    <?php }  ?>
                  </tr>
                </thead>
                <tbody>
                @foreach($detpelamar as $pll)
                  <tr>
                    @if($pll->status_detwork == 1)<td><a style="color: green; font-weight: bold">Approved</a></td> @else <td><a style="color: red; font-weight: bold">Tunda</a></td> @endif
                    <td>{{ $pll->nik_pelamar }}</td>
                    <td>{{ $pll->nama_pelamar }}</td>
                    <td>
                        <a class="truncate" title="{{ $pll->alamat_pelamar }}">{!! Str::limit($pll->alamat_pelamar, 120, ' ...') !!}</a>
                    </td>
                    @if($pll->kelamin_pelamar == 'L') <td>Laki-Laki</td> @else <td>Perempuan</td>@endif
                    <td>{{ $pll->tplahir_pelamar }} / {{ $pll->tglahir_pelamar }}</td>
                    <td>{{ $pll->agama_pelamar }}</td>
                    @if($pll->status_pelamar == 'BN')<td>Belum Nikah</td> @else <td>Sudah Nikah</td>@endif
                    <td>{{ $pll->tinggi_pelamar }} Cm</td>
                    <td>{{ $pll->berat_pelamar }} Kg</td>
                    <td>{{ $pll->telp_pelamar }}</td>
                    <td>{{ $pll->email_pelamar }}</td>
                    <td>
                      @if($pll->status_detwork == 0)
                      <a class="btn-floating waves-effect waves-light btn gradient-45deg-green-teal gradient-shadow" title="Approve Peserta" href="/admin/approve-data-workshop/{{ $pll->id_detwork }}/{{ $workshopID }}">
                        <i class="material-icons">verified_user</i>
                      </a>
                      @endif
                      <a class="btn-floating modal-trigger waves-effect waves-light btn gradient-45deg-red-pink gradient-shadow" href="#modaldelete" onclick="deletedetail('{{ $pll->id_detwork }}', '{{ $pll->nama_pelamar }}', '{{ $pll->alamat_pelamar }}', '{{ $workshopID }}')">
                        <i class="material-icons">delete_forever</i>
                      </a>
                    </td>
                  </tr>
                @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>Keterangan</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <?php if ($detpelamar->count() == 0) { } else { ?>
                    <th>Alamat</th>
                    <th>Gender</th>
                    <th>Tempat / Tanggal Lahir</th>
                    <th>Agama</th>
                    <th>Status</th>
                    <th>Tinggi Badan</th>
                    <th>Berat Badan</th>
                    <th>Telepon</th>
                    <th>Email</th>
                    <th>#</th>
                    <?php } ?>
                  </tr>
                </tfoot>
              </table>
            </div>
            <div class="col s4 l4 right-content border-radius-6">
              <ul class="navbar-list right mt-0">
                <li class="hide-on-med-and-down">
                  <a class="waves-effect waves-block waves-light modal-trigger" href="#modallog">
                    <i class="material-icons float-right">more_vert</i>
                  </a>
                </li>
              </ul>
              <h5 class="mt-0">Banner / Logo</h5>
              <p></p>
              <?php if ($datworkshop->poster_workshop == '') { ?>
                <img class="responsive-img mt-4 p-3 border-radius-6" src="{{ asset('admin/images/gallery/404_not_found_2x.png') }}" alt="">
              <?php } else { ?>
                <img class="responsive-img mt-4 p-3 border-radius-6" src="{{ asset('workshop') }}/{{ $datworkshop->poster_workshop }}" alt="">
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<div id="modaldelete" class="modal">
  <div class="modal-content">
    <h5>Hapus Data Pengguna</h5>
    <p>- Apakah Anda Yakin Akan Menghapus Data Ini?</p>
    <form method="post" action="/admin/delete-data-detail-workshop">
      @csrf
      <input type="hidden" id="iddetail" name="iddetail">
      <input type="hidden" id="idworkshop" name="idworkshop">
      <h5 id="shnama"></h5>
      <h6 id="shlengkap"></h6>
      <br><hr>
      <button class="waves-effect waves-light btn right gradient-45deg-red-pink gradient-shadow" type="submit">
        <i class="material-icons right">delete_forever</i> Hapus</button><br>
    </form>
  </div>
</div>

<div id="modalpelamar" class="modal">
  <div class="modal-content">
    <table id="page-length-option" class="display">
      <thead>
        <tr>
          <th>#</th>
          <th>NIK</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Tempat / Tanggal Lahir</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; ?>
        @foreach($pelamar as $pl)
          <tr>
            <td>
                <a href="/admin/tambah-detail-workshop/{{ $pl->id_pelamar }}/{{ $workshopID }}" class="btn-floating modal-trigger waves-effect waves-light btn gradient-45deg-green-teal gradient-shadow">
                  <i class="material-icons">add_circle_outline</i>
                </a>
            </td>
            <td>{{ $pl->nik_pelamar }}</td>
            <td>{{ $pl->nama_pelamar }}</td>
            <td>
              <a class="truncate" title="{{ $pl->alamat_pelamar }}">{!! Str::limit($pl->alamat_pelamar, 120, ' ...') !!}</a>
            </td>
            <td>{{ $pl->tplahir_pelamar }} / {{ $pl->tglahir_pelamar }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<div id="modallog" class="modal">
  <div class="modal-content">
    <h5>Logo Pelatihan</h5>
    <form method="post" action="/admin/ganti-profile-workshop" enctype="multipart/form-data">
      @csrf
      <input type="hidden" value="{{ $datworkshop->id_workshop }}" name="id_work">
      <input type="hidden" value="{{ $datworkshop->nama_workshop }}" name="nm_work">
      <div class="row">
        <div class="file-field input-field col s12">
          <div class="btn">
            <span>File</span>
            <input type="file" name="pict_work">
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
<script type="text/javascript">
function deletedetail($iddetwork, $namapl, $alamatpl, $idwork) {
    $('#iddetail').val($iddetwork);
    $('#shnama').html($namapl);
    $('#shlengkap').html($alamatpl);
    $('#idworkshop').val($idwork);
}
</script>
@endsection
