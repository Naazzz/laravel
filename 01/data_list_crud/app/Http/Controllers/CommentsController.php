<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Comment;
use App\Book;

class CommentsController extends Controller
{
    public function store(Request $request, Book $book)
    {
    	$comment = new Comment($request->all());
    	$book->comments()->save($comment);
    	return redirect('/books/'.$book->id);
    }

    public function edit(Comment $comment)
    {
    	return view('comments.edit',compact('comment'));
    }

    public function update(Request $request, Comment $comment)
	{
		$comment->update($request->all());
		return redirect('/books/'.$comment->book_id);
	} 

	public function destroy(Comment $comment)
	{
		$comment->delete();
		return redirect('/books/'.$comment->book_id);
	} 
}
