<?php
  // file: Professor.php

class Publisher extends Model {

  static $publisher = [
    ['id'=>1,'publisher'=>'John Wiley & Sons','country'=>'United States',
    'founded'=>'1807','genere'=>'Academic','books__book_id'=>'1',
    'books__title'=>'Operating System Concepts', ],  
    ['id'=>2,'publisher'=>'Pearson Education','country'=>'United Kingdom',
    'founded'=>'1844','genere'=>'Education','books__book_id'=>'3',
    'books__title'=>'Computer Networks', ], 
  ];

  public static function all() { 
    return self::$publisher; 
  }

  public static function find($id) {
    foreach (self::$publisher as $key => $prof)
      if ($prof['id'] == $id) return $prof;
    return [];
  }
}
?>