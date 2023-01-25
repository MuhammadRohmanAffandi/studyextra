<?php

namespace App\Http\Controllers;

use App\Ebook;
use Illuminate\Http\Request;

class AdminEbookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request->has('search')) {
            $tambahebooks = Ebook::where('nama_ebook', 'LIKE', '%' . $request->search . '%')->sortable()->paginate(15)->onEachSide(2)->fragment('admin-ebook');
        } else {
            $tambahebooks = Ebook::sortable()->paginate(15)->onEachSide(2)->fragment('admin-ebook');
        }

        return view('admins.admin_ebook', compact('tambahebooks'));
    }

    public function create()
    {
        return view('admins.admin_ebook_tambah');
    }

    public function store(Request $request)
    {
        $nm = $request->file_ebook;
        $namaFile = $nm->getClientOriginalName();

        $data = new Ebook();
        $data->nama_ebook = $request->nama_ebook;
        $data->file_ebook = $namaFile;

        $nm->move(public_path() . '/dokumen/ebook', $namaFile);
        $data->save();

        // Ebook::create([
        //     'nama_ebook' => $request->nama_ebook,
        //     'file_ebook' => $request->file_ebook,
        // ]);

        return redirect('admin-ebook')->with('success', 'Ebook Berhasil Ditambah');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $edt = Ebook::findOrFail($id);
        return view('admins.admin_ebook_edit', compact('edt'));
    }

    public function update(Request $request, $id)
    {
        $ubah = Ebook::findOrFail($id);
        $awal = $ubah->file_ebook;

        $edt = [
            'nama_ebook' => $request['nama_ebook'],
            'file_ebook' => $awal,
        ];

        $request->file_ebook->move(public_path() . '/dokumen/ebook', $awal);
        $ubah->update($edt);

        // $edt = Ebook::findOrFail($id);
        // $edt->update($request->all());
        return redirect('admin-ebook')->with('success', 'Ebook Berhasil Diedit');
    }

    public function destroy($id)
    {
        $hapus = Ebook::findOrFail($id);

        $file = public_path('/dokumen/ebook/') . $hapus->file_ebook;

        if (file_exists($file)) {
            @unlink($file);
        }

        $hapus->delete();

        // $edt = Ebook::findOrFail($id);
        // $edt->delete();
        return back()->with('success', 'Ebook Berhasil Dihapus');
    }
}
