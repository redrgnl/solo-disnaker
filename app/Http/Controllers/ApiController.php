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
    //api admin
//    public function users() {
//        return DB::table('tb_user')->get(); //daftar semua user
//    }
//    
//    public function users_id($id) {
//        return DB::table('tb_user')->where('id_user', $id)->first(); //daftar user id
//    }
//    
//    public function insert_users(Request $insert) {
//        $checkid = DB::table('tb_user')->get()->count();
//        $checkusername = DB::table('tb_user')->where('username_user', $insert->inpusername)->get()->count();
//        
//        if ($checkusername == 0) {
//            if ($insert->inppassword != $insert->inpconfirm) {
//                return "Password And Confirm Password Does Not Match!";
//            } else {
//                DB::table('tb_user')->insert([
//                    'id_user' => md5($checkid + 1),
//                    'nama_user' => $insert->inpnama,
//                    'username_user' => $insert->inpusername,
//                    'email_user' => $insert->inpemail,
//                    'password_user' => md5($insert->inppassword),
//                    'confirm_password_user' => md5($insert->inpconfirm),
//                    'id_role' => $insert->inprole,
//                    'date_created' => date('Y-m-d')
//                ]);
//                
//                return "SUCCESS : User Data Has Been Saved!";
//            }
//        } else {
//            return "ERROR : Username Already Signed Up!";
//        }
//    }
//    
//    public function role_users() {
//        return DB::table('tb_role')->get();
//    }
    
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
                'nik_pelamar' => $insert->inpnik,
                'npwp_pelamar' => $insert->inpnpwp,
                'nama_pelamar' => $insert->inpnama,
                'alamat_pelamar' => $insert->inpalamat,
                'kelamin_pelamar' => $insert->inpgender,
                'tplahir_pelamar' => $insert->inptempat,
                'tglahir_pelamar' => $insert->inptanggal,
                'agama_pelamar' => $insert->inpagama,
                'status_pelamar' => $insert->inpstatus,
                'tinggi_pelamar' => $insert->inptinggi,
                'berat_pelamar' => $insert->inpberat,
                'telp_pelamar' => $insert->inptelepon,
                'email_pelamar' => $insert->inpemail,
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
    
    public function pelamar_workshop($idworkshop, $idpelamar) {
        $pelamar = DB::table('tb_pelamar')->where('id_pelamar', $idpelamar)->get()->count();
        $workshop = DB::table('tb_workshop')->where('id_workshop', $idworkshop)->get()->count();
        
        $kuota = DB::table('tb_workshop')->where('id_workshop', $idworkshop)->first();
        $jmlpelamar = DB::table('tb_det_workshop')->where('id_workshop', $idworkshop)->get()->count();
        
        $checkpemula = DB::table('tb_det_workshop')
                            ->join('tb_workshop', 'tb_workshop.id_workshop', '=', 'tb_det_workshop.id_workshop')
                            ->join('tb_pelamar', 'tb_pelamar.id_pelamar', '=', 'tb_det_workshop.id_pelamar')
                            ->where('tb_workshop.kategori_workshop', 'Pemula')
                            ->where('tb_pelamar.id_pelamar', $idpelamar)->get()->count();
        
        if ($pelamar != 0) {
            if ($workshop != 0) {
                if ($kuota->kuota_workshop > $jmlpelamar) {
                    $checkdet = DB::table('tb_det_workshop')
                                ->where('id_workshop', $idworkshop)->where('id_pelamar', $idpelamar)->count();

                    if ($checkdet == 0) {
                        $workshops = DB::table('tb_workshop')->where('id_workshop', $idworkshop)->first();
                        $pelamars = DB::table('tb_pelamar')->where('id_pelamar', $idpelamar)->first();
                        
                        if ($checkpemula == 0) {
                            DB::table('tb_det_workshop')->insert([
                                'id_workshop' => $idworkshop,
                                'id_pelamar' => $idpelamar
                            ]);
                            
                            $datamail = [
                                'workshop' => $workshops->nama_workshop,
                                'pelamar' => $pelamars->nama_pelamar,
                                'tanggal' => $workshops->tanggal_workshop,
                                'kategori' => $workshops->kategori_workshop,
                                'image' => $workshops->poster_workshop,
                                'maps' => $workshops->maps_workshop,
                                'lokasi' => $workshops->lokasi_workshop
                            ];

                            Mail::to($pelamars->email_pelamar)->send(new GatewayMailWorkPend($datamail));
                            
                            $data = [
                                'status' => 'SUCCESS',
                                'data' => 'DATA HAS BEEN SAVED!'
                            ];

                            return $data;
                        } else {
                            if ($kuota->kategori_workshop != 'Pemula') {
                                DB::table('tb_det_workshop')->insert([
                                    'id_workshop' => $idworkshop,
                                    'id_pelamar' => $idpelamar
                                ]);
                                
                                $datamail = [
                                    'workshop' => $workshops->nama_workshop,
                                    'pelamar' => $pelamars->nama_pelamar,
                                    'tanggal' => $workshops->tanggal_workshop,
                                    'kategori' => $workshops->kategori_workshop,
                                    'image' => $workshops->poster_workshop,
                                    'maps' => $workshops->maps_workshop,
                                    'lokasi' => $workshops->lokasi_workshop
                                ];

                                Mail::to($pelamars->email_pelamar)->send(new GatewayMailWorkPend($datamail));
                                
                                $data = [
                                    'status' => 'SUCCESS',
                                    'data' => 'DATA HAS BEEN SAVED!'
                                ];

                                return $data;
                            } else {
                                $data = [
                                    'status' => 'ERROR',
                                    'data' => 'ERROR : FAILED!'
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
            } else {
                $data = [
                    'status' => 'ERROR',
                    'data' => 'ERROR : 404 - WORKSHOP NOT FOUND!'
                ];

                return $data;
            }
        } else {
            $data = [
                'status' => 'ERROR',
                'data' => 'ERROR : 404 - USER NOT FOUND!'
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
        DB::table('tb_perusahaan')->insert([
            'nama_perusahaan' => $insert->inpnama,
            'lengkap_perusahaan' => $insert->inplengkap,
            'npwp_perusahaan' => $insert->inpnpwp,
            'alamat_perusahaan' => $insert->inpalamat,
            'id_jenis' => $insert->inpjenis,
            'lokasi_perusahaan' => $insert->inppos,
            'kodepos_perusahaan' => $insert->inpkode,
            'web_perusahaan' => $insert->inpweb,
            'desk_perusahaan' => $insert->inpdesk,
            'penanggung_perusahaan' => $insert->inpjawab,
            'telp_perusahaan' => $insert->inptelepon,
            'email_perusahaan' => $insert->inpemail,
            'password_perusahaan' => md5($insert->inppassword),
            'confirm_password_perusahaan' => md5($insert->inpconfirm),
            'date_created' => date('Y-m-d')
        ]);
        $data = [
            'status' => 'SUCCESS',
            'data' => 'DATA HAS BEEN SAVED!'
        ];

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
    public function lowongans() {
        $data = [
            'status' => 'SUCCESS',
            'data' => DB::table('tb_lowongan')->get()
        ];

        return $data;
    }
    //================= END API WORKSHOP =================//
    
    //================= DEV API =================//
    public function testpost() {
        $data = [
            'title' => "Form Tambah Pelamar testpost",
            'breadcrumb' => "Tambah Pelamar testpost"
        ];
        
        return view ('/admin/content/testview', $data);
    }
    //================= END DEV API =================//
}
