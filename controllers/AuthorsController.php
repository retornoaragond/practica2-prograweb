<?php

require_once('models/Author.php');

class AuthorsController extends Controller
{

    public function index()
    {
        return view(
            'authors/index',
            [
                'authors' => Author::all(),
                'title' => 'Authors List'
            ]
        );
    }

    public function show($id)
    {
        $author = Author::find($id);
        return view(
            'authors/show',
            [
                'author' => $author,
                'title' => 'Author Detail'
            ]
        );
    }
}
?>