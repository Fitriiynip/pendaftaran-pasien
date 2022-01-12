<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
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
        return response()->json([
            'seccess' => true,
            'message' => 'Data KepalaKeluarga',
            'data' => $kepalakeluarga,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kepalakeluarga = new ArticleCatagory();
        $kepalakeluarga->name = $request->name;
        $kepalakeluarga->slug = $request->slug;
        $kepalakeluarga->save();
        return response()->json([
            'success' => true,
            'massage' =>'Data kepalakeluarga berhasil',
            'data' => $KepalaKeluarga,
        ], 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kepalakeluarga = ArticleCatagory::findOrfail($id);
        return response()->json([
            'success' => true,
            'masage' => 'Show Data KepalaKeluarga',
            'data' => $kepalakeluarga
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kepalakeluarga = new ArticleCatagory();
        $kepalakeluarga->name = $request->name;
        $kepalakeluarga->slug = $request->slug;
        $kepalakeluarga->save();
        return response()->json([
            'success' => true,
            'massage' =>'Data kepalakeluarga berhasil diedit',
            'data' => $kepalakeluarga,
        ], 201);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kepalakeluarga = ArticleCatagory::findOrfail($id);
        return response()->json([
            'success' => true,
            'masage' => 'Show Data KepalaKeluarga berhasil di hapus',
            'data' => $kepalakeluarga
        ], 200);
    }
}
