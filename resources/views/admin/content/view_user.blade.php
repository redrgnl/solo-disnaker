@extends('admin/index')

@section('content')
<div class="row">
    <div class="col s12">
      <div class="card">
        <a href="/admin/halaman-tambah-pengguna-baru" class="waves-effect waves-light btn gradient-45deg-light-blue-cyan gradient-shadow mt-2">TAMBAH PENGGUNA<i class="material-icons right">vpn_key</i></a>
        <div class="card-content">
          <div class="row">
            <div class="col s12">
              <table id="page-length-option" class="display">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Pengguna</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>#</th>
                  </tr>
                </thead>
                <tbody>
                <?php $no = 1; ?>
                @foreach($user as $usr)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $usr->nama_user }}</td>
                    <td>{{ $usr->username_user }}</td>
                    <td>{{ $usr->email_user }}</td>
                    <td>{{ $usr->nama_role }}</td>
                    <td>
                      <a class="btn-floating mb-1 btn-flat waves-effect waves-light gradient-45deg-light-blue-cyan gradient-shadow" href="/admin/halaman-edit-pengguna/{{ $usr->id_user }}">
                        <i class="material-icons">build</i>
                      </a>
                        
                      <a class="btn-floating modal-trigger waves-effect waves-light btn gradient-45deg-red-pink gradient-shadow" href="#modal{{ $usr->id_user }}">
                        <i class="material-icons">delete_forever</i>
                      </a>
                      
                      <div id="modal{{ $usr->id_user }}" class="modal">
                        <div class="modal-content">
                          <h5>Hapus Data Pengguna</h5>
                          <p>- Apakah Anda Yakin Akan Menghapus Data Ini?</p><br>
                          <h5> &ensp; {{ $usr->nama_user }} - {{ $usr->nama_role }}</h5><br>
                          <hr>
                          <a href="/admin/delete-data-pengguna/{{ $usr->id_user }}" class="waves-effect waves-light btn right gradient-45deg-red-pink gradient-shadow"><i class="material-icons right">delete_forever</i> Hapus</a><br>
                        </div>
                      </div>                      
                    </td>
                  </tr>
                @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>No.</th>
                    <th>Nama Pengguna</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
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
@endsection

@section('customjs')

@endsection