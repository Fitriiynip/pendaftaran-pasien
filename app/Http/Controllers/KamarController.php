<?php

namespace App\Http\Controllers;
use Session;
use App\Models\Kamar;
use App\Models\Ruang;

use Illuminate\Http\Request;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamar = Kamar::with('ruang')->get();
return view('kamar.index', compact('kamar'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ruang = Ruang::all();
return view('kamar.create', compact('ruang'));

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
            'nama_kamar' => 'required',
    'id_ruang' => 'required',

]);

$kamar = new Kamar;
$kamar->nama_kamar = $request->nama_kamar;
$kamar->id_ruang= $request->id_ruang;
$kamar->save();
Session::flash("flash_notification", [
    "level" => "success",
    "message" => "Data saved successfully",
]);
return redirect()->route('kamar.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $kamar = Kamar::findOrFail($id);
        $ruang = Ruang::all();
        return view('kamar.show', compact('kamar', 'ruang'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kamar = Kamar::findOrFail($id);
        $ruang = Ruang::all();
        return view('kamar.edit', compact('kamar', 'ruang'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request ->validate([
             'nama_kamar' => 'required',
    'id_ruang' => 'required',
]);

$kamar = Kamar::findOrFail($id);
$kamar->nama_kamar = $request->nama_kamar;
$kamar->id_ruang = $request->id_ruang;
$kamar->save();
Session::flash("flash_notification", [
    "level" => "success",
    "message" => "Data edited successfully",
]);
return redirect()->route('kamar.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kamar = Kamar::findOrFail($id);
        $kamar->delete();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data deleted successfully",
        ]);
return redirect()->route('kamar.index');

    }
}
