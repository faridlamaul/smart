<?php

namespace App\Http\Controllers;

use App\Models\DataHasilPemeriksaan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $datas = DataHasilPemeriksaan::all();

        return view('dashboard.dashboard', compact('datas'));
    }

    public function viewPDF(Request $request)
    {
        $data = DataHasilPemeriksaan::find($request->id);
        $filename = $data->file_hasil_pemeriksaan;
        $path = public_path('/FileHasilPemeriksaan/' . $filename);

        return response()->file($path);
    }

    public function form()
    {
        return view('dashboard.input-form');
    }

    public function data()
    {
        return view('dashboard.add-data');
    }

    public function rekap()
    {
        $datas = DataHasilPemeriksaan::all();

        return view('dashboard.rekap-smart', compact('datas'));
    }

    public function addData(Request $request)
    {
        $request->validate([
            'nama_pemilik_kendaraan' => 'required',
            'no_plat_tnkb' => 'required',
            'file_hasil_pemeriksaan' => ['required', 'file', 'mimes:pdf', 'max:2048'],
            'keterangan' => 'required',
        ]);

        $input = $request->all();

        if ($file_hasil_pemeriksaan = $request->file('file_hasil_pemeriksaan')) {
            $destinationPath = 'FileHasilPemeriksaan/';
            $fileName = "FileHasilPemeriksaan_" . date('YmdHis') . "." . $file_hasil_pemeriksaan->getClientOriginalExtension();
            $file_hasil_pemeriksaan->move($destinationPath, $fileName);
            $input['file_hasil_pemeriksaan'] = "$fileName";
        }

        DataHasilPemeriksaan::create($input);

        return redirect('dashboard/data')->with('success', 'Data berhasil ditambahkan');
    }

    public function editData(Request $request)
    {
        $request->validate([
            'nama_pemilik_kendaraan' => 'required',
            'no_plat_tnkb' => 'required',
            'file_hasil_pemeriksaan' => ['file', 'mimes:pdf', 'max:2048'],
            'keterangan' => 'required',
        ]);

        $input = $request->all();

        if ($file_hasil_pemeriksaan = $request->file('file_hasil_pemeriksaan')) {
            $destinationPath = 'FileHasilPemeriksaan/';
            $fileName = "FileHasilPemeriksaan_" . date('YmdHis') . "." . $file_hasil_pemeriksaan->getClientOriginalExtension();
            $file_hasil_pemeriksaan->move($destinationPath, $fileName);
            $input['file_hasil_pemeriksaan'] = "$fileName";
        } else {
            unset($input['file_hasil_pemeriksaan']);
        }

        $data = DataHasilPemeriksaan::find($request->id);

        $data->update($input);

        return redirect('dashboard/')->with('success', 'Data berhasil diubah');
    }

    public function deleteData(Request $request)
    {
        $data = DataHasilPemeriksaan::find($request->id);
        $data->delete();

        return redirect('/dashboard')->with('success', 'Data berhasil dihapus');
    }
}