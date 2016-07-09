@extends('welcome')

@section('content')
<h1>edit section</h1>

<form  action=" {{ action('BooksController@update',$book->id) }}" method="POST">
	
		{{ csrf_field() }} {{--token--}}
		{{ method_field('patch') }}
		<input class="form-control"  type="text" name="writer_name" placeholder="writer_name" value="{{ $book->writer_name }}">
		<br>
		<input class="form-control" type="text" name="book_name" placeholder="book_name" value="{{ $book->book_name }}">
		<br>
		<input class="form-control" type="text" name="genre_name" placeholder="genre_name" value="{{ $book->genre_name }}">
		<br>
		<button class="btn btn-primary" type="submit">edit book</button>
	
</form>


@stop