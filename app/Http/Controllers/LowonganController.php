<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator, Redirect, Response;
use App\Mail\GatewayMailLow;
use Illuminate\Support\Facades\Mail;

class LowonganController extends Controller
{
    public function index()
    {
        $data = [
            'title' => "Manajemen Data Lowongan",
            'breadcrumb' => "Data Lowongan",
            'lowongan' => DB::table('tb_lowongan')
                ->join('tb_perusahaan', 'tb_perusahaan.id_perusahaan', '=', 'tb_lowongan.id_perusahaan')
                ->join('tb_provinsi', 'tb_provinsi.id', '=', 'tb_lowongan.prov_lowongan')
                ->join('tb_kota', 'tb_kota.id', '=', 'tb_lowongan.kota_lowongan')
                ->join('tb_kecamatan', 'tb_kecamatan.id', '=', 'tb_lowongan.kec_lowongan')
                ->selectRaw('tb_lowongan.*, tb_perusahaan.*, tb_det_tingkatpdd.*, tb_tingkatpdd.*, tb_provinsi.name as provname, tb_kota.name as kotaname, tb_kecamatan.name as kecname')
                ->join('tb_det_tingkatpdd', 'tb_det_tingkatpdd.id_det_tingkatpdd', '=', 'tb_lowongan.jurusan_pdd_lowongan')
                ->join('tb_tingkatpdd', 'tb_tingkatpdd.id_tingkatpdd', '=', 'tb_det_tingkatpdd.id_tingkatpdd')
                ->where('tb_lowongan.tgl_akhir_lowongan', '>', date('Y-m-d'))
                ->get(),
            'jabatan' => DB::table('tb_jabatan')->get(),
            'tingkatPdd' => DB::table('tb_tingkatpdd')->get(),
            'provinsi' => DB::table('tb_provinsi')->get(),
            'kecamatan' => DB::table('tb_kecamatan')->where('regency_id', '3372')->get(),
            'lu' => DB::table('tb_perusahaan')->get()
        ];

        return view('/admin/content/view_lowongan', $data);
    }

    //filter dalam - luar
    public function dndisabilitas()
    {
        $data = [
            'title' => "Manajemen Data Lowongan",
            'breadcrumb' => "Data Lowongan Dalam Negeri - Disabilitas",
            'lowongan' => DB::table('tb_lowongan')
                ->join('tb_perusahaan', 'tb_perusahaan.id_perusahaan', '=', 'tb_lowongan.id_perusahaan')
                ->join('tb_provinsi', 'tb_provinsi.id', '=', 'tb_lowongan.prov_lowongan')
                ->join('tb_kota', 'tb_kota.id', '=', 'tb_lowongan.kota_lowongan')
                ->join('tb_kecamatan', 'tb_kecamatan.id', '=', 'tb_lowongan.kec_lowongan')
                ->selectRaw('tb_lowongan.*, tb_perusahaan.*, tb_det_tingkatpdd.*, tb_tingkatpdd.*, tb_provinsi.name as provname, tb_kota.name as kotaname, tb_kecamatan.name as kecname')
                ->join('tb_det_tingkatpdd', 'tb_det_tingkatpdd.id_det_tingkatpdd', '=', 'tb_lowongan.jurusan_pdd_lowongan')
                ->join('tb_tingkatpdd', 'tb_tingkatpdd.id_tingkatpdd', '=', 'tb_det_tingkatpdd.id_tingkatpdd')
                ->where('tb_lowongan.kondisi_lowongan', 'Disabilitas')
                ->where('tb_lowongan.tempat_lowongan', 'DN')
                ->where('tb_lowongan.tgl_akhir_lowongan', '>', date('Y-m-d'))
                ->get(),
            'jabatan' => DB::table('tb_jabatan')->get(),
            'tingkatPdd' => DB::table('tb_tingkatpdd')->get(),
            'provinsi' => DB::table('tb_provinsi')->get(),
            'kecamatan' => DB::table('tb_kecamatan')->where('regency_id', '3372')->get(),
            'lu' => DB::table('tb_perusahaan')->get()
        ];

        return view('/admin/content/view_lowongan', $data);
    }

