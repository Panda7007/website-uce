<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("guest.index", [
            "title" => "Guest",
            "guess" => Guest::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("guest.create", [
            "title" => "Guest"
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
        Guest::create([
            "nama" => $request->nama,
            "gambar" => "https://drive.google.com/uc?export=view&id=" . explode("/", $request->gambar)[5]
        ]);
        return redirect("/guess");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function show(Guest $guest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function edit(Guest $guest)
    {
        return view("guest.edit", [
            "title" => "Guest",
            "guess" => $guest
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guest $guest)
    {
        if ($request->gambar == $guest->gambar) {
            $gambar = $request->gambar;
        } else {
            $gambar = "https://drive.google.com/uc?export=view&id=" . explode("/", $request->gambar)[5];
        }
        $guest->update([
            "nama" => $request->nama,
            "gambar" => $gambar
        ]);
        return redirect("/guess");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guest $guest)
    {
        $guest->delete();
        return redirect("/guess");
    }
}
