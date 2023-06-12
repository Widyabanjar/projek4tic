@extends('books.layouts')

@section('content')
<h3>{{$book->title}}</h3>

<p>Writer by : {{$book->author}}</p>
<p>Number oF Page : {{$book->page}} </p>
<p>Published on : {{$book->year}}</p>

<a href="{{route ('books.index')}}" class="btn btn-secondary">Back to Index</a>
@endsection