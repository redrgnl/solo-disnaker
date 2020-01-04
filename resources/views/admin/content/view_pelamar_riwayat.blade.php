@extends('admin/index')

@section('content')
<div class="row">
    <div class="col s12">
      <div id="validation" class="card card card-default scrollspy">
        <div class="card-content">
            <h4 class="card-title">Riwayat Pelatihan - <span style="font-weight: bold; font-size: 22px; color: #091a99">{{ $pelamar->nama_pelamar }}</span></h4>
          <div class="row">
            <div class="col s12">
              <table id="page-length-option" class="display">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Lokasi</th>
                    <th>Tanggal</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($riwayat as $rw)
                  <tr>
                    <td>{{ $rw->nama_workshop }}</td>
                    <td>{{ $rw->lokasi_workshop }}</td>
                    <td>{{ $rw->tanggal_workshop }}</td>
                  </tr>
                @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>Nama</th>
                    <th>Lokasi</th>
                    <th>Tanggal</th>
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