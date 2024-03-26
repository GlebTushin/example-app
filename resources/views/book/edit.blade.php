@extends('layouts.main')
@section('bookLay')
<div>
    <form action="{{route('books.update', $book)}}"method='post'>
        @csrf
        @method('patch')
    <div class="form-group">
        <button  type="submit" id="button-addon1">Update</button>
        <div>
            <label for="name">Book name</label>
            <input type="string" value="{{$book->name}}" name="name" class="form-control" id="name" placeholder="" >
        </div>
        <div>
            <label for="author">Author</label>
            <input type="string"  value="{{$book->name}}" name="author" class="form-control" id="author" placeholder="" >

        </div>
    </div>
    </form>
</div>
@endsection
