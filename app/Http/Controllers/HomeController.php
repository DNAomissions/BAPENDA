<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\BPP;
use App\kegiatan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();//Manggil semua dari table users
        $bpp = BPP::all();//Manggil semua dari table bpp
        $kegiatan = Kegiatan::all();//Manggil semua dari table kegiatan
        return view('home',compact('users','bpp','kegiatan'));
    }

    public function showPrinter() {
        return view('printer.print');
    }

    public function showPrintPreview() {
        return view('printer.file');
    }
}
