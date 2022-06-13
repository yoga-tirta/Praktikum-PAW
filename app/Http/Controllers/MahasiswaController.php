<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtMahasiswa = Mahasiswa::all();
        return view('/data-mahasiswa', compact('dtMahasiswa'), [
            "title" => "Data Mahasiswa"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-mahasiswa', [
            "title" => "Input Data Mahasiswa"
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
        //dd($request->all());
        Mahasiswa::create([
            'nim' => $request ->nim,
            'nama' => $request ->nama,
            'email' => $request ->email,
            'alamat' => $request ->alamat
        ]);

        return redirect('data-mahasiswa')->with('toast_success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $nim
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Mhs = Mahasiswa::findorfail($id);
        return view('/edit-mahasiswa', compact('Mhs'), [
            "title" => "Edit Data Mahasiswa"
        ]);
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
        $Mhs = Mahasiswa::findorfail($id);
        $Mhs->update($request->all());

        return redirect('/data-mahasiswa')->with('toast_success', 'Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Mhs = Mahasiswa::findorfail($id);
        $Mhs->delete();
        return back()->with('success', 'Data Berhasil Dihapus!');;
    }
}
?>