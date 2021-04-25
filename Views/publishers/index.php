
<!DOCTYPE html>
<!-- file: views/professor/index.php -->
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
     <table><thead>
      <tr><th>id</th>
          <th>publisher</th>
          <th>country</th>
          <th>founded</th>
          <th>genere</th>
          <th>books__book_id</th>
          <th>books__title</th> 
      </thead><tbody>
       <?php foreach ($publisher as $publ) { ?>
      <tr><td> <?php echo $publ['id'] ?> </td>
      <td><?php echo $publ['publisher'] ?></td>
      <td><?php echo $publ['country'] ?></td>
      <td><?php echo $publ['founded'] ?></td>
      <td><?php echo $publ['genere'] ?></td>

      <td><?php echo $publ['books__book_id'] ?></td>
      <td><a href="book/<?php echo $publ['books__book_id'] ?>"/>
          <?php echo $publ['books__title'] ?></a></td>
     </tr>
       <?php } ?></tbody>
     </table>
    </div>
   </div>
 </div>
</body>