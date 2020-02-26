<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator, Redirect, Response;
use App\Mail\GatewayMailLow;
use Illuminate\Support\Facades\Mail;

class LowonganController extends Controller
{
    public function index() {
        $data = [
            'title' => "Manajemen Data Lowongan",
            'breadcrumb' => "Data Lowongan",
            'lowongan' => DB::table('tb_lowongan')
                                ->join('tb_perusahaan', 'tb_perusahaan.id_perusahaan', '=', 'tb_lowongan.id_perusahaan')
                                ->get(),
            'jabatan' => DB::table('tb_jabatan')->get()
        ];
        
        return view ('/admin/content/view_lowongan', $data);
    }
    
    //filter dalam - luar
    public function dndisabilitas() {
        $data = [
            'title' => "Manajemen Data Lowongan",
            'breadcrumb' => "Data Lowongan Dalam Negeri - Disabilitas",
            'lowongan' => DB::table('tb_lowongan')
                                ->join('tb_perusahaan', 'tb_perusahaan.id_perusahaan', '=', 'tb_lowongan.id_perusahaan')
                                ->where('tb_lowongan.kondisi_lowongan', 'Disabilitas')
                                ->where('tb_lowongan.tempat_lowongan', 'DN')
                                ->get(),
            'jabatan' => DB::table('tb_jabatan')->get()
        ];
        
        return view ('/admin/content/view_lowongan', $data);
    }
    
    public function dnnondisabilitas() {
        $data = [
            'title' => "Manajemen Data Lowongan",
            'breadcrumb' => "Data Lowongan",
            'lowongan' => DB::table('tb_lowongan')
                                ->join('tb_perusahaan', 'tb_perusahaan.id_perusahaan', '=', 'tb_lowongan.id_perusahaan')
                                ->where('tb_lowongan.kondisi_lowongan', 'Non Disabilitas')
                                ->where('tb_lowongan.tempat_lowongan', 'DN')
                                ->get(),
            'jabatan' => DB::table('tb_jabatan')->get()
        ];
        
        return view ('/admin/content/view_lowongan', $data);
    }
    
    public function lndisabilitas() {
        $data = [
            'title' => "Manajemen Data Lowongan",
            'breadcrumb' => "Data Lowongan",
            'lowongan' => DB::table('tb_lowongan')
                                ->join('tb_perusahaan', 'tb_perusahaan.id_perusahaan', '=', 'tb_lowongan.id_perusahaan')
                                ->where('tb_lowongan.kondisi_lowongan', 'Disabilitas')
                                ->where('tb_lowongan.tempat_lowongan', 'LN')
                                ->get(),
            'jabatan' => DB::table('tb_jabatan')->get()
        ];
        
        return view ('/admin/content/view_lowongan', $data);
    }
    
    public function lnnondisabilitas() {
        $data = [
            'title' => "Manajemen Data Lowongan",
            'breadcrumb' => "Data Lowongan",
            'lowongan' => DB::table('tb_lowongan')
                                ->join('tb_perusahaan', 'tb_perusahaan.id_perusahaan', '=', 'tb_lowongan.id_perusahaan')
                                ->where('tb_lowongan.kondisi_lowongan', 'Non Disabilitas')
                                ->where('tb_lowongan.tempat_lowongan', 'LN')
                                ->get(),
            'jabatan' => DB::table('tb_jabatan')->get()
        ];
        
        return view ('/admin/content/view_lowongan', $data);
    }
    //end filter dalam - luar
    
    public function tambah_lowongan() {
        $data = [
            'title' => "Form Tambah Lowongan",
            'breadcrumb' => "Tambah Lowongan",
            'perusahaan' => DB::table('tb_perusahaan')->orderBy('nama_perusahaan', 'asc')->get(),
            'jabatan' => DB::table('tb_jabatan')->get(),
            'kompetensi' => DB::table('tb_kompetensi')->get()
        ];
        
        return view ('/admin/content/view_lowongan_tambah', $data);
    }
    
