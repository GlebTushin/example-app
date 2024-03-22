@extends('layouts.main')
@section('bookLay')
    <div>
        <div>{{ $book->name . ' ' . $book->author }} </div>
        <div><a href="{{ route('books.edit', $book->id) }}"> Edit </a></div>
        <div>
        <form action="{{ route('books.destroy', $book->id) }}">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="btn btn-danger">
        </form>
        </div>
    </div>
@endsection
