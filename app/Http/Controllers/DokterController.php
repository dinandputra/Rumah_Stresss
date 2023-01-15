<?php

namespace App\Http\Controllers;

use App\Models\Doctor;   
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dokter = Doctor::all();
        return view('Data.Dokter.index',compact('dokter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Data.Dokter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // TEST INPUTAN DATA
        // dd($request->all());

        $namaFile = rand( pow(10, 3 -1), pow (10, 3)-1 ) . '_' . $request->file('photo')->getClientOriginalName();
        $request->photo->move(public_path('stokFoto'), $namaFile);

        $dokter = Doctor::create([
            'kode_dokter' => $request->kode_dokter,
            'nama' => $request->nama,
            'spesialis' => $request->spesialis,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
            'photo' => $namaFile
        ]);

        return redirect("dokter");
        
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
        //
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
        //
    }
}
