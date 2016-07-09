@extends('welcome')

@section('content')
<h1>All books</h1>
<hr>
<a class="btn btn-primary" href="{{ action('BooksController@create') }}">yeni kitab elavesi</a>
<hr>
	@foreach ($books as $book)
		<div>
			<ul>
				<li class="list-group"> <a href="{{ action('BooksController@show', $book->id ) }}" >  {{$book->book_name}}</a> <b>
				<a class="btn btn-success" href="{{ action('BooksController@edit',$book->id) }} " style="float: right"> Edit  </a></b>

				<a class="btn btn-danger" href="{{ action('BooksController@destroy',$book->id) }} " style="float: right"> Delete </a></b> 
				</li>
			</ul>
		</div>


	@endforeach
<!-- <h3>add new book</h3> -->

@stop