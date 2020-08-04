<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Mail\GatewayMailLow;
use App\Mail\GatewayMailWorkPend;
use Illuminate\Support\Facades\Mail;

class ApiController extends Controller
{
    //================= API PELAMAR =================//
    public function pelamar() {
        $data = [
            'status' => 'SUCCESS',
            'data' => DB::table('tb_pelamar')->get()
        ];
        return $data;
    }

    public function pelamar_id($id) {
        $pelamar = DB::table('tb_pelamar')->where('nik_pelamar', $id)->get();
        if ($pelamar->count() != 0) {
            $data = [
                'status' => 'SUCCESS',
                'data' => $pelamar
            ];
            return $data;
        } else {
            $data = [
                'status' => 'ERROR',
                'data' => 'ERROR : USER NOT FOUND!'
            ];
            return $data;
        }
    }

    public function pelamar_signup(Request $insert) {
        $checknik = DB::table('tb_pelamar')->where('nik_pelamar', $insert->inpnik)->get()->count();
        if ($checknik == 0) {
            DB::table('tb_pelamar')->insert([
                'tipe_pelamar' => 'REGULAR',
                'nama_pelamar' => $insert->inpusername,
                'email_pelamar' => $insert->inpemail,
                'status_pelamar' => 'Aktif',
                'statuskawin_pelamar' => $insert->inpstatuskwn,
                'nik_pelamar' => $insert->inpnik,
                'nama_ktp' => $insert->inpnama,
                'gelardpn_pelamar' => $insert->inpgelardepan,
                'gelarblk_pelamar' => $insert->inpgelarbelakang,
                'kelamin_pelamar' => $insert->inpkelamin,
                'tplahir_pelamar' => $insert->inptempatlhr,
                'tglahir_pelamar' => $insert->inptanggallhr,
                'agama_pelamar' => $insert->inpagama,
                'tinggi_pelamar' => $insert->inptinggi,
                'berat_pelamar' => $insert->inpberat,
                'telp_pelamar' => $insert->inptelepon,
                'alamat_pelamar' => $insert->inpalamat,
                'id_tingkatpdd' => $insert->inptingkatpdd,
                'id_det_tingkatpdd' => $insert->inpjurusan,
                'institusi_pelamar' => $insert->inpinstitusi,
                'tahunlulus_pelamar' => $insert->inpthnlulus,
                'nilai_pelamar' => $insert->inpnilai,
                'foto_pelamar' => '-',
                'kondisi_pelamar' => $insert->inpkonfis,
                'kewarganegaraan_pelamar' => $insert->inpkewarganegaraan,
                'provinsi_pelamar' => $insert->inpprov,
                'kota_pelamar' => $insert->inpkota,
                'kec_pelamar' => $insert->inpkecamatan,
                'kodepos_pelamar' => $insert->inpkodepos,
                'password_pelamar' => md5($insert->inppassword),
                'confirm_password_pelamar' => md5($insert->inpconfirm)
            ]);

            $data = [
                'status' => 'SUCCESS',
                'data' => 'DATA HAS BEEN SAVED!'
            ];

            return $data;
        } else {
            $data = [
                'status' => 'ERROR',
                'data' => 'ERROR : FAILED - USER ALREADY REGISTERED!'
            ];

            return $data;
        }
    }

