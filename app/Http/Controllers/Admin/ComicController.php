<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;
use App\Http\Requests\StorePostRequest;
use Illuminate\Database\Eloquent\Model;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        // dd($comics);
        return view('comics.index', compact('comics'));
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
    public function store(StorePostRequest $request)
    {

        $data = $request->validated();

        $data = $request->all();


        $_comic = new Comic();

        $_comic->title = $data['title'];
        $_comic->description = $data['description'];
        $_comic->thumb = $data['thumb'];
        $_comic->price = $data['price'];
        $_comic->series = $data['series'];
        $_comic->sale_date = $data['sale_date'];
        $_comic->type = $data['type'];
        $_comic->artists = json_encode(explode(',', $data['artists']));
        $_comic->writers = json_encode(explode(',', $data['writers']));
        $_comic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::find($id);

        // dd($comic);

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::findOrFail($id);

        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $_comic = new Comic();

        $comic = Comic::findOrFail($id);


        // metodo 1:

        // $data = $request->all();

        // $comic->title = $data['title'];
        // $comic->description = $data['description'];
        // $comic->thumb = $data['thumb'];
        // $comic->price = $data['price'];
        // $comic->series = $data['series'];
        // $comic->sale_date = $data['sale_date'];
        // $comic->type = $data['type'];
        // $comic->artists = json_encode(explode(',', $data['artists']));
        // $comic->writers = json_encode(explode(',', $data['writers']));
        // $comic->save();

        // return redirect()->route('comics.show', $comic->id);



        // dd($data, $comic);

        // metodo 2:
        $data = $request->all();

        $data['artists'] = json_encode(explode(',', $data['artists']));
        $data['writers'] = json_encode(explode(',', $data['writers']));
        $comic->update($data);

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = Comic::findOrFail($id);

        $comic->delete();

        return redirect()->route('comics.index');
    }
}
