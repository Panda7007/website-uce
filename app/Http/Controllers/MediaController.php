<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("media.index", [
            "title" => "Media",
            "media" => Media::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("media.create", [
            "title" => "Media"
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
        Media::create([
            "nama_media" => $request->nama,
            "gambar" => "https://drive.google.com/uc?export=view&id=" . explode("/", $request->gambar)[5]
        ]);
        return redirect("/media");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function show(Media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function edit(Media $media)
    {
        return view("media.edit", [
            "title" => "Media",
            "media" => $media
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Media $media)
    {
        if ($request->gambar == $media->gambar) {
            $gambar = $request->gambar;
        } else {
            $gambar = "https://drive.google.com/uc?export=view&id=" . explode("/", $request->gambar)[5];
        }
        $media->update([
            "nama_media" => $request->nama,
            "gambar" => $gambar
        ]);
        return redirect("/media");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy(Media $media)
    {
        $media->delete();
        return redirect("/media");
    }
}
