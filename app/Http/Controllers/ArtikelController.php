<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = Artikel::paginate(8);
        return view('artikel_kami', compact('artikels'));
    }
}
