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
      <tr><th>Name</th><th>Degree</th>
          <th>Email</th><th>Phone</th></tr>
      </thead><tbody>
       <?php foreach ($professors as $prof) { ?>
      <tr><td><a href="professor/<?php echo $prof['id'] ?>"/>
          <?php echo $prof['name'] ?></a></td>
      <td><?php echo $prof['degree'] ?></td>
      <td><?php echo $prof['email'] ?></td>
      <td><?php echo $prof['phone'] ?></td></tr>
       <?php } ?></tbody>
     </table>
    </div>
   </div>
 </div>
</body>