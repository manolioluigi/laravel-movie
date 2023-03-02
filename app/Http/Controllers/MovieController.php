<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $movies = Movie::all();

        return view('movies.index', compact('movies'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newMovie = new Movie();

        $newMovie->fill($this->validation($request->all()));

        $newMovie->save();

        return redirect()->route('movie.index', $newMovie->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $single_movie = Movie::find($id);
        if($single_movie){
            return view('movie.show', compact('single_movie'));
        }
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = Movie::findOrFail($id);

        return view('movie.show', compact('movie'));
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
        $movie = movie::findOrFail($id);

        $movie->delete();

        return redirect()->route('movie.index');
    }

    public function validation($data){
        $validation = Validator::make($data, [
            'title' => 'required|max:60',
            'original_title' => 'required|max:100',
            'nationality' => 'required|max:100',
            'release_date' => 'required|max:30',
            'vote' => 'nullable',
            'cast' => 'required|max:300',
            'cover_path' => 'nullable',
        ],
        [
            'title.required' => 'Titolo obbligatorio',
            'title.max' =>'Numero massimo di caratteri :max',
            'original_title.required' => 'Titolo originale obbligatorio',
            'original_title.max' =>'Numero massimo di caratteri :max',
            'nationality.required' => 'Nazionalita obbligatoria',
            'nationality.max' =>'Numero massimo di caratteri :max',
            'release_date.required' => 'Data obbligatoria',
            'release_date.max' =>'Numero massimo di caratteri :max',
            'cast.required' => 'Cast obbligatorio',
            'cast.max' => 'Numero massimo di caratteri :max',
        ])->validate();

        return $validation;
    }
}
