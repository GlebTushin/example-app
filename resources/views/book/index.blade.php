@extends('layouts.main')
@section('bookLay')
    <div>
        @foreach ($books as $book)
            <div><a href="{{route("books.show", $book->id)}}">{{ $book->name . ' ' . $book->author }}</a> </div>
        @endforeach
    </div>
@endsection
