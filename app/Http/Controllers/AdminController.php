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
            'email' => 'required',
            'password' => 'required',
            'level' => 'required'
      ]);
      
            $idbpp = $request['id'];

           $tambah = new User;
           $tambah->id_bpp = $request['id'];

            $nama = BPP::find($idbpp);

           $tambah->name = $nama->nama_bpp;
           $tambah->username = $request['username'];
           $tambah->email = $request['email'];
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
        $bpp = BPP::where('id_bpp', $id)->first();
        return view('resource.edit.edit-bpp')->with('bpp', $bpp);
    }

    public function editKegiatan($id) {
        $kegiatan = Kegiatan::where('id', $id)->first();
        return view('resource.edit.edit-kegiatan')->with('kegiatan', $kegiatan);
    }

    public function updateBPP(Request $request, $id)
    {
        $tambah = BPP::where('id_bpp', $id)->first();
        $tambah->nama_bpp = $request['nama_bpp'];
        $tambah->unit_kerja = $request['unit_kerja'];
        $tambah->alamat = $request['alamat'];
        $tambah->no_telepon = $request['no_telepon'];
        $tambah->save();
    
        return redirect()->to('/home');
    }

    public function updateUser(Request $request, $id)
    {       
        $update = User::where('id', $id)->first();
        $update->name = $request['name'];
        $update->username = $request['username'];
        $update->email = $request['email'];
        $update->id_level = $request['id_level'];
        $update->save();
    
        return redirect()->to('/home');
    }

    public function updateKegiatan(Request $request, $id)
    {       
        $update = Kegiatan::where('id', $id)->first();
        $update->kode_kegiatan = $request['kode_kegiatan'];
        $update->program_kegiatan = $request['program_kegiatan'];
        $update->save();
    
        return redirect()->to('/home');
    }

    public function destroyBPP($id)
    {
        $hapus = BPP::find($id);
        $hapus->delete();

        return redirect()->to('/home');
    }

    public function destroyUser($id)
    {
        $hapus = USER::find($id);
        $hapus->delete();

        return redirect()->to('/home');
    }

    public function destroyKegiatan($id)
    {
        $hapus = Kegiatan::find($id);
        $hapus->delete();

        return redirect()->to('/home');
    }
}
