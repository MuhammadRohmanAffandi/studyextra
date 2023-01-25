<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;

class BacaArtikelController extends Controller
{
    public function index($id)
    {
        $artikel = Artikel::where('id', $id)->first();
        return view('baca_artikel', compact('artikel'));
    }
}
