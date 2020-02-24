<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Universitas;
use App\Fakultas;
use File;
use Session;
use auth;

class UniversitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $universitas = Universitas::orderBy('created_at', 'desc')->get();
        // dd($universitas);
        return view('backend.universitas.index', compact('universitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fakultas = Fakultas::all();
        return view('backend.universitas.create', compact('fakultas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $universitas = new universitas();
        // dd($universitas);
        $universitas->nama_universitas = $request->nama_universitas;
        $universitas->id_fakultas = $request->id_fakultas;
        $universitas->slug = Str::slug($request->nama_universitas, '-');
        //    foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() .
                '/assets/img/universitas/';
            $filename = str_random(6) . '_'
                . $file->getClientOriginalName();
            $upload = $file->move(
                $path,
                $filename
            );
            // hapus foto lama, jika ada
            if ($universitas->foto) {
                $old_foto = $universitas->foto;
                $filepath = public_path() .
                    '/assets/img//' .
                    $universitas->foto;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    // File sudah dihapus/tidak ada
                }
            }
            $universitas->foto = $filename;
        }
        $universitas->alamat = $request->alamat;
        $universitas->akreditas = $request->akreditasi;
        $universitas->konten = $request->konten;
        $universitas->save();
        $universitas->fakultas()->attach($request->fakultas);
        // dd($universitas);
        $response = [
            'success' => true,
            'data' => $universitas,
            'message' => 'universitas Berhasil ditambahkan.'
        ];
        return redirect()->route('universitas.index');
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
        $universitas = Universitas::findOrfail($id)->delete();
        return redirect()->route('universitas.index');
    }
}
