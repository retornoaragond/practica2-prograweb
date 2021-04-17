<?php
// file: Publisher.php

class Publisher extends Model
{

    static $publishers = [
        [
            'id' => 1, 'publisher' => 'John Wiley & Sons', 'country' => 'United States', 'founded' => 1807, 'genere' => 'Academic','picture' => 'images/John Wiley & Sons.png',
            'books' => array(
                ['books__book_id' => 1, 'books__title' => 'Operating System Concepts'],
                ['books__book_id' => 2, 'books__title' => 'Database System Concepts']
            )
        ],
        [
            'id' => 2, 'publisher' => 'Pearson Education', 'country' => 'United Kingdom', 'founded' => 1844, 'genere' => 'Education','picture' => 'images/Pearson Education.jpg',
            'books' => array(
                ['books__book_id' => 3, 'books__title' => 'Computer Networks'],
                ['books__book_id' => 4, 'books__title' => 'Modern Operating Systems']
            )
        ]
    ];

    public static function all()
    {
        return self::$publishers;
    }

    public static function find($id)
    {
        foreach (self::$publishers as $key => $publisher)
            if ($publisher['id'] == $id) return $publisher;
        return [];
    }
}
