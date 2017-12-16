<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\BPP;
use App\GU;
use App\Kegiatan;
use App\LS;
use DB;

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

        $tabelGU = GU::all();
        $tabelLS = LS::all();
        $kegiatan = Kegiatan::all();//Manggil semua dari table kegiatan
        
        $bpp = BPP::all();

        $dashboardBPP = DB::select('SELECT "GU" as "Kategori", kegiatan.program_kegiatan, created_at, status FROM gu JOIN kegiatan USING(kode_kegiatan) UNION SELECT "LS" as "Kategori", kegiatan.program_kegiatan, created_at, status FROM ls JOIN kegiatan USING(kode_kegiatan) ORDER BY created_at DESC');

        return view('home',compact('users', 'tabelGU', 'tabelLS', 'kegiatan', 'dashboardBPP', 'bpp'));
    }

    public function showPrinter() {
        return view('printer.print');
    }

    public function showPrintPreview() {
        return view('printer.file');
    }

    public function verifikasigu() {
        return view('verifikasi.verifikasigu');
    }

    public function verifikasilu() {
        return view('verifikasi.verifikasils');
    }

    public function autocomplete(Request $request){
        $term = $request->term;
        $data = DB::table("kegiatan")->where('program_kegiatan', 'LIKE', '%'.$term.'%')->get();
        foreach ($data as $v) {
            $array[] = $v->program_kegiatan;
        }
        return json_encode($array);
    }
}
