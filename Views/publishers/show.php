
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
      <tr><td> <?php echo $publisher['id'] ?> </td>
      <td><?php echo $publisher['publisher'] ?></td>
      <td><?php echo $publisher['country'] ?></td>
      <td><?php echo $publisher['founded'] ?></td>
      <td><?php echo $publisher['genere'] ?></td>

      <td><?php echo $publisher['books__book_id'] ?></td>
      <td><a href="../book/<?php echo $publisher['books__book_id'] ?>"/>
          <?php echo $publisher['books__title'] ?></a></td>
     </tr>
        </tbody>
     </table>
    </div>
   </div>
 </div>
</body>