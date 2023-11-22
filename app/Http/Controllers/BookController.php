<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class BookController extends Controller
{

    public function index(){
        return view('book');
    }
    //Create new Book
    function createBook(Request $request){
        // validate inputs
        $request->validate([
             'name'=>'required',
             'pages'=>'required',
             'IBN'=>'required',
             'author'=>'required',
             'category'=>'required',
             'publisher'=>'required',
             'yearofpublication'=>'required'
         ]); 

    /**
     * Create Book using the Task Model Class
     */
    $book = Book::create([
         'name'=>$request->name,
         'pages'=>$request->pages,
         'IBN'=>$request->IBN,
         'author'=>$request->author,
         'category'=>$request->category,
         'publisher'=>$request->publisher,
         'yearofpublicaton'=>$request->yearofpublication
         
    ]);

    $book = Book::find($book->id);
        if(!$book){
             return response(
                 [
                     "message"=>"failed",
       ]);
       }else{
             return response(
                 [
                     "message"=>"success",
                     "book"=>$book
         ]);
         }         
    } 
}
