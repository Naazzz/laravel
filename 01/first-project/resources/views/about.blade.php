@extends('base')

@section('hissem')
	@foreach ($var as $insanlar)
     <li> {{ $insanlar }}</li>
     @endforeach
@endsection