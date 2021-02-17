<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;
use Auth;
use App\Models\Role;
use App\Models\User;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Books::all();

        return view('library.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->isAdministrator()){
            return view('library.create');
        } else {
            abort(403);
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Models\Books  $books
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'title' => 'required',
           'author' => 'required',
           'genre' => 'required',
           'quantity' => 'required'
        ]);

        Books::create([
            'title' => $request->title,
            'author' => $request->author,
            'genre' => $request->genre,
            'quantity' => $request->quantity,
        ]);

        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Books  $book
     * @return \Illuminate\Http\Response
     */
    /*public function show(Books $book)
    {
        return view('library.show', compact('book'));
    }*/

    public function show(Request $request, $id)
    {
        $book = Books::find($id);

        $ofSameGenre = Books::where('genre', $book->genre)->inRandomOrder()->take(3)->get();
        $ofSameAuthor = Books::where('author', $book->author)->inRandomOrder()->take(3)->get();

        return view('library.show', [
            'book' => $book,
            'ofSameAuthor' => $ofSameAuthor,
            'ofSameGenre' => $ofSameGenre,
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Books  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Books $book)
    {
        if(Auth::user()->isAdministrator()){
            return view('library.edit', compact('book'));
        } else {
            abort(403);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Books $book)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'genre' => 'required',
            'quantity' => 'required'
        ]);

        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'genre' => $request->genre,
            'quantity' => $request->quantity,
        ]);

        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Books  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Books $book)
    {
        if(Auth::user()->isAdministrator()){
            $book->delete();

            return redirect()->route('books.index');
        } else {
            abort(403);
        }
    }

    /**
     * Scope a query to only include popular users.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
//
//    public static function getSuggestion(Books $book, $id){
//        $book=Book::find($id);
//
//        $bookGenre = $book->genre;
//
//        $suggestion = DB::table('books')->select('genre')->where('genre', $bookGenre)->get();
//
//        // DB::table('books')->select('books.title', 'books.author', 'books.genre', 'books.id')->where('genre','Fantasy')->inRandomOrder()->take(3)->get()
//
//        return $suggestion;
//    }
}
