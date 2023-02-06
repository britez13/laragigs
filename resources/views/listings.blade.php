
@extends('layout')

@section('content')
    
<h1>{{$heading}}</h1>

{{-- @php
    $test = 0;
@endphp; --}}

@if(count($listings) == 0)
    <h1>No listings no party</h1>
@else 
    @foreach($listings as $listing)
    <h1>
        <a href="/listings/{{$listing['id']}}">
        {{ $listing['title'] }} 
        </a>
    </h1>
    <p>{{ $listing['description'] }}</p>
    {{-- <h2>{{ $test = $test + 1 }}</h2> --}}
    @endforeach
@endif

@endsection