    public function store_lowongan(Request $insert) {
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
            'cc' => 'required'

        ], $messages);
        
        DB::table('tb_lowongan')->insert([
            'id_perusahaan' => $insert->a,
            'posisi_lowongan' => $insert->b,
            'status_lowongan' => $insert->c,
            'kondisi_lowongan' => $insert->ccc,
            'tempat_lowongan' => $insert->cccc,
            'gaji_lowongan' => $insert->d,
            'pengalaman_lowongan' => $insert->e,
            'jenis_kompetensi_lowongan' => $insert->cc,
            'desk_lowongan' => $insert->f
        ]);
        
        return redirect ('/admin/halaman-manajemen-lowongan')->with('success-alert', 'Disimpan');
    }
    
    public function edit_lowongan($id) {
        $data = [
            'title' => "Form Edit Lowongan",
            'breadcrumb' => "Edit Lowongan",
            'lowongan' => DB::table('tb_lowongan')
                            ->join('tb_perusahaan', 'tb_perusahaan.id_perusahaan', '=', 'tb_lowongan.id_perusahaan')
                            ->where('id_lowongan', $id)->first(),
            'perusahaan' => DB::table('tb_perusahaan')->orderBy('nama_perusahaan', 'asc')->get(),
            'jabatan' => DB::table('tb_jabatan')->get(),
            'kompetensi' => DB::table('tb_kompetensi')->get()

        ];
        
        return view ('/admin/content/view_lowongan_edit', $data);
    }
    
    public function update_lowongan(Request $update) {
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

        ], $messages);
        
        DB::table('tb_lowongan')->where('id_lowongan', $update->inpid)->update([
            'id_perusahaan' => $update->a,
            'posisi_lowongan' => $update->b,
            'status_lowongan' => $update->c,
            'kondisi_lowongan' => $update->ccc,
            'tempat_lowongan' => $update->cccc,
            'gaji_lowongan' => $update->d,
            'pengalaman_lowongan' => $update->e,
            'jenis_kompetensi_lowongan' => $update->cc,
            'desk_lowongan' => $update->f
        ]);
        
        return redirect ('/admin/halaman-manajemen-lowongan')->with('success-alert', 'Disimpan');
    }
    
    public function delete_lowongan(Request $delete) {
        DB::table('tb_lowongan')->where('id_lowongan', $delete->idlowongan)->delete();
        
        return redirect ('/admin/halaman-manajemen-lowongan')->with('success-alert', 'Dihapus');
    }
    
    public function detail_lowongan($id, $per) {
        $perusahaan = DB::table('tb_perusahaan')->where('id_perusahaan', $per)->first();
        $nama = $perusahaan->nama_perusahaan;
        $lengkap = $perusahaan->lengkap_perusahaan;
        
        $data = [
            'title' => "Form Edit Lowongan",
            'breadcrumb' => $nama ." - ". $lengkap,
            'pelamar' => DB::table('tb_pelamar')->get(),
            'detpelamar' => DB::table('tb_pelamar')
                                ->join('tb_det_lowongan', 'tb_det_lowongan.id_pelamar', '=', 'tb_pelamar.id_pelamar')
                                ->where('tb_det_lowongan.id_lowongan', $id)->get(),
            'lowonganID' => $id,
            'perusahaanID' => $per
        ];
        
        return view ('/admin/content/view_lowongan_detail', $data);
    }
    
    public function tambah_detail_lowongan($low, $pl, $per) {
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
                'perusahaan' => $sendpr->nama_perusahaan." - ".$sendpr->lengkap_perusahaan,
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
    
    public function delete_detail_lowongan(Request $delete) {
        DB::table('tb_det_lowongan')->where('id_detlow', $delete->iddetail)->delete();
        
        return redirect()->route('detail_lowongan', ['id' => $delete->idlowongan, 'per' => $delete->idperusahaan])->with('success-alert', 'Dihapus');
    }
    
    //dev test
    public function emailll() {
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
    
    public function emailllo() {
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
            return view ('/admin/content/view_email_daftar'.$type, $data);
        } elseif ($type == '_work') {
            return view ('/admin/content/view_email_daftar'.$type, $dataa);
        }
    }
    
    //dev test
}
