<?php
  // connect to server
  $server = "localhost";
  $username = "server";
  $password = "password";
  $connectServer = new mysqli($server, $username, $password);
  // craete foodRecipes database
  $createDB="CREATE DATABASE IF NOT EXISTS foodRecipes";
  mysqli_query($connectServer,$createDB);
 ?>
