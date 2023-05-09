<?php

namespace App\Http\Controllers;

use App\Models\KeluargaModel;
use Illuminate\Http\Request;

class KeluargaModelController extends Controller
{
    public function index() {
        $keluarga = KeluargaModel::all();
        return view('keluarga.keluarga', [
            'keluarga' => $keluarga
        ]);
    }

    public function create()
    {
        return view('keluarga.create_keluarga')
                ->with('url_form',url('/keluarga'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'NIK' => 'required|int|max:20|unique:keluarga,NIK',
            'nama_keluarga' => 'required|string|max:30',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required|string|max:30',
            'jenis_kelamin' => 'required|in:Perempuan,Laki-laki',
            'agama' => 'required|string|max:30',
            'status_perkawinan' => 'required|string|max:30',
            'status_hubungan' => 'required|string|max:30',
            'kewarganegaraan' => 'required|string|max:30',
            'jenis_pekerjaan' => 'required|string|max:30',
        ]);

 
        $data = KeluargaModel::create($request->except(['_token']));

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('keluarga')
            ->with('success', 'Data Keluarga Berhasil Ditambahkan');
    }

    public function edit($NIK)
    {
        $keluarga = KeluargaModel::find($NIK);
        return view('keluarga.create_keluarga')
                ->with('keluarga', $keluarga)
                ->with('url_form', url('/keluarga/'. $NIK));
    }

    public function update(Request $request, $NIK)
    {
        $request->validate([
            'NIK' => 'required|int|max:20|unique:keluarga,NIK,'.$NIK,
            'nama_keluarga' => 'required|string|max:30',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required|string|max:30',
            'jenis_kelamin' => 'required|in:Perempuan,Laki-laki',
            'tgl_lahir' => 'required|date',
            'agama' => 'required|string|max:30',
            'status_perkawinan' => 'required|string|max:30',
            'status_hubungan' => 'required|string|max:30',
            'kewarganegaraan' => 'required|string|max:30',
            'jenis_pekerjaan' => 'required|string|max:30',
        ]);
        $data = KeluargaModel::where('NIK', '=', $NIK)->update($request->except(['_token', '_method']));
        return redirect('keluarga')
            ->with('success', 'Data Keluarga Berhasil Diedit');
    }

    public function destroy($NIK)
    {
        KeluargaModel::where('NIK', '=', $NIK)->delete();
        return redirect('keluarga')
            ->with('success', 'Data Keluarga Berhasil Dihapus');
    }
}
