<?php

namespace App\Http\Controllers;

use App\Ebook;
use PDF;
use Illuminate\Http\Request;

class EbookController extends Controller
{
    public function index()
    {
        $ebooks = Ebook::paginate(8);
        return view('ebook_kami', compact('ebooks'));
    }
}
