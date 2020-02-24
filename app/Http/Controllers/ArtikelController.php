<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Tag;
use App\Kategori;
use Validator;
use File;
use Session;
use Illuminate\Support\Str;
use Auth;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     * @retuzrn \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::orderBy('created_at', 'desc')->get();
        return view('backend.artikel.index', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = kategori::all();
        $tag = tag::all();
        return view('backend.artikel.create', compact('kategori', 'tag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = $request->all();
        $validator = Validator::make($input, [
            'judul' => ' required|unique:artikels',
            'konten' => 'required',
            'foto' => 'required|mimes:jpeg,jpg,png,gif|max:2048',
            'id_kategori' => 'required',
            'tag' => 'required'
        ]);

        // if ($validator->fails()) {
        //     $response = [
        //         'success' => false,
        //         'data' => 'Validator error',
        //         'message' => $validator->errors()
        //     ];
        //     return response()->json($response, 500);
        // }
        $artikel = new Artikel();
        $artikel->judul = $request->judul;
        $artikel->slug = str_slug($request->judul, '-');
        $artikel->konten = $request->konten;
        $artikel->id_user = Auth::user()->id;
        $artikel->id_kategori = $request->id_kategori;
        // foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() .
                '/assets/img/artikel/';
            $filename = str_random(6) . '_'
                . $file->getClientOriginalName();
            $upload = $file->move(
                $path,
                $filename
            );
            $artikel->foto = $filename;
        }
        $artikel->save();
        $artikel->tag()->attach($request->tag);
        // dd($artikel);
        $response = [
            'success' => true,
            'data' => $artikel,
            'message' => 'artikel Berhasil ditambahkan.'
        ];
        return redirect()->route('artikel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikel = artikel::findOrFail($id);
        return view('backend.artikel.show', compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        $kategori = kategori::all();
        $tag = tag::all();
        $select = $artikel->tag->pluck('id')->toArray();
        return view('backend.artikel.edit', compact(
            'artikel',
            'select',
            'kategori',
            'tag'
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
        $artikel = Artikel::find($id);
        $input = $request->all();
        $validator = Validator::make($input, [
            'judul' => ' required|',
            'konten' => 'required|min:50',
            'id_kategori' => 'required',
            'tag' => 'required'
        ]);

        $artikel = Artikel::findOrFail($id);
        $artikel->judul = $request->judul;
        $artikel->slug = str_slug($request->judul, '-');
        $artikel->konten = $request->konten;
        $artikel->id_user = Auth::user()->id;
        $artikel->id_kategori = $request->id_kategori;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() .
                '/assets/img/artikel/';
            $filename = str_random(6) . '_'
                . $file->getClientOriginalName();
            $upload = $file->move(
                $path,
                $filename
            );
            // hapus foto lama, jika ada
            if ($artikel->foto) {
                $old_foto = $artikel->foto;
                $filepath = public_path() .
                    '/assets/img//' .
                    $artikel->foto;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    // File sudah dihapus/tidak ada
                }
            }
            $artikel->foto = $filename;
        }
        $artikel->save();
        $artikel->tag()->sync($request->tag);

        $response = [
            'success' => true,
            'data' => $artikel,
            'message' => 'artikel Berhasil di update.'
        ];
        return response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::find($id);
        if (!$artikel) {
            $response = [
                'success' => false,
                'data' => 'empty',
                'message' => 'artikel tidak ditemukan.'
            ];
            return response()->json($response, 404);
        }
        $artikel->delete();
        $response = [
            'success' => true,
            'data' => $artikel,
            'message' => 'artikel Berhasil Di hapus.'
        ];
        return redirect()->route('artikel.index');
    }
}