    public function dnnondisabilitas()
    {
        $data = [
            'title' => "Manajemen Data Lowongan",
            'breadcrumb' => "Data Lowongan",
            'lowongan' => DB::table('tb_lowongan')
                ->join('tb_perusahaan', 'tb_perusahaan.id_perusahaan', '=', 'tb_lowongan.id_perusahaan')
                ->join('tb_provinsi', 'tb_provinsi.id', '=', 'tb_lowongan.prov_lowongan')
                ->join('tb_kota', 'tb_kota.id', '=', 'tb_lowongan.kota_lowongan')
                ->join('tb_kecamatan', 'tb_kecamatan.id', '=', 'tb_lowongan.kec_lowongan')
                ->selectRaw('tb_lowongan.*, tb_perusahaan.*, tb_det_tingkatpdd.*, tb_tingkatpdd.*, tb_provinsi.name as provname, tb_kota.name as kotaname, tb_kecamatan.name as kecname')
                ->join('tb_det_tingkatpdd', 'tb_det_tingkatpdd.id_det_tingkatpdd', '=', 'tb_lowongan.jurusan_pdd_lowongan')
                ->join('tb_tingkatpdd', 'tb_tingkatpdd.id_tingkatpdd', '=', 'tb_det_tingkatpdd.id_tingkatpdd')
                ->where('tb_lowongan.kondisi_lowongan', 'Non Disabilitas')
                ->where('tb_lowongan.tempat_lowongan', 'DN')
                ->where('tb_lowongan.tgl_akhir_lowongan', '>', date('Y-m-d'))
                ->get(),
            'jabatan' => DB::table('tb_jabatan')->get(),
            'tingkatPdd' => DB::table('tb_tingkatpdd')->get(),
            'provinsi' => DB::table('tb_provinsi')->get(),
            'kecamatan' => DB::table('tb_kecamatan')->where('regency_id', '3372')->get(),
            'lu' => DB::table('tb_perusahaan')->get()
        ];

        return view('/admin/content/view_lowongan', $data);
    }

    public function lndisabilitas()
    {
        $data = [
            'title' => "Manajemen Data Lowongan",
            'breadcrumb' => "Data Lowongan",
            'lowongan' => DB::table('tb_lowongan')
                ->join('tb_perusahaan', 'tb_perusahaan.id_perusahaan', '=', 'tb_lowongan.id_perusahaan')
                ->join('tb_provinsi', 'tb_provinsi.id', '=', 'tb_lowongan.prov_lowongan')
                ->join('tb_kota', 'tb_kota.id', '=', 'tb_lowongan.kota_lowongan')
                ->join('tb_kecamatan', 'tb_kecamatan.id', '=', 'tb_lowongan.kec_lowongan')
                ->selectRaw('tb_lowongan.*, tb_perusahaan.*, tb_det_tingkatpdd.*, tb_tingkatpdd.*, tb_provinsi.name as provname, tb_kota.name as kotaname, tb_kecamatan.name as kecname')
                ->join('tb_det_tingkatpdd', 'tb_det_tingkatpdd.id_det_tingkatpdd', '=', 'tb_lowongan.jurusan_pdd_lowongan')
                ->join('tb_tingkatpdd', 'tb_tingkatpdd.id_tingkatpdd', '=', 'tb_det_tingkatpdd.id_tingkatpdd')
                ->where('tb_lowongan.kondisi_lowongan', 'Disabilitas')
                ->where('tb_lowongan.tempat_lowongan', 'LN')
                ->where('tb_lowongan.tgl_akhir_lowongan', '>', date('Y-m-d'))
                ->get(),
            'jabatan' => DB::table('tb_jabatan')->get(),
            'tingkatPdd' => DB::table('tb_tingkatpdd')->get(),
            'provinsi' => DB::table('tb_provinsi')->get(),
            'kecamatan' => DB::table('tb_kecamatan')->where('regency_id', '3372')->get(),
            'lu' => DB::table('tb_perusahaan')->get()
        ];

        return view('/admin/content/view_lowongan', $data);
    }

