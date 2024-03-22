@extends('layouts.main')
@section('bookLay')
<div>
    <form action="{{route('books.store')}}"method="post">
        @csrf
    <div class="form-group">
        <button  type="submit" id="button-addon1">Create</button>
        <div>
            <label for="name">Book name</label>
            <input type="string" name="name" class="form-control" id="name" placeholder="" >
        </div>
        <div>
            <label for="author">Author</label>
            <input type="string" name="author" class="form-control" id="author" placeholder="" >

        </div>
    </div>
    </form>
</div>
@endsection
