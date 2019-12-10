@extends('admin/index')

@section('content')
<div class="row">
    <div class="col s12">
      <div class="card">
        <a href="/perusahaan/halaman-tambah-lowongan" class="waves-effect waves-light btn gradient-45deg-light-blue-cyan gradient-shadow mt-2">TAMBAH LOWONGAN<i class="material-icons right">vpn_key</i></a>
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
                          <th>Pengalaman</th>
                          <th>Deskripsi</th>
                          <th>#</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 1; ?>
                        @foreach($lowongan as $act)
                          <tr>
                            <td>{{ $no++ }}</td>  
                            <td>{{ $act->nama_perusahaan }}</td>  
                            <td>{{ $act->posisi_lowongan }}</td>  
                            <td>{{ $act->status_lowongan }}</td>  
                            <td>Rp. {{ number_format($act->gaji_lowongan) }}</td>  
                            <td>
                                <a class="truncate" title="{{ $act->pengalaman_lowongan }}">{!! Str::limit($act->pengalaman_lowongan, 120, ' ...') !!}</a>
                            </td>  
                            <td>
                                <a class="truncate" title="{{ $act->desk_lowongan }}">{!! Str::limit($act->desk_lowongan, 120, ' ...') !!}</a>
                            </td>  
                            <td>
                              <a class="btn-floating btn-flat waves-effect waves-light gradient-45deg-green-teal gradient-shadow" href="/perusahaan/halaman-detail-lowongan/{{ $act->id_lowongan }}/{{ $act->id_perusahaan }}" title="Detail Lowongan">
                                <i class="material-icons">help_outline</i>
                              </a>
                            
                              <a class="btn-floating btn-flat waves-effect waves-light gradient-45deg-light-blue-cyan gradient-shadow" href="/perusahaan/halaman-edit-lowongan/{{ $act->id_lowongan }}" title="Edit Lowongan">
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
                          <th>Pengalaman</th>
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
    <form method="post" action="/perusahaan/delete-data-lowongan">
      @csrf
      <input type="hidden" id="idlowongan" name="idlowongan">
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
function deletelowongan($idlow, $namaper, $poslow) {
    $('#idlowongan').val($idlow);
    $('#shnama').html($namaper);
    $('#shlengkap').html($poslow);
}
</script>
@endsection