@extends("layout.app")

@section('title')
    Book{{$book->name}}
@endsection()


@section('content')
<h2> {{$book->name}}</h2>
<p> {{$book->description}}</p>

<ul>
    <li> {{$book->price}}</li>
    <li> {{$book->version}}</li>
</ul>
@endsection