    public function lnnondisabilitas()
    {
        $data = [
            'title' => "Manajemen Data Lowongan",
            'breadcrumb' => "Data Lowongan",
            'lowongan' => DB::table('tb_lowongan')
                ->join('tb_perusahaan', 'tb_perusahaan.id_perusahaan', '=', 'tb_lowongan.id_perusahaan')
                ->join('tb_provinsi', 'tb_provinsi.id', '=', 'tb_lowongan.prov_lowongan')
                ->join('tb_kota', 'tb_kota.id', '=', 'tb_lowongan.kota_lowongan')
                ->join('tb_kecamatan', 'tb_kecamatan.id', '=', 'tb_lowongan.kec_lowongan')
                ->selectRaw('tb_lowongan.*, tb_perusahaan.*, tb_det_tingkatpdd.*, tb_tingkatpdd.*, tb_provinsi.name as provname, tb_kota.name as kotaname, tb_kecamatan.name as kecname')
                ->join('tb_det_tingkatpdd', 'tb_det_tingkatpdd.id_det_tingkatpdd', '=', 'tb_lowongan.jurusan_pdd_lowongan')
                ->join('tb_tingkatpdd', 'tb_tingkatpdd.id_tingkatpdd', '=', 'tb_det_tingkatpdd.id_tingkatpdd')
                ->where('tb_lowongan.kondisi_lowongan', 'Non Disabilitas')
                ->where('tb_lowongan.tempat_lowongan', 'LN')
                ->where('tb_lowongan.tgl_akhir_lowongan', '>', date('Y-m-d'))
                ->get(),
            'jabatan' => DB::table('tb_jabatan')->get(),
            'tingkatPdd' => DB::table('tb_tingkatpdd')->get(),
            'provinsi' => DB::table('tb_provinsi')->get(),
            'kecamatan' => DB::table('tb_kecamatan')->where('regency_id', '3372')->get(),
            'lu' => DB::table('tb_perusahaan')->get()
        ];

        return view('/admin/content/view_lowongan', $data);
    }
    
    public function lownonaktif()
    {
        $data = [
            'title' => "Manajemen Data Lowongan",
            'breadcrumb' => "Data Lowongan",
            'lowongan' => DB::table('tb_lowongan')
                ->join('tb_perusahaan', 'tb_perusahaan.id_perusahaan', '=', 'tb_lowongan.id_perusahaan')
                ->join('tb_provinsi', 'tb_provinsi.id', '=', 'tb_lowongan.prov_lowongan')
                ->join('tb_kota', 'tb_kota.id', '=', 'tb_lowongan.kota_lowongan')
                ->join('tb_kecamatan', 'tb_kecamatan.id', '=', 'tb_lowongan.kec_lowongan')
                ->selectRaw('tb_lowongan.*, tb_perusahaan.*, tb_det_tingkatpdd.*, tb_tingkatpdd.*, tb_provinsi.name as provname, tb_kota.name as kotaname, tb_kecamatan.name as kecname')
                ->join('tb_det_tingkatpdd', 'tb_det_tingkatpdd.id_det_tingkatpdd', '=', 'tb_lowongan.jurusan_pdd_lowongan')
                ->join('tb_tingkatpdd', 'tb_tingkatpdd.id_tingkatpdd', '=', 'tb_det_tingkatpdd.id_tingkatpdd')
                ->where('tb_lowongan.tgl_akhir_lowongan', '<', date('Y-m-d'))
                ->get(),
            'jabatan' => DB::table('tb_jabatan')->get(),
            'tingkatPdd' => DB::table('tb_tingkatpdd')->get(),
            'provinsi' => DB::table('tb_provinsi')->get(),
            'kecamatan' => DB::table('tb_kecamatan')->where('regency_id', '3372')->get(),
            'lu' => DB::table('tb_perusahaan')->get()
        ];

        return view('/admin/content/view_lowongan', $data);
    }
    //end filter dalam - luar

