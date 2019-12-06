<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator, Redirect, Response;

class UserController extends Controller
{
    public function index() {
        $data = [
            'title' => "Manajemen Pengguna",
            'breadcrumb' => "Manajemen Pengguna",
            'user' => DB::table('tb_user')->join('tb_role', 'tb_role.id_role', '=', 'tb_user.id_role')->get()            
        ];
        
        return view ('/admin/content/view_user', $data);
    }
    
    public function tambah_pengguna() {
        $data = [
            'title' => "Form Tambah Pengguna Baru",
            'breadcrumb' => "Tambah Pengguna Baru",
            'role' => DB::table('tb_role')->where('status_role', 'Active')->get()
        ];
        
        return view ('/admin/content/view_user_tambah', $data);
    }
    
    public function edit_pengguna($id) {
        $data = [
            'title' => "Form Edit Data Pengguna",
            'breadcrumb' => "Edit Data Pengguna",
            'role' => DB::table('tb_role')->where('status_role', 'Active')->get(),
            'user' => DB::table('tb_user')->where('id_user', $id)->first()
        ];
        
        return view ('/admin/content/view_user_edit', $data);
    }
    
    public function store_pengguna(Request $insert) {
        $messages = [
            'required' => 'Field Wajib Diisi *',
            'max' => 'Input Tidak Sesuai',
            'email' => 'Format Email Salah'
        ];

        //validasi form
        $this->validate($insert, [
            'inpnama' => 'required|max:50',
            'inpusername' => 'required|max:50',
            'inpemail' => 'required|max:50|email',
            'inppassword' => 'required|max:11',
            'inpconfirm' => 'required|max:64',
            'inprole' => 'required|max:64'
        ], $messages);
        
        $checkid = DB::table('tb_user')->get()->count();
        $checkusername = DB::table('tb_user')->where('username_user', $insert->inpusername)->get()->count();
        
        if ($checkusername == 0) {
            if ($insert->inppassword != $insert->inpconfirm) {
                return redirect('/admin/halaman-tambah-pengguna-baru')->with('error-alert', 'Konfirmasi Password Harus Sama!');
            } else {
                DB::table('tb_user')->insert([
                    'id_user' => md5($checkid + 1),
                    'nama_user' => $insert->inpnama,
                    'username_user' => $insert->inpusername,
                    'email_user' => $insert->inpemail,
                    'password_user' => md5($insert->inppassword),
                    'confirm_password_user' => md5($insert->inpconfirm),
                    'id_role' => $insert->inprole,
                    'date_created' => date('Y-m-d')
                ]);
                
                return redirect ('/admin/halaman-manajemen-user')->with('success-alert', 'Disimpan');
            }
        } else {
            return redirect('/admin/halaman-tambah-pengguna-baru')->with('error-alert', 'Username Telah Terdaftar');
        }
    }
    
    public function update_pengguna(Request $update) {
        $messages = [
            'required' => 'Field Wajib Diisi *',
            'max' => 'Input Tidak Sesuai',
            'email' => 'Format Email Salah'
        ];

        //validasi form
        $this->validate($update, [
            'inpnama' => 'required|max:50',
            'inpusername' => 'required|max:50',
            'inpemail' => 'required|max:50|email',
            'inppassword' => 'required|max:11',
            'inpconfirm' => 'required|max:64',
            'inprole' => 'required|max:64'
        ], $messages);
        
        $checkusername = DB::table('tb_user')
            ->where('username_user', $update->inpusername)
            ->where('id_user', $update->inpid)
            ->get()->count();
        
        if ($checkusername == 1) {
            DB::table('tb_user')->where('id_user', $update->inpid)->update([
                'nama_user' => $update->inpnama,
                'email_user' => $update->inpemail,
                'password_user' => md5($update->inppassword),
                'confirm_password_user' => md5($update->inpconfirm),
                'id_role' => $update->inprole
            ]);
                
            return redirect ('/admin/halaman-manajemen-user')->with('success-alert', 'Disimpan');
        } else {
            DB::table('tb_user')->where('id_user', $update->inpid)->update([
                'nama_user' => $update->inpnama,
                'username_user' => $update->inpusername,
                'email_user' => $update->inpemail,
                'password_user' => md5($update->inppassword),
                'confirm_password_user' => md5($update->inpconfirm),
                'id_role' => $update->inprole
            ]);
                
            return redirect ('/admin/halaman-manajemen-user')->with('success-alert', 'Disimpan');
        }
        
    }
    
    public function delete_pengguna($id) {
        DB::table('tb_user')->where('id_user', $id)->delete();
        
        return redirect ('/admin/halaman-manajemen-user')->with('success-alert', 'Dihapus');
    }
}
