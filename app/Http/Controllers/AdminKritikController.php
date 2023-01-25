<?php

namespace App\Http\Controllers;

use App\Kritik;
use Illuminate\Http\Request;

class AdminKritikController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request->has('search')) {
            $tambahkritiks = Kritik::where('nama_siswa', 'LIKE', '%' . $request->search . '%')->sortable()->paginate(15)->onEachSide(2)->fragment('admin-kritik-saran');
        } else {
            $tambahkritiks = Kritik::sortable()->paginate(15)->onEachSide(2)->fragment('admin-kritik-saran');
        }

        return view('admins.admin_kritik', compact('tambahkritiks'));
    }

    public function create()
    {
        return view('admins.admin_kritik_tambah');
    }

    public function store(Request $request)
    {
        Kritik::create([
            'nama_siswa' => $request->nama_siswa,
            'email_siswa' => $request->email_siswa,
            'kritik' => $request->kritik,
        ]);

        return redirect('admin-kritik-saran')->with('success', 'Kritik dan Saran Berhasil Ditambah');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $edt = Kritik::findOrFail($id);
        return view('admins.admin_kritik_edit', compact('edt'));
    }

    public function update(Request $request, $id)
    {
        $edt = Kritik::findOrFail($id);
        $edt->update($request->all());
        return redirect('admin-kritik-saran')->with('success', 'Kritik dan Saran Berhasil Diedit');
    }

    public function destroy($id)
    {
        $edt = Kritik::findOrFail($id);
        $edt->delete();
        return back()->with('success', 'Kritik dan Saran Berhasil Dihapus');
    }
}
