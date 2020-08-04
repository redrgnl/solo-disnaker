<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator, Redirect, Response;
class PelamarWirausahaController extends Controller
{
        public function index()
        {
            $data = [
                'title' => "Manajemen Data Pelamar",
                'breadcrumb' => "Data Pelamar",
                'pelamar' => DB::table('tb_pelamar')->get(),
            ];

            return view('/admin/content/view_pelamar_wirausaha', $data);
        }
    // ======================VIEW PELAMAR TAMBAH WIRAUSAHA=============================

    public function tambah_pelamar_wirausaha()
    {
        $data = [
            'title' => "Form Tambah Pelamar Pelaku usaha",
            'breadcrumb' => "Tambah Pelamar Pelaku usaha",
            'provinsi' => DB::table('tb_provinsi')->get(),
            'jabatan' => DB::table('tb_jabatan')->get(),
            'tingkatpdd' => DB::table('tb_tingkatpdd')->get(),
            'kwn' => DB::table('tb_kwn')->get()

        ];

        return view('/admin/content/view_pelamar_tambah_w', $data);
    }


    // ======================PROSES PELAMAR TAMBAH =============================

        public function store_pelamar(Request $insert)
        {
            $lokasi_berkas = 'berkas_pelamar';

            $messages = [
                'required' => 'Field :attribute Wajib Diisi *',
                'max' => 'Input :attribute Tidak Sesuai',
                'email' => 'Format Email Salah'
            ];

            //validasi form
            $this->validate($insert, [
                'inpnik' => 'required|max:17',
                'inpnama' => 'required|max:100',
                'inpusername' => 'required|max:50',
                'inpemail' => 'required|max:50|email',
                'inpstatus' => 'required|max:10',
                'inpgelardepan' => 'max:15',
                'inpgelarbelakang' => 'max:15',
                'inpkelamin' => 'required|max:1',
                'inptempatlhr' => 'required|max:50',
                'inptinggi' => 'required|max:3',
                'inpberat' => 'required|max:3',
                'inptelepon' => 'required|max:15',
                'inpkodepos' => 'required|max:6',
            ], $messages);

            $maxid = DB::table('tb_pelamar')->max('id_pelamar') + 1;


            // foto pelamar

                $img = $insert->file('inpfoto');
                $imgname = date('Y-m-d') . "-" . "id" . $maxid . $img->getClientOriginalName();

                $location = 'pelamar';
                $img->move($location, $imgname);


            //KTP
                $file_E = $insert->file('inpktp');
                $file_E_name = date('Y-m-d') . "-" . "id" . $maxid . $file_E->getClientOriginalName();

                $file_E->move($lokasi_berkas, $file_E_name);

            //end berkas pelamar

            $checknik = DB::table('tb_pelamar')->where('nik_pelamar', $insert->a)->get()->count();


            if ($checknik == 0) {

                    DB::table('tb_data_pelaku_usaha')->insert([
                        'id_pelamar_wirausaha' => $maxid,
                        'modal_usaha' => $insert->inpmodal,
                        'omzet_usaha' => $insert->inpomzet,
                        'deskripsi_usaha' => $insert->deskripsi_bisnis,
                        'ktp_pelamar_wirausaha' => $file_E_name,

                    ]);

                DB::table('tb_pelamar')->insert([
                    'id_pelamar' => $maxid,
                    'tipe_pelamar' => $insert->tipe_pelamar,
                    'nama_pelamar' => $insert->inpusername,
                    'email_pelamar' => $insert->inpemail,
                    'status_pelamar' => $insert->inpstatus,
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
                    'foto_pelamar' => $imgname,
                    'kondisi_pelamar' => $insert->inpkonfis,
                    'kewarganegaraan_pelamar' => $insert->inpkewarganegaraan,
                    'provinsi_pelamar' => $insert->inpprov,
                    'kota_pelamar' => $insert->inpkota,
                    'kec_pelamar' => $insert->inpkecamatan,
                    'kodepos_pelamar' => $insert->inpkodepos,
                    'password_pelamar' => md5($insert->inppassword),
                    'confirm_password_pelamar' => md5($insert->inpconfirm)
                ]);

                return redirect('/admin/halaman-manajemen-pelamar')->with('success-alert', 'Disimpan');
            } else {
                return redirect('/admin/halaman-tambah-pelamar')->with('error-alert', 'Pelamar Telah Terdaftar Sebelumnya');
            }
        }

    // ======================PROSES PELAMAR EDIT =============================

