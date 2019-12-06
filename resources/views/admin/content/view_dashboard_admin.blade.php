@extends('/admin/index')

@section('content')
<div class="row">
    <div class="col s12 m12 l12">
      <div id="ui-alert" class="card card-default">
        <div class="card-content">
          <div class="row">
            <!--WITH ICON-->
            <div class="col s12 m4 l4">
              <p>
                <strong>Selamat Datang!</strong>
              </p>
              <p>Dinas Tenaga Kerja Kota Solo</p>
              <div class="card-alert card gradient-45deg-light-blue-cyan">
                <div class="card-content white-text">
                  <p>
                    <i class="material-icons">info_outline</i> {{ Session::get('namauser') }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('customjs')

@endsection