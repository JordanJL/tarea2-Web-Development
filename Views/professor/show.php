<!DOCTYPE html>
<!-- file: views/professor/show.php -->
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $title ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/normalize.css">
<link rel="stylesheet" href="/css/skeleton.css">
</head>
<body>
 <div class="container">
  <div class="row">
   <div class="eleven column" style="margin-top: 10%">
    <h2><?php echo $title ?></h2>
    <form>
     <div class="row">
      <div class="six columns">
       <label for="nameInput">Name</label>
       <input class="u-full-width" type="text" readonly
          id="name" value="<?php echo $professor['name']; ?>">
      </div>
      <div class="six columns">
       <label for="degreeInput">Degree</label>
       <input class="u-full-width" type="text" readonly
          id="degree" value="<?php echo $professor['degree']; ?>">
      </div>
     </div>
     <div class="row">
      <div class="six columns">
       <label for="emailInput">Email</label>
       <input class="u-full-width" type="email" readonly
          id="email" value="<?php echo $professor['email']; ?>">
      </div>
      <div class="six columns">
       <label for="phoneInput">Phone</label>
       <input class="u-full-width" type="tel" readonly
         id="phone" value="<?php echo $professor['phone']; ?>">
      </div>
     <a class="button button-primary" href="/professor">Back</a>
     </div>
    </form>
   </div>
  </div>
 </div>
</body>