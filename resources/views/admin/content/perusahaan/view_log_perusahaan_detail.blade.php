@extends('admin/index')

@section('content')
<div class="row">
    <div class="col s12">
      <div class="card">
        <a href="#modalpelamar" class="waves-effect waves-light btn gradient-45deg-light-blue-cyan gradient-shadow mt-2 modal-trigger">TAMBAH PELAMAR<i class="material-icons right">vpn_key</i></a>
        <div class="card-content">
          <div class="row">
            <div class="col s12">
              <table id="page-length-option" class="display">
                <thead>
                  <tr>
                    <th>NIK</th>
                    <th>Nama</th>
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
                @foreach($detpelamar as $pll)
                  <tr>
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
                      <a class="btn-floating modal-trigger waves-effect waves-light btn gradient-45deg-red-pink gradient-shadow" href="#modaldelete" onclick="deletedetail('{{ $pll->id_detlow }}', '{{ $pll->nama_pelamar }}', '{{ $pll->alamat_pelamar }}', '{{ $lowonganID }}', '{{ $perusahaanID }}')">
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
    <form method="post" action="/perusahaan/delete-data-detail-lowongan">
      @csrf
      <input type="hidden" id="iddetail" name="iddetail">
      <h5 id="shnama"></h5>
      <h6 id="shlengkap"></h6>
      <input type="hidden" id="idlowongan" name="idlowongan">
      <input type="hidden" id="idperusahaan" name="idperusahaan">
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
                <a href="/perusahaan/tambah-pelamar-lowongan/{{ $lowonganID }}/{{ $pl->id_pelamar }}/{{ $perusahaanID }}" class="btn-floating modal-trigger waves-effect waves-light btn gradient-45deg-green-teal gradient-shadow">
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
      <tfoot>
        <tr>
          <th>#</th>
          <th>NIK</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Tempat / Tanggal Lahir</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
@endsection

@section('customjs')
<script type="text/javascript">
function deletedetail($idlow, $namapl, $alamatpl, $idlowongan, $idperusahaan) {
    $('#iddetail').val($idlow);
    $('#shnama').html($namapl);
    $('#shlengkap').html($alamatpl);
    $('#idlowongan').val($idlowongan);
    $('#idperusahaan').val($idperusahaan);
}
</script>
@endsection
