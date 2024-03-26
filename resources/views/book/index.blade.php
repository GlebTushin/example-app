@extends('layouts.main')
@section('bookLay')
    <div>
        <form action="{{route('books.create')}}"method='get'>
        <div class="form-group">
            <button  type="submit" id="button-addon1">Create</button>
            <div>
        @foreach ($books as $book)
            <div><a href="{{route("books.show", $book->id)}}">{{ $book->name . ' ' . $book->author }}</a></div>
        @endforeach

    </div>
@endsection
