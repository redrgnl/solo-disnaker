<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator, Redirect, Response;
use App\Mail\GatewayMailWorkPend;
use App\Mail\GatewayMailWorkAcc;
use Illuminate\Support\Facades\Mail;

class WorkshopController extends Controller
{
    public function index()
    {
        $data = [
            'title' => "Manajemen Pelatihan",
            'breadcrumb' => "Manajemen Pelatihan",
            'workshop' => DB::table('tb_workshop')->get()
        ];

        return view('/admin/content/view_workshop', $data);
    }

    public function tambah_workshop()
    {
        $data = [
            'title' => "Form Tambah Data Pelatihan",
            'breadcrumb' => "Tambah Data Pelatihan",
            'kompetensi' => DB::table('tb_kompetensi')->get()
        ];

        return view('/admin/content/view_workshop_tambah', $data);
    }

    public function store_workshop(Request $insert)
    {
        $messages = [
            'required' => 'Field Wajib Diisi *',
            'max' => 'Input Tidak Sesuai',
            'email' => 'Format Email Salah'
        ];

        //validasi form
        $this->validate($insert, [
            'a' => 'required|max:150',
            'b' => 'required',
            'b1' => 'required',
            'c' => 'required',
            'c1' => 'required',
            'c2' => 'required',
            'd' => 'required|max:11',
            'e' => 'required|max:10',
            'e1' => 'required',
            'ee2' => 'required',
            'f' => 'required',
            'p' => 'required',
        ], $messages);

        $img = $insert->file('f');
        $imgname = date('Y-m-d') . "-" . $img->getClientOriginalName();

        $location = 'workshop';
        $img->move($location, $imgname);

        DB::table('tb_workshop')->insert([
            'nama_workshop' => $insert->a,
            'lokasi_workshop' => $insert->b,
            'maps_workshop' => $insert->b1,
            'tanggal_workshop' => $insert->c,
            'str_workshop' => $insert->c1,
            'end_workshop' => $insert->c2,
            'kuota_workshop' => $insert->d,
            'status_workshop' => $insert->e,
            'kategori_workshop' => $insert->e1,
            'kategori_wirausaha' => '-',
            'jenis_kompetensi_workshop' => $insert->ee2,
            'persyaratan_workshop' => $insert->p,
            'poster_workshop' => $imgname
        ]);

        return redirect('/admin/halaman-manajemen-workshop')->with('success-alert', 'Disimpan');
    }

    public function edit_workshop($id)
    {
        $data = [
            'title' => "Form Edit Data Pelatihan",
            'breadcrumb' => "Edit Data Pelatihan",
            'workshop' => DB::table('tb_workshop')->where('id_workshop', $id)->first(),
            'kompetensi' => DB::table('tb_kompetensi')->get()
        ];

        return view('/admin/content/view_workshop_edit', $data);
    }

    public function update_workshop(Request $update)
    {
        $messages = [
            'required' => 'Field Wajib Diisi *',
            'max' => 'Input Tidak Sesuai',
            'email' => 'Format Email Salah'
        ];

        //validasi form
        $this->validate($update, [
            'a' => 'required|max:150',
            'b' => 'required',
            'b1' => 'required',
            'c' => 'required',
            'c1' => 'required',
            'c2' => 'required',
            'd' => 'required|max:11',
            'e' => 'required|max:10',
            'e1' => 'required',
            'e2' => 'required',
            'p' => 'required'

        ], $messages);

        if($update->hasfile('f')){

            $img = $update->file('f');
            $imgname = date('Y-m-d') . "-" . $img->getClientOriginalName();

            $location = 'workshop';
            $img->move($location, $imgname);

            DB::table('tb_workshop')->where('id_workshop', $update->inpid)->update([
                'nama_workshop' => $update->a,
                'lokasi_workshop' => $update->b,
                'maps_workshop' => $update->b1,
                'tanggal_workshop' => $update->c,
                'str_workshop' => $update->c1,
                'end_workshop' => $update->c2,
                'kuota_workshop' => $update->d,
                'status_workshop' => $update->e,
                'kategori_workshop' => $update->e1,
                'kategori_wirausaha' => '-',
                'jenis_kompetensi_workshop' => $update->e2,
                'persyaratan_workshop' => $update->p,
                'poster_workshop' => $imgname

            ]);

            $path = public_path() . "/workshop/" . $update->old_gambar;
            unlink($path);

        }else{
            DB::table('tb_workshop')->where('id_workshop', $update->inpid)->update([
                'nama_workshop' => $update->a,
                'lokasi_workshop' => $update->b,
                'maps_workshop' => $update->b1,
                'tanggal_workshop' => $update->c,
                'str_workshop' => $update->c1,
                'end_workshop' => $update->c2,
                'kuota_workshop' => $update->d,
                'status_workshop' => $update->e,
                'kategori_workshop' => $update->e1,
                'kategori_wirausaha' => '-',
                'jenis_kompetensi_workshop' => $update->e2,
                'persyaratan_workshop' => $update->p

            ]);
        }

        return redirect('/admin/halaman-manajemen-workshop')->with('success-alert', 'Disimpan');
    }

