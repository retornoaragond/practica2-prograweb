<?php

require_once('models/Book.php');

class BooksController extends Controller
{

    public function index()
    {
        return view(
            'books/index',
            [
                'books' => Book::all(),
                'title' => 'Books List'
            ]
        );
    }

    public function show($id)
    {
        $book = Book::find($id);
        return view(
            'books/show',
            [
                'book' => $book,
                'title' => 'Book Detail'
            ]
        );
    }
}
?>
