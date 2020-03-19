<?php


namespace Step\Controllers;

use Klein\Request;
use Step\Models\Book;

class SiteController
{
    function index() {
        $books = Book::all();
        $books = array_reverse($books);
        $books = array_slice($books, 0, 3);

        return view('index', [
            'books' => $books
        ]);
    }
}
