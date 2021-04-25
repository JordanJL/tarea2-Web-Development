<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>

<div class="topnav">
  <a  href="/">Home</a> 
  <a href="../book">Books</a>
  <a href="../author">Authors</a>
  <a href="../publisher">Publishers</a> 
</div> 
<div style="padding-left:16px">  

</div>

</body>
</html>
 

</body>
</html>

<?php
error_reporting(E_ALL);
ini_set('display_errors',0);
session_start();
require('PHPFramex.php');
require('routes.php')
?>