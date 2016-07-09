<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Book;

class BooksController extends Controller
{
    public function index()
    {
    	// $books = DB:: table('books')->get();
    	$books = Book::all();

    	return view('books.index', compact('books'));
    }
//usul 1
    public function show(Book $book)
    {
    	return view('books.show', compact('book'));
    }

//usul 2
    // public function show($id)
    // {
    // 	return $book = Book::find($id);
    // }
 
  public function create()
    {
    	return view('books.create');
    }

      public function store(Request $request)
    {
    	$book= new Book($request->all());
    	$book->save();
    	return redirect('/books');
    }
    public function edit(Book $book)
	{
		return view('books.edit',compact('book'));
	}

	public function update(Request $request, Book $book)
	{
		$book->update($request->all());
		return redirect('/books');
	}

	public function destroy(Book $book)
	{
		$book->delete();
		return redirect('/books');
	}
}
