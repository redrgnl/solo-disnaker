<body style="background-image: url('http://style24x7.com/wp-content/uploads/2019/09/Abstract-HD-Desktop-Laptop-Wallpaper-Background-HD-Image-22.jpg'); background-repeat: no-repeat; background-size: cover;">
  <div style="margin-left: auto; margin-right: auto; background-color: #f2f2f2; padding: 5%; width: 450px; font-family: sans-serif; border-style: solid; border-width: 0px 20px 20px 0px; border-color: #008bb5">
    <h2 style="color: #020561; text-align: center; font-family: arial">PENDAFTARAN LAMARAN</h2>
    <h2 style="color: #020561; text-align: center; font-family: arial">{{ $perusahaan }}</h2>
    <div style="text-align: center; margin-top: 30px; margin-bottom: 30px;">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7b/Logo_Kemnaker.png/275px-Logo_Kemnaker.png" style="width: 100px">
    </div>
    <br>
    <p>Kepada Yth. Bapak/Ibu <span style="color: #020561; font-size: 15px">{{ $pelamar }}</span></p>
    <p>Terima kasih anda telah mendaftar pada Lowongan Kerja yang diadakan oleh <span style="color: #020561; font-size: 15px">{{ $perusahaan }}</span>.</p><br>
    
    <img src="{{ asset('perusahaan') }}/{{ $image }}" style="width: 100%; border-radius: 0px 20px 0px 20px;"><br><br> 
      
    <p>Berikut adalah detail lowongan yang anda pilih:</p>
    <table>
      <tbody>
        <tr>
          <td style="width: 150px">Perusahaan</td>
          <td style="color: #020561;">{{ $perusahaan }}</td>
        </tr>
        <tr>
          <td style="width: 150px">Posisi</td>
          <td style="color: #020561;">{{ $posisi }}</td>
        </tr>
        <tr>
          <td style="width: 150px">Gaji</td>
          <td style="color: #020561;">Rp. {{ number_format($gaji) }}</td>
        </tr>
      </tbody>
    </table><br>
    
    <p>Calon pelamar pekerjaan yang nantinya terpilih akan mendapatkan konfirmasi melalui email.</p>
    <p> Informasi terbaru mengenai lowongan kerja yang diadakan oleh <span style="color: #020561; font-size: 15px">{{ $perusahaan }}</span>, silakan hubungi customer service {{ $email }}</p><br>
    
    <p>Salam</p>
    <p>Dinas Tenaga Kerja - Kota Solo</p>
  </div>

</body>