    public function tambah_lowongan()
    {
        $data = [
            'title' => "Form Tambah Lowongan",
            'breadcrumb' => "Tambah Lowongan",
            'perusahaan' => DB::table('tb_perusahaan')->orderBy('nama_perusahaan', 'asc')->get(),
            'jabatan' => DB::table('tb_jabatan')->get(),
            'kompetensi' => DB::table('tb_kompetensi')->get(),
            'provinsi' => DB::table('tb_provinsi')->get(),
            'tingkatpdd' => DB::table('tb_tingkatpdd')->get(),

        ];

        return view('/admin/content/view_lowongan_tambah', $data);
    }

    public function store_lowongan(Request $insert)
    {
        $messages = [
            'required' => 'Field Wajib Diisi *',
            'max' => 'Input Tidak Sesuai'
        ];

        //validasi form
        $this->validate($insert, [
            'a' => 'required|max:11',
            'b' => 'required|max:150',
            'c' => 'required|max:10',
            'd' => 'required|max:11',
            'e' => 'required',
            'f' => 'required',
            'cc' => 'required',
            'g' => 'required',
            'h' => 'required',
            'i' => 'required',
            'j' => 'required',
            'k' => 'required',
            'l' => 'required',
            'n' => 'required',
            'o' => 'required',
            'p' => 'required',


        ], $messages);

        DB::table('tb_lowongan')->insert([
            'id_perusahaan' => $insert->a,
            'posisi_lowongan' => $insert->b,
            'formasi_jabatan' => $insert->g,
            'status_lowongan' => $insert->c,
            'kondisi_lowongan' => $insert->ccc,
            'tempat_lowongan' => $insert->p,

            'tgl_mulai_lowongan' => $insert->h,
            'tgl_akhir_lowongan' => $insert->i,
            'jurusan_pdd_lowongan' => $insert->n,
            'detail_kejuruan_lowongan' => $insert->m,
            'jml_lowongan_pria' => $insert->j,
            'jml_lowongan_wanita' => $insert->k,
            'sistem_pengupahan_gaji' => $insert->l,
            'status_hubungan_kerja' => $insert->o,

            'prov_lowongan' => $insert->inpprov,
            'kota_lowongan' => $insert->inpkota,
            'kec_lowongan' => $insert->inpkecamatan,
            'gaji_lowongan' => $insert->d,
            'pengalaman_lowongan' => $insert->e,
            'id_tingkatpdd_lowongan' => $insert->cc,
            'desk_lowongan' => $insert->f
        ]);

        return redirect('/admin/halaman-manajemen-lowongan')->with('success-alert', 'Disimpan');
    }

    public function edit_lowongan($id)
    {
        $data = [
            'title' => "Form Edit Lowongan",
            'breadcrumb' => "Edit Lowongan",
            'lowongan' => DB::table('tb_lowongan')
                ->join('tb_perusahaan', 'tb_perusahaan.id_perusahaan', '=', 'tb_lowongan.id_perusahaan')
                ->where('id_lowongan', $id)->first(),
            'perusahaan' => DB::table('tb_perusahaan')->orderBy('nama_perusahaan', 'asc')->get(),
            'jabatan' => DB::table('tb_jabatan')->get(),
            'kompetensi' => DB::table('tb_kompetensi')->get(),
            'provinsi' => DB::table('tb_provinsi')->get(),
            'kota' => DB::table('tb_kota')->get(),
            'kecamatan' => DB::table('tb_kecamatan')->get(),
            'tingkatpdd' => DB::table('tb_tingkatpdd')->get(),
            'detpdd' => DB::table('tb_det_tingkatpdd')->get(),

        ];

        return view('/admin/content/view_lowongan_edit', $data);
    }