    public function delete_workshop(Request $delete)
    {
        DB::table('tb_workshop')->where('id_workshop', $delete->idworkshop)->delete();

        return redirect('/admin/halaman-manajemen-workshop')->with('success-alert', 'Dihapus');
    }

    public function detail_workshop($id)
    {
        $workshop = DB::table('tb_workshop')->where('id_workshop', $id)->first();
        $nmwork = $workshop->nama_workshop;
        $btswork = $workshop->end_workshop;

        $data = [
            'title' => "Detail Pelatihan",
            'breadcrumb' => $nmwork,
            'pelamar' => DB::table('tb_pelamar')->get(),
            'detpelamar' => DB::table('tb_pelamar')
                ->join('tb_det_workshop', 'tb_det_workshop.id_pelamar', '=', 'tb_pelamar.id_pelamar')
                ->where('tb_det_workshop.id_workshop', $id)->get(),
            'workshopID' => $id,
            'endworkshop' => $btswork,
            'datworkshop' => $workshop
        ];

        return view('/admin/content/view_workshop_detail', $data);
    }

    public function tambah_detail_workshop($idpl, $idwr)
    {
        $workshop = DB::table('tb_workshop')->where('id_workshop', $idwr)->first();
        $pelamar = DB::table('tb_pelamar')->where('id_pelamar', $idpl)->first();

        $jmlpelamar = DB::table('tb_det_workshop')->where('id_workshop', $idwr)->get()->count();
        $checkpemula = DB::table('tb_det_workshop')
            ->join('tb_workshop', 'tb_workshop.id_workshop', '=', 'tb_det_workshop.id_workshop')
            ->join('tb_pelamar', 'tb_pelamar.id_pelamar', '=', 'tb_det_workshop.id_pelamar')
            ->where('tb_workshop.kategori_workshop', 'Pemula')
            ->where('tb_pelamar.id_pelamar', $idpl)->get()->count();
        if ($workshop->kuota_workshop > $jmlpelamar) {
            $checkdet = DB::table('tb_det_workshop')->where('id_workshop', $idwr)->where('id_pelamar', $idpl)->count();
            if ($checkdet == 0) {
                if ($checkpemula == 0) {
                    DB::table('tb_det_workshop')->insert([
                        'id_workshop' => $idwr,
                        'id_pelamar' => $idpl,
                        'status_detwork' => 0
                    ]);
                    $kuota2 = DB::table('tb_workshop')->where('id_workshop', $idwr)->first();
                    $jmlpelamar2 = DB::table('tb_det_workshop')->where('id_workshop', $idwr)->get()->count();
                    if ($kuota2->kuota_workshop == $jmlpelamar2) {
                        DB::table('tb_workshop')->where('id_workshop', $idwr)->update([
                            'status_workshop' => 'Non-Active'
                        ]);
                    }

                    $datamail = [
                        'workshop' => $workshop->nama_workshop,
                        'pelamar' => $pelamar->nama_pelamar,
                        'tanggal' => $workshop->tanggal_workshop,
                        'kategori' => $workshop->kategori_workshop,
                        'image' => $workshop->poster_workshop,
                        'maps' => $workshop->maps_workshop,
                        'lokasi' => $workshop->lokasi_workshop
                    ];

                    Mail::to($pelamar->email_pelamar)->send(new GatewayMailWorkPend($datamail));

                    return redirect()->route('detail_workshop', ['id' => $idwr])->with('success-alert', 'Disimpan');
                } else {
                    if ($workshop->kategori_workshop != 'Pemula') {
                        DB::table('tb_det_workshop')->insert([
                            'id_workshop' => $idwr,
                            'id_pelamar' => $idpl,
                            'status_detwork' => 0
                        ]);
                        $kuota2 = DB::table('tb_workshop')->where('id_workshop', $idwr)->first();
                        $jmlpelamar2 = DB::table('tb_det_workshop')->where('id_workshop', $idwr)->get()->count();
                        if ($kuota2->kuota_workshop == $jmlpelamar2) {
                            DB::table('tb_workshop')->where('id_workshop', $idwr)->update([
                                'status_workshop' => 'Non-Active'
                            ]);
                        }

                        $datamail = [
                            'workshop' => $workshop->nama_workshop,
                            'pelamar' => $pelamar->nama_pelamar,
                            'tanggal' => $workshop->tanggal_workshop,
                            'kategori' => $workshop->kategori_workshop,
                            'image' => $workshop->poster_workshop,
                            'maps' => $workshop->maps_workshop,
                            'lokasi' => $workshop->lokasi_workshop
                        ];

                        Mail::to($pelamar->email_pelamar)->send(new GatewayMailWorkPend($datamail));

                        return redirect()->route('detail_workshop', ['id' => $idwr])->with('success-alert', 'Disimpan');
                    } else {
                        return redirect()->route('detail_workshop', ['id' => $idwr])->with('error-alert', 'Gagal');
                    }
                }
            } else {
                return redirect()->route('detail_workshop', ['id' => $idwr])->with('error-alert', 'Pelamar Sudah Terdaftar!');
            }
        } else {
            return redirect()->route('detail_workshop', ['id' => $idwr])->with('error-alert', 'Kuota Telah Habis!');
        }
    }

