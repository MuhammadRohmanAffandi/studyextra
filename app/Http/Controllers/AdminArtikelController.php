<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;

class AdminArtikelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request->has('search')) {
            $tambahartikels = Artikel::where('judul_artikel', 'LIKE', '%' . $request->search . '%')->sortable()->paginate(15)->onEachSide(2)->fragment('admin-artikel');
        } else {
            $tambahartikels = Artikel::sortable()->paginate(15)->onEachSide(2)->fragment('admin-artikel');
        };
        return view('admins.admin_artikel', compact('tambahartikels'));
    }

    public function create()
    {
        return view('admins.admin_artikel_tambah');
    }

    public function store(Request $request)
    {
        $nm = $request->gambar_artikel;
        $namaFile = time() . rand(100, 999) . "." . $nm->getClientOriginalName();

        $data = new Artikel();
        $data->judul_artikel = $request->judul_artikel;
        $data->caption_artikel = $request->caption_artikel;
        $data->uraian_artikel = $request->uraian_artikel;
        $data->gambar_artikel = $namaFile;

        $nm->move(public_path() . '/img/artikel', $namaFile);
        $data->save();
        // Artikel::create([
        //     'judul_artikel' => $request->judul_artikel,
        //     'caption_artikel' => $request->caption_artikel,
        //     'uraian_artikel' => $request->uraian_artikel,
        //     'gambar_artikel' => $request->gambar_artikel,
        // ]);

        return redirect('admin-artikel')->with('success', 'Artikel Berhasil Ditambah');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $edt = Artikel::findOrFail($id);
        return view('admins.admin_artikel_edit', compact('edt'));
    }

    public function update(Request $request, $id)
    {
        $ubah = Artikel::findOrFail($id);
        $awal = $ubah->gambar_artikel;

        $edt = [
            'judul_artikel' => $request['judul_artikel'],
            'caption_artikel' => $request['caption_artikel'],
            'uraian_artikel' => $request['uraian_artikel'],
            'gambar_artikel' => $awal,
        ];

        $request->gambar_artikel->move(public_path() . '/img/artikel', $awal);
        $ubah->update($edt);

        // $edt = Artikel::findOrFail($id);
        // $edt->update($request->all());

        return redirect('admin-artikel')->with('success', 'Artikel Berhasil Diedit');
    }

    public function destroy($id)
    {
        $hapus = Artikel::findOrFail($id);

        $file = public_path('/img/artikel/') . $hapus->gambar_artikel;

        if (file_exists($file)) {
            @unlink($file);
        }

        // $edt = Artikel::findOrFail($id);
        // $edt->delete();
        $hapus->delete();
        return back()->with('success', 'Artikel Berhasil Dihapus');
    }
}
