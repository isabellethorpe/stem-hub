@extends('layout')

@section('content')

<h1>{{$heading}}</h1>

@unless(count($listings) == 0)

@foreach($listings as $listing)
    <h2>
        <a href="/listings/{{$listing['id']}}">{{$listing['title']}}</a>
    </h2>
    <p>
        {{$listing['description']}}
    </p>
@endforeach

    
@else
    <p>No listings found</p>
@endunless

@endsection


{{-- Example of how no listings found --}}
{{-- @if(count($listings) == 0)
    <p>No listings</p>
@endif  --}}