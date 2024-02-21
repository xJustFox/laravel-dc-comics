<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpgradeComicRequest;
use Illuminate\Http\Request;
use App\Models\Comic;

use Illuminate\Support\Facades\Validator;

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
    public function store(StoreComicRequest $request)
    {
        // $form_data =  $this->validation($request->all());

        $form_data = $request->all();
        
        $comic = new Comic();
        
        $comic->fill($form_data);
        $comic->artists = json_encode(explode(',', $form_data['artists']));
        $comic->writers = json_encode(explode(',', $form_data['writers']));
        $comic->save();

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
    public function update(UpgradeComicRequest $request, $id)
    {
        // $form_data =  $this->validation($request->all());

        $form_data = $request->all();

        $comic = Comic::find($id);
        
        $comic->update($form_data);
        $comic->artists = json_encode(explode(',', $form_data['artists']));
        $comic->writers = json_encode(explode(',', $form_data['writers']));
        $comic->update();

        return redirect()->route('comics.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
    // private function validation($data){
    //     $validator = Validator::make($data, [
    //         'title'         => 'required|max:50' ,
    //         'description'   => 'required',
    //         'thumb'         => 'required',
    //         'price'         => 'required|max:10',
    //         'series'        => 'required|max:50',
    //         'sale_date'     => 'required|date',
    //         'type'          => 'required|max:50',
    //         'artists'       => 'required',
    //         'writers'       => 'required',
    //     ], 
    //     [
    //         'title.required'        => 'Il campo Comic name è obbligatorio.',
    //         'title.max'             => 'Il campo deve avere massimo 50 caratteri',
    //         'description.required'  => 'Il campo Description è obbligatorio.',
    //         'thumb.required'        => 'Il campo Comic Cover è obbligatorio.',
    //         'price.required'        => 'Il campo Price è obbligatorio',
    //         'price.max'             => 'Il campo deve avere massimo 10 caratteri',
    //         'series.required'       => 'Il campo Series è obbligatorio.',
    //         'series.max'            => 'Il campo deve avere massimo 50 caratteri',
    //         'sale_date.required'    => 'Il campo Sale Date è obbligatorio.',
    //         'sale_date.date'        => 'Il campo Sale Date non è valido.',
    //         'type.required'         => 'Il campo Type è obbligatorio.',
    //         'type.max'              => 'Il campo deve avere massimo 50 caratteri',
    //         'artists.required'      => 'Il campo Artists è obbligatorio.',
    //         'writers.required'      => 'Il campo Writers name è obbligatorio.',
    //     ])->validate();

    //     return $validator;
    // }
}
