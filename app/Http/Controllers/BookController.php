<?php

namespace App\Http\Controllers;

use App\BookDetail;
use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function index()
    {
//       return dd(BookDetail::with ('book')->get());
        $books = Book::with ('bookDetail','bookLang')->get();

        return dd ($books);
        return view ('book.index',compact ('books'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate ($request,[
            'title'=>'required',
            'author'=>'required'
        ]);
       $book = new Book();
       $book->title = $request->title;
       $book->author= $request->author;
       $book->save ();
       return redirect ('book')->with ('success','Record created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book =  Book::find($id);
        return view('book.edit' ,compact ('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->title = $request->title;
        $book->author= $request->author;
        $book->save ();
        return redirect ('book');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Book::destroy ($id);
        return back ()->with ('message','Record Deleted');
    }
}
