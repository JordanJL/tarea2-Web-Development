
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
        
      <tr> <td><?php echo $books['id'] ?></td>
          
      <td> <?php echo $books['title'] ?> </td>
      <td><?php echo $books['edition'] ?></td>
      <td><?php echo $books['copyright'] ?></td>
      <td><?php echo $books['language'] ?></td>
      <td><?php echo $books['pages'] ?></td>

      <td><a href="../author/<?php echo $books['author_id'] ?>"/>
          <?php echo $books['author'] ?></a></td> 
      <td><?php echo $books['author_id'] ?></td> 
      <td><a href="../publisher/<?php echo $books['publisher_id'] ?>"/>
          <?php echo $books['publisher'] ?></a></td>
      <td><?php echo $books['publisher_id'] ?></td> </tr>
       </tbody>
     </table>
    </div>
   </div>
 </div>
</body>