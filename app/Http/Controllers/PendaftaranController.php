<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendaftaran;

class PendaftaranController extends Controller
{
    public function index()
    {
        return view('pendaftaran');
    }

    public function create()
    {
        return view('pendaftaran');
    }

    public function store(Request $request)
    {
        $nm = $request->foto_siswa;
        $namaFile = time() . rand(100, 999) . "." . $nm->getClientOriginalName();

        $data = new Pendaftaran();
        $data->nama_siswa = $request->nama_siswa;
        $data->email_siswa = $request->email_siswa;
        $data->jenis_kelamin_siswa = $request->jenis_kelamin_siswa;
        $data->ttl_siswa = $request->ttl_siswa;
        $data->foto_siswa = $namaFile;
        $data->no_hp_siswa = $request->no_hp_siswa;
        $data->alamat_lengkap_rumah_siswa = $request->alamat_lengkap_rumah_siswa;
        $data->nama_sekolah_siswa = $request->nama_sekolah_siswa;
        $data->jenjang = $request->jenjang;
        $data->paket = $request->paket;

        $nm->move(public_path() . '/img/pendaftaran', $namaFile);
        $data->save();

        // Pendaftaran::create([
        //     'nama_siswa' => $request->nama_siswa,
        //     'email_siswa' => $request->email_siswa,
        //     'jenis_kelamin_siswa' => $request->jenis_kelamin_siswa,
        //     'no_hp_siswa' => $request->no_hp_siswa,
        //     'foto_siswa' => $request->foto_siswa,
        //     'alamat_lengkap_rumah_siswa' => $request->alamat_lengkap_rumah_siswa,
        //     'nama_sekolah_siswa' => $request->nama_sekolah_siswa,
        //     'jenjang' => $request->jenjang,
        //     'paket' => $request->paket,
        // ]);

        return redirect('pendaftaran')->with('success', 'Daftar Berhasil');
    }
}
