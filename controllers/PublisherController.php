<?php
  // file: controllers/ProfessorController.php

  require_once('Publisher.php');

  class PublisherController extends Controller {

    public function index() {  
      return view('publishers/index',
       ['publisher'=>Publisher::all(),
        'title'=>'publishers List']);
    }

    public function show($id) {
      $publ = Publisher::find($id);
      return view('publishers/show',
        ['publisher'=>$publ,
         'title'=>'publishers Detail']);
    }
  }
?>