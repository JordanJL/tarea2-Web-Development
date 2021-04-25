<!DOCTYPE html>
<!-- file: views/professor.php -->
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
     <table>
      <tr><th>Name</th><th>Degree</th>
          <th>Email</th><th>Phone</th></tr>
       <?php foreach ($professors as $prof) { ?>
      <tr><td><?php echo $prof['name'] ?></td>
          <td><?php echo $prof['degree'] ?></td>
          <td><?php echo $prof['email'] ?></td>
          <td><?php echo $prof['phone'] ?></td></tr>
       <?php } ?>
     </table>
    </div>
   </div>
 </div>
</body>