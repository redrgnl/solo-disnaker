<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator, Redirect, Response;

class WorkshopController extends Controller
{
    public function index() {
        $data = [
            'title' => "Manajemen Workshop",
            'breadcrumb' => "Manajemen Workshop",
            'workshop' => DB::table('tb_workshop')->get()
        ];
        
        return view ('/admin/content/view_workshop', $data);
    }
    
    public function tambah_workshop() {
        $data = [
            'title' => "Form Tambah Data Workshop",
            'breadcrumb' => "Tambah Data Workshop"
        ];
        
        return view ('/admin/content/view_workshop_tambah', $data);
    }
    
    public function store_workshop(Request $insert) {
        $messages = [
            'required' => 'Field Wajib Diisi *',
            'max' => 'Input Tidak Sesuai',
            'email' => 'Format Email Salah'
        ];

        //validasi form
        $this->validate($insert, [
            'a' => 'required|max:150',
            'b' => 'required',
            'c' => 'required',
            'd' => 'required|max:11',
            'e' => 'required|max:10'
        ], $messages);
        
        DB::table('tb_workshop')->insert([
            'nama_workshop' => $insert->a,
            'lokasi_workshop' => $insert->b,
            'tanggal_workshop' => $insert->c,
            'kuota_workshop' => $insert->d,
            'status_workshop' => $insert->e
        ]);
        
        return redirect ('/admin/halaman-manajemen-workshop')->with('success-alert', 'Disimpan');
    }
    
    public function edit_workshop($id) {
        $data = [
            'title' => "Form Edit Data Workshop",
            'breadcrumb' => "Edit Data Workshop",
            'workshop' => DB::table('tb_workshop')->where('id_workshop', $id)->first()
        ];
        
        return view ('/admin/content/view_workshop_edit', $data);
    }
    
    public function update_workshop(Request $update) {
        $messages = [
            'required' => 'Field Wajib Diisi *',
            'max' => 'Input Tidak Sesuai',
            'email' => 'Format Email Salah'
        ];

        //validasi form
        $this->validate($update, [
            'a' => 'required|max:150',
            'b' => 'required',
            'c' => 'required',
            'd' => 'required|max:11',
            'e' => 'required|max:10'
        ], $messages);
        
        DB::table('tb_workshop')->where('id_workshop', $update->inpid)->update([
            'nama_workshop' => $update->a,
            'lokasi_workshop' => $update->b,
            'tanggal_workshop' => $update->c,
            'kuota_workshop' => $update->d,
            'status_workshop' => $update->e
        ]);
        
        return redirect ('/admin/halaman-manajemen-workshop')->with('success-alert', 'Disimpan');
    }
    
    public function delete_workshop(Request $delete) {
        DB::table('tb_workshop')->where('id_workshop', $delete->idworkshop)->delete();
        
        return redirect ('/admin/halaman-manajemen-workshop')->with('success-alert', 'Dihapus');
    }
    
    public function detail_workshop($id) {
        $workshop = DB::table('tb_workshop')->where('id_workshop', $id)->first();
        $nmwork = $workshop->nama_workshop;
        
        $data = [
            'title' => "Detail Workshop",
            'breadcrumb' => $nmwork,
            'pelamar' => DB::table('tb_pelamar')->get(),
            'detpelamar' => DB::table('tb_pelamar')
                                ->join('tb_det_workshop', 'tb_det_workshop.id_pelamar', '=', 'tb_pelamar.id_pelamar')
                                ->where('tb_det_workshop.id_workshop', $id)->get(),
            'workshopID' => $id
        ];
        
        return view ('/admin/content/view_workshop_detail', $data);
    }
    
    public function tambah_detail_workshop($idpl, $idwr) {
        $kuota = DB::table('tb_workshop')->where('id_workshop', $idwr)->first();
        $jmlpelamar = DB::table('tb_det_workshop')->where('id_workshop', $idwr)->get()->count();
        
        if ($kuota->kuota_workshop > $jmlpelamar) {
            $checkdet = DB::table('tb_det_workshop')
                        ->where('id_workshop', $idwr)->where('id_pelamar', $idpl)->count();
        
            if ($checkdet == 0) {
                DB::table('tb_det_workshop')->insert([
                    'id_workshop' => $idwr,
                    'id_pelamar' => $idpl
                ]);
            
                return redirect()->route('detail_workshop', ['id' => $idwr])->with('success-alert', 'Disimpan');
            } else {
                return redirect()->route('detail_workshop', ['id' => $idwr])->with('error-alert', 'Pelamar Sudah Terdaftar!');
            }
        } else {
            return redirect()->route('detail_workshop', ['id' => $idwr])->with('error-alert', 'Kuota Telah Habis!');
        }
    }
    
    public function delete_detail_workshop(Request $delete) {
        DB::table('tb_det_workshop')->where('id_detwork', $delete->iddetail)->delete();
        
        return redirect()->route('detail_workshop', ['id' => $delete->idworkshop])->with('success-alert', 'Dihapus');
    }
}
