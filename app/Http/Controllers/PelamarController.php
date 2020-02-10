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
            'provinsi' => DB::table('tb_provinsi')->get()

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
            'a' => 'required|max:17',
            'b' => 'required|max:50',
            'c' => 'required|max:50',
            'd' => 'required',
            'e' => 'required|max:1',
            'f' => 'required|max:50',
            'g' => 'required',
            'h' => 'required|max:10',
            'i' => 'required|max:2',
            'j' => 'required|max:3',
            'k' => 'required|max:3',
            'l' => 'required|max:15',
            'm' => 'required|max:50',
            'n' => 'required|max:64',
            'o' => 'required|max:64',
            'p' => 'required',
            'q' => 'required',
            'r' => 'required',
            's' => 'required',
            't' => 'required',
            'u' => 'required',
            'v' => 'required',
            'w' => 'required',



        ], $messages);

        $img = $insert->file('p');
        $imgname = date('Y-m-d')."-".$img->getClientOriginalName();
        
        $location = 'pelamar';
		$img->move($location,$imgname);

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
                //baru di tambahkan irfan
                'foto_pelamar' => $insert->p,
                'kondisi_pelamar' => $insert->r,
                'kewarganegaraan_pelamar' => $insert->s,
                'provinsi_pelamar' => $insert->t,
                'kota_pelamar' => $insert->u,
                'kec_pelamar' => $insert->v,
                'kodepos_pelamar' => $insert->w,

                //end irfan
                'password_pelamar' => md5($insert->n),
                'confirm_password_pelamar' => md5($insert->o)
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
            'pelamar' => DB::table('tb_pelamar')->where('id_pelamar', $id)->first()
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
            'a' => 'required|max:17',
            'b' => 'required|max:50',
            'c' => 'required|max:50',
            'd' => 'required',
            'e' => 'required|max:1',
            'f' => 'required|max:50',
            'g' => 'required',
            'h' => 'required|max:10',
            'i' => 'required|max:2',
            'j' => 'required|max:3',
            'k' => 'required|max:3',
            'l' => 'required|max:15',
            'm' => 'required|max:50',
            'n' => 'required|max:64',
            'o' => 'required|max:64'
        ], $messages);

        DB::table('tb_pelamar')->where('id_pelamar', $update->inpid)->update([
            'npwp_pelamar' => $update->b,
            'nama_pelamar' => $update->c,
            'alamat_pelamar' => $update->d,
            'kelamin_pelamar' => $update->e,
            'tplahir_pelamar' => $update->f,
            'tglahir_pelamar' => $update->g,
            'agama_pelamar' => $update->h,
            'status_pelamar' => $update->i,
            'tinggi_pelamar' => $update->j,
            'berat_pelamar' => $update->k,
            'telp_pelamar' => $update->l,
            'email_pelamar' => $update->m,
            'password_pelamar' => md5($update->n),
            'confirm_password_pelamar' => md5($update->o)
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
