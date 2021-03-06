<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\Tag;
use App\Kategori;
use App\Universitas;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FrontendController extends Controller
{
    /**
     *

     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::orderBy('created_at', 'desc')->take(4)->get();
        $universitas = Universitas::take(10)->get();
        return view('index', compact('artikel', 'universitas'));
    }

    public function singleblog($artikel)
    {
        $artikel = Artikel::where('slug', '=', $artikel)->first();
        return view('singleblog', compact('artikel'));
    }
    public function singleblog2($universitas)
    {
        $universitas = Universitas::where('slug', '=', $universitas)->first();
        return view('singleblog2', compact('universitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blog()
    {
        $artikel = Artikel::orderBy('created_at', ' desc')->paginate(3);
        $kategori = Kategori::all();
        $tag = Tag::all();
        return view('singleblog', compact('artikel', 'kategori', 'tag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