    public function pelamar_signup_workshop(Request $insert) {
        $idWorkshop = $insert->inpidworkshop;
        $checknik = DB::table('tb_pelamar')->where('nik_pelamar', $insert->inpnik)->get()->count();
        if ($checknik == 0) {
            $idpelamar = DB::table('tb_pelamar')->insertGetId([
                'tipe_pelamar' => 'REGULAR',
                'nama_pelamar' => $insert->inpusername,
                'email_pelamar' => $insert->inpemail,
                'status_pelamar' => 'Aktif',
                'statuskawin_pelamar' => $insert->inpstatuskwn,
                'nik_pelamar' => $insert->inpnik,
                'nama_ktp' => $insert->inpnama,
                'gelardpn_pelamar' => $insert->inpgelardepan,
                'gelarblk_pelamar' => $insert->inpgelarbelakang,
                'kelamin_pelamar' => $insert->inpkelamin,
                'tplahir_pelamar' => $insert->inptempatlhr,
                'tglahir_pelamar' => $insert->inptanggallhr,
                'agama_pelamar' => $insert->inpagama,
                'tinggi_pelamar' => $insert->inptinggi,
                'berat_pelamar' => $insert->inpberat,
                'telp_pelamar' => $insert->inptelepon,
                'alamat_pelamar' => $insert->inpalamat,
                'id_tingkatpdd' => $insert->inptingkatpdd,
                'id_det_tingkatpdd' => $insert->inpjurusan,
                'institusi_pelamar' => $insert->inpinstitusi,
                'tahunlulus_pelamar' => $insert->inpthnlulus,
                'nilai_pelamar' => $insert->inpnilai,
                'foto_pelamar' => '-',
                'kondisi_pelamar' => $insert->inpkonfis,
                'kewarganegaraan_pelamar' => $insert->inpkewarganegaraan,
                'provinsi_pelamar' => $insert->inpprov,
                'kota_pelamar' => $insert->inpkota,
                'kec_pelamar' => $insert->inpkecamatan,
                'kodepos_pelamar' => $insert->inpkodepos,
                'password_pelamar' => md5($insert->inppassword),
                'confirm_password_pelamar' => md5($insert->inpconfirm)
            ]);

            $daftarPelatihan = $this->pelamar_workshop($idWorkshop, $idpelamar);
            if($daftarPelatihan['status'] == 'SUCCESS') {
                $data = [
                    'status' => 'SUCCESS',
                    'data' => 'DATA HAS BEEN SAVED!'
                ];
            } else {
                $data = [
                    'status' => 'ERROR',
                    'data' => $daftarPelatihan['data']
                ];
            }

            return $data;
        } else {
            $data = [
                'status' => 'ERROR',
                'data' => 'ERROR : FAILED - USER ALREADY REGISTERED!'
            ];

            return $data;
        }
    }

    public function pelamar_workshop($idworkshop, $idpelamar) {
        $workshop = DB::table('tb_workshop')->where('id_workshop', $idworkshop)->first();
        $pelamar = DB::table('tb_pelamar')->where('id_pelamar', $idpelamar)->first();

        $jmlpelamar = DB::table('tb_det_workshop')->where('id_workshop', $idworkshop)->get()->count();
        $checkpemula = DB::table('tb_det_workshop')
            ->join('tb_workshop', 'tb_workshop.id_workshop', '=', 'tb_det_workshop.id_workshop')
            ->join('tb_pelamar', 'tb_pelamar.id_pelamar', '=', 'tb_det_workshop.id_pelamar')
            ->where('tb_workshop.kategori_workshop', 'Pemula')
            ->where('tb_pelamar.id_pelamar', $idpelamar)->get()->count();
        if ($workshop->kuota_workshop > $jmlpelamar) {
            $checkdet = DB::table('tb_det_workshop')->where('id_workshop', $idworkshop)->where('id_pelamar', $idpelamar)->count();
            if ($checkdet == 0) {
                if ($checkpemula == 0) {
                    DB::table('tb_det_workshop')->insert([
                        'id_workshop' => $idworkshop,
                        'id_pelamar' => $idpelamar,
                        'status_detwork' => 0
                    ]);
                    $kuota2 = DB::table('tb_workshop')->where('id_workshop', $idworkshop)->first();
                    $jmlpelamar2 = DB::table('tb_det_workshop')->where('id_workshop', $idworkshop)->get()->count();
                    if ($kuota2->kuota_workshop == $jmlpelamar2) {
                        DB::table('tb_workshop')->where('id_workshop', $idworkshop)->update([
                            'status_workshop' => 'Non-Active'
                        ]);
                    }

                    $datamail = [
                        'workshop' => $workshop->nama_workshop,
                        'pelamar' => $pelamar->nama_pelamar,
                        'tanggal' => $workshop->tanggal_workshop,
                        'kategori' => $workshop->kategori_workshop,
                        'image' => $workshop->poster_workshop,
                        'maps' => $workshop->maps_workshop,
                        'lokasi' => $workshop->lokasi_workshop
                    ];

                    Mail::to($pelamar->email_pelamar)->send(new GatewayMailWorkPend($datamail));

                    $data = [
                        'status' => 'SUCCESS',
                        'data' => 'DATA HAS BEEN SAVED!'
                    ];
                    return $data;
                } else {
                    if ($workshop->kategori_workshop != 'Pemula') {
                        DB::table('tb_det_workshop')->insert([
                            'id_workshop' => $idworkshop,
                            'id_pelamar' => $idpelamar,
                            'status_detwork' => 0
                        ]);
                        $kuota2 = DB::table('tb_workshop')->where('id_workshop', $idworkshop)->first();
                        $jmlpelamar2 = DB::table('tb_det_workshop')->where('id_workshop', $idworkshop)->get()->count();
                        if ($kuota2->kuota_workshop == $jmlpelamar2) {
                            DB::table('tb_workshop')->where('id_workshop', $idworkshop)->update([
                                'status_workshop' => 'Non-Active'
                            ]);
                        }

                        $datamail = [
                            'workshop' => $workshop->nama_workshop,
                            'pelamar' => $pelamar->nama_pelamar,
                            'tanggal' => $workshop->tanggal_workshop,
                            'kategori' => $workshop->kategori_workshop,
                            'image' => $workshop->poster_workshop,
                            'maps' => $workshop->maps_workshop,
                            'lokasi' => $workshop->lokasi_workshop
                        ];

                        Mail::to($pelamar->email_pelamar)->send(new GatewayMailWorkPend($datamail));

                        $data = [
                            'status' => 'SUCCESS',
                            'data' => 'DATA HAS BEEN SAVED!'
                        ];
                        return $data;
                    } else {
                        $data = [
                            'status' => 'ERROR',
                            'data' => 'FAILED!'
                        ];
                        return $data;
                    }
                }
            } else {
                $data = [
                    'status' => 'ERROR',
                    'data' => 'ERROR : FAILED - USER ALREADY REGISTERED!'
                ];
                return $data;
            }
        } else {
            $data = [
                'status' => 'ERROR',
                'data' => 'ERROR : FAILED - MAXIMUM USER HAS BEEN REACHED!'
            ];
            return $data;
        }
    }

