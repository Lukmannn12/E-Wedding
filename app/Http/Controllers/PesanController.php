<?php

namespace App\Http\Controllers;

use App\Models\Katalog;
use App\Models\Pemesan;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesanController extends Controller
{

    public function pemesan()
    {
        $data = Katalog::all();
        return view('pesan', compact('data'));
    }
    public function historypesanan()
    {
        // Mengambil semua katalog untuk tampilan history pesanan
        $data = Pemesan::where('user_id', Auth::id())->get();
        return view('historypesanan', compact('data'));
    }

    public function tabelpesanan()
    {
        $data = Pemesan::all();
        return view('tabelpesanan', compact('data'));
    }

    public function laporanpesanan()
    {
        $data = Pemesan::all();
        return view('laporanpesanan', compact('data'));
    }


    public function datapesanan(Request $request)
    {
        $data = Pemesan::where('email',Auth::user()->email)->get();

        return view('tabelpesanan', compact('data'));
    }

    public function simpandata(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'tgl_acara' => 'required|date',
            'katalog_id' => 'required|exists:katalogs,id',
        ]);
        
        $no_resi = Str::random(10); // Generate a unique tracking number
        
        Pemesan::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'tgl_acara' => $request->tgl_acara,
            'katalog_id' => $request->katalog_id,
            'user_id' => Auth::id(),
            'status' => 'request',
            'no_resi' => $no_resi,
        ]);
        

        return redirect()->route('historypesanan')->with('success', 'Data berhasil ditambahkan.');

    }


    public function editpesanan($id)
    {
        $pemesan = Pemesan::findOrFail($id);
        return view('editpesanan', compact('pemesan'));
    }
    
    public function updatepesanan(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:request,approved,rejected', // sesuaikan dengan pilihan status yang tersedia
        ]);
    
        $pemesan = Pemesan::findOrFail($id);
        $pemesan->status = $request->status;
        $pemesan->save();
    
        return redirect()->route('tabelpesanan')->with('success', 'Status pesanan berhasil diperbarui.');
    }
    protected $pdf;

    public function __construct(PDF $pdf)
    {
        $this->pdf = $pdf;
    }

    public function cetakPesanan()
    {
        $data = Pemesan::all();
        $pdf = $this->pdf->loadView('cetakpesanan', compact('data'));

        return $pdf->download('data_pesanan.pdf');
    }

    public function search(Request $request)
    {
        $q = $request->input('q');
        $data = Pemesan::where('nama', 'LIKE', '%' . $q . '%')
        ->orWhere('email', 'LIKE', '%' . $q . '%')
        ->orWhere('no_resi', 'LIKE', '%' . $q . '%')
            ->get();
        return view('search', compact('data'));
    }

}
