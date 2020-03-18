<?php


namespace Step\Controllers;


use Klein\Request;
use Klein\Response;
use Step\Models\Book;

class BookController
{
    function index() {
        return view('books.index', [
            'books' => Book::all()
        ]);
    }

    function create() {
        return view('books.form');
    }

    function createPost(Request $request, Response $response) {
         $book = new Book();
         $book->name = $request->param('name');
         $book->save();

         return $response->redirect("/books/{$book->id}");
    }

    function update(Request $request, Response $response) {
        $id = $request->param('id');
        $book = Book::find_by_id($id);

        if($book === null)
            return $response->code(404);

        return view('books.form', [
            'book' => $book
        ]);
    }

    function updatePost(Request $request, Response $response) {
        $id = $request->param('id');
        /** @var Book $book*/
        $book = Book::find_by_id($id);

        if($book === null)
            return $response->code(404);

        $book->name = $request->param('name');
        $book->save();

        return $response->redirect("/books/{$book->id}");
    }

    function delete(Request $request, Response $response) {
        $id = $request->param('id');
        $book = Book::find_by_id($id);

        if($book === null)
            return $response->code(404);

        $book->delete();
        return $response->redirect('/books');
    }

    function details(Request $request, Response $response) {
        $id = $request->param('id');
        $book = Book::find_by_id($id);

        if($book === null)
            return $response->code(404);

        return view('books.details', [
            'book' => $book
        ]);
    }
}