<?php

namespace App\Http\Controllers;

use App\Fakultas;
use App\Jurusan;
use Session;
use File;
use auth;
use Validator;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fakultas = Fakultas::orderBy('created_at', 'desc')->get();
        return view('backend.fakultas.index', compact('fakultas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusan = Jurusan::all();
        return view('backend.fakultas.create', compact('jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fakultas = new Fakultas();
        $fakultas->id_user = Auth::user()->id;
        $fakultas->nama_fakultas = $request->nama_fakultas;
        // foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $Path = public_path() . '/assets/img/fakultas/';
            $filename = '-'
                . $file->getClientOriginalName();
            $upload = $file->move(
                $Path,
                $filename
            );
            $fakultas->foto = $filename;
        }
        $fakultas->slug = Str::slug($request->nama_fakultas, '-');
        $fakultas->save();
        $fakultas->jurusan()->attach($request->jurusan);
        $response = [
            'success' => true,
            'data' => $fakultas,
            'message' => 'fakultas Berhasil ditambahkan.'
        ];
        return redirect()->route('fakultas.index');
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
        $fakultas = Fakultas::findOrFail($id);
        $jurusan = jurusan::all();
        $select = $fakultas->jurusan->pluck('id')->toArray();
        return view('backend.fakultas.edit', compact(
            'fakultas',
            'select',
            'jurusan'
        ));
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
        $fakultas = Fakultas::findOrFail($id);
        $fakultas->id_user = Auth::user()->id;
        $fakultas->nama_fakultas = $request->nama_fakultas;
        //    foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() .
                '/assets/img/fakultas/';
            $filename = str_random(6) . '_'
                . $file->getClientOriginalName();
            $upload = $file->move(
                $path,
                $filename
            );
            // hapus foto lama, jika ada
            if ($fakultas->foto) {
                $old_foto = $fakultas->foto;
                $filepath = public_path() .
                    '/assets/img//' .
                    $fakultas->foto;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    // File sudah dihapus/tidak ada
                }
            }
            $fakultas->foto = $filename;
        }
        $fakultas->slug = str_slug($request->nama_fakultas, '-');
        $fakultas->save();
        $fakultas->jurusan()->sync($request->jurusan);

        $response = [
            'success' => true,
            'data' => $fakultas,
            'message' => 'Fakultas Berhasil di update.'
        ];
        return redirect()->route('fakultas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fakultas = Fakultas::find($id);
        if (!$fakultas) {
            $response = [
                'success' => false,
                'data' => 'empty',
                'message' => 'fakultas  tidak ditemukan.'
            ];
            return response()->json($response, 404);
        }
        $fakultas->delete();
        $response = [
            'success' => true,
            'data' => $fakultas,
            'message' => 'fakultas Berhasil Di hapus.'
        ];
        return redirect()->route('fakultas.index');
    }
}
