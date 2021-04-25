
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
          <th>author</th>
          <th>nationality</th>
          <th>birth_year</th>
          <th>fields</th>
          <th>books__book_id</th>
          <th>books__title</th> 
      </thead><tbody>
        
      <tr><td><?php echo $author['id'] ?> </td>
      <td><?php echo $author['author'] ?></td>
      <td><?php echo $author['nationality'] ?></td>
      <td><?php echo $author['birth_year'] ?></td>
      <td><?php echo $author['fields'] ?></td>

      <td><?php echo $author['books__book_id'] ?></td>
      <td><a href="../book/<?php echo $author['books__book_id'] ?>"/>
          <?php echo $author['books__title'] ?></a></td>
     </tr>
       
     </table>
    </div>
   </div>
 </div>
</body>