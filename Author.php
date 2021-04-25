<?php
  // file: Professor.php

class Author extends Model {

  static $author = [
    ['id'=>1,'author'=>'Abraham Silberschatz','nationality'=>'Israelis / American',
     'birth_year'=>'1952','fields'=>'Database Systems, Operating Systems',
     'books__book_id'=>'1','books__title'=>'Operating System Concepts'], 
    
     ['id'=>2,'author'=>'Andrew S. Tanenbaum','nationality'=>'Dutch / American',
     'birth_year'=>'1944','fields'=>'Distributed computing, Operating Systems',
     'books__book_id'=>'3','books__title'=>'Computer Networks'], 
  ];

  public static function all() { 
    return self::$author; 
  }

  public static function find($id) {
    foreach (self::$author as $key => $prof)
      if ($prof['id'] == $id) return $prof;
    return [];
  }
}
?>