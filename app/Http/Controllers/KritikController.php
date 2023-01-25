<?php

namespace App\Http\Controllers;

use App\Kritik;
use Illuminate\Http\Request;

class KritikController extends Controller
{
    public function index()
    {
        return view('tentang_kami');
    }

    public function create()
    {
        return view('tentang_kami');
    }

    public function store(Request $request)
    {
        Kritik::create([
            'nama_siswa' => $request->nama_siswa,
            'email_siswa' => $request->email_siswa,
            'kritik' => $request->kritik,
        ]);

        return redirect('tentang-kami')->with('success', 'Kritik dan Saran Berhasil Dikirim');
    }
}
