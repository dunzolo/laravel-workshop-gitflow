<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use Illuminate\Support\Facades\Redirect;
use App\Models\Movie;
use App\Models\Cast;
use App\Models\Genre;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        $casts = Cast::all();

        return view('admin.movies.index', compact('movies', 'casts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::all();
        $casts = Cast::all();
        return view('admin.movies.create', compact('genres', 'casts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMovieRequest $request)
    {
        $form_data = $request->validated();
        $slug = Movie::generateSlug($request->title, '-');

        $form_data['slug'] = $slug;

        $newMovie = new Movie();

        $newMovie->fill($form_data);


        $newMovie->save();

        if ($request->has('casts')) {
            $newMovie->casts()->attach($request->casts);
        }

        return redirect()->route('admin.movies.index')->with('message', 'MOVIE CREATED');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('admin.movies.show', compact('movie'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        $genres = Genre::all();
        $casts = Cast::all();
        //REINDIRIZZA ALLA PAGINA EDIT. VIENE PASSATO IL SINGOLO PROGETTO $project TRAMITE COMPACT
        return view('admin.movies.edit', compact('movie', 'genres', 'casts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMovieRequest $request, Movie $project)
    {

        $form_data = $request->validated();
        $slug = Movie::generateSlug($request->title, '-');


        $form_data['slug'] = $slug;

        $project->update($form_data);

        if ($request->has('casts')) {
            $project->casts()->sync($request->casts);
        }

        //REINDIRIZZA ALLA PAGINA INDEX. LA FUNZIONE with PASSA ALLA PAGINA INDEX UN MESSAGGIO
        return redirect()->route('admin.movies.index')->with('message', 'MODIFIED MOVIE');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->casts()->sync([]);
        //LA FUNZIONE "destroy" ELIMINA IL PROGETTO SPECIFICATO
        $movie->delete();

        //REINDIRIZZA ALLA PAGINA INDEX. LA FUNZIONE with PASSA ALLA PAGINA INDEX UN MESSAGGIO
        return redirect()->route('admin.movies.index')->with('message', 'MOVIE CANCELLED');
    }
}
