@extends('admin/index')

@section('content')
<div class="row">
    <div class="col s12">
      <div class="card">
      <a href="/admin/halaman-tambah-role" class="waves-effect waves-light btn gradient-45deg-light-blue-cyan gradient-shadow mt-2">TAMBAH ROLE<i class="material-icons right">vpn_key</i></a>
        <div class="card-content">
          <div class="row">
            <div class="col s12">
              <table id="page-length-option" class="display">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>#</th>
                  </tr>
                </thead>
                <tbody>
                <?php $no = 1; ?>
                @foreach($role as $rl)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $rl->nama_role }}</td>
                    <td>{{ $rl->status_role }}</td>
                    <td>
                      <a class="btn-floating mb-1 btn-flat waves-effect waves-light gradient-45deg-light-blue-cyan gradient-shadow" href="/admin/halaman-edit-role/{{ $rl->id_role }}">
                        <i class="material-icons">build</i>
                      </a>
                      
                      @if ($rl->status_role == 'Active')
                        <a class="btn-floating mb-1 btn-flat waves-effect waves-light gradient-45deg-green-teal gradient-shadow" href="/admin/update-status-role/{{ $rl->id_role }}/Non-Active">
                          <i class="material-icons">autorenew</i>
                        </a>
                      @else ($rl->id_role == 'Non-Active')
                        <a class="btn-floating mb-1 btn-flat waves-effect waves-light gradient-45deg-green-teal gradient-shadow" href="/admin/update-status-role/{{ $rl->id_role }}/Active">
                          <i class="material-icons">autorenew</i>
                        </a>
                      @endif
                    </td>
                  </tr>
                @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>No.</th>
                    <th>Role</th>
                    <th>Status</th>
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