<?php

namespace App\Http\Controllers;

use App\Siswa_TK;
use Illuminate\Http\Request;

class AdminSiswaTKController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request->has('search')) {
            $tambahsiswas = Siswa_TK::where('nama_siswa', 'LIKE', '%' . $request->search . '%')->sortable()->paginate(15)->onEachSide(2)->fragment('admin-siswa-tk');
        } else {
            $tambahsiswas = Siswa_TK::sortable()->paginate(15)->onEachSide(2)->fragment('admin-siswa-tk');
        }

        return view('admins.siswa.admin_siswa_tk', compact('tambahsiswas'));
    }

    public function create()
    {
        return view('admins.siswa.admin_siswa_tk_tambah');
    }

    public function store(Request $request)
    {
        $nm = $request->foto_siswa;
        $namaFile = time() . rand(100, 999) . "." . $nm->getClientOriginalName();

        $data = new Siswa_TK();
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

        $nm->move(public_path() . '/img/siswa/tk', $namaFile);
        $data->save();

        // Siswa_TK::create([
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

        return redirect('admin-siswa-tk')->with('success', 'Siswa TK Berhasil Ditambah');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $edt = Siswa_TK::findOrFail($id);
        return view('admins.siswa.admin_siswa_tk_edit', compact('edt'));
    }

    public function update(Request $request, $id)
    {
        $ubah = Siswa_TK::findOrFail($id);
        $awal = $ubah->foto_siswa;

        $edt = [
            'nama_siswa' => $request['nama_siswa'],
            'email_siswa' => $request['email_siswa'],
            'jenis_kelamin_siswa' => $request['jenis_kelamin_siswa'],
            'no_hp_siswa' => $request['no_hp_siswa'],
            'ttl_siswa' => $request['ttl_siswa'],
            'foto_siswa' => $awal,
            'alamat_lengkap_rumah_siswa' => $request['alamat_lengkap_rumah_siswa'],
            'nama_sekolah_siswa' => $request['nama_sekolah_siswa'],
            'jenjang' => $request['jenjang'],
            'paket' => $request['paket'],
        ];

        $request->foto_siswa->move(public_path() . '/img/siswa/tk', $awal);
        $ubah->update($edt);

        // $edt = Siswa_TK::findOrFail($id);
        // $edt->update($request->all());
        return redirect('admin-siswa-tk')->with('success', 'Siswa TK Berhasil Diedit');
    }

    public function destroy($id)
    {
        $hapus = Siswa_TK::findOrFail($id);

        $file = public_path('/img/siswa/tk/') . $hapus->foto_siswa;

        if (file_exists($file)) {
            @unlink($file);
        }

        $hapus->delete();

        // $edt = Siswa_TK::findOrFail($id);
        // $edt->delete();
        return back()->with('success', 'Siswa TK Berhasil Dihapus');
    }
}
