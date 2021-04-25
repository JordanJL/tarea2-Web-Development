<?php
  // file: Professor.php

class Professor extends Model {

  static $professors = [
    ['id'=>4056,'name'=>'Juan Perez ','degree'=>'M.Sc.',
     'email'=>'juan.perez@univ.ac','phone'=>'8944556'], 
    ['id'=>3110,'name'=>'Pedro Castro','degree'=>'Ph.D',
     'email'=>'pedro.castro@univ.ac','phone'=>'8944550'],
    ['id'=>2856,'name'=>'Manuel Salas','degree'=>'Lic.',
     'email'=>'manuel.salas@univ.ac','phone'=>'8944455'],
    ['id'=>1788,'name'=>'Oscar Mora','degree'=>'M.Sc.',
     'email'=>'oscar.mora@univ.ac','phone'=>'8944675'],
    ['id'=>6547,'name'=>'Pablo Cortez','degree'=>'Lic.',
     'email'=>'pablo.cortez@univ.ac','phone'=>'8944999']
  ];

  public static function all() { 
    return self::$professors; 
  }

  public static function find($id) {
    foreach (self::$professors as $key => $prof)
      if ($prof['id'] == $id) return $prof;
    return [];
  }
}
?>