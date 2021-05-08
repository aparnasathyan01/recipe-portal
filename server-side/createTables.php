<?php
  // Users table query
  $usersTable = "CREATE TABLE IF NOT EXISTS users (
  id INT(6) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(40),
  email VARCHAR(50),
  password VARCHAR(50)
  )";
  // Recipes table query
  $recipesTable = "CREATE TABLE IF NOT EXISTS recipes (
  id INT(6) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50),
  date VARCHAR(20),
  image LONGBLOB NOT NULL,
  author VARCHAR(20),
  description LONGTEXT,
  ingredients LONGTEXT 
   )";
  // Comments table query
  $commentsTable = "CREATE TABLE IF NOT EXISTS comments (
  id INT(6) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50),
  date VARCHAR(20),
  text LONGTEXT,
  postID INT(6),
   FOREIGN KEY (postID) REFERENCES recipes(id)
  )";
  // call connect and make the query
  mysqli_query($connect,$usersTable);
  mysqli_query($connect,$recipesTable);
  mysqli_query($connect,$commentsTable);
?>
