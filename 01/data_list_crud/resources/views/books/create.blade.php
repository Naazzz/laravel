@extends('welcome')

@section('content')

<form method="POST">
		{{ csrf_field() }}
		<input class="form-control" type="text" name="writer_name" placeholder="writer_name">
		<br>
		<input class="form-control" type="text" name="book_name" placeholder="book_name">
		<br>
		<input class="form-control" type="text" name="genre_name" placeholder="genre_name">
		<br>
		<button class="btn btn-primary" type="submit">add new book</button>

</form>


@stop