<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Pendaftaran;

use DB;


class ApiController extends Controller
{
     public function kategori()
    {
        $kamar = kamar::all();
        return response()->json([
            'success' => true,
            'message' => 'Data Kamar',
            'data' => $kamar,
        ], 200);
    }

     public function pendaftaran()
    {
        // $artikel = Article::with('category')->get();
        $pendaftaran = DB::table('pendaftarans')
            ->join('kamars', 'pendaftarans.id_kamars', '=', 'kamars.id', )
        // ->join('article_tags', 'article_tags.id', '=', 'articles.id', )
            ->select('pendaftarans.nama_pasien', 'pendaftarans.tanggal_daftar', 'pendaftarans.no_telepon','pendaftarans.jk','pendaftarans.jadwalperiksa', 'pendaftarans.alamatpasien','pendaftarans.id_kamar','kamars.nama as kamars')
            ->get();
        return response()->json([
            'success' => true,
            'message' => 'data pendaftaran',
            'data' => $pendaftaran,
        ], 200);
    }

}
