@extends('layouts.app');

@section('content')'
    <h1>wellcome to blog page</h1>
    <p>this is id {{$id}} title: {{$title}} and author {{$author}}</p>

    <ul>
        @if(count($authors))

            @foreach($authors as $author)
                <li>{{$author}}</li>

            @endforeach
        @endif
    </ul>

    <ul>
        @if(count($categories))

            @foreach($categories as $category)
                <li><strong>{{$category}}</strong></li>

            @endforeach
        @endif
    </ul>

    @endsection
@section('footer')
    <script> alert('wellcome visitor');</script>
    @stop