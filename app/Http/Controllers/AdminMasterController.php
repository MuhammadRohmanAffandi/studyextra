<?php

namespace App\Http\Controllers;

use App\Alumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminMasterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $count_pendaftaran = DB::table('pendaftaran')->select(DB::raw('Count(id) as jumlah_pendaftaran'))->get();
        $count_alumni = DB::table('alumni')->select(DB::raw('Count(id) as jumlah_alumni'))->get();
        $count_siswa_tk = DB::table('siswa_tk')->select(DB::raw('Count(id) as jumlah_siswa'))->get();
        $count_siswa_sd = DB::table('siswa_sd')->select(DB::raw('Count(id) as jumlah_siswa'))->get();
        $count_siswa_smp = DB::table('siswa_smp')->select(DB::raw('Count(id) as jumlah_siswa'))->get();
        $count_siswa_sma = DB::table('siswa_sma')->select(DB::raw('Count(id) as jumlah_siswa'))->get();
        $count_siswa_unggulan = DB::table('siswa_unggulan')->select(DB::raw('Count(id) as jumlah_siswa'))->get();
        $count_ebook = DB::table('ebook')->select(DB::raw('Count(id) as jumlah_ebook'))->get();
        $count_artikel = DB::table('artikel')->select(DB::raw('Count(id) as jumlah_artikel'))->get();
        $count_galeri = DB::table('galeri')->select(DB::raw('Count(id) as jumlah_galeri'))->get();
        $count_kritik = DB::table('kritik')->select(DB::raw('Count(id) as jumlah_kritik'))->get();
        return view('admins.admin', compact(['count_pendaftaran', 'count_alumni', 'count_siswa_tk', 'count_siswa_sd', 'count_siswa_smp', 'count_siswa_sma', 'count_siswa_unggulan', 'count_ebook', 'count_artikel', 'count_galeri', 'count_kritik']));
    }
}
