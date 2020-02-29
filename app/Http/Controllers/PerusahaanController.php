<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator, Redirect, Response;
use Illuminate\Support\Facades\Auth;
use Session;

class PerusahaanController extends Controller
{
    public function index()
    {
        $data = [
            'title' => "Manajemen Perusahaan",
            'breadcrumb' => "Manajemen Perusahaan",
            'perusahaan' => DB::table('tb_perusahaan')->get()
        ];

        return view('/admin/content/view_perusahaan', $data);
    }

    public function tambah_perusahaan()
    {
        $data = [
            'title' => "Form Tambah Perusahaan",
            'breadcrumb' => "Tambah Perusahaan",
            'jenis' => DB::table('tb_jenisper')->get(),
            'provinsi' => DB::table('tb_provinsi')->get()
        ];

        return view('/admin/content/view_perusahaan_tambah', $data);
    }

    public function store_perusahaan(Request $insert)
    {
        $messages = [
            'required' => 'Field Wajib Diisi *',
            'max' => 'Input Tidak Sesuai',
            'email' => 'Format Email Salah'
        ];

        //validasi form
        $this->validate($insert, [
            'inpnama' => 'required|max:100',
            'inplengkap' => 'required',
            'inpnpwp' => 'max:50',
            'inpalamat' => 'required',
            'inpprov' => 'required',
            'inpkota' => 'required',
            'inpmap' => 'required',
            'inpjenis' => 'required|max:3',
            'inppos' => 'required|max:1',
            'inpkode' => 'required|max:8',
            'inpweb' => 'required',
            'inpdesk' => 'required',
            'inpkelas' => 'required',
            'inpaktivitas' => 'required',
            'inpproduk' => 'required',
            'inpasso' => 'required',
            'inpjawab' => 'required|max:100',
            'inptelepon' => 'required|max:15',
            'inpfax' => 'required|max:15',
            'inpemail' => 'required|max:50|email',
            'inppict' => 'required',
            'inppassword' => 'required|max:64',
            'inpconfirm' => 'required|max:64'
        ], $messages);

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

        return redirect('/admin/halaman-manajemen-perusahaan')->with('success-alert', 'Disimpan');
    }

    public function edit_perusahaan($id)
    {
        $data = [
            'title' => "Form Edit Data Perusahaan",
            'breadcrumb' => "Edit Data Perusahaan",
            'perusahaan' => DB::table('tb_perusahaan')->where('id_perusahaan', $id)->first(),
            'jenis' => DB::table('tb_jenisper')->get(),
            'provinsi' => DB::table('tb_provinsi')->get(),
            'kota' => DB::table('tb_kota')->get()
        ];

        return view('/admin/content/view_perusahaan_edit', $data);
    }

    public function update_perusahaan(Request $update)
    {
        $messages = [
            'required' => 'Field Wajib Diisi *',
            'max' => 'Input Tidak Sesuai',
            'email' => 'Format Email Salah'
        ];

        //validasi form 
        $this->validate($update, [
            'inpnama' => 'required|max:100',
            'inplengkap' => 'required',
            'inpnpwp' => 'max:50',
            'inpalamat' => 'required',
            'inpprov' => 'required',
            'inpkota' => 'required',
            'inpmap' => 'required',
            'inpjenis' => 'required|max:3',
            'inppos' => 'required|max:1',
            'inpkode' => 'required|max:8',
            'inpweb' => 'required',
            'inpdesk' => 'required',
            'inpkelas' => 'required',
            'inpaktivitas' => 'required|max:75',
            'inpproduk' => 'required|max:75',
            'inpasso' => 'required|max:50',
            'inpjawab' => 'required|max:100',
            'inptelepon' => 'required|max:15',
            'inpfax' => 'required|max:15',
            'inpemail' => 'required|max:50|email',
            'inppassword' => 'required|max:64',
            'inpconfirm' => 'required|max:64'
        ], $messages);

        if ($update->inppict != '') {
            $check = DB::table('tb_perusahaan')->where('id_perusahaan', $update->inpid)->first();
            $ims = $check->logo_perusahaan;

            $img = $update->file('inppict');
            $imgname = $ims;

            $location = 'perusahaan';
            $img->move($location, $imgname);
        }

        DB::table('tb_perusahaan')->where('id_perusahaan', $update->inpid)->update([
            'nama_perusahaan' => $update->inpnama,
            'lengkap_perusahaan' => $update->inplengkap,
            'npwp_perusahaan' => $update->inpnpwp,
            'alamat_perusahaan' => $update->inpalamat,
            'id_provinsi' => $update->inpprov,
            'id_kota' => $update->inpkota,
            'id_kecamatan' => $update->inpkecamatan,
            'map_perusahaan' => $update->inpmap,
            'id_jenis' => $update->inpjenis,
            'kelas_perusahaan' => $update->inpkelas,
            'lokasi_perusahaan' => $update->inppos,
            'kodepos_perusahaan' => $update->inpkode,
            'web_perusahaan' => $update->inpweb,
            'desk_perusahaan' => $update->inpdesk,
            'aktivitas_perusahaan' => $update->inpaktivitas,
            'produk_perusahaan' => $update->inpproduk,
            'penanggung_perusahaan' => $update->inpjawab,
            'telp_perusahaan' => $update->inptelepon,
            'fax_perusahaan' => $update->inpfax,
            'email_perusahaan' => $update->inpemail,
            'association' => $update->inpasso,
            'password_perusahaan' => md5($update->inppassword),
            'confirm_password_perusahaan' => md5($update->inpconfirm)
        ]);

        if (Session::get('login-pr') == true) {
            return redirect('/perusahaan/halaman-profile-perusahaan')->with('success-alert', 'Disimpan');
        } else {
            return redirect('/admin/halaman-manajemen-perusahaan')->with('success-alert', 'Disimpan');
        }
    }

