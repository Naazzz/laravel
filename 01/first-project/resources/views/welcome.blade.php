@extends('base')

@section('welcome')
<!-- <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
</div> -->
<h1>all statuss</h1>
	@foreach ($stat as $sta)
		<div>
			<a href="\status\{{ $sta->id }}">{{$sta->status_name}}</a>
		</div>
	@endforeach
@stop
