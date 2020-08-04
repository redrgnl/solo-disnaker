@extends('admin/index')

@section('content')
<style>
    .dsply-none {
        display: none;
    }
</style>
<div class="row">
  <a href="/admin/halaman-tambah-lowongan" class="waves-effect waves-light btn gradient-45deg-light-blue-cyan gradient-shadow mt-2">TAMBAH LOWONGAN<i class="material-icons right">vpn_key</i></a>
  <div class="col s12">
     <div id="profile-card" class="card" style="overflow: hidden;">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="{{ asset('admin/images/gallery/breadcrumb-bg.jpg') }}" alt="user bg">
        </div>
        <div class="card-content">
           <h5 class="card-title activator grey-text text-darken-4">Filter Lowongan</h5>
           <a class="btn-floating activator btn-move-up waves-effect waves-light blue accent-2 z-depth-4 right">
              <i class="material-icons">domain</i>
           </a>
        </div>
        <div class="card-reveal" style="display: none; transform: translateY(0%);">
           <span class="card-title grey-text text-darken-4">Filter Lowongan <i class="material-icons right">close</i>
           </span>
           <div class="row">
              <div class="input-field col l2"><label style="color: blue; font-weight: bold">Jabatan</label></div>
              <div class="input-field col l10">
                <select class="browser-default" name="FilterSktr" id="searchByJabatan">
                  <option value="">Pilih Jabatan</option>
                  @if(!empty($jabatan))
                  @foreach($jabatan as $s)
                  <option value="{{ $s->nama_jabatan }}">{{ $s->nama_jabatan }}</option>
                  @endforeach
                  @endif
                </select>
              </div>
            </div>
            <div class="row">
              <div class="input-field col l2"><label style="color: blue; font-weight: bold">Tingkat Pendidikan</label></div>
              <div class="input-field col l10">
                <select class="browser-default" name="FilterSktr" id="searchByPdd">
                  <option value="">Pilih Tingkat Pendidikan</option>
                  @if(!empty($tingkatPdd))
                  @foreach($tingkatPdd as $s)
                  <option value="{{ $s->jenis_tingkatpdd }}">{{ $s->jenis_tingkatpdd }}</option>
                  @endforeach
                  @endif
                </select>
              </div>
            </div>
            <div class="row">
              <div class="input-field col l2"><label style="color: blue; font-weight: bold">Lapangan Usaha</label></div>
              <div class="input-field col l10">
                <select class="browser-default" name="FilterSktr" id="searchByLu">
                  <option value="">Pilih Lapangan Usaha</option>
                  @if(!empty($lu))
                  @foreach($lu as $s)
                  <option value="{{ $s->nama_perusahaan }}">{{ $s->nama_perusahaan }}</option>
                  @endforeach
                  @endif
                </select>
              </div>
            </div>
            <div class="row">
              <div class="input-field col l2"><label style="color: blue; font-weight: bold">Sistem Pengupahan</label></div>
              <div class="input-field col l10">
                <select class="browser-default" name="FilterSktr" id="searchBySp">
                  <option value="">Pilih Sistem Pengupahan</option>
                  <option value="BORONGAN">BORONGAN</option>
                  <option value="HARIAN">HARIAN</option>
                  <option value="MINGGUAN">MINGGUAN</option>
                  <option value="BULANAN">BULANAN</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="input-field col l2"><label style="color: blue; font-weight: bold">Status Hubungan Kerja</label></div>
              <div class="input-field col l10">
                <select class="browser-default" name="FilterSktr" id="searchByShk">
                  <option value="">Pilih Status Hubungan Kerja</option>
                  <option value="IYA">WAKTU TERTENTU</option>
                  <option value="TIDAK">WAKTU TIDAK TERTENTU</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="input-field col l2"><label style="color: blue; font-weight: bold">Lokasi Perusahaan</label></div>
              <div class="input-field col l10">
                <select class="browser-default" name="FilterLks" id="searchByLks" onchange="appkec()">
                  <option value="">Pilih Lokasi Perusahaan</option>
                  <option value="">Luar Kota</option>
                  <option value="KOTA SURAKARTA">Dalam Kota</option>
                </select>
              </div>
            </div>
            <div class="row dsply-none" id="row_kec">
              <div class="input-field col l2"><label style="color: blue; font-weight: bold">Dalam Kota</label></div>
              <div class="input-field col l10">
                <select class="browser-default" name="FilterKec" id="searchByKec">
                  <option value="">Pilih Kecamatan</option>
                  @foreach($kecamatan as $kcc)
                  <option value="{{ $kcc->name }}">{{ $kcc->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
        </div>
     </div>
  </div>
  <div class="col s12">
    <div class="card">
      <div class="card-content">
        <div class="row">
          <div class="col s12">
            <table id="page-length-option" class="display">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Perusahaan</th>
                  <th>Posisi</th>
                  <th>Status</th>
                  <th>Gaji</th>
                  <th>Tingkat Pendidikan</th>
                  <th>Hubungan Kerja</th>
                  <th>Sistem Pengupahan</th>
                  <th>Pengalaman</th>
                  <th>Provinsi</th>
                  <th>Kabupaten</th>
                  <th>Kecamatan</th>
                  <th>Deskripsi</th>
                  <th>#</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; ?>
                @foreach($lowongan as $act)

                <tr>
                  <td>{{ $no++ }}</td>
                  <td>
                      <a href="/admin/halaman-detail-perusahaan/{{ $act->id_perusahaan }}">
                        {{ $act->nama_perusahaan }}
                      </a>
                  </td>
                  <td>{{ $act->posisi_lowongan }}</td>
                  <td>{{ $act->status_lowongan }}</td>
                  <td>Rp. {{ number_format($act->gaji_lowongan) }}</td>
                  <td>
                    <a class="truncate" title="{{ $act->jenis_tingkatpdd }}">{!! Str::limit($act->jenis_tingkatpdd, 120, ' ...') !!}</a>
                  </td>
                  <td>
                    <?php if ($act->status_hubungan_kerja == 'WAKTU TIDAK TERTENTU') {
                      $shk = "<label style='display: none;'>TIDAK</label>WAKTU TIDAK TERTENTU";
                    } else {
                      $shk = "<label style='display: none;'>IYA</label>WAKTU TERTENTU";
                    } ?>
                    <a class="truncate" title="{{ $shk }}">{!! Str::limit($shk, 120, ' ...') !!}</a>
                  </td>
                  <td>
                    <a class="truncate" title="{{ $act->sistem_pengupahan_gaji }}">{!! Str::limit($act->sistem_pengupahan_gaji, 120, ' ...') !!}</a>
                  </td>
                  <td>
                    <a class="truncate" title="{{ $act->pengalaman_lowongan }}">{!! Str::limit($act->pengalaman_lowongan, 120, ' ...') !!}</a>
                  </td>
                  <td>{{ $act->provname }}</td>
                  <td>{{ $act->kotaname }}</td>
                  <td>{{ $act->kecname }}</td>
                  <td>
                    <a class="truncate" title="{{ $act->desk_lowongan }}">{!! Str::limit($act->desk_lowongan, 120, ' ...') !!}</a>
                  </td>
                  <td>
                    <a class="btn-floating btn-flat waves-effect waves-light gradient-45deg-green-teal gradient-shadow" href="/admin/halaman-detail-lowongan/{{ $act->id_lowongan }}/{{ $act->id_perusahaan }}" title="Detail Lowongan">
                      <i class="material-icons">help_outline</i>
                    </a>

                    <a class="btn-floating btn-flat waves-effect waves-light gradient-45deg-light-blue-cyan gradient-shadow" href="/admin/halaman-edit-lowongan/{{ $act->id_lowongan }}" title="Edit Lowongan">
                      <i class="material-icons">build</i>
                    </a>

                    <a class="btn-floating modal-trigger waves-effect waves-light btn gradient-45deg-red-pink gradient-shadow" href="#modaldelete" onclick="deletelowongan('{{ $act->id_lowongan }}', '{{ $act->nama_perusahaan }}', '{{ $act->posisi_lowongan }}')" title="Delete Lowongan">
                      <i class="material-icons">delete_forever</i>
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Perusahaan</th>
                  <th>Posisi</th>
                  <th>Status</th>
                  <th>Gaji</th>
                  <th>Tingkat Pendidikan</th>
                  <th>Hubungan Kerja</th>
                  <th>Sistem Pengupahan</th>
                  <th>Pengalaman</th>
                  <th>Provinsi</th>
                  <th>Kabupaten</th>
                  <th>Kecamatan</th>
                  <th>Deskripsi</th>
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
    <form method="post" action="/admin/delete-data-lowongan">
      @csrf
      <input type="hidden" id="idlowongan" name="idlowongan">
      <h5 id="shnama"></h5>
      <h6 id="shlengkap"></h6>
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
  function deletelowongan($idlow, $namaper, $poslow) {
    $('#idlowongan').val($idlow);
    $('#shnama').html($namaper);
    $('#shlengkap').html($poslow);
  }
</script>
<script>
  $('#searchByJabatan').on('change', function() {
    var table = $('#page-length-option').DataTable();
    table.column(2).
    search($(this).val()).draw();
  });
  $('#searchByPdd').on('change', function() {
    var table = $('#page-length-option').DataTable();
    table.column(5).
    search($(this).val()).draw();
  });
  $('#searchByLoPrshn').on('change', function() {
    var table = $('#page-length-option').DataTable();
    table.column(2).
    search($(this).val()).draw();
  });
  $('#searchByLu').on('change', function() {
    var table = $('#page-length-option').DataTable();
    table.column(1).
    search($(this).val()).draw();
  });
  $('#searchBySp').on('change', function() {
    var table = $('#page-length-option').DataTable();
    table.column(7).
    search($(this).val()).draw();
  });
  $('#searchByShk').on('change', function() {
    var table = $('#page-length-option').DataTable();
    table.column(6).
    search($(this).val()).draw();
  });
  $('#searchByLks').on('change', function() {
    var table = $('#page-length-option').DataTable();
    table.column(10).
    search($(this).val()).draw();
  });
  $('#searchByKec').on('change', function() {
    var table = $('#page-length-option').DataTable();
    table.column(10).
    search($(this).val()).draw();
  });
  function appkec() {
      if ($('#searchByLks').val() == 'KOTA SURAKARTA') {
          $('#row_kec').removeClass('dsply-none')
      } else {
          $('#row_kec').addClass('dsply-none')
      }
  }
</script>
@endsection