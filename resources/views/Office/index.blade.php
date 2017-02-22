@extends('layouts.app')

@section('content')
	<div class="container">
		<h1>Offices</h1>
		@foreach($offices as $office)
			<div>	
				<a href="{{ $office->path() }}">{{ $office->name }}</a>
			</div>
		@endforeach
	</div>
@endsection