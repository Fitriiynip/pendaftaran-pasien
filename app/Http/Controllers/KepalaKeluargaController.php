<?php

namespace App\Http\Controllers;
use Session;
use App\Models\KepalaKeluarga;
use Illuminate\Http\Request;

class KepalaKeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kepalakeluarga = KepalaKeluarga::all();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan "
            ]);
        return view('kepalakeluarga.index', compact('kepalakeluarga'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kepalakeluarga.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //validasi data
$validated = $request->validate([
    'no' => 'required',
    'kode_desa' => 'required',
    'nama_kepala_keluarga' => 'required',
    'alamat' => 'required',


]);

$kepalakeluarga =  new KepalaKeluarga;
$kepalakeluarga->no = $request->no;
$kepalakeluarga->kode_desa = $request->kode_desa;
$kepalakeluarga->nama_kepala_keluarga = $request->nama_kepala_keluarga;
$kepalakeluarga->alamat = $request->alamat;
$kepalakeluarga->save();
return redirect()->route('kepalakeluarga.index');

        $this->validate($request, ['name' => 'required|unique:kepalakeluarga']);
        $kepalakeluarga = KepalaKeluarga::create($request->all());
        Session::flash("flash_notification", [
                        "level"=>"success",
                        "message"=>"Berhasil menyimpan"
                        ]);
        return redirect()->route('kepalakeluarga.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kepalakeluarga = KepalaKeluarga::findOrFail($id);
        return view('kepalakeluarga.show', compact('kepalakeluarga'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kepalakeluarga = KepalaKeluarga::find($id);
        return view('kepalakeluarga.edit')->with(compact('kepalakeluarga'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validasi data
$validated = $request->validate([
    'no' => 'required',
    'kode_desa' => 'required',
    'nama_kepala_keluarga' => 'required',
    'alamat' => 'required',


]);

$kepalakeluarga = KepalaKeluarga::findOrFail($id);
$kepalakeluarga->no = $request->no;
$kepalakeluarga->kode_desa = $request->kode_desa;
$kepalakeluarga->nama_kepala_keluarga = $request->nama_kepala_keluarga;
$kepalakeluarga->alamat = $request->alamat;
$kepalakeluarga->save();
return redirect()->route('kepalakeluarga.index');

        $this->validate($request, ['name' => 'required|unique:kepalakeluarga']);
        $kepalakeluarga = KepalaKeluarga::create($request->all());
        Session::flash("flash_notification", [
                        "level"=>"success",
                        "message"=>"Berhasil menyimpan"
                        ]);
        return redirect()->route('kepalakeluarga.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!KepalaKeluarga::destroy($id)) return redirect()->back();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Penulis berhasil dihapus"
        ]);
        return redirect()->route('kepalakeluarga.index');
    }
}
