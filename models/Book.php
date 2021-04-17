<?php
// file: Book.php

class Book extends Model
{

    static $books = [
        [
            'id' => 1, 'title' => 'Operating System Concepts', 'edition' => '9th', 'copyright' => 2012, 'languages' => 'ENGLISH',
            'pages' => 976, 'author' => 'Abraham Silberschatz', 'author_id' => 1, 'publisher' => 'John Wiley & Sons', 'publisher_id' => 1,
            'picture' => 'images/Operating System Concepts.jpg'
        ],
        [
            'id' => 2, 'title' => 'Database System Concepts', 'edition' => '6th', 'copyright' => 2010, 'languages' => 'ENGLISH',
            'pages' => 1376, 'author' => 'Abraham Silberschatz', 'author_id' => 1, 'publisher' => 'John Wiley & Sons', 'publisher_id' => 1,
            'picture' => 'images/Database System Concepts.jpg'
        ],
        [
            'id' => 3, 'title' => 'Computer Networks', 'edition' => '5th', 'copyright' => 2010, 'languages' => 'ENGLISH',
            'pages' => 960, 'author' => 'Andrew S. Tanenbaum', 'author_id' => 2, 'publisher' => 'Pearson Education', 'publisher_id' => 1,
            'picture' => 'images/Computer Networks.jpg'
        ],
        [
            'id' => 4, 'title' => 'Modern Operating Systems', 'edition' => '4th', 'copyright' => 2014, 'languages' => 'ENGLISH',
            'pages' => 1136, 'author' => 'Andrew S. Tanenbaum', 'author_id' => 2, 'publisher' => 'Pearson Education', 'publisher_id' => 1,
            'picture' => 'images/Modern Operating Systems.jpg'
        ]
    ];

    public static function all()
    {
        return self::$books;
    }

    public static function find($id)
    {
        foreach (self::$books as $key => $book)
            if ($book['id'] == $id) return $book;
        return [];
    }
}
