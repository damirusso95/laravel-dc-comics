<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catalogo = Comic::all();

        $data = [
            "list" => $catalogo
        ];
        return view("comics.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Recupero e validazione dei dati
        $data = $request->validate([
            "name" => "required|string|min:3|max:255",
            "description" => "required|string|min:3|max:255",
            "type" => "required|string|min:3|max:255",
            "price" => "required|numeric|min:0|max:100"
        ]);
    
        // Creazione di un nuovo fumetto
        $newComic = Comic::create($data);
    
        // Redirect alla vista del fumetto appena creato
        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $fumetto = Comic::find($id);
        $data = [
            "comic" =>  $fumetto
        ];
        return view("comics.show" ,$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $fumetto = Comic::find($id);
        $data = [
            "comic" =>  $fumetto
        ];
        return view("comics.edit" ,$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');

    }
}
