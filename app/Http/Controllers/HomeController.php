<?php

namespace App\Http\Controllers;

use App\Models\DataHasilPemeriksaan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        $datas = DataHasilPemeriksaan::all();

        return view('homepage', compact('datas'));
    }

    public function viewPDF(Request $request)
    {
        $data = DataHasilPemeriksaan::find($request->id);
        $filename = $data->file_hasil_pemeriksaan;
        $path = public_path('/FileHasilPemeriksaan/' . $filename);

        return response()->file($path);
    }
}