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

    public function store_pelamar(Request $insert)
    {
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
            //irfan
            'inppos' => 'required',
            // 'prov_pdd' => 'required',
            // 'kota_pdd' => 'required',
            'kelompok_jabatan' => 'required',
            'sistem_pembayaran_harapan' => 'required',
            'harapan_gaji' => 'required',
            // 'penempatan_harapan' => 'required',
            // 'inpizin' => 'required',
            // 'inpnikah' => 'required',
            // 'inpsehat' => 'required',
            // 'inpkeahlian' => 'required',
            // 'inpktp' => 'required',

        ], $messages);

        // foto pelamar
            $img = $insert->file('inpfoto');
            $imgname = date('Y-m-d') . "-" . $img->getClientOriginalName();

            $location = 'pelamar';
            $img->move($location, $imgname);
        //izin keluarga
            $file_A = $insert->file('inpizin');
            $file_A_name = date('Y-m-d') . "-" . $file_A->getClientOriginalName();

            $lokasi_berkas = 'berkas_pelamar';

            $file_A->move($lokasi_berkas, $file_A_name);
        //buku nikah
            $file_B = $insert->file('inpnikah');
            $file_B_name = date('Y-m-d') . "-" . $file_B->getClientOriginalName();

            $file_B->move($lokasi_berkas, $file_B_name);
        //surat sehat
            $file_C = $insert->file('inpsehat');
            $file_C_name = date('Y-m-d') . "-" . $file_C->getClientOriginalName();

            $file_C->move($lokasi_berkas, $file_C_name);
        //sertifikat keahlian
            $file_D = $insert->file('inpkeahlian');
            $file_D_name = date('Y-m-d') . "-" . $file_D->getClientOriginalName();

            $file_D->move($lokasi_berkas, $file_D_name);
        //KTP
            $file_E = $insert->file('inpktp');
            $file_E_name = date('Y-m-d') . "-" . $file_E->getClientOriginalName();

            $file_E->move($lokasi_berkas, $file_E_name);
        //end berkas pelamar

        $checknik = DB::table('tb_pelamar')->where('nik_pelamar', $insert->a)->get()->count();

        $maxid = DB::table('tb_pelamar')->max('id_pelamar') + 1;

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
    
                ]);
            }



            DB::table('tb_pelamar')->insert([
                'id_pelamar' => $maxid,
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
                //baru di tambahkan irfan
                'foto_pelamar' => $imgname,
                'kondisi_pelamar' => $insert->inpkonfis,
                'kewarganegaraan_pelamar' => $insert->inpkewarganegaraan,
                'provinsi_pelamar' => $insert->inpprov,
                'kota_pelamar' => $insert->inpkota,
                'kec_pelamar' => $insert->inpkecamatan,
                'kodepos_pelamar' => $insert->inpkodepos,

                //end irfan
                'password_pelamar' => md5($insert->inppassword),
                'confirm_password_pelamar' => md5($insert->inpconfirm)
            ]);

            return redirect('/admin/halaman-manajemen-pelamar')->with('success-alert', 'Disimpan');
        } else {
            return redirect('/admin/halaman-tambah-pelamar')->with('error-alert', 'Pelamar Telah Terdaftar Sebelumnya');
        }
    }

    public function edit_pelamar($id)
    {
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
            'kwn' => DB::table('tb_kwn')->get()
        ];

        return view('/admin/content/view_pelamar_edit', $data);
    }

    public function update_pelamar(Request $update)
    {
        $messages = [
            'required' => 'Field Wajib Diisi *',
            'max' => 'Input Tidak Sesuai'
        ];

        //validasi form
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

        if ($update->inpfoto != '') {
            $check = DB::table('tb_pelamar')->where('inpusername', $update->inpid)->first();
            $ims = $check->logo_perusahaan;

            $img = $update->file('inppict');
            $imgname = $ims;

            $location = 'perusahaan';
            $img->move($location, $imgname);
        }

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

        return redirect('/admin/halaman-manajemen-pelamar')->with('success-alert', 'Disimpan');
    }

    public function delete_pelamar(Request $delete)
    {
        DB::table('tb_pelamar')->where('id_pelamar', $delete->idpelamar)->delete();

        return redirect('/admin/halaman-manajemen-pelamar')->with('success-alert', 'Dihapus');
    }

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
