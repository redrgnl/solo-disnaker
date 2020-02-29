@extends('admin/index')

@section('content')
<div class="row">
  <div class="col s12">
    <div class="card">
      <a href="/admin/halaman-tambah-pelamar" class="waves-effect waves-light btn gradient-45deg-light-blue-cyan gradient-shadow mt-2">TAMBAH PELAMAR REGULAR<i class="material-icons right">vpn_key</i></a>
      
      <a href="/admin/halaman-tambah-pelamar-pelaku-usaha" class="waves-effect waves-light btn gradient-45deg-light-blue-cyan gradient-shadow mt-2">TAMBAH PELAMAR PELAKU USAHA<i class="material-icons right">vpn_key</i></a>
<div class="card-content">
        <div class="row">
          <div class="col s12">
            <table id="page-length-option" class="display">
              <thead>
                <tr>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Jenis</th>
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
                </tr>
              </thead>
              <tbody>
                @foreach($pelamar as $pl)
                <tr>
                  <td>{{ $pl->nik_pelamar }}</td>
                  <td>{{ $pl->nama_pelamar }}</td>
                  <td>{{ $pl->tipe_pelamar }}</td>

                  <td>
                    <a class="truncate" title="{{ $pl->alamat_pelamar }}">{!! Str::limit($pl->alamat_pelamar, 120, ' ...') !!}</a>
                  </td>
                  @if($pl->kelamin_pelamar == 'L') <td>Laki-Laki</td> @else <td>Perempuan</td>@endif
                  <td>{{ $pl->tplahir_pelamar }} / {{ $pl->tglahir_pelamar }}</td>
                  <td>{{ $pl->agama_pelamar }}</td>
                  @if($pl->status_pelamar == 'BN')<td>Belum Nikah</td> @else <td>Sudah Nikah</td>@endif
                  <td>{{ $pl->tinggi_pelamar }} Cm</td>
                  <td>{{ $pl->berat_pelamar }} Kg</td>
                  <td>{{ $pl->telp_pelamar }}</td>
                  <td>{{ $pl->email_pelamar }}</td>
                  <td>
                    <a class="btn-floating btn-flat waves-effect waves-light gradient-45deg-light-blue-cyan gradient-shadow" href="/admin/halaman-edit-pelamar/{{ $pl->id_pelamar }}">
                      <i class="material-icons">build</i>
                    </a>

                    <a class="btn-floating btn-flat waves-effect waves-light gradient-45deg-green-teal gradient-shadow" href="/admin/riwayat-lamaran/{{ $pl->id_pelamar }}">
                      <i class="material-icons">access_time</i>
                    </a>

                    <a class="btn-floating modal-trigger waves-effect waves-light btn gradient-45deg-red-pink gradient-shadow" href="#modaldelete" onclick="deletepelamar('{{ $pl->id_pelamar }}', '{{ $pl->nama_pelamar }}', '{{ $pl->alamat_pelamar }}')">
                      <i class="material-icons">delete_forever</i>
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Jenis</th>
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
                </tr>
              </tfoot>
            </table>
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
    <form method="post" action="/admin/delete-data-pelamar">
      @csrf
      <input type="hidden" id="idpelamar" name="idpelamar">
      <h5 id="shnama"></h5>
      <h6 id="shalamat"></h6>
      <br>
      <hr>
      <button class="waves-effect waves-light btn right gradient-45deg-red-pink gradient-shadow" type="submit">
        <i class="material-icons right">delete_forever</i> Hapus</button><br>
    </form>
  </div>
</div>
@endsection

@section('customjs')
<script type="text/javascript">
  function deletepelamar($idpl, $nmpl, $almpl) {
    $('#idpelamar').val($idpl);
    $('#shnama').html($nmpl);
    $('#shalamat').html($almpl);
  }
</script>
@endsection