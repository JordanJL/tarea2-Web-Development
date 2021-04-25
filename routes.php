<?php
    require_once('Book.php');
    require_once('Author.php');
    require_once('Publisher.php');
    require_once('Professor.php');
   //Route::get('/',function() { echo 'Hello, World!'; });
   
  Route::get('/', function () { return view('welcome'); });

/* 
  Route::get('about', function () { return view('about'); });
  Route::get('books', function () { return view('books'); });

  Route::get('authors', function () { return view('authors'); });
  Route::get('publishers', function () { return view('publishers'); });

 Route::get('professor', function() {
    return view('professor',
      ['professors'=>Professor::all(),
       'title'=>'Professors list']);
 }); */
 
   Route::resource('professor', 'ProfessorController');
 
 Route::resource('author', 'AuthorController');
  Route::resource('book', 'BookController');
  Route::resource('publisher', 'PublisherController');
    Route::dispatch();
?>
