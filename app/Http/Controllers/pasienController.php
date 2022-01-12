<?php

namespace App\Http\Controllers;
use Session;
use App\Models\pasien;
use Illuminate\Http\Request;

class pasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasien = pasien::all();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan "
            ]);
        return view('pasien.index', compact('pasien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasien.create');
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
    'no_identitas' => 'required',
    'Nik' => 'required',
    'id_KepalaKeluarga' => 'required',
    'nama_pasien' => 'required',
    'jenis_kelamin' => 'required',
    'tanggal_lahir' => 'required',
    'no_telpon' => 'required',


]);

$pasien =  new pasien;
$pasien->no_identitas= $request->no_identitas;
$pasien->Nik = $request->Nik;
$pasien->id_KepalaKeluarga = $request->id_KepalaKeluarga;
$pasien->nama_pasien = $request->nama_pasien;
$pasien->jenis_kelamin = $request->jenis_kelamin;
$pasien->tanggal_lahir = $request->tanggal_lahir;
$pasien->no_telpon = $request->no_telpon;
$pasien->save();
return redirect()->route('pasien.index');

        $this->validate($request, ['name' => 'required|unique:pasien']);
        $pasien = pasien::create($request->all());
        Session::flash("flash_notification", [
                        "level"=>"success",
                        "message"=>"Berhasil menyimpan"
                        ]);
        return redirect()->route('pasien.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pasien = pasien::findOrFail($id);
        return view('pasien.show', compact('pasien'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pasien = parsien::find($id);
        return view('pasien.edit')->with(compact('parsien'));
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
    'no_identitas' => 'required',
    'Nik' => 'required',
    'id_kepala_keluarga' => 'required',
    'nama_pasien' => 'required',
    'jenis_kelamin' => 'required',
    'tanggal_lahir' => 'required',
    'no_telpon' => 'required',


]);

$pasien =  new pasien;
$pasien->no_identitas= $request->no_identitas;
$pasien->Nik = $request->Nik;
$pasien->id_kepala_keluarga = $request->id_kepala_keluarga;
$pasien->jenis_kelamin = $request->jenis_kelamin;
$pasien->tanggal_lahir = $request->tanggal_lahir;
$pasien->no_telpon = $request->no_telpon;
$pasien->save();
return redirect()->route('pasien.index');

        $this->validate($request, ['name' => 'required|unique:pasien']);
        $pasien = pasien::create($request->all());
        Session::flash("flash_notification", [
                        "level"=>"success",
                        "message"=>"Berhasil menyimpan"
                        ]);
        return redirect()->route('pasien.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!pasien::destroy($id)) return redirect()->back();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Penulis berhasil dihapus"
        ]);
        return redirect()->route('pasien.index');
    }
}
