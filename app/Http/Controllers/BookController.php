<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;


class BookController extends Controller
{
    public function index(){
        $books= Book::all();
        return view('book.index',compact('books'));
    }
    public function show( $id){
        $book=Book::find($id);
        return view('book.show',compact('book'));
    }
    public function create(){
        return view('book.create');
    }
    public function store(){
       $data=request()->validate([
        'name'=> 'string',
        'author'=>'string'
       ]);
       Book::create(
        $data);
       return redirect()->route("books.index");
    }
    public function edit( $id){
       $book= Book::find($id);
        return view('book.edit',compact('book'));
    }
    public function update(Book $book){
        
        $data=request()->validate([
            'name'=> 'string',
            'author'=>'string'
           ]);
           $book->update($data);
           
           return redirect()->route("books.show",compact('book'));
    }
    public function delete( $id){
        $book=Book::find($id);
        $book->delete();
        return redirect()->route("books.index");
    }
}
