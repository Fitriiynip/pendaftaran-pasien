<?php

namespace App\Http\Controllers;

use Alert;

use App\Models\JadwalDokter;
use App\Models\Pendaftaran;
use App\Models\Ruang;
use App\Models\Kamar;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function cetakForm()
    {
        return view('pendaftaran.cetak');
    }

    public function cetakPertanggal($tglawal, $tglakhir)
    {
        // dd(["Tanggal Awal : ".$tglawal, "Tanggal Akhir : ".$tglakhir]);
        $cetak = Pendaftaran::whereDate('tanggal_daftar', '>=', $tglawal)->whereDate('tanggal_daftar', '<=', $tglakhir)->get();
        return view('pendaftaran.cetak-pertanggal', compact('cetak'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftaran = Pendaftaran::with('ruang', 'jadwal', 'kamar')->get();
        return view('pendaftaran.index', compact('pendaftaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ruang = Ruang::all();
        $jadwal = JadwalDokter::all();
        $kamar = Kamar::all();
        return view('pendaftaran.create', compact('ruang', 'jadwal', 'kamar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([

        //     'nama_pasien' => 'required',
        //     'tanggal_daftar' => 'required',
        //     'no_telepon' => 'required',
        //     'id_dokter' => 'required',
        //     'jk' => 'required',
        //     'jadwaperiksa' => 'required',
        //     'id_ruang' => 'required',
        //     'bayar' => 'required',
        // ]);

        $pendaftaran = new Pendaftaran;
        $pendaftaran->nama_pasien = $request->nama_pasien;
        $pendaftaran->tanggal_daftar = $request->tanggal_daftar;
        $pendaftaran->no_telepon = $request->no_telepon;
        $pendaftaran->id_dokter = $request->id_dokter;
        $pendaftaran->jk = $request->jk;
        $pendaftaran->jadwalperiksa = $request->jadwalperiksa;
        $pendaftaran->alamatpasien = $request->alamatpasien;
        $pendaftaran->id_kamar = $request->id_kamar;
        $pendaftaran->id_ruang = $request->id_ruang;
        

        $pendaftaran->save();
        return redirect()->route('pendaftaran.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pendaftaran  $Pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $pendaftaran = Pendaftaran::findOrFail($id);
        $ruang = Ruang::all();
        $jadwal = JadwalDokter::all();
        $kamar = Kamar::all();
        return view('pendaftaran.show', compact('pendaftaran', 'ruang', 'jadwal', 'kamar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pendaftaran  $Pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        $ruang = Ruang::all();
        $jadwal = JadwalDokter::all();
        $kamar = Kamar::All();
        return view('pendaftaran.edit', compact('pendaftaran', 'ruang', 'jadwal', 'kamar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pendaftaran  $Pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'nama_pasien' => 'required',
            'tanggal_daftar' => 'required',
            'no_telepon' => 'required',
            'id_dokter' => 'required',
            'jk' => 'required',
            'jadwalperiksa' => 'required',
            'id_kamar' => 'required',
            'id_ruang' => 'required',
            
        ]);

        $pendaftaran = Pendaftaran::findOrfail($id);
        $pendaftaran->nama_pasien = $request->nama_pasien;
        $pendaftaran->tanggal_daftar = $request->tanggal_daftar;
        $pendaftaran->no_telepon = $request->no_telepon;
        $pendaftaran->id_dokter = $request->id_dokter;
        $pendaftaran->jk = $request->jk;
        $pendaftaran->jadwalperiksa = $request->jadwalperiksa;
        $pendaftaran->alamatpasien = $request->alamatpasien;
        $pendaftaran->id_kamar = $request->id_kamar;
        $pendaftaran->id_ruang = $request->id_ruang;
       
        $pendaftaran->save();
        return redirect()->route('pendaftaran.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pendaftaran  $Pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        $pendaftaran->delete();
        return redirect()->route('pendaftaran.index');
    }
}
