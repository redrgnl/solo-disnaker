<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
        $checknik = DB::table('tb_pelamar')->where('nik_pelamar', $insert->a)->get()->count();
        
        if ($checknik == 0) {
            DB::table('tb_pelamar')->insert([
                'nik_pelamar' => $insert->a,
                'npwp_pelamar' => $insert->b,
                'nama_pelamar' => $insert->c,
                'alamat_pelamar' => $insert->d,
                'kelamin_pelamar' => $insert->e,
                'tplahir_pelamar' => $insert->f,
                'tglahir_pelamar' => $insert->g,
                'agama_pelamar' => $insert->h,
                'status_pelamar' => $insert->i,
                'tinggi_pelamar' => $insert->j,
                'berat_pelamar' => $insert->k,
                'telp_pelamar' => $insert->l,
                'email_pelamar' => $insert->m,
                'password_pelamar' => md5($insert->n),
                'confirm_password_pelamar' => md5($insert->o)
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
        
        if ($pelamar != 0) {
            if ($workshop != 0) {
                if ($kuota->kuota_workshop > $jmlpelamar) {
                    $checkdet = DB::table('tb_det_workshop')
                                ->where('id_workshop', $idworkshop)->where('id_pelamar', $idpelamar)->count();

                    if ($checkdet == 0) {
                        DB::table('tb_det_workshop')->insert([
                            'id_workshop' => $idworkshop,
                            'id_pelamar' => $idpelamar
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
}