        public function update_pelamar(Request $update)
        {
            $lokasi_berkas = 'berkas_pelamar';

            $messages = [
                'required' => 'Field Wajib Diisi *',
                'max' => 'Input Tidak Sesuai'
            ];

    //VALIDASI FORM
            $this->validate($update, [
                'inpnik' => 'required|max:17',
                'inpnama' => 'required|max:100',
                'inpusername' => 'required|max:50',
                'inpemail' => 'required|max:50|email',
                'inpstatus' => 'required|max:10',
                'inpgelardepan' => 'max:15',
                'inpgelarbelakang' => 'max:15',
                'inpkelamin' => 'required|max:1',
                'inptempatlhr' => 'required|max:50',
                'inptinggi' => 'required|max:3',
                'inpberat' => 'required|max:3',
                'inptelepon' => 'required|max:15',
                'inpkodepos' => 'required|max:6',
            ], $messages);



    // update foto
                if($update->hasfile('inpfoto')){

                $foto_p = $update->file('inpfoto');
                $foto_name = date('Y-m-d') . "-" . "id" . $update->inpid . $foto_p->getClientOriginalName();
                $lokasi_foto = 'pelamar';
                $foto_p->move($lokasi_foto, $foto_name);

                    $path_A = public_path() . "/pelamar/" . $update->old_foto;
                    unlink($path_A);

                DB::table('tb_pelamar')->where('id_pelamar', $update->inpid)->update([
                    'foto_pelamar' => $foto_name,

                ]);

               }else{
                    $foto_name = $update->old_foto;
               }

                //update KTP
                if($update->hasfile('inpktp')){

                    $file_E = $update->file('inpktp');
                    $file_E_name = date('Y-m-d') . "-" . "id" . $update->inpid . $file_E->getClientOriginalName();

                    $file_E->move($lokasi_berkas, $file_E_name);


                    DB::table('tb_data_pelaku_usaha')->where('id_pelamar_wirausaha', $update->inpid)->update([
                        'ktp_pelamar_wirausaha' => $file_E_name,

                    ]);
                    if($update->old_ktp != "-"){
                        $path_E = public_path() . "/berkas_pelamar/" . $update->old_ktp;
                        unlink($path_E);
                    }
                }

                //end update  berkas pelamar


                DB::table('tb_data_pelaku_usaha')->where('id_pelamar_wirausaha', $update->inpid)->update([
                    'modal_usaha' => $update->inpmodal,
                    'omzet_usaha' => $update->inpomzet,
                    'deskripsi_usaha' => $update->deskripsi_bisnis,

                ]);
    // END UPDATE TABLE HARAPAN


    // UPDATE TABLE PELAMAR
            DB::table('tb_pelamar')->where('id_pelamar', $update->inpid)->update([
                'nama_pelamar' => $update->inpusername,
                'email_pelamar' => $update->inpemail,
                'status_pelamar' => $update->inpstatus,
                'statuskawin_pelamar' => $update->inpstatuskwn,
                'nik_pelamar' => $update->inpnik,
                'nama_ktp' => $update->inpnama,
                'gelardpn_pelamar' => $update->inpgelardepan,
                'gelarblk_pelamar' => $update->inpgelarbelakang,
                'kelamin_pelamar' => $update->inpkelamin,
                'tplahir_pelamar' => $update->inptempatlhr,
                'tglahir_pelamar' => $update->inptanggallhr,
                'agama_pelamar' => $update->inpagama,
                'tinggi_pelamar' => $update->inptinggi,
                'berat_pelamar' => $update->inpberat,
                'telp_pelamar' => $update->inptelepon,
                'alamat_pelamar' => $update->inpalamat,
                'id_tingkatpdd' => $update->inptingkatpdd,
                'id_det_tingkatpdd' => $update->inpjurusan,
                'institusi_pelamar' => $update->inpinstitusi,
                'tahunlulus_pelamar' => $update->inpthnlulus,
                'nilai_pelamar' => $update->inpnilai,
                'kondisi_pelamar' => $update->inpkonfis,
                'kewarganegaraan_pelamar' => $update->inpkewarganegaraan,
                'provinsi_pelamar' => $update->inpprov,
                'kota_pelamar' => $update->inpkota,
                'kec_pelamar' => $update->inpkecamatan,
                'kodepos_pelamar' => $update->inpkodepos,
                'password_pelamar' => md5($update->inppassword),
                'confirm_password_pelamar' => md5($update->inpconfirm)
            ]);
    // END UPDATE TABLE PELAMAR


            return redirect('/admin/halaman-manajemen-pelamar')->with('success-alert', 'Disimpan');
        }
    // ======================PROSES PELAMAR EDIT =============================

        public function delete_pelamar(Request $delete)
        {
            DB::table('tb_pelamar')->where('id_pelamar', $delete->idpelamar)->delete();
            DB::table('tb_data_pelaku_usaha')->where('id_pelamar', $delete->idpelamar)->delete();

            return redirect('/admin/halaman-manajemen-pelamar')->with('success-alert', 'Dihapus');
        }
    // ======================VIEW RIWAYAT PELAMAR  =============================

        public function riwayat_pelamar($id)
        {
            $data = [
                'title' => "Form Edit Pelamar",
                'breadcrumb' => "Edit Pelamar",
                'pelamar' => DB::table('tb_pelamar')->where('id_pelamar', $id)->first(),
                'riwayat' => DB::table('tb_det_workshop')
                    ->join('tb_workshop', 'tb_workshop.id_workshop', '=', 'tb_det_workshop.id_workshop')
                    ->join('tb_pelamar', 'tb_pelamar.id_pelamar', '=', 'tb_det_workshop.id_pelamar')
                    ->where('tb_pelamar.id_pelamar', $id)->get()
            ];

            return view('/admin/content/view_pelamar_riwayat', $data);
        }




}
