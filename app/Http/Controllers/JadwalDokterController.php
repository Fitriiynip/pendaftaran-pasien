<?php

namespace App\Http\Controllers;

use App\Models\JadwalDokter;
use Illuminate\Http\Request;
use Session;

class JadwalDokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwal = JadwalDokter::all();
        return view('jadwal.index', compact('jadwal'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jadwal.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_dokter' => 'required',
            'waktu_mulai' => 'required',
            'waktu_akhir' => 'required',
        ]);

        $jadwal = new JadwalDokter;
        $jadwal->nama_dokter = $request->nama_dokter;
        $jadwal->waktu_mulai = $request->waktu_mulai;
        $jadwal->waktu_akhir = $request->waktu_akhir;
        $jadwal->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data saved successfully",
        ]);
        return redirect()->route('jadwal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JadwalDokter  $JadwalDokter
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jadwal = JadwalDokter::findOrFail($id);
        return view('jadwal.show', compact('jadwal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jadwalDokter  $JadwalDokter
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jadwal = JadwalDokter::findOrFail($id);
        return view('jadwal.edit', compact('jadwal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JadwalDokter  $JadwalDokter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_dokter' => 'required',
            'waktu_mulai' => 'required',
            'waktu_akhir' => 'required',
        ]);

        $jadwal = JadwalDokter::findOrFail($id);
        $jadwal->nama_dokter = $request->nama_dokter;
        $jadwal->waktu_mulai = $request->waktu_mulai;
        $jadwal->waktu_akhir = $request->waktu_akhir;
        $jadwal->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data edited successfully",
        ]);
        return redirect()->route('jadwal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JadwalDokter  $JadwalDokter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jadwal = JadwalDokter::findOrFail($id);
        $jadwal->delete();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data deleted successfully",
        ]);
        return redirect()->route('jadwal.index');
    }
}
