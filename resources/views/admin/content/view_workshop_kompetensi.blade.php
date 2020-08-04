@extends('admin/index')

@section('content')
<div class="row">
    <div class="col s12">
      <div class="card">
        <a href="#modaladd" class="waves-effect waves-light btn gradient-45deg-light-blue-cyan gradient-shadow mt-2 modal-trigger">TAMBAH KOMPETENSI<i class="material-icons right">vpn_key</i></a>
        <div class="card-content">
          <div class="row">
            <div class="col s12">
              <table id="page-length-option" class="display">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Kompetensi</th>
                    <th>#</th>
                  </tr>
                </thead>
                <tbody>
                <?php $no = 1; ?>
                @foreach($kompetensi as $km)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $km->nama_kompetensi }}</td>
                    <td>
                        <a class="btn-floating modal-trigger btn-flat waves-effect waves-light gradient-45deg-light-blue-cyan gradient-shadow" href="#modaledit" onclick="editKomp('{{ $km->id_kompetensi }}', '{{ $km->nama_kompetensi }}')">
                            <i class="material-icons">build</i>
                        </a>
                        <a class="btn-floating modal-trigger waves-effect waves-light btn gradient-45deg-red-pink gradient-shadow" href="#modaldelete" onclick="deleteKomp('{{ $km->id_kompetensi }}', '{{ $km->nama_kompetensi }}')">
                            <i class="material-icons">delete_forever</i>
                        </a>
                    </td>
                  </tr>
                @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>No.</th>
                    <th>Kompetensi</th>
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

<div id="modaladd" class="modal">
    <div class="modal-content">
      <h5>Tambah Kompetensi Baru</h5>
      <form method="post" action="/admin/simpan-data-kompetensi">
        @csrf
            <div class="row">
                <div class="input-field col s12 m12 l12">
                    <i class="material-icons prefix">building</i>
                    <input name="inpkompetensi" id="inpkompetensi" type="text" class="validate" required>
                    <label for="inpkompetensi">Kompetensi *</label>
                </div>
            </div>
            <button class="waves-effect waves-light btn right gradient-45deg-light-blue-cyan gradient-shadow" type="submit"> <i class="material-icons right">send</i> Simpan</button>
            <br>
      </form>
    </div>
</div>

<div id="modaledit" class="modal">
    <div class="modal-content">
      <h5>Update Data Kompetensi</h5>
      <form method="post" action="/admin/update-data-kompetensi">
        @csrf
            <input type="hidden" id="edid" name="edid">
            <div class="row">
                <div class="input-field col s12 m12 l12">
                    <i class="material-icons prefix">building</i>
                    <input name="edkompetensi" id="edkompetensi" type="text" class="validate" required>
                    <label for="edkompetensi">Kompetensi *</label>
                </div>
            </div>
            <button class="waves-effect waves-light btn right gradient-45deg-light-blue-cyan gradient-shadow" type="submit"> <i class="material-icons right">send</i> Simpan</button>
            <br>
      </form>
    </div>
</div>

<div id="modaldelete" class="modal">
  <div class="modal-content">
    <h5>Hapus Data Pengguna</h5>
    <p>- Apakah Anda Yakin Akan Menghapus Data Ini?</p>
    <form method="post" action="/admin/delete-data-kompetensi">
      @csrf
      <input type="hidden" id="delid" name="delid">
      <h5 id="delnama"></h5>
      <br><hr>
      <button class="waves-effect waves-light btn right gradient-45deg-red-pink gradient-shadow" type="submit">
        <i class="material-icons right">delete_forever</i> Hapus</button>
        <br>
    </form>
  </div>
</div>

@endsection

@section('customjs')
<script type="text/javascript">
    function editKomp(id, nama) {
        $('#edid').val(id)
        $('#edkompetensi').val(nama)
    }
    function deleteKomp(id, nama) {
        $('#delid').val(id)
        $('#delnama').html(nama)
    }
</script>
@endsection
