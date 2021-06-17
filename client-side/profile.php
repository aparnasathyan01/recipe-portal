<?php
require 'navbar.php';
require 'header.php';
// get connection from config.php
require '../server-side/config.php';

//profile view
echo '<title>Profile</title>
    <div class="prof-container">
      <center>
          <div class="postInfo" style="border-radius: 25px; width: 70%;">
          <div class="head" style="height: 50px; border-radius:25px 25px 0 0;"><p style="font-size: 25px; margin-top: 6px; font-weight: bold;">Profile</p></div>
            <p style="font-size: 25px; margin-top: 25px;"><label class="" for="Name">Name: </label><input type="name" class="form-control" style = "width: 50%; font-weight: bold;" id="name" placeholder=" ' . $_SESSION['name'] . ' " name="name" disabled></p>
            <p style="font-size: 25px;"><label class="" for="Email">Email address: </label><input type="email" class="form-control" style = "width: 50%; font-weight: bold;" id="email" placeholder=" ' . $_SESSION['mail'] . ' " name="email" disabled></p><br>
            <form action="" method="POST">
            <button type="button" class="btn btn-primary" style="color: white; margin-bottom: 10px;" data-toggle="modal" data-target="#updateAccount">Update Account</button><br>
            <input type="submit" name="delAccount" class= "btn btn-danger" value = "Delete Account" style="margin-bottom: 20px; padding: 6px 14px 6px 14px;"></div></div>
            </form>';

// call delAccount function when form posts
if (isset($_POST['delAccount'])) {
	delAccount();
}

// call updateAccount function when form posts
if (isset($_POST['updateAccount'])) {
	updateAccount();
}

//update account form
echo '<div class="modal fade" id="updateAccount" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" style="color: white;">&times;</button>
      </div>
      <div class="modal-body">
      <form action="" method="post">
        <div class="form-group">
          <p style="font-weight: bold;">Name:</p>
          <input type="text" class="form-control" id="newName" name="newName" value="' . $_SESSION['name'] . '" required>
        </div>
        <div class="form-group">
        <p style="font-weight: bold;">Mail:</p>
        <input type="text" class="form-control" id="newMail" name="newMail" value="' . $_SESSION['mail'] . '" required>
        </div>
        <button type="submit" name="updateAccount" class="btn" style="background-color: #422929; color: white;">Update</button>
      </form>
      </div>
    </div>
  </div>
</div>';

//delete account details function
function delAccount()
{
	require '../server-side/config.php';
	$id = $_SESSION['user'];
	$dd = "DELETE FROM users WHERE id= '$id' ";
	$deletelikes = mysqli_query($connect, "DELETE FROM likes WHERE userID='$id'");
	$deletecomment = mysqli_query($connect, "DELETE FROM comments WHERE name='$_SESSION[name]'");
	$deleterecipe = mysqli_query($connect, "DELETE FROM recipes WHERE author='$_SESSION[name]'");
	echo $_SESSION['name'];
	$deleteuser = mysqli_query($connect, $dd);
	session_unset();
	session_destroy();
	header('Location: ../index.php');
}

//update account details function
function updateAccount()
{
	require '../server-side/config.php';
	$Uid = $_SESSION['user'];
	$oldName = $_SESSION['name'];
	$oldMail = $_SESSION['mail'];
	$updateName = $_POST['newName'];
	$updateMail = $_POST['newMail'];
	$querybb = "UPDATE users SET name = '$updateName', email = '$updateMail' WHERE id='$Uid'";
	$queryRecipes = "UPDATE recipes SET author = '$updateName' WHERE author='$oldName'";
	$update = mysqli_query($connect, $querybb);
	$updateAuthor = mysqli_query($connect, $queryRecipes);
	$_SESSION['name'] = $updateName;
	$_SESSION['mail'] = $updateMail;
	header('Location: ' . $_SERVER['REQUEST_URI']);
}

// footer
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