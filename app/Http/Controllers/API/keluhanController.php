<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class keluhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $katagori = Kategori::all();
        return response()->json([
            'success' => true,
            'mssage' => 'Data Keluhan',
            'data' => $keluhan,
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
        $keluhan = new ArticleCategory();
        $keluhan->name = $request->name;
        $keluhan->slug = $request->slug;
        $keluhan->save();
        return response()->json([
            'success' => true,
            'massage' => 'Data keluhan berhasil dibuat',
            'data' => $katagori,
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
        $katagori = ArticleCategory::findOrfail($id);
        return response()->json([
            'success' => true,
            'mssage' => 'Show Data Keluhan',
            'data' => $keluhan,
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
        $keluhan = new ArticleCategory();
        $keluhan->name = $request->name;
        $keluhan->slug = $request->slug;
        $keluhan->save();
        return response()->json([
            'success' => true,
            'massage' => 'Data keluhan berhasil diedit',
            'data' => $katagori,
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
        $katagori = ArticleCategory::findOrfail($id);
        return response()->json([
            'success' => true,
            'mssage' => 'Show Data Keluhan Berhasil Dihapus',
            'data' => $keluhan,
        ], 200);

    }
}
