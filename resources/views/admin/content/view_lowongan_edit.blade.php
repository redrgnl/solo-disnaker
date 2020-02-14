@extends('admin/index')

@section('content')
<div class="row">
    <div class="col s12">
      <div id="validation" class="card card card-default scrollspy">
        <div class="card-content">
          <h4 class="card-title">Form Data Lowongan</h4>
          <form class="col s12" method="post" action="/admin/update-data-lowongan">
            @csrf
            <input type="hidden" name="inpid" id="inpid" value="{{ $lowongan->id_lowongan }}">
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">domain</i>
                <select class="js-example-basic-single" name="a" id="inpperusahaan" >
                  <option value="">- Pilih Perusahaan -</option>
                  @foreach($perusahaan as $pr)
                    <?php if ($pr->id_perusahaan == $lowongan->id_perusahaan){ $selected = "selected"; }else{ $selected = ""; }?>
                    <option value="{{ $pr->id_perusahaan }}" <?php echo $selected ?>>{{ $pr->nama_perusahaan }}</option>
                  @endforeach
                </select>
                <label for="a">Perusahaan</label>
                @error('a')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">work</i>
                <!-- <input name="b" id="inpposisi" type="text" class="validate" > -->
                <select class="" name="b" id="inpposisi" >
                  <option value="">- Jabatan -</option>
                  @foreach($jabatan as $j)

                  <option value="{{ $j->nama_jabatan }}" <?php if($j->nama_jabatan == $lowongan->posisi_lowongan){echo "selected";} ?> >{{ $j->nama_jabatan }}</option>


                  @endforeach
                </select>
                <label for="b">Jabatan</label>
                @error('b')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <i class="material-icons prefix">history</i>
                <select class="js-example-basic-single" name="c" id="inpstatus" >
                  <option value="">- Status -</option>
                  <option value="Active" <?php if ($lowongan->status_lowongan == "Active"){ echo "selected"; }?>>Buka</option>
                  <option value="Non-Active" <?php if ($lowongan->status_lowongan == "Non-Active"){ echo "selected"; }?>>Tutup</option>
                </select>
                <label for="c">Status</label>
                @error('c')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
              <div class="input-field col s6">
                <i class="material-icons prefix">chrome_reader_mode</i>
                <select class="" name="cc" id="inpkompetensi" >
                  <option value="">- Jenis Kompetensi -</option>
                  <option value="Kompetensi Jabatan" <?php if($lowongan->jenis_kompetensi_lowongan == "Kompetensi Jabatan"){echo "selected";} ?> >Kompetensi Jabatan</option>
                </select>
                <label for="c">Jenis Kompetensi</label>
                @error('c')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">attach_money</i>
                <input name="d" id="inpgaji" type="number" class="validate"  value="{{ $lowongan->gaji_lowongan }}">
                <label for="d">Gaji</label>
                @error('d')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">airplanemode_active</i>
                <textarea name="e" id="inppengalaman" type="text" class="validate materialize-textarea" >{{ $lowongan->pengalaman_lowongan }}</textarea>
                <label for="e">Pengalaman Kerja</label>
                @error('e')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">comment</i>
                <textarea name="f" id="inpdeskripsi" type="text" class="validate materialize-textarea" >{{ $lowongan->desk_lowongan }}</textarea>
                <label for="f">Deskripsi</label>
                @error('f')
                    <span class="helper-text" data-error="wrong" data-success="right" style="color: red">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <button class="btn waves-effect waves-light gradient-45deg-light-blue-cyan gradient-shadow right text-white" type="submit" name="action">Submit
                  <i class="material-icons right">send</i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('customjs')

@endsection