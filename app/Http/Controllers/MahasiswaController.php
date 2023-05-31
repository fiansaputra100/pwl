<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\MahasiswaModel;
use Illuminate\Http\Request;
use App\Models\Kelas;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use PDF;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mahasiswa.mahasiswa');
    }

    public function data()
    {
        $data = MahasiswaModel::selectRaw('id, nim, nama,hp, jk, tanggal_lahir');

        return DataTables::of($data)
                    ->addIndexColumn()
                    ->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('mahasiswa.create_mahasiswa', [
            'url_form' => url('/mahasiswa'),
            'kelas' => $kelas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request)
    {
        $rule = [
            'nim' => 'required|string|max:10|unique:mahasiswa,nim',
            'nama' => 'required|string|max:50',
            'hp' => 'required|digits_between:6,15',
            'jk' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',

        ];

        $validator = Validator::make($request->all(), $rule);
        if($validator->fails()){
            return response()->json([
                'status' => false,
                'modal_close' => false,
                'message' => 'Data gagal ditambahkan. ' .$validator->errors()->first(),
                'data' => $validator->errors()
            ]);
        }

        $mhs = MahasiswaModel::create($request->all());
        return response()->json([
            'status' => ($mhs)?true:false,
            'modal_close' => false,
            'message' => ($mhs)? 'Data berhasil ditambahkan' : 'Data gagal ditambahkan',
            'data' => null
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MahasiswaModel  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(MahasiswaModel $mahasiswa)
    {
        //
    }

    public function showKhs(MahasiswaModel $mahasiswa, $id){
        $mahasiswa = MahasiswaModel::with('kelas', 'matakuliah')->find($id);
        $khs = $mahasiswa->matakuliah()->withPivot('nilai')->get();
        return view('mahasiswa.khs', [
            'mahasiswa' => $mahasiswa,
            'khs' => $khs
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MahasiswaModel  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = MahasiswaModel::with('kelas')->find($id);
        $kelas = Kelas::all();
        return view('mahasiswa.create_mahasiswa', [
            'mhs' => $mahasiswa,
            'kelas' => $kelas,
            'url_form' => url('/mahasiswa/' . $id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rule = [
            'nim' => 'required|string|max:10|unique:mahasiswa,nim,'.$id,
            'nama' => 'required|string|max:50',
            'hp' => 'required|digits_between:6,15',
            'jk' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
        ];

        $validator = Validator::make($request->all(), $rule);
        if($validator->fails()){
            return response()->json([
                'status' => false,
                'modal_close' => false,
                'message' => 'Data gagal diedit. ' .$validator->errors()->first(),
                'data' => $validator->errors()
            ]);
        }

        $mhs = MahasiswaModel::where('id', $id)->update($request->except('_token', '_method'));

        return response()->json([
            'status' => ($mhs),
            'modal_close' => $mhs,
            'message' => ($mhs)? 'Data berhasil diedit' : 'Data gagal diedit',
            'data' => null
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MahasiswaModel  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MahasiswaModel::where('id', '=', $id)->delete();
        return redirect('mahasiswa')
            ->with('success', 'Mahasiswa Berhasil Dihapus');
    }

    public function cetak_pdf($id)
    {
        $mahasiswa = MahasiswaModel::with('kelas', 'matakuliah')->find($id);
        $khs_mhasiswa = $mahasiswa->matakuliah()->withPivot('nilai')->get();
        $pdf = PDF::loadView('mahasiswa.khs_pdf',['mahasiswa'=>$mahasiswa, 'khs'=>$khs_mhasiswa]);
        return $pdf->stream();
    }

}
