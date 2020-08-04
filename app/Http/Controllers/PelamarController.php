<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator, Redirect, Response;

class PelamarController extends Controller
{
    public function index()
    {
        $data = [
            'title' => "Manajemen Data Pelamar",
            'breadcrumb' => "Data Pelamar",
            'pelamar' => DB::table('tb_pelamar')->get(),
        ];

        return view('/admin/content/view_pelamar', $data);
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
// ======================VIEW PELAMAR TAMBAH=============================
    public function tambah_pelamar()
    {
        $data = [
            'title' => "Form Tambah Pelamar",
            'breadcrumb' => "Tambah Pelamar",
            'provinsi' => DB::table('tb_provinsi')->get(),
            'jabatan' => DB::table('tb_jabatan')->get(),
            'tingkatpdd' => DB::table('tb_tingkatpdd')->get(),
            'kwn' => DB::table('tb_kwn')->get()

        ];

        return view('/admin/content/view_pelamar_tambah', $data);
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
            'inppos' => 'required',
            'kelompok_jabatan' => 'required',
            'sistem_pembayaran_harapan' => 'required',
            'harapan_gaji' => 'required',
        ], $messages);

        $maxid = DB::table('tb_pelamar')->max('id_pelamar') + 1;

        // foto pelamar
            $img = $insert->file('inpfoto');
            $imgname = date('Y-m-d') . "-" . "id" . $maxid . $img->getClientOriginalName();

            $location = 'pelamar';
            $img->move($location, $imgname);

            //izin keluarga
        if($insert->hasfile('inpizin')){

            $file_A = $insert->file('inpizin');
            $file_A_name = date('Y-m-d') . "-" . "id" . $maxid . $file_A->getClientOriginalName();

            $lokasi_berkas = 'berkas_pelamar';

            $file_A->move($lokasi_berkas, $file_A_name);
        }else{
            $file_A_name = "-";

        }
        //buku nikah
        if($insert->hasfile('inpnikah')){

            $file_B = $insert->file('inpnikah');
            $file_B_name = date('Y-m-d') . "-" . "id" . $maxid . $file_B->getClientOriginalName();

            $file_B->move($lokasi_berkas, $file_B_name);
        }else{
            $file_B_name = "-";

        }
        //surat sehat
        if($insert->hasfile('inpsehat')){

            $file_C = $insert->file('inpsehat');
            $file_C_name = date('Y-m-d') . "-" . "id" . $maxid . $file_C->getClientOriginalName();

            $file_C->move($lokasi_berkas, $file_C_name);
        }else{
            $file_C_name = "-";

        }
        //sertifikat keahlian
        if($insert->hasfile('inpkeahlian')){

            $file_D = $insert->file('inpkeahlian');
            $file_D_name = date('Y-m-d') . "-" . "id" . $maxid . $file_D->getClientOriginalName();

            $file_D->move($lokasi_berkas, $file_D_name);
        }else{
            $file_D_name = "-";

        }
        //KTP
        if($insert->hasfile('inpktp')){

            $file_E = $insert->file('inpktp');
            $file_E_name = date('Y-m-d') . "-" . "id" . $maxid . $file_E->getClientOriginalName();

            $file_E->move($lokasi_berkas, $file_E_name);
        }else{
            $file_E_name = "-";

        }
        //Pengalaman kerja
        if($insert->hasfile('inppengalaman')){

            $file_F = $insert->file('inppengalaman');
            $file_F_name = date('Y-m-d') . "-" . "id" . $maxid . $file_F->getClientOriginalName();

            $file_F->move($lokasi_berkas, $file_F_name);
        }else{
            $file_F_name = "-";

        }
        //Keterampilan
        if($insert->hasfile('inpketerampilan')){

            $file_G = $insert->file('inpketerampilan');
            $file_G_name = date('Y-m-d') . "-" . "id" . $maxid . $file_G->getClientOriginalName();

            $file_G->move($lokasi_berkas, $file_G_name);
        }else{
            $file_G_name = "-";

        }
        //Bahasa
        if($insert->hasfile('inpbahasa')){

            $file_H = $insert->file('inpbahasa');
            $file_H_name = date('Y-m-d') . "-" . "id" . $maxid . $file_H->getClientOriginalName();

            $file_H->move($lokasi_berkas, $file_H_name);
        }else{
            $file_H_name = "-";

        }
        //end berkas pelamar

