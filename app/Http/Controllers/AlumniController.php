<?php

namespace App\Http\Controllers;

use App\Alumni;
use App\Alumni_SMA;
use App\Alumni_SMP;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index()
    {
        $alumnis = Alumni::paginate(8);
        return view('alumni', compact('alumnis'));
    }
}
