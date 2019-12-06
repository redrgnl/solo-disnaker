<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator, Redirect, Response;

class PerusahaanController extends Controller
{
    public function index() {
        $data = [
            'title' => "Manajemen Perusahaan",
            'breadcrumb' => "Manajemen Perusahaan",
            'perusahaan' => DB::table('tb_perusahaan')->get()
        ];
        
        return view ('/admin/content/view_perusahaan', $data);
    }
    
    public function tambah_perusahaan() {
        $data = [
            'title' => "Form Tambah Perusahaan",
            'breadcrumb' => "Tambah Perusahaan"
        ];
        
        return view ('/admin/content/view_perusahaan_tambah', $data);
    }
    
    public function store_perusahaan(Request $insert) {
        $messages = [
            'required' => 'Field Wajib Diisi *',
            'max' => 'Input Tidak Sesuai',
            'email' => 'Format Email Salah'
        ];

        //validasi form
        $this->validate($insert, [
            'inpnama' => 'required|max:100',
            'inplengkap' => 'required',
            'inpnpwp' => 'required|max:50',
            'inpalamat' => 'required',
            'inptelepon' => 'required|max:15',
            'inpemail' => 'required|max:50|email'
        ], $messages);
        
        DB::table('tb_perusahaan')->insert([
            'nama_perusahaan' => $insert->inpnama,
            'lengkap_perusahaan' => $insert->inplengkap,
            'npwp_perusahaan' => $insert->inpnpwp,
            'alamat_perusahaan' => $insert->inpalamat,
            'telp_perusahaan' => $insert->inptelepon,
            'email_perusahaan' => $insert->inpemail,
            'date_created' => date('Y-m-d')
        ]);
        
        return redirect ('/admin/halaman-manajemen-perusahaan')->with('success-alert', 'Disimpan');
    }
    
    public function edit_perusahaan($id) {
        $data = [
            'title' => "Form Edit Data Perusahaan",
            'breadcrumb' => "Edit Data Perusahaan",
            'perusahaan' => DB::table('tb_perusahaan')->where('id_perusahaan', $id)->first()
        ];
        
        return view ('/admin/content/view_perusahaan_edit', $data);
    }
    
    public function update_perusahaan(Request $update) {
        $messages = [
            'required' => 'Field Wajib Diisi *',
            'max' => 'Input Tidak Sesuai',
            'email' => 'Format Email Salah'
        ];

        //validasi form
        $this->validate($update, [
            'inpnama' => 'required|max:100',
            'inplengkap' => 'required',
            'inpnpwp' => 'required|max:50',
            'inpalamat' => 'required',
            'inptelepon' => 'required|max:15',
            'inpemail' => 'required|max:50|email'
        ], $messages);
        
        DB::table('tb_perusahaan')->where('id_perusahaan', $update->inpid)->update([
            'nama_perusahaan' => $update->inpnama,
            'lengkap_perusahaan' => $update->inplengkap,
            'npwp_perusahaan' => $update->inpnpwp,
            'alamat_perusahaan' => $update->inpalamat,
            'telp_perusahaan' => $update->inptelepon,
            'email_perusahaan' => $update->inpemail
        ]);
        
        return redirect ('/admin/halaman-manajemen-perusahaan')->with('success-alert', 'Disimpan');
    }
    
    public function delete_perusahaan(Request $delete) {
        DB::table('tb_perusahaan')->where('id_perusahaan', $delete->idperusahaan)->delete();
        
        return redirect ('/admin/halaman-manajemen-perusahaan')->with('success-alert', 'Dihapus');
    }
}
