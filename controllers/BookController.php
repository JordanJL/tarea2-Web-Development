<?php
  // file: controllers/ProfessorController.php

  require_once('Book.php');

  class BookController extends Controller {

    public function index() {  
      return view('books/index',
       ['books'=>Book::all(),
        'title'=>'books List']);
    }

    public function show($id) {
      $book = Book::find($id);
      return view('books/show',
        ['books'=>$book,
         'title'=>'books Detail']);
    } 
  }
?>