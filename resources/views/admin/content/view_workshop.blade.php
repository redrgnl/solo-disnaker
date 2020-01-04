@extends('admin/index')

@section('content')
<div class="row">
    <div class="col s12">
      <div class="card">
        <a href="/admin/halaman-tambah-workshop" class="waves-effect waves-light btn gradient-45deg-light-blue-cyan gradient-shadow mt-2">TAMBAH PELATIHAN<i class="material-icons right">vpn_key</i></a>
        <div class="card-content">
          <div class="row">
            <div class="col s12">
              <table id="page-length-option" class="display">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Pelatihan</th>
                    <th>Lokasi</th>
                    <th>Tanggal</th>
                    <th>Kuota</th>
                    <th>Status</th>
                    <th>Pendaftaran</th>
                    <th>Kategori</th>
                    <th>#</th>
                  </tr>
                </thead>
                <tbody>
                <?php $no = 1; ?>
                @foreach($workshop as $wr)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $wr->nama_workshop }}</td>
                    <td>
                        <a class="truncate modal-trigger" title="{{ $wr->lokasi_workshop }}" onclick="return popup('{{ $wr->maps_workshop }}')" href="#">{!! Str::limit($wr->lokasi_workshop, 100, ' ...') !!}</a>
                    </td>
                    <td>{{ date("j F Y", strtotime($wr->tanggal_workshop)) }}</td>
                    <td>{{ $wr->kuota_workshop }} Peserta</td>
                    <td><?php if ($wr->end_workshop <= date('Y-m-d')) { echo "Non-Active"; } else { echo "Active"; } ?></td>
                    <td>{{ date("j F Y", strtotime($wr->str_workshop)) }} - {{ date("j F Y", strtotime($wr->end_workshop)) }}</td>
                    <td>{{ $wr->kategori_workshop }}</td>
                    <td>
                        <a class="btn-floating btn-flat waves-effect waves-light gradient-45deg-green-teal gradient-shadow" href="/admin/halaman-detail-workshop/{{ $wr->id_workshop }}">
                            <i class="material-icons">help_outline</i>
                        </a>
                        
                        <a class="btn-floating btn-flat waves-effect waves-light gradient-45deg-light-blue-cyan gradient-shadow" href="/admin/halaman-edit-workshop/{{ $wr->id_workshop }}">
                            <i class="material-icons">build</i>
                        </a>
                        
                        <a class="btn-floating modal-trigger waves-effect waves-light btn gradient-45deg-red-pink gradient-shadow" href="#modaldelete" onclick="deleteworkshop('{{ $wr->id_workshop }}', '{{ $wr->nama_workshop }}', '{{ $wr->lokasi_workshop }}')">
                            <i class="material-icons">delete_forever</i>
                        </a>
                    </td>
                  </tr>
                @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>No.</th>
                    <th>Pelatihan</th>
                    <th>Lokasi</th>
                    <th>Tanggal</th>
                    <th>Kuota</th>
                    <th>Status</th>
                    <th>Pendaftaran</th>
                    <th>Kategori</th>
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
    <form method="post" action="/admin/delete-data-workshop">
      @csrf
      <input type="hidden" id="idworkshop" name="idworkshop">
      <h5 id="shnama"></h5>
      <h6 id="shlengkap"></h6>
      <br><hr>
      <button class="waves-effect waves-light btn right gradient-45deg-red-pink gradient-shadow" type="submit">
        <i class="material-icons right">delete_forever</i> Hapus</button><br>
    </form>
  </div>
</div> 

@endsection

@section('customjs')
<script type="text/javascript">
function deleteworkshop($idwork, $namawork, $lokwork) {
    $('#idworkshop').val($idwork);
    $('#shnama').html($namawork);
    $('#shlengkap').html($lokwork);
}
function popup(url) {
  newwindow = window.open(url,'name','height=500,width=1050');
  if (window.focus) { newwindow.focus() }
  return false;
}
</script>
@endsection