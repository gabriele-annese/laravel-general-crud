@extends('layouts.main')

@section('main-content')
    <div class="container">
        @forelse ($jokes as $joke)
        <h3>{{$joke->title}}</h3>
        <p>{{$joke->content}}</p>
        <h4>{{$joke->author}}</h4>
    @empty
    <h1>no content</h1>
    @endforelse
    </div>
@endsection