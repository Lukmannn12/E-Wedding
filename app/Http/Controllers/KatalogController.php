<?php

namespace App\Http\Controllers;

use App\Models\Katalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class KatalogController extends Controller
{
    public function index()
    {
        $data = Katalog::all();
        return view('tabelkatalog', compact('data'));
    }

    public function indexx()
    {
        $data = Katalog::all();
        return view('landing', compact('data'));
    }

    public function detail($id)
    {
        $data = Katalog::find($id);
        return view('detailkatalog', compact('data'));
    }

    public function simpankatalog(Request $request)
    {
        $request->validate([
            'nama_paket' => 'required',
            'isi_katalog' => 'required',
            'biaya' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $gambar = $request->file('gambar')->store('images', 'public');
        $user_id = Auth::id();
        
        Katalog::create([
            'nama_paket' => $request->nama_paket,
            'isi_katalog' => $request->isi_katalog,
            'biaya' => $request->biaya,
            'gambar' => $gambar,
            'user_id' => $user_id,
        ]);

        return redirect()->route('tabelkatalog')->with('succes','katalog berhasil di tambahkan');
    }

    public function delete($id)
    {
        $data = Katalog::find($id);
        $data->delete();
        return redirect()->route('tabelkatalog')->with('success', 'Katalog berhasil dihapus');
    }

// app/Http/Controllers/KatalogController.php

public function editkatalog($id)
{
    $data = Katalog::find($id);
    return view('editkatalog', compact('data'));
}


public function updatekatalog(Request $request, $id)
{
    $request->validate([
        'nama_paket' => 'required',
        'isi_katalog' => 'required',
        'biaya' => 'required',
        'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $data = Katalog::find($id);
    $data->nama_paket = $request->nama_paket;
    $data->isi_katalog = $request->isi_katalog;
    $data->biaya = $request->biaya;

    if ($request->hasFile('gambar')) {
        // Hapus gambar lama jika ada
        Storage::delete('public/' . $data->gambar);
        // Simpan gambar baru ke storage
        $gambarPath = $request->file('gambar')->store('images', 'public');
        $data->gambar = $gambarPath;
    }

    $data->save();

    return redirect()->route('tabelkatalog')->with('success', 'Katalog berhasil diupdate');
}


    
}