    public function delete_detail_workshop(Request $delete)
    {
        $kuota = DB::table('tb_workshop')->where('id_workshop', $delete->idworkshop)->first();
        $jmlpelamar = DB::table('tb_det_workshop')->where('id_workshop', $delete->idworkshop)->get()->count();

        if ($kuota->kuota_workshop = $jmlpelamar) {
            DB::table('tb_workshop')->where('id_workshop', $delete->idworkshop)->update([
                'status_workshop' => 'Active'
            ]);
        }

        DB::table('tb_det_workshop')->where('id_detwork', $delete->iddetail)->delete();
        return redirect()->route('detail_workshop', ['id' => $delete->idworkshop])->with('success-alert', 'Dihapus');
    }

    public function approve_workshop($id, $idwr)
    {
        $workshop = DB::table('tb_det_workshop')
            ->join('tb_pelamar', 'tb_pelamar.id_pelamar', '=', 'tb_det_workshop.id_pelamar')
            ->join('tb_workshop', 'tb_workshop.id_workshop', '=', 'tb_det_workshop.id_workshop')
            ->where('tb_det_workshop.id_detwork', $id)->first();

        DB::table('tb_det_workshop')->where('id_detwork', $id)->update([
            'status_detwork' => 1
        ]);

        $datamail = [
            'workshop' => $workshop->nama_workshop,
            'pelamar' => $workshop->nama_pelamar,
            'tanggal' => $workshop->tanggal_workshop,
            'kategori' => $workshop->kategori_workshop,
            'image' => $workshop->poster_workshop,
            'maps' => $workshop->maps_workshop,
            'lokasi' => $workshop->lokasi_workshop
        ];

        Mail::to($workshop->email_pelamar)->send(new GatewayMailWorkAcc($datamail));

        return redirect()->route('detail_workshop', ['id' => $idwr])->with('success-alert', 'Approved');
    }

    public function change_pro_workshop(Request $upload)
    {
        $this->validate($upload, [
            'pict_work' => 'required'
        ]);

        $img = $upload->file('pict_work');
        $imgname = $upload->nm_work . "-" . $img->getClientOriginalName();

        $location = 'workshop';
        $img->move($location, $imgname);

        DB::table('tb_workshop')->where('id_workshop', $upload->id_work)->update([
            'poster_workshop' => $imgname
        ]);

        return redirect()->back();
    }

    public function kompetensi() {
        $data = [
            'title' => "Manajemen Kompetensi",
            'breadcrumb' => "Manajemen Kompetensi",
            'kompetensi' => DB::table('tb_kompetensi')->get()
        ];

        return view('/admin/content/view_workshop_kompetensi', $data);
    }

    public function store_kompetensi(Request $insert) {
        DB::table('tb_kompetensi')->insert([
            'nama_kompetensi' => $insert->inpkompetensi
        ]);

        return redirect('/admin/halaman-kompetensi-workshop');
    }

    public function update_kompetensi(Request $update) {
        DB::table('tb_kompetensi')->where('id_kompetensi', $update->edid)->update([
            'nama_kompetensi' => $update->edkompetensi
        ]);

        return redirect('/admin/halaman-kompetensi-workshop');
    }

    public function delete_kompetensi(Request $delete) {
        DB::table('tb_kompetensi')->where('id_kompetensi', $delete->delid)->delete();

        return redirect('/admin/halaman-kompetensi-workshop');
    }
}