        $checknik = DB::table('tb_pelamar')->where('nik_pelamar', $insert->a)->get()->count();
        if ($checknik == 0) {
            if($insert->inppos == "Dalam Negeri"){
                DB::table('tb_harapan_kerja')->insert([
                    'id_pelamar_harapan' => $maxid,
                    'penempatan_harapan' => $insert->inppos,
                    'provinsi_harapan' => $insert->prov_pdd,
                    'kota_harapan' => $insert->kota_pdd,
                    'jabatan_harapan' => $insert->kelompok_jabatan,
                    'pembayaran_gaji_harapan' => $insert->sistem_pembayaran_harapan,
                    'besar_gaji_harapan' => $insert->harapan_gaji,
                    'negara_luar_harapan' => "-",
                    'izin_keluarga_harapan' => "-",
                    'bukunikah_harapan' => "-",
                    'surat_ket_sehat_harapan' => "-",
                    'sertifikat_keahlian_harapan' => "-",
                    'ktp_harapan' => "-",
                    'pengalaman_kerja' => $file_F_name,
                    'keterampilan_kerja' => $file_G_name,
                    'penguasaan_bahasa' => $file_H_name,

                ]);
            }else{
                DB::table('tb_harapan_kerja')->insert([
                    'id_pelamar_harapan' => $maxid,
                    'penempatan_harapan' => $insert->inppos,
                    'provinsi_harapan' => "-",
                    'kota_harapan' => "-",
                    'jabatan_harapan' => $insert->kelompok_jabatan,
                    'pembayaran_gaji_harapan' => $insert->sistem_pembayaran_harapan,
                    'besar_gaji_harapan' => $insert->harapan_gaji,
                    'negara_luar_harapan' => $insert->inpnegarahrpn,
                    'izin_keluarga_harapan' => $file_A_name,
                    'bukunikah_harapan' => $file_B_name,
                    'surat_ket_sehat_harapan' => $file_C_name,
                    'sertifikat_keahlian_harapan' => $file_D_name,
                    'ktp_harapan' => $file_E_name,
                    'pengalaman_kerja' => $file_F_name,
                    'keterampilan_kerja' => $file_G_name,
                    'penguasaan_bahasa' => $file_H_name,

                ]);
            }

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
// ======================VIEW PELAMAR EDIT =============================

    public function edit_pelamar($id)
    {
        $harapan = DB::table('tb_harapan_kerja')->where('id_pelamar_harapan', $id)->first();
        $usaha = DB::table('tb_data_pelaku_usaha')->where('id_pelamar_wirausaha', $id)->first();
        if (!$harapan) {
            $harapan = 'false';
        } else if (!$usaha) {
            $usaha = 'false';
        } else {
            $harapan = $harapan;
            $usaha = $usaha;
        }
        $data = [
            'title' => "Form Edit Pelamar",
            'breadcrumb' => "Edit Pelamar",
            'pelamar' => DB::table('tb_pelamar')->where('id_pelamar', $id)->first(),
            'jabatan' => DB::table('tb_jabatan')->get(),
            'provinsi' => DB::table('tb_provinsi')->get(),
            'kota' => DB::table('tb_kota')->get(),
            'kecamatan' => DB::table('tb_kecamatan')->get(),
            'tingkatpdd' => DB::table('tb_tingkatpdd')->get(),
            'dettingkatpdd' => DB::table('tb_det_tingkatpdd')->get(),
            'kwn' => DB::table('tb_kwn')->get(),
            'harapan' => $harapan,
            'usaha' => $usaha
        ];

        return view('/admin/content/view_pelamar_edit', $data);
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
            if($update->old_foto != '-') {
                $path_A = public_path() . "/pelamar/" . $update->old_foto;
                unlink($path_A);
            }
            DB::table('tb_pelamar')->where('id_pelamar', $update->inpid)->update([
                'foto_pelamar' => $foto_name,
            ]);
        } else {
            $foto_name = $update->old_foto;
        }

        if ($update->inppelamarapi == 'false') {
            // update pengalaman kerja
            if($update->hasfile('inppengalaman')){
                $file_F = $update->file('inppengalaman');
                $file_F_name = date('Y-m-d') . "-" . "id" . $update->inpid . $file_F->getClientOriginalName();
                $file_F->move($lokasi_berkas, $file_F_name);
                if($update->old_pengalaman != "-"){
                    $path_F = public_path() . "/berkas_pelamar/" . $update->old_pengalaman;
                    unlink($path_F);
                }
                DB::table('tb_harapan_kerja')->where('id_pelamar_harapan', $update->inpid)->update([
                    'pengalaman_kerja' => $file_F_name,
                ]);
            }else{
                $file_F_name = $update->old_pengalaman;
            }
            // update Keterampilan
            if($update->hasfile('inpketerampilan')){

                $file_G = $update->file('inpketerampilan');
                $file_G_name = date('Y-m-d') . "-" . "id" . $update->inpid . $file_G->getClientOriginalName();

                $file_G->move($lokasi_berkas, $file_G_name);
                if($update->old_keterampilan != "-"){

                    $path_G = public_path() . "/berkas_pelamar/" . $update->old_keterampilan;
                    unlink($path_G);
                }

                DB::table('tb_harapan_kerja')->where('id_pelamar_harapan', $update->inpid)->update([
                    'keterampilan_kerja' => $file_G_name,
                ]);
            }else{
                $file_G_name = $update->old_keterampilan;
            }
            // update Bahasa
            if($update->hasfile('inpbahasa')){
                $file_H = $update->file('inpbahasa');
                $file_H_name = date('Y-m-d') . "-" . "id" . $update->inpid . $file_H->getClientOriginalName();
                $file_H->move($lokasi_berkas, $file_H_name);
                if($update->old_bahasa != "-"){
                    $path_H = public_path() . "/berkas_pelamar/" . $update->old_bahasa;
                    unlink($path_H);
                }

                DB::table('tb_harapan_kerja')->where('id_pelamar_harapan', $update->inpid)->update([
                    'penguasaan_bahasa' => $file_H_name,

                ]);
            }else{
                $file_H_name = $update->old_bahasa;
            }
            // UPDATE TABLE HARAPAN
            if($update->inppos == "Dalam Negeri") {
                // hapus berkas pelamar kalau ada
                $check_berkas = DB::table('tb_harapan_kerja')->where('id_pelamar_harapan', $update->inpid)->first();
                if($check_berkas->izin_keluarga_harapan != "-"){
                    $path_A = public_path() . "/berkas_pelamar/" . $check_berkas->izin_keluarga_harapan;
                    unlink($path_A);
                }
                if($check_berkas->bukunikah_harapan != "-"){
                    $path_B = public_path() . "/berkas_pelamar/" . $check_berkas->bukunikah_harapan;
                    unlink($path_B);
                }
                if($check_berkas->surat_ket_sehat_harapan != "-"){
                    $path_C = public_path() . "/berkas_pelamar/" . $check_berkas->surat_ket_sehat_harapan;
                    unlink($path_C);
                }
                if($check_berkas->sertifikat_keahlian_harapan != "-"){
                    $path_D = public_path() . "/berkas_pelamar/" . $check_berkas->sertifikat_keahlian_harapan;
                    unlink($path_D);
                }
                if($check_berkas->ktp_harapan != "-"){
                    $path_E = public_path() . "/berkas_pelamar/" . $check_berkas->ktp_harapan;
                    unlink($path_E);
                }
                // end hapus berkas

                DB::table('tb_harapan_kerja')->where('id_pelamar_harapan', $update->inpid)->update([
                    'penempatan_harapan' => $update->inppos,
                    'provinsi_harapan' => $update->prov_pdd,
                    'kota_harapan' => $update->kota_pdd,
                    'jabatan_harapan' => $update->kelompok_jabatan,
                    'pembayaran_gaji_harapan' => $update->sistem_pembayaran_harapan,
                    'besar_gaji_harapan' => $update->harapan_gaji,
                    'negara_luar_harapan' => "-",
                    'izin_keluarga_harapan' => "-",
                    'bukunikah_harapan' => "-",
                    'surat_ket_sehat_harapan' => "-",
                    'sertifikat_keahlian_harapan' => "-",
                    'ktp_harapan' => "-",
                    'pengalaman_kerja' => $file_F_name,
                    'keterampilan_kerja' => $file_G_name,
                    'penguasaan_bahasa' => $file_H_name,

                ]);

            }else{
                //update  izin keluarga
                if($update->hasfile('inpizin')){

                    $file_A = $update->file('inpizin');
                    $file_A_name = date('Y-m-d') . "-" . "id" . $update->inpid . $file_A->getClientOriginalName();

                    $file_A->move($lokasi_berkas, $file_A_name);

                    if($update->old_izin != "-"){
                        $path_A = public_path() . "/berkas_pelamar/" . $update->old_izin;
                        unlink($path_A);
                    }

                    DB::table('tb_harapan_kerja')->where('id_pelamar_harapan', $update->inpid)->update([
                        'izin_keluarga_harapan' => $file_A_name,

                    ]);

                }

                //update  buku nikah
                if($update->hasfile('inpnikah')){

                    $file_B = $update->file('inpnikah');
                    $file_B_name = date('Y-m-d') . "-" . "id" . $update->inpid . $file_B->getClientOriginalName();

                    $file_B->move($lokasi_berkas, $file_B_name);

                    if($update->old_nikah != "-"){
                        $path_B = public_path() . "/berkas_pelamar/" . $update->old_nikah;
                        unlink($path_B);
                    }

                    DB::table('tb_harapan_kerja')->where('id_pelamar_harapan', $update->inpid)->update([
                        'bukunikah_harapan' => $file_B_name,

                    ]);
                }

                //update surat sehat
                if($update->hasfile('inpsehat')){

                    $file_C = $update->file('inpsehat');
                    $file_C_name = date('Y-m-d') . "-" . "id" . $update->inpid . $file_C->getClientOriginalName();

                    $file_C->move($lokasi_berkas, $file_C_name);
                    if($update->old_sehat != "-"){
                        $path_C = public_path() . "/berkas_pelamar/" . $update->old_sehat;
                        unlink($path_C);
                    }
                    DB::table('tb_harapan_kerja')->where('id_pelamar_harapan', $update->inpid)->update([
                        'surat_ket_sehat_harapan' => $file_C_name,

                    ]);
                }

                //update sertifikat keahlian
                if($update->hasfile('inpkeahlian')) {

                    $file_D = $update->file('inpkeahlian');
                    $file_D_name = date('Y-m-d') . "-" . "id" . $update->inpid . $file_D->getClientOriginalName();

                    $file_D->move($lokasi_berkas, $file_D_name);

                    if($update->old_ahli != "-"){
                        $path_D = public_path() . "/berkas_pelamar/" . $update->old_ahli;
                        unlink($path_D);
                    }

                    DB::table('tb_harapan_kerja')->where('id_pelamar_harapan', $update->inpid)->update([
                        'sertifikat_keahlian_harapan' => $file_D_name,

                    ]);
                }

                //update KTP
                if($update->hasfile('inpktp')) {
                    $file_E = $update->file('inpktp');
                    $file_E_name = date('Y-m-d') . "-" . "id" . $update->inpid . $file_E->getClientOriginalName();

                    $file_E->move($lokasi_berkas, $file_E_name);

                    if($update->old_ktp != "-"){
                        $path_E = public_path() . "/berkas_pelamar/" . $update->old_ktp;
                        unlink($path_E);
                    }

                    DB::table('tb_harapan_kerja')->where('id_pelamar_harapan', $update->inpid)->update([
                        'ktp_harapan' => $file_E_name,

                    ]);

                }
                //end update  berkas pelamar
                DB::table('tb_harapan_kerja')->where('id_pelamar_harapan', $update->inpid)->update([
                    'penempatan_harapan' => $update->inppos,
                    'provinsi_harapan' => "-",
                    'kota_harapan' => "-",
                    'jabatan_harapan' => $update->kelompok_jabatan,
                    'pembayaran_gaji_harapan' => $update->sistem_pembayaran_harapan,
                    'besar_gaji_harapan' => $update->harapan_gaji,
                    'negara_luar_harapan' => $update->inpnegarahrpn,
                    'pengalaman_kerja' => $file_F_name,
                    'keterampilan_kerja' => $file_G_name,
                    'penguasaan_bahasa' => $file_H_name,
                ]);
            }
            // END UPDATE TABLE HARAPAN
        } else {
            //izin keluarga
            if($update->hasfile('inpizin')){
                $file_A = $update->file('inpizin');
                $file_A_name = date('Y-m-d') . "-" . "id" . $update->inpid . $file_A->getClientOriginalName();

                $lokasi_berkas = 'berkas_pelamar';

                $file_A->move($lokasi_berkas, $file_A_name);
            }else{
                $file_A_name = "-";

            }
            //buku nikah
            if($update->hasfile('inpnikah')){

                $file_B = $update->file('inpnikah');
                $file_B_name = date('Y-m-d') . "-" . "id" . $update->inpid . $file_B->getClientOriginalName();

                $file_B->move($lokasi_berkas, $file_B_name);
            }else{
                $file_B_name = "-";

            }
            //surat sehat
            if($update->hasfile('inpsehat')){

                $file_C = $update->file('inpsehat');
                $file_C_name = date('Y-m-d') . "-" . "id" . $update->inpid . $file_C->getClientOriginalName();

                $file_C->move($lokasi_berkas, $file_C_name);
            }else{
                $file_C_name = "-";

            }
            //sertifikat keahlian
            if($update->hasfile('inpkeahlian')){

                $file_D = $update->file('inpkeahlian');
                $file_D_name = date('Y-m-d') . "-" . "id" . $update->inpid . $file_D->getClientOriginalName();

                $file_D->move($lokasi_berkas, $file_D_name);
            }else{
                $file_D_name = "-";

            }
            //KTP
            if($update->hasfile('inpktp')){

                $file_E = $update->file('inpktp');
                $file_E_name = date('Y-m-d') . "-" . "id" . $update->inpid . $file_E->getClientOriginalName();

                $file_E->move($lokasi_berkas, $file_E_name);
            }else{
                $file_E_name = "-";

            }
            //Pengalaman kerja
            if($update->hasfile('inppengalaman')){

                $file_F = $update->file('inppengalaman');
                $file_F_name = date('Y-m-d') . "-" . "id" . $update->inpid . $file_F->getClientOriginalName();

                $file_F->move($lokasi_berkas, $file_F_name);
            }else{
                $file_F_name = "-";

            }
            //Keterampilan
            if($update->hasfile('inpketerampilan')){

                $file_G = $update->file('inpketerampilan');
                $file_G_name = date('Y-m-d') . "-" . "id" . $update->inpid . $file_G->getClientOriginalName();

                $file_G->move($lokasi_berkas, $file_G_name);
            }else{
                $file_G_name = "-";

            }
            //Bahasa
            if($update->hasfile('inpbahasa')){

                $file_H = $update->file('inpbahasa');
                $file_H_name = date('Y-m-d') . "-" . "id" . $update->inpid . $file_H->getClientOriginalName();

                $file_H->move($lokasi_berkas, $file_H_name);
            }else{
                $file_H_name = "-";

            }
            //end berkas pelamar

            if($update->inppos == "Dalam Negeri"){
                DB::table('tb_harapan_kerja')->insert([
                    'id_pelamar_harapan' => $update->inpid,
                    'penempatan_harapan' => $update->inppos,
                    'provinsi_harapan' => $update->prov_pdd,
                    'kota_harapan' => $update->kota_pdd,
                    'jabatan_harapan' => $update->kelompok_jabatan,
                    'pembayaran_gaji_harapan' => $update->sistem_pembayaran_harapan,
                    'besar_gaji_harapan' => $update->harapan_gaji,
                    'negara_luar_harapan' => "-",
                    'izin_keluarga_harapan' => "-",
                    'bukunikah_harapan' => "-",
                    'surat_ket_sehat_harapan' => "-",
                    'sertifikat_keahlian_harapan' => "-",
                    'ktp_harapan' => "-",
                    'pengalaman_kerja' => $file_F_name,
                    'keterampilan_kerja' => $file_G_name,
                    'penguasaan_bahasa' => $file_H_name,

                ]);
            }else{
                DB::table('tb_harapan_kerja')->insert([
                    'id_pelamar_harapan' => $update->inpid,
                    'penempatan_harapan' => $update->inppos,
                    'provinsi_harapan' => "-",
                    'kota_harapan' => "-",
                    'jabatan_harapan' => $update->kelompok_jabatan,
                    'pembayaran_gaji_harapan' => $update->sistem_pembayaran_harapan,
                    'besar_gaji_harapan' => $update->harapan_gaji,
                    'negara_luar_harapan' => $update->inpnegarahrpn,
                    'izin_keluarga_harapan' => $file_A_name,
                    'bukunikah_harapan' => $file_B_name,
                    'surat_ket_sehat_harapan' => $file_C_name,
                    'sertifikat_keahlian_harapan' => $file_D_name,
                    'ktp_harapan' => $file_E_name,
                    'pengalaman_kerja' => $file_F_name,
                    'keterampilan_kerja' => $file_G_name,
                    'penguasaan_bahasa' => $file_H_name,

                ]);
            }
        }


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
        DB::table('tb_harapan_kerja')->where('id_pelamar', $delete->idpelamar)->delete();

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

    public function get_kecamatan($id)
    {
        $kecamatan = DB::table('tb_kecamatan')->where('regency_id', $id)->get();

        // kalau mau make respon HTML = "return $output;"
        //        $output = '<select class="select-css">';
        $output = '<option value="">- Pilih Kecamatan -</option>';

        foreach ($kecamatan as $k) {
            $output .= '<option value="' . $k->id . '">' . $k->name . '</option>';
        }
        //        $output .= '</select>';
        // kalau mau respon dalam object data db  = "return $kota;"

        echo $output;
    }
}