    public function delete_perusahaan(Request $delete)
    {
        DB::table('tb_perusahaan')->where('id_perusahaan', $delete->idperusahaan)->delete();

        return redirect('/admin/halaman-manajemen-perusahaan')->with('success-alert', 'Dihapus');
    }

    //login perusahaan
    public function dashboard()
    {
        $idperusahaan = Session::get('iduser');

        $data = [
            'title' => "Manajemen Lowongan",
            'breadcrumb' => "Manajemen Lowongan",
            'lowongan' => DB::table('tb_lowongan')
                ->join('tb_perusahaan', 'tb_perusahaan.id_perusahaan', '=', 'tb_lowongan.id_perusahaan')
                ->where('tb_perusahaan.id_perusahaan', $idperusahaan)->get()
        ];

        return view('/admin/content/perusahaan/view_log_perusahaan', $data);
    }

    public function tambah_lowongan()
    {
        $data = [
            'title' => "Form Tambah Lowongan",
            'breadcrumb' => "Tambah Lowongan - " . Session::get('lengkapuser')
        ];

        return view('/admin/content/perusahaan/view_log_perusahaan_tambah', $data);
    }

    public function store_lowongan(Request $insert)
    {
        $messages = [
            'required' => 'Field Wajib Diisi *',
            'max' => 'Input Tidak Sesuai'
        ];

        //validasi form
        $this->validate($insert, [
            'b' => 'required|max:150',
            'c' => 'required|max:10',
            'd' => 'required|max:11',
            'e' => 'required',
            'f' => 'required'
        ], $messages);

        DB::table('tb_lowongan')->insert([
            'id_perusahaan' => Session::get('iduser'),
            'posisi_lowongan' => $insert->b,
            'status_lowongan' => $insert->c,
            'gaji_lowongan' => $insert->d,
            'pengalaman_lowongan' => $insert->e,
            'desk_lowongan' => $insert->f
        ]);

        return redirect('/perusahaan/halaman-manajemen-lowongan')->with('success-alert', 'Disimpan');
    }

    public function edit_lowongan($id)
    {
        $data = [
            'title' => "Form Edit Lowongan",
            'breadcrumb' => "Edit Lowongan - " . Session::get('lengkapuser'),
            'lowongan' => DB::table('tb_lowongan')
                ->join('tb_perusahaan', 'tb_perusahaan.id_perusahaan', '=', 'tb_lowongan.id_perusahaan')
                ->where('id_lowongan', $id)->first()
        ];

        return view('/admin/content/perusahaan/view_log_perusahaan_edit', $data);
    }

    public function update_lowongan(Request $update)
    {
        $messages = [
            'required' => 'Field Wajib Diisi *',
            'max' => 'Input Tidak Sesuai'
        ];

        //validasi form
        $this->validate($update, [
            'b' => 'required|max:150',
            'c' => 'required|max:10',
            'd' => 'required|max:11',
            'e' => 'required',
            'f' => 'required'
        ], $messages);

        DB::table('tb_lowongan')->where('id_lowongan', $update->inpid)->update([
            'id_perusahaan' => Session::get('iduser'),
            'posisi_lowongan' => $update->b,
            'status_lowongan' => $update->c,
            'gaji_lowongan' => $update->d,
            'pengalaman_lowongan' => $update->e,
            'desk_lowongan' => $update->f
        ]);

        return redirect('/perusahaan/halaman-manajemen-lowongan')->with('success-alert', 'Disimpan');
    }

    public function delete_lowongan(Request $delete)
    {
        DB::table('tb_lowongan')->where('id_lowongan', $delete->idlowongan)->delete();

        return redirect('/perusahaan/halaman-manajemen-lowongan')->with('success-alert', 'Dihapus');
    }

