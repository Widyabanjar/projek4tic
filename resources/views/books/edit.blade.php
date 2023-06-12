[20.18, 25/5/2023] 220510038_Widya: @extends('books.layouts')

@section('content')
<h3>{{$book->title}}</h3>

<p>Writer by : {{$book->author}}</p>
<p>Number oF Page : {{$book->page}} </p>
<p>Published on : {{$book->year}}</p>

<a href="{{route ('books.index')}}" class="btn btn-secondary">Back to Index</a>
@endsection
[20.18, 25/5/2023] 220510038_Widya: Show
[20.19, 25/5/2023] 220510038_Widya: @extends('books.layouts')s

@section('content')
<form action="{{route('books.update', $book->id)}}" method="post">
    @csrf
    @method('PUT')
    <label for="">Title</label><br>
    <input type="text" name="title" id="" value="{{$book->title}}"><br>

    <label for="">Author</label><br>
    <input type="text" name="author" id="" value="{{$book->author}}"><br>

    <label for="">Page</label><br>
    <input type="text" name="page" id="" value="{{$book->page}}"><br>

    <label for="">Year</label><br>
    <input type="text" name="year" id="" value="{{$book->year}}"><br>

    
    <input type="submit" value="Save" class="btn btn-primary"><br>

</form>
@endsection