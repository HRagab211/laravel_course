    @extends('layout.app')

    @section('content')

       @foreach( $all as $item)
           <h2> {{ $item->name }}</h2>
           <p> {{$item->description}}</p>
           <small> {{ $item->price }}</small>
       @endforeach

    {{$all->render()}}

    @endsection
