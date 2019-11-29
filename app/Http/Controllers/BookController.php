<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return list of books
        $books =  DB::select('SELECT * FROM books');
        return view('books', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add-book');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Raw Queries
        DB::insert('INSERT INTO books(title, author, genre) VALUES(?, ?, ?)', [$request->title, $request->author, $request->genre]);


        return 'Form was submitted: ' . $request->title;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book =  DB::select('SELECT * FROM books WHERE book_id = ?', [$id]);
        return view('bookdetail', ['book' => $book[0]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book =  DB::select('SELECT * FROM books WHERE book_id = ?', [$id]);
        // SHOW THE FORM
        return view('delete-book', ["book" => $book[0]]);
    }
    public function edit2($id)
    {
        $book =  DB::select('SELECT * FROM books WHERE book_id = ?', [$id]);
        // SHOW THE FORM
        return view('edit-book', ["book" => $book[0]]);
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
        //UPDATE THE FORM
        DB::update('UPDATE books SET title = ?, author = ?, genre = ? WHERE book_id = ?', [$request->title, $request->author, $request->genre, $id]);
        return redirect('books/edit/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('DELETE FROM books WHERE book_id=?', [$id]);
        return 'The book has been deleted';
    }
}
