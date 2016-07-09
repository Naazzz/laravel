@extends('welcome')

@section('content')
<h1>edit section</h1>

<form  action=" {{ action('CommentsController@update',$comment->id) }}" method="POST">
	
		{{ csrf_field() }} {{--token--}}
		{{ method_field('patch') }}
		<input class="form-control"  type="text" name="text" placeholder="writer_name" value="{{ $comment->text }}">
		<br>
		<button class="btn btn-primary" type="submit">edit cooment</button>
	
</form>


@stop