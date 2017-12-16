<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\BPP;
use App\kegiatan;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();//Manggil semua dari table users
        $bpp = BPP::all();//Manggil semua dari table bpp
        $kegiatan = Kegiatan::all();//Manggil semua dari table kegiatan
        return view('home',compact('users','bpp','kegiatan'));
    }

    public function storeBPP(Request $request)
    {
        $this->validate($request, [
            'nama_bpp' => 'required',
            'unit_kerja' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required'
        ]);
      
           $tambah = new BPP;
           $tambah->nama_bpp = $request['nama_bpp'];
           $tambah->unit_kerja = $request['unit_kerja'];
           $tambah->alamat = $request['alamat'];
           $tambah->no_telepon = $request['no_telepon'];
           $tambah->save();
      
           return redirect('/home');
    }

    public function storeUser(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'username' => 'required',
            'alamat' => 'required',
            'password' => 'required',
            'level' => 'required'
      ]);
      
            $idbpp = $request['id'];

           $tambah = new User;
           $tambah->id_bpp = $request['id'];

            $nama = BPP::find($idbpp);

           $tambah->name = $nama->nama_bpp;
           $tambah->username = $request['username'];
           $tambah->email = $request['alamat'];
           $tambah->password = bcrypt($request['password']);
           $tambah->id_level = $request['level'];
           $tambah->save();
           return redirect('/home');
    }

    public function storeKegiatan(Request $request)
    {
        $this->validate($request, [
            'kode_kegiatan' => 'required',
            'program_kegiatan' => 'required'
      ]);
      
           $tambah = new Kegiatan;
           $tambah->kode_kegiatan = $request['kode_kegiatan'];
           $tambah->program_kegiatan = $request['program_kegiatan'];
           $tambah->save();
      
           return redirect('/home');
    }

    public function editBPP($id) {
        $bpp = BPP::find(base64_decode($id));
        return view('resource.edit.edit-bpp')->with('bpp', $bpp);
    }

    public function updateBPP(Request $request, $id)
    {
        $this->validate($request, [
            'nama_bpp' => 'required',
            'unit_kerja' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required'
        ]);

        $tambah = BPP::find(base64_decode($id));
        $tambah->nama_bpp = $request['nama'];
        $tambah->unit_kerja = $request['unit_kerja'];
        $tambah->alamat = $request['alamat'];
        $tambah->no_telepon = $request['no_telepon'];
        $tambah->save();
    
        return redirect()->to('/home');
    }
}
