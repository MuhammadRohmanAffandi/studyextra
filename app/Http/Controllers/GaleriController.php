<?php

namespace App\Http\Controllers;

use App\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::paginate(8);
        return view('galeri_kami', compact('galeris'));
    }
}
