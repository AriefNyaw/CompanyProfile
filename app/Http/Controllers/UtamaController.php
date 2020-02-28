<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;

class UtamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('utama.landing');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Karyawan::all();
        return view('utama.karyawan', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'jabatan' => 'required'
        ]);

        $karyawan = new Karyawan;
        $karyawan-> nama = $request->nama;
        $karyawan-> alamat = $request->alamat;
        $karyawan-> jabatan = $request->jabatan;

        $karyawan->save();

        return redirect('karyawan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
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
        $karyawan = Karyawan::find($id);
        return view('update.update_karyawan',compact('karyawan'));
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
        $karyawan = Karyawan::find($id);
        $karyawan->nama = $request->nama;
        $karyawan->alamat = $request->alamat;
        $karyawan->jabatan = $request->jabatan;
        $karyawan->save();
        return redirect('karyawan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Karyawan::find($id);
        $data->delete();

        return redirect('karyawan');
    }

    public function input(){
        return view('create.create_karyawan');
    }
}
