<?php
  // connect to server
  $server = "localhost";
  $username = "root";
  $password = "";
  $connectServer = new mysqli($server, $username, $password);
  // create foodRecipes database
  $createDB="CREATE DATABASE IF NOT EXISTS foodRecipes";
  mysqli_query($connectServer,$createDB);
 ?>
