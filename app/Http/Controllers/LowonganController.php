<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator, Redirect, Response;

class LowonganController extends Controller
{
    public function index() {
        $data = [
            'title' => "Manajemen Data Lowongan",
            'breadcrumb' => "Data Lowongan",
            'lowongan' => DB::table('tb_lowongan')
                                ->join('tb_perusahaan', 'tb_perusahaan.id_perusahaan', '=', 'tb_lowongan.id_perusahaan')
                                ->get()
        ];
        
        return view ('/admin/content/view_lowongan', $data);
    }
    
    public function tambah_lowongan() {
        $data = [
            'title' => "Form Tambah Lowongan",
            'breadcrumb' => "Tambah Lowongan",
            'perusahaan' => DB::table('tb_perusahaan')->orderBy('nama_perusahaan', 'asc')->get()
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
            'f' => 'required'
        ], $messages);
        
        DB::table('tb_lowongan')->insert([
            'id_perusahaan' => $insert->a,
            'posisi_lowongan' => $insert->b,
            'status_lowongan' => $insert->c,
            'gaji_lowongan' => $insert->d,
            'pengalaman_lowongan' => $insert->e,
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
            'perusahaan' => DB::table('tb_perusahaan')->orderBy('nama_perusahaan', 'asc')->get()
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
            'f' => 'required'
        ], $messages);
        
        DB::table('tb_lowongan')->where('id_lowongan', $update->inpid)->update([
            'id_perusahaan' => $update->a,
            'posisi_lowongan' => $update->b,
            'status_lowongan' => $update->c,
            'gaji_lowongan' => $update->d,
            'pengalaman_lowongan' => $update->e,
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
            
            return redirect()->route('detail_lowongan', ['id' => $low, 'per' => $per])->with('success-alert', 'Disimpan'); 
        } else {
            return redirect()->route('detail_lowongan', ['id' => $low, 'per' => $per])->with('error-alert', 'Pelamar Sudah Terdaftar!');
        }
    }
    
    public function delete_detail_lowongan(Request $delete) {
        DB::table('tb_det_lowongan')->where('id_detlow', $delete->iddetail)->delete();
        
        return redirect()->route('detail_lowongan', ['id' => $delete->idlowongan, 'per' => $delete->idperusahaan])->with('success-alert', 'Dihapus');
    }
}
