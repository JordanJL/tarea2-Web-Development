<?php
  // file: controllers/ProfessorController.php

  require_once('Professor.php');

  class ProfessorController extends Controller {

    public function index() {  
      return view('professor/index',
       ['professors'=>Professor::all(),
        'title'=>'Professors List']);
    }

    public function show($id) {
      $prof = Professor::find($id);
      return view('professor/show',
        ['professor'=>$prof,
         'title'=>'Professor Detail']);
    }
  }
?>