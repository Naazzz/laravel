@extends('welcome')

@section('content')
		<br>
<a class="btn btn-danger" href="/books " style="float: left"> go all books </a></b>
<br>


	<h1>Book info</h1>
		<div>
			<ul>
				<li class="list-group" > muellifin adi: {{ $book->writer_name }}</li>
				<li class="list-group"> kitabin adi: {{ $book->book_name }}</li>
				<li class="list-group"> janr adi: {{ $book->genre_name }}</li>
			</ul>
		</div>
<hr>
		<h2>add comments</h2>

		<form action="{{ action('CommentsController@store', $book->id)}}" method="post">
		{{csrf_field()}}

			<textarea name="text"  cols="20" rows="5"></textarea>
			<br>
			<input type="submit" value="add comment">
		</form>
	<hr>
		<h2>book comments</h2>
		
		@foreach($book->comments as $comment)
			<ul>
			<li class="list-group"> 
				{{ $comment->text }} 

				<a class="btn btn-success" href="{{ action('CommentsController@edit',$comment->id) }} " style="float: right"> Edit  </a></b>
				<a class="btn btn-danger" href="{{ action('CommentsController@destroy',$comment->id) }} " style="float: right"> Delete </a></b>
				<br>
			</li>
			</ul>
		@endforeach


@stop