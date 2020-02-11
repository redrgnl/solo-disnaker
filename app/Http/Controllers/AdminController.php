<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator, Redirect, Response;
use Illuminate\Support\Facades\Auth;
use Session;

class AdminController extends Controller
{
    // ========== Login Admin ========== //
    public function index()
    {
        $data = [
            'title' => "Dashboard Admin",
            'breadcrumb' => "Dashboard Admin"
        ];

        return view('admin/content/view_dashboard_admin', $data);
    }

    public function login()
    {
        return view('/admin/login/login');
    }

    public function postLogin(Request $request)
    {
        $messages = [
            'required' => 'Field Wajib Diisi *',
            'max' => 'Input Tidak Sesuai *'
        ];

        $this->validate($request, [
            'inpusername' => 'required|max:64',
            'inppassword' => 'required|max:64',
            'inpconfirm' => 'required|max:64'
        ], $messages);

        $username = $request->inpusername;

        if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
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
        } else {
            return redirect('/')->with('error', 'Username atau Password Salah!');
        }
    }
    // ========== Login Admin ========== //

    // ========== Login Perusahaan ========== //
    public function daftar_perusahaan()
    {
        $data = [
            'jenis' => DB::table('tb_jenisper')->get(),
            'provinsi' => DB::table('tb_provinsi')->get()
        ];

        return view('/admin/content/view_public_daftar', $data);
    }
    public function postPerusahaan(Request $request)
    {
        $messages = [
            'required' => 'Field Wajib Diisi *',
            'max' => 'Input Tidak Sesuai *'
        ];

        $this->validate($request, [
            'iinpusername' => 'required|max:64',
            'iinppassword' => 'required|max:64',
            'iinpconfirm' => 'required|max:64'
        ], $messages);

        $perusahaan = DB::table('tb_perusahaan')
            ->where('nama_perusahaan', $request->iinpusername)
            ->where('password_perusahaan', md5($request->iinppassword))
            ->where('confirm_password_perusahaan', md5($request->iinpconfirm))
            ->first();

        if (!empty($perusahaan)) {
            Session::put('iduser', $perusahaan->id_perusahaan);
            Session::put('namauser', $perusahaan->nama_perusahaan);
            Session::put('lengkapuser', $perusahaan->lengkap_perusahaan);
            Session::put('emailuser', $perusahaan->email_perusahaan);
            Session::put('login-pr', TRUE);
            return redirect('/perusahaan/halaman-manajemen-lowongan');
        } else {
            return redirect('/halaman-daftar-perusahaan')->with('error', 'Username atau Password Salah!');
        }
    }
    public function storePerusahaan(Request $insert)
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
            'inpnpwp' => 'required|max:50',
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

        return redirect('/halaman-daftar-perusahaan')->with('success', 'Disimpan');
    }
    // ========== Login Perusahaan ========== //

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect('/');
    }
}
