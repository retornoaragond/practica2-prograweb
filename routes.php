<?php

Route::get('/', function () {
    return view('main_page');
});
Route::get('home', function () {
    return view('main_page');
});
Route::resource('books', 'BooksController');
// Route::get('books', function () {
//     return view(
//         'book',
//         [
//             'books' => Book::all(),
//             'title' => 'Books list'
//         ]
//     );
// });
Route::resource('authors', 'AuthorsController');
// Route::get('authors', function () {
//     return view(
//         'author',
//         [
//             'authors' => Author::all(),
//             'title' => 'Authors list'
//         ]
//     );
// });
Route::resource('publishers', 'PublishersController');
// Route::get('publishers', function () {
//     return view(
//         'publisher',
//         [
//             'publishers' => Publisher::all(),
//             'title' => 'Publisher list'
//         ]
//     );
// });

Route::dispatch();
