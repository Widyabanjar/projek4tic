<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::paginate(1);

        return view('books.index',['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi
        $request->validate([
            'title'=>'required',
            'author'=>'required',
            'page'=>'required',
            'year'=>'required'

        ]);
        //simpan
        Book::create($request->all());
        //redirect
        return redirect()->route('books.index')->with('success','book added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('books.show',['book'=> $book]);
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('books.edit', ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //validasi
        $request->validate([
            'title'=>'required',
            'author'=>'required',
            'page'=>'required',
            'year'=>'required'

        ]);
        //update
        $book->update($request->all());
        //redirect
        return redirect()->route('books.index')->with('success','book added successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success','book delete succesfully');
    }
}
