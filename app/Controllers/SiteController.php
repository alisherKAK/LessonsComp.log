<?php


namespace Step\Controllers;

use Klein\Request;
use Step\Models\Book;

class SiteController
{
    function index() {
        $books = Book::all();
        return view('index', [
            'books' => $books
        ]);
    }
}
