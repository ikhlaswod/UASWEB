<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Custom;

class LaporanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $laporans = Custom::all();
        return view('dewan_ekspor_pdf.index',compact('laporans'));
    }

    public function ekspor()
    {
        $laporans = Custom::all();
        return view('dewan_ekspor_pdf.ekspor',compact('laporans'));
    }

    public function show(Custom $laporans)
    {
        //
    }
}