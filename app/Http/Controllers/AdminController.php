<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator, Redirect, Response;
use Illuminate\Support\Facades\Auth;
use Session;

class AdminController extends Controller
{
    public function index() {
        $data = [
            'title' => "Dashboard Admin",
            'breadcrumb' => "Dashboard Admin"
        ];
            
        return view ('admin/content/view_dashboard_admin', $data);
    }
    
    public function login() {
        return view ('/admin/login/login');
    }
    
    public function postLogin(Request $request) {
        $messages = [
            'required' => 'Field Wajib Diisi *',
            'max' => 'Input Tidak Sesuai *'
        ];
        
        $this->validate($request, [
            'inpusername' => 'required|max:64',
            'inppassword' => 'required|max:64',
            'inpconfirm' => 'required|max:64'
        ], $messages);
        
        $user = DB::table('tb_user')
            ->join('tb_role', 'tb_role.id_role', '=', 'tb_user.id_role')
            ->where('tb_user.username_user', $request->inpusername)
            ->where('tb_user.password_user', md5($request->inppassword))
            ->where('tb_user.confirm_password_user', md5($request->inpconfirm))
            ->where('tb_role.status_role', 'Active')
            ->first();
        
        if (!empty($user)) {
            Session::put('iduser', $user->id_user);
            Session::put('namauser', $user->nama_user);
            Session::put('usernameuser', $user->username_user);
            Session::put('roleuser', $user->nama_role);
            if ($user->nama_role == 'Super Admin') {
                Session::put('superrole', TRUE);
            }
            Session::put('login', TRUE);
            return redirect('/admin/halaman-dashboard-admin');
        } else {
            return redirect('/')->with('error', 'Username atau Password Salah!');
        }
    }
    
    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('/');
    }
}
