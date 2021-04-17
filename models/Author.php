<?php
// file: Author.php

class Author extends Model
{

    static $authors = array(
        [
            'id' => 1, 'author' => 'Abraham Silberschatz', 'nationality' => 'Israelis / American', 'birth_year' => 1952,
            'fields' => 'Database Systems, Operating Systems', 'picture' => 'images/Abraham Silberschatz.jpg',
            'books' => array(
                ['books__book_id' => 1, 'books__title' => 'Operating System Concepts'],
                ['books__book_id' => 2, 'books__title' => 'Database System Concepts']
            )
        ],
        [
            'id' => 2, 'author' => 'Andrew S. Tanenbaum', 'nationality' => 'Dutch / American', 'birth_year' => 1944,
            'fields' => 'Distributed computing, Operating Systems',
            'picture' => 'images/Andrew S. Tanenbaum.jpg',
            'books' => array(
                ['books__book_id' => 3, 'books__title' => 'Computer Networks'],
                ['books__book_id' => 4, 'books__title' => 'Modern Operating Systems']
            ) 
        ]
    );

    public static function all()
    {
        return self::$authors;
    }

    public static function find($id)
    {
        foreach (self::$authors as $key => $author)
            if ($author['id'] == $id) return $author;
        return [];
    }
}