    public function update_lowongan(Request $update)
    {
        $messages = [
            'required' => 'Field Wajib Diisi *',
            'max' => 'Input Tidak Sesuai'
        ];

        //validasi form
        $this->validate($update, [
            'a' => 'required|max:11',
            'b' => 'required|max:150',
            'c' => 'required|max:10',
            'd' => 'required|max:11',
            'e' => 'required',
            'f' => 'required',
            'cc' => 'required',
            'g' => 'required',
            'h' => 'required',
            'i' => 'required',
            'j' => 'required',
            'k' => 'required',
            'l' => 'required',
            'n' => 'required',
            'o' => 'required',
            'p' => 'required',
        ], $messages);

        if ($update->n == "1304" || $update->n == "1203" || $update->n == "1204") {
            DB::table('tb_lowongan')->where('id_lowongan', $update->inpid)->update([
                'detail_kejuruan_lowongan' => $update->m,
            ]);
        } else {
            DB::table('tb_lowongan')->where('id_lowongan', $update->inpid)->update([
                'detail_kejuruan_lowongan' => "-",
            ]);
        }


        DB::table('tb_lowongan')->where('id_lowongan', $update->inpid)->update([
            'id_perusahaan' => $update->a,
            'posisi_lowongan' => $update->b,
            'status_lowongan' => $update->c,
            'kondisi_lowongan' => $update->ccc,
            'tempat_lowongan' => $update->p,

            'tgl_mulai_lowongan' => $update->h,
            'tgl_akhir_lowongan' => $update->i,
            'jurusan_pdd_lowongan' => $update->n,
            'jml_lowongan_pria' => $update->j,
            'jml_lowongan_wanita' => $update->k,
            'sistem_pengupahan_gaji' => $update->l,
            'status_hubungan_kerja' => $update->o,

            'prov_lowongan' => $update->inpprov,
            'kota_lowongan' => $update->inpkota,
            'kec_lowongan' => $update->inpkecamatan,
            'gaji_lowongan' => $update->d,
            'pengalaman_lowongan' => $update->e,
            'id_tingkatpdd_lowongan' => $update->cc,
            'desk_lowongan' => $update->f
        ]);

        return redirect('/admin/halaman-manajemen-lowongan')->with('success-alert', 'Disimpan');
    }

    public function delete_lowongan(Request $delete)
    {
        DB::table('tb_lowongan')->where('id_lowongan', $delete->idlowongan)->delete();

        return redirect('/admin/halaman-manajemen-lowongan')->with('success-alert', 'Dihapus');
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

        return view('/admin/content/view_lowongan_detail', $data);
    }

    public function tambah_detail_lowongan($low, $pl, $per)
    {
        $check = DB::table('tb_det_lowongan')->where('id_lowongan', $low)->where('id_pelamar', $pl)->get()->count();
        if ($check == 0) {
            DB::table('tb_det_lowongan')->insert([
                'id_lowongan' => $low,
                'id_pelamar' => $pl
            ]);
            $sendpl = DB::table('tb_pelamar')->where('id_pelamar', $pl)->first();
            $sendpr = DB::table('tb_lowongan')
                ->join('tb_perusahaan', 'tb_perusahaan.id_perusahaan', '=', 'tb_lowongan.id_perusahaan')
                ->where('tb_lowongan.id_lowongan', $low)->first();

            $datamail = [
                'perusahaan' => $sendpr->nama_perusahaan . " - " . $sendpr->lengkap_perusahaan,
                'pelamar' => $sendpl->nama_pelamar,
                'posisi' => $sendpr->posisi_lowongan,
                'gaji' => $sendpr->gaji_lowongan,
                'image' => $sendpr->logo_perusahaan,
                'email' => $sendpr->email_perusahaan
            ];

            Mail::to($sendpl->email_pelamar)->send(new GatewayMailLow($datamail));

            return redirect()->route('detail_lowongan', ['id' => $low, 'per' => $per])->with('success-alert', 'Disimpan');
        } else {
            return redirect()->route('detail_lowongan', ['id' => $low, 'per' => $per])->with('error-alert', 'Pelamar Sudah Terdaftar!');
        }
    }

