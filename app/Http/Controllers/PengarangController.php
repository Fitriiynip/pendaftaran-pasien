<?php

namespace App\Http\Controllers;
use Session;
use App\Models\pengarang;
use Illuminate\Http\Request;

class PengarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengarang = Pengarang::all();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan "
            ]);
        return view('pengarang.index', compact('pengarang'));
    }
/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('pengarang.create');
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
    'name' => 'required',
]);

$pengarang =  new Pengarang;
$pengarang->name = $request->name;
$pengarang->save();
return redirect()->route('pengarang.index');

        $this->validate($request, ['name' => 'required|unique:pengarang']);
        $pengarang = Pengarang::create($request->all());
        Session::flash("flash_notification", [
                        "level"=>"success",
                        "message"=>"Berhasil menyimpan"
                        ]);
        return redirect()->route('pengarang.index');
    }
     /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengarang  $pengarang
     * @return \Illuminate\Http\Response
     */
    public function show(Pengarang $pengarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengarang  $pengarang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengarang = Pengarang::find($id);
        return view('pengarang.edit')->with(compact('pengarang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengarang  $pengarang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

//validasi data
$validated = $request->validate([
    'name' => 'required',
]);

$pengarang = Pengarang::findOrFail($id);
$pengarang->name = $request->name;
$pengarang->save();
return redirect()->route('pengarang.index');

         $this->validate($request, ['name' => 'required|unique:pengarang,name,'. $id]);
         $pengarang = Pengarang::find($id);
         $pengarang->update($request->only('name'));
         Session::flash("flash_notification", [
         "level"=>"success",
         "message"=>"Berhasil menyimpan"
         ]);
         return redirect()->route('pengarang.index');
    }
/**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengarang  $pengarang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Pengarang::destroy($id)) return redirect()->back();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Penulis berhasil dihapus"
        ]);
        return redirect()->route('pengarang.index');
    }
}
