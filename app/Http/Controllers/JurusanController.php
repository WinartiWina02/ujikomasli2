<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jurusan;
use Illuminate\Support\Str;
use Validator;
use File;
use Session;
use auth;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusan = Jurusan::orderBy('created_at', 'desc')->get();
        return view('backend.jurusan.index', compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusan = Jurusan::all();
        return view('backend.jurusan.create', compact('jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $input = $request->all();
        // $validator = Validator::make($input, [
        //     'judul' => ' required|unique:jurusans',
        //     'foto' => 'required|mimes:jpeg,jpg,png,gif|max:2048',
        // ]);
        $jurusan = new Jurusan();
        $jurusan->nama_jurusan = $request->nama_jurusan;
        $jurusan->slug = Str::slug($request->nama_jurusan, '-');
        // foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $Path = public_path() . '/assets/img/jurusan/';
            $filename = '-'
                . $file->getClientOriginalName();
            $upload = $file->move(
                $Path,
                $filename
            );
            $jurusan->foto = $filename;
        }
        $jurusan->save();

        return redirect()->route('jurusan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        return view('backend.jurusan.edit', compact('jurusan'));
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
        $jurusan = Jurusan::findOrFail($id);
        $jurusan->nama_jurusan = $request->nama_jurusan;
        $jurusan->slug = str_slug($request->nama_jurusan, '-');
        //    foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() .
                '/assets/img/jurusan/';
            $filename = str_random(6) . '_'
                . $file->getClientOriginalName();
            $upload = $file->move(
                $path,
                $filename
            );
            // hapus foto lama, jika ada
            if ($jurusan->foto) {
                $old_foto = $jurusan->foto;
                $filepath = public_path() .
                    '/assets/img//' .
                    $jurusan->foto;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    // File sudah dihapus/tidak ada
                }
            }
            $jurusan->foto = $filename;
        }
        $jurusan->save();
        $response = [
            'success' => true,
            'data' => $jurusan,
            'message' => 'Berhasil Dirubah!'
        ];
        return redirect()->route('jurusan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jurusan = Jurusan::findOrfail($id)->delete();
        return redirect()->route('jurusan.index');
    }
}
