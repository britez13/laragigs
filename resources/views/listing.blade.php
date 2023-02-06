@extends('layout')

@section('content')
    
<h1>{{ $heading }}</h1>

<h1>{{ $listing['title'] }}</h1>
<p>{{ $listing['description'] }}</p>
<a href="/">Go back</a>

@endsection
