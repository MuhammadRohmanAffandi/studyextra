<?php

namespace App\Http\Controllers;

use App\Galeri;
use Illuminate\Http\Request;

class AdminGaleriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tambahgaleris = Galeri::sortable()->paginate(15)->onEachSide(2)->fragment('admin-galeri');
        return view('admins.admin_galeri', compact('tambahgaleris'));
    }

    public function create()
    {
        return view('admins.admin_galeri_tambah');
    }

    public function store(Request $request)
    {
        $nm = $request->foto_galeri;
        $namaFile = time() . rand(100, 999) . "." . $nm->getClientOriginalName();

        $data = new Galeri();
        $data->foto_galeri = $namaFile;

        $nm->move(public_path() . '/img/galeri', $namaFile);
        $data->save();
        // Galeri::create([
        //     'foto_galeri' => $request->foto_galeri,
        // ]);

        return redirect('admin-galeri')->with('success', 'Galeri Berhasil Ditambah');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $edt = Galeri::findOrFail($id);
        return view('admins.admin_galeri_edit', compact('edt'));
    }

    public function update(Request $request, $id)
    {
        $ubah = Galeri::findOrFail($id);
        $awal = $ubah->foto_galeri;

        $edt = [
            'foto_galeri' => $awal,
        ];

        $request->foto_galeri->move(public_path() . '/img/galeri', $awal);
        $ubah->update($edt);

        // $edt = Galeri::findOrFail($id);
        // $edt->update($request->all());
        return redirect('admin-galeri')->with('success', 'Galeri Berhasil Diedit');
    }

    public function destroy($id)
    {
        $hapus = Galeri::findOrFail($id);

        $file = public_path('/img/galeri/') . $hapus->foto_galeri;

        if (file_exists($file)) {
            @unlink($file);
        }

        $hapus->delete();

        // $edt = Galeri::findOrFail($id);
        // $edt->delete();
        return back()->with('success', 'Galeri Berhasil Dihapus');
    }
}
