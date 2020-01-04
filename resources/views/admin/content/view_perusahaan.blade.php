@extends('admin/index')

@section('content')
<div class="row">
    <div class="col s12">
      <div class="card">
      <a href="/admin/halaman-tambah-perusahaan" class="waves-effect waves-light btn gradient-45deg-light-blue-cyan gradient-shadow mt-2">TAMBAH PERUSAHAAN<i class="material-icons right">vpn_key</i></a>
        <div class="card-content">
          <div class="row">
            <div class="col s12">
              <table id="page-length-option" class="display">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Perusahaan</th>
                    <th>NPWP</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Email</th>
                    <th>#</th>
                  </tr>
                </thead>
                <tbody>
                <?php $no = 1; ?>
                @foreach($perusahaan as $pr)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $pr->nama_perusahaan }}</td>
                    <td>{{ $pr->lengkap_perusahaan }}</td>
                    <td>{{ $pr->npwp_perusahaan }}</td>
                    <td>
                        <a class="truncate" title="{{ $pr->alamat_perusahaan }}">{!! Str::limit($pr->alamat_perusahaan, 120, ' ...') !!}</a>
                    </td>
                    <td>{{ $pr->telp_perusahaan }}</td>
                    <td>{{ $pr->email_perusahaan }}</td>
                    <td>
                        <a class="btn-floating btn-flat waves-effect waves-light gradient-45deg-green-teal gradient-shadow" href="/admin/halaman-detail-perusahaan/{{ $pr->id_perusahaan }}">
                            <i class="material-icons">help_outline</i>
                        </a>
                        
                        <a class="btn-floating btn-flat waves-effect waves-light gradient-45deg-light-blue-cyan gradient-shadow" href="/admin/halaman-edit-perusahaan/{{ $pr->id_perusahaan }}">
                            <i class="material-icons">build</i>
                        </a>
                        
                        <a class="btn-floating modal-trigger waves-effect waves-light btn gradient-45deg-red-pink gradient-shadow" href="#modaldelete" onclick="deleteperusahaan('{{ $pr->id_perusahaan }}', '{{ $pr->nama_perusahaan }}', '{{ $pr->lengkap_perusahaan }}')">
                            <i class="material-icons">delete_forever</i>
                        </a>
                    </td>
                  </tr>
                @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Perusahaan</th>
                    <th>NPWP</th>
                    <th>Alamat</th>
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
    <form method="post" action="/admin/delete-data-perusahaan">
      @csrf
      <input type="hidden" id="idperusahaan" name="idperusahaan">
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
function deleteperusahaan($idper, $namaper, $lengkapper) {
    $('#idperusahaan').val($idper);
    $('#shnama').html($namaper);
    $('#shlengkap').html($lengkapper);
}
</script>
@endsection