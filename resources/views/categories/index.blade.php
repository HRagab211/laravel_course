@extends('layout.app')

@section('title','Categories')

@section('content')
    @foreach($book as $test)
        <a href="./show_categories/{{$test->id}}"> <h2> {{ $test->name }} </h2><br></a>

    @endforeach

@endsection
