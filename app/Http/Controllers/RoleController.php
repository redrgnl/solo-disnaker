<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator, Redirect, Response;

class RoleController extends Controller
{
    public function index() {
        $data = [
            'title' => "Manajemen Role",
            'breadcrumb' => "Manajemen Role",
            'role' => DB::table('tb_role')->get()
        ];
        
        return view ('/admin/content/view_role', $data);
    }
    
    public function tambah_role() {
        $data = [
            'title' => "Form Tambah Role",
            'breadcrumb' => "Tambah Role"
        ];
        
        return view ('/admin/content/view_role_tambah', $data);
    }
    
    public function store_role(Request $insert) {
        $messages = [
            'required' => 'Field Wajib Diisi *',
            'max' => 'Input Tidak Sesuai',
            'email' => 'Format Email Salah'
        ];

        //validasi form
        $this->validate($insert, [
            'inpnama' => 'required|max:50'
        ], $messages);
        
        $checkrole = DB::table('tb_role')->where('nama_role', $insert->inpnama)->get()->count();
        
        if ($checkrole == 0) {
            DB::table('tb_role')->insert([
                'nama_role' => $insert->inpnama,
                'status_role' => 'Active'
            ]);
            
            return redirect ('/admin/halaman-manajemen-role')->with('success-alert', 'Disimpan');
        } else {
            return redirect ('/admin/halaman-tambah-role')->with('error-alert', 'Role Sudah Terdaftar!');
        }
    }
    
    public function edit_role($id) {
        $data = [
            'title' => "Form Edit Role",
            'breadcrumb' => "Edit Data Role",
            'role' => DB::table('tb_role')->where('id_role', $id)->first()
        ];
        
        return view ('/admin/content/view_role_edit', $data);
    }
    
    public function update_role(Request $update) {
        $messages = [
            'required' => 'Field Wajib Diisi *',
            'max' => 'Input Tidak Sesuai',
            'email' => 'Format Email Salah'
        ];

        //validasi form
        $this->validate($update, [
            'inpnama' => 'required|max:50'
        ], $messages);
        
        $checkrole = DB::table('tb_role')
            ->where('nama_role', $update->inpnama)
            ->get()->count();
        
        if ($checkrole == 1) {
            return redirect ('/admin/halaman-manajemen-role')->with('error-alert', 'Role Tidak Boleh Sama!');
        } else {
            DB::table('tb_role')->where('id_role', $update->inpid)->update([
                'nama_role' => $update->inpnama
            ]);
            
            return redirect ('/admin/halaman-manajemen-role')->with('success->alert', 'Disimpan');
        }
    }
    
    public function update_status_role($id, $status) {
        $checkid = DB::table('tb_role')->where('id_role', $id)->get()->count();
        
        if ($checkid == 1) {
            DB::table('tb_role')->where('id_role', $id)->update([
                'status_role' => $status
            ]);
        
            return redirect ('/admin/halaman-manajemen-role')->with('success-alert', 'Disimpan');
        } else {
            return redirect ('/admin/halaman-manajemen-role')->with('error-alert', 'Role Tidak Ditemukan');
        }
    }
}
