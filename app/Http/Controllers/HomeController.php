<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\BPP;
use App\GU;
use App\Kegiatan;
use App\LS;
use DB;
use Auth;

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

        $idBPP = Auth::user()->bpp['id_bpp'];
        $idgu = GU::where('id_bpp', $idBPP)->get();
        $idls = LS::where('id_bpp', $idBPP)->get();
        $dashboardBPP = DB::select('SELECT "GU" as "Kategori", kegiatan.program_kegiatan, created_at, status FROM gu JOIN kegiatan USING(kode_kegiatan) JOIN bpp USING(id_bpp) WHERE bpp.id_bpp = "'.$idBPP.'" UNION SELECT "LS" as "Kategori", kegiatan.program_kegiatan, created_at, status FROM ls JOIN kegiatan USING(kode_kegiatan) JOIN bpp USING(id_bpp) WHERE bpp.id_bpp = "'.$idBPP.'" ORDER BY created_at DESC');

        $dashboardAll = DB::select('SELECT id_gu, bpp.nama_bpp, "GU" as "Kategori", kegiatan.program_kegiatan, created_at, status 
        FROM gu JOIN kegiatan USING(kode_kegiatan) join bpp using(id_bpp) 
        UNION SELECT id_ls, bpp.nama_bpp, "LS" as "Kategori", kegiatan.program_kegiatan, created_at, status 
        FROM ls JOIN kegiatan USING(kode_kegiatan) join bpp using(id_bpp) ORDER BY created_at DESC');

        $dashboardnotif = DB::select('SELECT id_gu, bpp.nama_bpp,"GU" as "Kategori", kegiatan.program_kegiatan, updated_at, status
        FROM gu JOIN kegiatan USING(kode_kegiatan) join bpp using(id_bpp)
        UNION SELECT id_ls, bpp.nama_bpp, "LS" as "Kategori", kegiatan.program_kegiatan, updated_at, status
        FROM ls JOIN kegiatan USING(kode_kegiatan) join bpp using(id_bpp) ORDER BY updated_at DESC limit 5');

        return view('home',compact('users', 'tabelGU', 'tabelLS', 'kegiatan', 'dashboardBPP', 'bpp', 'idgu', 'idls', 'dashboardAll', 'dashboardnotif'));
    }

    public function showPrinter() {
        return view('printer.print');
    }

    public function showPrintPreview() {
        return view('printer.file');
        // return view('table.tablegu');
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
