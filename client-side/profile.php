<?php
  require 'navbar.php';
  require 'header.php';
  // get connection database form config.php
  require '../server-side/config.php';

  $name = $_SESSION['name'];
  $getRecipeInfo = mysqli_query($connect, "SELECT COUNT(id) FROM recipes WHERE author = ".$name);

  echo '<title>Profile</title>
    <div class="prof-container">
      <center>
          <div class="postInfo" style="border-radius: 25px; width: 70%;">
          <div class="head" style="height: 50px; border-radius:25px 25px 0 0;"><p style="font-size: 25px; margin-top: 6px; font-weight: bold;">Profile</p></div>
            <p style="font-size: 25px; margin-top: 25px;"><label class="" for="Name">Name: </label><input type="name" class="form-control" style = "width: 50%; font-weight: bold;" id="name" placeholder=" '.$_SESSION['name'].' " name="name" disabled></p>
            <p style="font-size: 25px;"><label class="" for="Email">Email address: </label><input type="email" class="form-control" style = "width: 50%; font-weight: bold;" id="email" placeholder=" '.$_SESSION['mail'].' " name="email" disabled></p><br>
            <form action="" method="POST">
            <input type="submit" name="delAccount" class= "btn btn-danger" value = "Delete Account" style="margin-bottom: 20px;"></div></div>
            </form>';
            if(isset($_POST['delAccount'])){
              delAccount();
            }          

  echo '</ul>
  </center>
  </div>
  <br/><br/>
  <!-- Footer -->
  <div class="footer">
    <p>© 2021 Copyright: AICA</p>
  </div>
  </div>
  </body>
  </html>
  <!-- Footer -->';

function delAccount(){
  require '../server-side/config.php';
  $id = $_SESSION['user'];
  $dd = "DELETE FROM users WHERE id= '$id' ";
  $deletelikes = mysqli_query($connect,"DELETE FROM likes WHERE userID='$id'");
  $deletecomment = mysqli_query($connect,"DELETE FROM comments WHERE name='$_SESSION[name]'");
  $deleterecipe = mysqli_query($connect, "DELETE FROM recipes WHERE author='$_SESSION[name]'");  
  echo $_SESSION['name'];
  $deleteuser = mysqli_query($connect,$dd);
  session_unset();
  session_destroy();
  header('Location: ../index.php');
}