    public function pelamar_perusahaan($idlowongan, $idpelamar) {
        $pelamar = DB::table('tb_pelamar')->where('id_pelamar', $idpelamar)->get()->count();
        $lowongan = DB::table('tb_lowongan')->where('id_lowongan', $idlowongan)->get()->count();

        if($lowongan != 0) {
            if ($pelamar != 0){
                $check = DB::table('tb_det_lowongan')
                                ->where('id_lowongan', $idlowongan)
                                ->where('id_pelamar', $idpelamar)
                                ->get()->count();

                if ($check == 0) {
                    DB::table('tb_det_lowongan')->insert([
                        'id_lowongan' => $idlowongan,
                        'id_pelamar' => $idpelamar
                    ]);

                    $pelamars = DB::table('tb_pelamar')->where('id_pelamar', $idpelamar)->first();
                    $lowongans = DB::table('tb_lowongan')
                            ->join('tb_perusahaan', 'tb_perusahaan.id_perusahaan', '=', 'tb_lowongan.id_perusahaan')
                            ->where('tb_lowongan.id_lowongan', $idlowongan)->first();

                    $datamail = [
                        'perusahaan' => $lowongans->nama_perusahaan." - ".$lowongans->lengkap_perusahaan,
                        'pelamar' => $pelamars->nama_pelamar,
                        'posisi' => $lowongans->posisi_lowongan,
                        'gaji' => $lowongans->gaji_lowongan,
                        'image' => $lowongans->logo_perusahaan,
                        'email' => $lowongans->email_perusahaan
                    ];

                    Mail::to($pelamars->email_pelamar)->send(new GatewayMailLow($datamail));

                    $data = [
                        'status' => 'SUCCESS',
                        'data' => 'DATA HAS BEEN SAVED!'
                    ];

                    return $data;
                } else {
                    $data = [
                        'status' => 'ERROR',
                        'data' => 'ERROR : FAILED - USER ALREADY REGISTERED!'
                    ];

                    return $data;
                }
            } else {
                $data = [
                    'status' => 'ERROR',
                    'data' => 'ERROR : ERROR : 404 - USER NOT FOUND!'
                ];

                return $data;
            }
        } else {
            $data = [
                'status' => 'ERROR',
                'data' => 'ERROR : ERROR : 404 - LOWONGAN NOT FOUND!'
            ];

            return $data;
        }
    }

    //================= END API PELAMAR =================//

