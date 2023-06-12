@extends('books.layouts')

@section('content')
<form action="{{route('books.store')}}" method="post">
    @csrf
    <label for="">Title</label><br>
    <input type="text" name="title" id=""><br>

    <label for="">Author</label><br>
    <input type="text" name="author" id=""><br>

    <label for="">Page</label><br>
    <input type="text" name="page" id=""><br>

    <label for="">Year</label><br>
    <input type="text" name="year" id=""><br>

    
    <input type="submit" value="Save" class="btn btn-primary"><br>

</form>
@endsection