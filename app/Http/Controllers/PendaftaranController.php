<?php

namespace App\Http\Controllers;

use App\Models\JadwalDokter;
use App\Models\Pendaftaran;
use App\Models\Ruang;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftaran = Pendaftaran::with('ruang', 'jadwal')->get();
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
        return view('pendaftaran.create', compact('ruang', 'jadwal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'nama_pasien' => 'required',
            'tanggal_daftar' => 'required',
            'no_telepon' => 'required',
            'id_dokter' => 'required',
            'jk' => 'required',
            'jadwal_periksa' => 'required',
            'id_ruang' => 'required',
            'cara_bayar' => 'required',
        ]);

        $pendaftaran = new Pendaftaran;
        $pendaftaran->nama_pasien = $request->nama_pasien;
        $pendaftaran->tanggal_daftar = $request->tanggal_daftar;
        $pendaftaran->no_telepon = $request->no_telepon;
        $pendaftaran->id_dokter = $request->id_dokter;
        $pendaftaran->jk = $request->jk;
        $pendaftaran->jadwal_periksa = $request->jadwal_periksa;
        $pendaftaran->id_ruang = $request->id_ruang;
        $pendaftaran->cara_bayar = $request->cara_bayar;
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
        return view('pendaftaran.show', compact('pendaftaran',  'ruang', 'jadwal'));
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
        return view('pendaftaran.edit', compact('pendaftaran', 'ruang', 'jadwal'));
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
            'jadwal_periksa' => 'required',
            'id_ruang' => 'required',
            'cara_bayar' => 'required',
        ]);

        $pendaftaran = Pendaftaran::findOrfail($id);
        $pendaftaran->nama_pasien = $request->nama_pasien;
        $pendaftaran->tanggal_daftar = $request->tanggal_daftar;
        $pendaftaran->no_telepon = $request->no_telepon;
        $pendaftaran->id_dokter = $request->id_dokter;
        $pendaftaran->jk = $request->jk;
        $pendaftaran->jadwal_periksa = $request->jadwal_periksa;
        $pendaftaran->id_ruang = $request->id_ruang;
        $pendaftaran->cara_bayar = $request->cara_bayar;
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
