<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $navLinks = config('nav_links');
        $blueBar = config('blue_bar');
        $footerArr = config('footer_arr');
        $comics = Comic::all();

        return view('comics.index', compact('footerArr', 'blueBar', 'navLinks', 'comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $navLinks = config('nav_links');
        $footerArr = config('footer_arr');

        return view('comics.create', compact('footerArr', 'navLinks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $request->validate([
            'title'         => 'required|string|max:50' ,
            'description'   => 'required|string',
            'thumb'         => 'required|string',
            'price'         => 'required|string|max:10',
            'series'        => 'required|string|max:50',
            'sale_date'     => 'required|date',
            'type'          => 'required|string|max:50',
            'artists'       => 'required',
            'writers'       => 'required',
        ]);
        
        $comic = new Comic();
        $comic->title = $form_data['title'];
        $comic->description = $form_data['description'];
        $comic->thumb = $form_data['thumb'];
        $comic->price = $form_data['price'];
        $comic->series = $form_data['series'];
        $comic->sale_date = $form_data['sale_date'];
        $comic->type = $form_data['type'];
        $comic->artists = json_encode(explode(',', $form_data['artists']));
        $comic->writers = json_encode(explode(',', $form_data['writers']));
        $comic->save();

        // $comic->fill($form_data);

        return redirect()->route('comics.show', ['comic' => $comic]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        $navLinks = config('nav_links');
        $footerArr = config('footer_arr');
        $artists = json_decode($comic['artists']);
        $writers = json_decode($comic['writers']);

        return view('comics.show', compact('footerArr', 'navLinks', 'comic', 'artists', 'writers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        $navLinks = config('nav_links');
        $footerArr = config('footer_arr');

        return view('comics.edit', compact('footerArr', 'navLinks', 'comic'));
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
        $form_data = $request->validate([
            'title'         => 'required|string|max:50' ,
            'description'   => 'required|string',
            'thumb'         => 'required|string',
            'price'         => 'required|string|max:10',
            'series'        => 'required|string|max:50',
            'sale_date'     => 'required|date',
            'type'          => 'required|string|max:50',
            'artists'       => 'required',
            'writers'       => 'required',
        ]);

        $comic = Comic::find($id);
        $comic->title = $form_data['title'];
        $comic->description = $form_data['description'];
        $comic->thumb = $form_data['thumb'];
        $comic->price = $form_data['price'];
        $comic->series = $form_data['series'];
        $comic->sale_date = $form_data['sale_date'];
        $comic->type = $form_data['type'];
        $comic->artists = json_encode(explode(',', $form_data['artists']));
        $comic->writers = json_encode(explode(',', $form_data['writers']));
        $comic->update();

        // $comic->update($form_data);
        return redirect()->route('comics.show', $id);
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
