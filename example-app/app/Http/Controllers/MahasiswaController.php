<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = mahasiswa::all();
        return view('mahasiswa.index')
            ->with('mahasiswa',$mahasiswa);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodi = prodi::all(); 
        return view('mahasiswa.create')
        ->with('prodi',$prodi);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $val = $request->validate([
            'id'=> 'required',
            'npm'=>'required',
            'nama'=>"required|unique:mahasiswas",
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required',
            'alamat'=>'required',
            'prodi_id' => 'required',
            'url_foto' => 'Required'
        ]);

        // simpan ke tabel mahasiswa
        Mahasiswa::create($val);

        // redirect ke halaman list fakultas
        return redirect()->route('mahasiswa.index')->with('success',$val['nama'].'berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mahasiswa $mahasiswa)
    {
        //
    }
}