    public function delete_detail_lowongan(Request $delete)
    {
        DB::table('tb_det_lowongan')->where('id_detlow', $delete->iddetail)->delete();

        return redirect()->route('detail_lowongan', ['id' => $delete->idlowongan, 'per' => $delete->idperusahaan])->with('success-alert', 'Dihapus');
    }

    //dev test
    public function emailll()
    {
        $type = '_work';
        $data = [
            'perusahaan' => 'redrgnl',
            'pelamar' => 'OWO',
            'posisi' => 'CEO',
            'gaji' => '1000',
            'image' => 'http://style24x7.com/wp-content/uploads/2019/09/Abstract-HD-Desktop-Laptop-Wallpaper-Background-HD-Image-22.jpg',
            'email' => '4yukihana@gmail.com',
            'type' => '_low'
        ];

        $dataa = [
            'workshop' => 'BYTE (Becraft Young Technology Enterpreneur)',
            'pelamar' => 'Ady Bagus Sugih Susanto',
            'tanggal' => '3 Januari 2020',
            'kategori' => 'Pemula',
            'image' => 'http://style24x7.com/wp-content/uploads/2019/09/Abstract-HD-Desktop-Laptop-Wallpaper-Background-HD-Image-22.jpg',
            'maps' => 'https://www.google.com/maps/place/Hotel+Dafam+Lotus+Jember/@-8.1723917,113.6994984,15z/data=!4m8!3m7!1s0x2dd69424cadca8b7:0x63e5738090ad08e2!5m2!4m1!1i2!8m2!3d-8.1724453!4d113.6994862',
            'lokasi' => 'Dafam Lotus Jember',
            'type' => '_work'
        ];

        if ($type == '_low') {
            Mail::to("sdragneel6661@gmail.com")->send(new GatewayMail($data));
            return "Email telah dikirim";
        } elseif ($type == '_work') {
            Mail::to("sdragneel6661@gmail.com")->send(new GatewayMail($dataa));
            return "Email telah dikirim";
        }
    }

    public function emailllo()
    {
        $type = '_work';
        $data = [
            'perusahaan' => 'redrgnl',
            'pelamar' => 'OWO',
            'posisi' => 'Chief Technology Officer',
            'gaji' => '100000000',
            'image' => 'http://style24x7.com/wp-content/uploads/2019/09/Abstract-HD-Desktop-Laptop-Wallpaper-Background-HD-Image-22.jpg',
            'email' => '4yukihana@gmail.com'
        ];

        $dataa = [
            'workshop' => 'BYTE (Becraft Young Technology Enterpreneur)',
            'pelamar' => 'Ady Bagus Sugih Susanto',
            'tanggal' => '3 Januari 2020',
            'kategori' => 'Pemula',
            'image' => 'http://style24x7.com/wp-content/uploads/2019/09/Abstract-HD-Desktop-Laptop-Wallpaper-Background-HD-Image-22.jpg',
            'maps' => 'https://www.google.com/maps/place/Hotel+Dafam+Lotus+Jember/@-8.1723917,113.6994984,15z/data=!4m8!3m7!1s0x2dd69424cadca8b7:0x63e5738090ad08e2!5m2!4m1!1i2!8m2!3d-8.1724453!4d113.6994862',
            'lokasi' => 'Dafam Lotus Jember'
        ];

        if ($type == '_low') {
            return view('/admin/content/view_email_daftar' . $type, $data);
        } elseif ($type == '_work') {
            return view('/admin/content/view_email_daftar' . $type, $dataa);
        }
    }

    //dev test
}
