
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
      <tr><th>Id</th><th>Name</th><th>Edition</th>
          <th>Copyright</th><th>Language</th>
          <th>Pages</th>
          <th>Author</th>
          <th>Author_id</th>
          <th>Publisher</th>
          <th>Publisher_id</th></tr>
      </thead><tbody>
       <?php foreach ($books as $book) { ?>
      <tr> <td><?php echo $book['id'] ?></td>
          
      <td>
          <?php echo $book['title'] ?> </td>
      <td><?php echo $book['edition'] ?></td>
      <td><?php echo $book['copyright'] ?></td>
      <td><?php echo $book['language'] ?></td>
      <td><?php echo $book['pages'] ?></td>

      <td><a href="author/<?php echo $book['author_id'] ?>"/>
          <?php echo $book['author'] ?></a></td> 
      <td><?php echo $book['author_id'] ?></td> 
      <td><a href="publisher/<?php echo $book['publisher_id'] ?>"/>
          <?php echo $book['publisher'] ?></a></td>
      <td><?php echo $book['publisher_id'] ?></td> </tr>
       <?php } ?></tbody>
     </table>
    </div>
   </div>
 </div>
</body>