<body style="background-image: url('http://style24x7.com/wp-content/uploads/2019/09/Abstract-HD-Desktop-Laptop-Wallpaper-Background-HD-Image-22.jpg'); background-repeat: no-repeat; background-size: cover;">
  <div style="margin-left: auto; margin-right: auto; background-color: #f2f2f2; padding: 5%; width: 450px; font-family: sans-serif; border-style: solid; border-width: 0px 20px 20px 0px; border-color: #008bb5">
    <h2 style="color: #020561; text-align: center; font-family: arial">PENDAFTARAN WORKSHOP</h2>
    <h2 style="color: #020561; text-align: center; font-family: arial">{{ $workshop }}</h2>
    <div style="text-align: center; margin-top: 30px; margin-bottom: 30px;">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7b/Logo_Kemnaker.png/275px-Logo_Kemnaker.png" style="width: 100px">
    </div>
    <br>
    <p>Kepada Yth. Bapak/Ibu <span style="color: #020561; font-size: 15px">{{ $pelamar }}</span></p>
    <p>Terima kasih anda telah mendaftar pada agenda pelatihan yang bertema <span style="color: #020561; font-size: 15px">{{ $workshop }}</span>.</p><br>
    
    <img src="{{ asset('workshop') }}/{{ $image }}" style="width: 100%; border-radius: 0px 20px 0px 20px;"><br><br> 
    
    <p>Berikut adalah detail acara yang anda pilih:</p>
    <table>
      <tbody>
        <tr>
          <td style="width: 150px">Nama Pelatihan</td>
          <td style="color: #020561;">{{ $workshop }}</td>
        </tr>
        <tr>
          <td style="width: 150px">Tanggal</td>
          <td style="color: #020561;">{{ date("j F Y", strtotime($tanggal)) }}</td>
        </tr>
        <tr>
          <td style="width: 150px">Kategori</td>
          <td style="color: #020561;">{{ $kategori }}</td>
        </tr>
        <tr>
          <td style="width: 150px">Lokasi</td>
          <td>
            <a href="{{ $maps }}" target="_blank">{{ $lokasi }}</a>
          </td>
        </tr>
      </tbody>
    </table><br>
    
    <p>Calon Peserta yang nantinya terpilih menjadi peserta acara ataupun yang masuk ke dalam daftar tunggu (waiting list) peserta akan mendapatkan konfirmasi melalui email maksimal H-1 sebelum pelaksanaan acara.</p>
    <p>Atas Perhatiannya, kami ucapkan terima kasih.</p><br>
    
    <p>Salam</p>
    <p>Dinas Tenaga Kerja - Kota Solo</p>
  </div>

</body>