    public function detail_lowongan($id, $per)
    {
        $perusahaan = DB::table('tb_perusahaan')->where('id_perusahaan', $per)->first();
        $nama = $perusahaan->nama_perusahaan;
        $lengkap = $perusahaan->lengkap_perusahaan;

        $data = [
            'title' => "Form Edit Lowongan",
            'breadcrumb' => $nama . " - " . $lengkap,
            'pelamar' => DB::table('tb_pelamar')->get(),
            'detpelamar' => DB::table('tb_pelamar')
                ->join('tb_det_lowongan', 'tb_det_lowongan.id_pelamar', '=', 'tb_pelamar.id_pelamar')
                ->where('tb_det_lowongan.id_lowongan', $id)->get(),
            'lowonganID' => $id,
            'perusahaanID' => $per
        ];

        return view('/admin/content/perusahaan/view_log_perusahaan_detail', $data);
    }

    public function tambah_detail_lowongan($low, $pl, $per)
    {
        $check = DB::table('tb_det_lowongan')->where('id_lowongan', $low)->where('id_pelamar', $pl)->get()->count();

        if ($check == 0) {
            DB::table('tb_det_lowongan')->insert([
                'id_lowongan' => $low,
                'id_pelamar' => $pl
            ]);

            return redirect()->route('perusahaan_detail_lowongan', ['id' => $low, 'per' => $per])->with('success-alert', 'Disimpan');
        } else {
            return redirect()->route('perusahaan_detail_lowongan', ['id' => $low, 'per' => $per])->with('error-alert', 'Pelamar Sudah Terdaftar!');
        }
    }

    public function delete_detail_lowongan(Request $delete)
    {
        DB::table('tb_det_lowongan')->where('id_detlow', $delete->iddetail)->delete();

        return redirect()->route('perusahaan_detail_lowongan', ['id' => $delete->idlowongan, 'per' => $delete->idperusahaan])->with('success-alert', 'Dihapus');
    }

    public function detail_perusahaan($id)
    {
        $perusahaan = DB::table('tb_perusahaan')->where('id_perusahaan', $id)->first();

        $data = [
            'title' => "Detail Perusahaan",
            'breadcrumb' => $perusahaan->nama_perusahaan,
            'perusahaan' => $perusahaan,
            'gallery' => DB::table('tb_det_gallery')->where('id_perusahaan', $id)->get()
        ];

        return view('/admin/content/view_perusahaan_detail', $data);
    }

    public function store_gal_perusahaan(Request $upload)
    {
        $this->validate($upload, [
            'pict_gall' => 'required',
            'ket_gall' => 'required',
        ]);

        $img = $upload->file('pict_gall');
        $imgname = date('Y_m_d_H_i_s') . $img->getClientOriginalExtension();

        $location = 'perusahaan/gallery';
        $img->move($location, $imgname);

        DB::table('tb_det_gallery')->insert([
            'id_perusahaan' => $upload->idper_gall,
            'nama_detgal' => $imgname,
            'ket_detgal' => $upload->ket_gall
        ]);

        return redirect()->back();
    }

    public function change_pro_perusahaan(Request $update)
    {
        $this->validate($update, [
            'pict_corp' => 'required'
        ]);

        $check = DB::table('tb_perusahaan')->where('id_perusahaan', $update->idper_corp)->first();
        $ims = $check->logo_perusahaan;

        $img = $update->file('pict_corp');
        $imgname = $ims;

        $location = 'perusahaan';
        $img->move($location, $imgname);

        DB::table('tb_perusahaan')->where('id_perusahaan', $update->idper_corp)->update([
            'logo_perusahaan' => $imgname
        ]);

        return redirect()->back();
    }

    public function profile()
    {
        $perusahaan = DB::table('tb_perusahaan')->where('id_perusahaan', Session::get('iduser'))->first();

        $data = [
            'title' => "Detail Perusahaan",
            'breadcrumb' => $perusahaan->nama_perusahaan,
            'perusahaan' => $perusahaan,
            'gallery' => DB::table('tb_det_gallery')->where('id_perusahaan', Session::get('iduser'))->get()
        ];

        return view('/admin/content/view_perusahaan_detail', $data);
    }

    public function get_kota($id)
    {
        $kota = DB::table('tb_kota')->where('province_id', $id)->get();

        // kalau mau make respon HTML = "return $output;"
        //        $output = '<select class="select-css">';
        $output = '<option value="">- Pilih Kota -</option>';

        foreach ($kota as $k) {
            $output .= '<option value="' . $k->id . '">' . $k->name . '</option>';
        }
        //        $output .= '</select>';
        // kalau mau respon dalam object data db  = "return $kota;"

        echo $output;
    }
    public function get_dettingkatpdd($id)
    {
        $kota = DB::table('tb_det_tingkatpdd')->where('id_tingkatpdd', $id)->get();

        // kalau mau make respon HTML = "return $output;"
        //        $output = '<select class="select-css">';
        $output = '<option value="">- Pilih Jurusan -</option>';

        foreach ($kota as $k) {
            $output .= '<option value="' . $k->id_det_tingkatpdd . '">' . $k->jenis_det_tingkatpdd . '</option>';
        }
        //        $output .= '</select>';
        // kalau mau respon dalam object data db  = "return $kota;"

        echo $output;
    }
}
