<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function profile()
    {
        $data = Profile::all();
        return view('tabelprofile', compact('data'));
    }

    public function kontakkami()
    {
        $data = Profile::all();
        return view('kontakkami', compact('data'));
    }

    public function simpanprofile(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'instagram' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $gambar = $request->file('logo')->store('images', 'public');
        $user_id = Auth::id();
        
        Profile::create([
            'judul' => $request->judul,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'instagram' => $request->instagram,
            'logo' => $gambar,
            'user_id' => $user_id,
        ]);

        return redirect()->route('tabelprofile')->with('succes','profile berhasil di tambahkan');
    }

    public function editprofile($id)
    {
        $data = Profile::find($id);
        return view('editprofile', compact('data'));
    }

    public function updateprofile(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'instagram' => 'required',
            'logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $data = Profile::find($id);
        $data->judul = $request->judul;
        $data->email = $request->email;
        $data->no_telp = $request->no_telp;
        $data->instagram = $request->instagram;
    
        if ($request->hasFile('logo')) {
            // Hapus gambar lama jika ada
            Storage::delete('public/' . $data->logo);
            // Simpan gambar baru ke storage
            $gambarPath = $request->file('logo')->store('images', 'public');
            $data->logo = $gambarPath;
        }
    
        $data->save();
    
        return redirect()->route('tabelprofile')->with('success', 'profile berhasil diupdate');
    }


    public function delete($id)
    {
        $data = Profile::find($id);
        $data->delete();
        return redirect()->route('tabelprofile')->with('success', 'profile berhasil dihapus');
    }
}