    //================= API PERUSAHAAN =================//
    public function perusahaan_signup(Request $insert) {
        if ($insert->hasFile('inppict')) {
            $img = $insert->file('inppict');
            $imgname = date('Y_m_d_H_i_s') . $img->getClientOriginalExtension();

            $location = 'perusahaan';
            $img->move($location, $imgname);

            DB::table('tb_perusahaan')->insert([
                'nama_perusahaan' => $insert->inpnama,
                'lengkap_perusahaan' => $insert->inplengkap,
                'npwp_perusahaan' => $insert->inpnpwp,
                'alamat_perusahaan' => $insert->inpalamat,
                'id_provinsi' => $insert->inpprov,
                'id_kota' => $insert->inpkota,
                'id_kecamatan' => $insert->inpkecamatan,
                'map_perusahaan' => $insert->inpmap,
                'id_jenis' => $insert->inpjenis,
                'kelas_perusahaan' => $insert->inpkelas,
                'lokasi_perusahaan' => $insert->inppos,
                'kodepos_perusahaan' => $insert->inpkode,
                'web_perusahaan' => $insert->inpweb,
                'desk_perusahaan' => $insert->inpdesk,
                'aktivitas_perusahaan' => $insert->inpaktivitas,
                'produk_perusahaan' => $insert->inpproduk,
                'penanggung_perusahaan' => $insert->inpjawab,
                'telp_perusahaan' => $insert->inptelepon,
                'fax_perusahaan' => $insert->inpfax,
                'email_perusahaan' => $insert->inpemail,
                'logo_perusahaan' => $imgname,
                'association' => $insert->inpasso,
                'password_perusahaan' => md5($insert->inppassword),
                'confirm_password_perusahaan' => md5($insert->inpconfirm),
                'date_created' => date('Y-m-d')
            ]);
            $data = [
                'status' => 'SUCCESS',
                'data' => 'DATA HAS BEEN SAVED!'
            ];
        } else {
            $data = [
                'status' => 'ERROR',
                'data' => 'ERROR : ERROR : 404 - IMAGE NOT FOUND!'
            ];
        }


        return $data;
    }
    //================= END API PERUSAHAAN =================//

    //================= API LOWONGAN =================//
    public function workshops() {
        $data = [
            'status' => 'SUCCESS',
            'data' => DB::table('tb_workshop')->get()
        ];

        return $data;
    }
    //================= END API LOWONGAN =================//

    //================= API WORKSHOP =================//
    public function lowongan() {
        $data = [
            'status' => 'SUCCESS',
            'data' => DB::table('tb_lowongan')->get()
        ];

        return $data;
    }
    //================= END API WORKSHOP =================//

    //================= API TINGKAT PENDIDIKAN =================//
    public function tingkatPendidikan() {
        $data = [
            'status' => 'SUCCESS',
            'data' => DB::table('tb_tingkatpdd')->get()
        ];

        return $data;
    }
    public function tingkatPendidikanId($id) {
        $data = [
            'status' => 'SUCCESS',
            'data' => DB::table('tb_tingkatpdd')->where('id_tingkatpdd', $id)->first()
        ];

        return $data;
    }
    //================= API TINGKAT PENDIDIKAN =================//

    //================= API DETAIL TINGKAT PENDIDIKAN =================//
    public function detailTingkatPendidikan() {
        $data = [
            'status' => 'SUCCESS',
            'data' => DB::table('tb_det_tingkatpdd')->get()
        ];

        return $data;
    }
    public function detailTingkatPendidikanId($id) {
        $data = [
            'status' => 'SUCCESS',
            'data' => DB::table('tb_det_tingkatpdd')->where('id_det_tingkatpdd', $id)->first()
        ];

        return $data;
    }
    //================= API DETAIL TINGKAT PENDIDIKAN =================//

    //================= API DAERAH =================//
    public function provinsi() {
        $data = [
            'status' => 'SUCCESS',
            'data' => DB::table('tb_provinsi')->get()
        ];

        return $data;
    }
    public function provinsiId($id) {
        $data = [
            'status' => 'SUCCESS',
            'data' => DB::table('tb_provinsi')->where('id', $id)->first()
        ];

        return $data;
    }
    public function kota() {
        $data = [
            'status' => 'SUCCESS',
            'data' => DB::table('tb_kota')->get()
        ];

        return $data;
    }
    public function kotaId($id) {
        $data = [
            'status' => 'SUCCESS',
            'data' => DB::table('tb_kota')->where('id', $id)->first()
        ];

        return $data;
    }
    public function kecamatan() {
        $data = [
            'status' => 'SUCCESS',
            'data' => DB::table('tb_kecamatan')->get()
        ];

        return $data;
    }
    public function kecamatanId($id) {
        $data = [
            'status' => 'SUCCESS',
            'data' => DB::table('tb_kecamatan')->where('id', $id)->first()
        ];

        return $data;
    }

    public function provKabupaten($id) {
        $data = [
            'status' => 'SUCCESS',
            'data' => DB::table('tb_kota')->where('province_id', $id)->get()
        ];
        return $data;
    }

    public function kabKecamatan($id) {
        $data = [
            'status' => 'SUCCESS',
            'data' => DB::table('tb_kecamatan')->where('regency_id', $id)->get()
        ];
        return $data;
    }
    //================= END API DAERAH =================//
}
