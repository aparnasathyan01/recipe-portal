<?php
// get connection database form config.php
require '../server-side/config.php';
require 'header.php';
require 'navbar.php';

// get parameter to set id of post
$id = $_GET['food'];

// get post from mysql by id
$getPostInfo = mysqli_query($connect, "SELECT * FROM recipes WHERE id='$id'");

// call submitLikes function when form posts
if (isset($_POST['submitLikes'])) {
	submitLikes();
}
// call addComment function when form posts
if (isset($_POST['addComment'])) {
	addComment();
}
// call submitDislikes function when form posts
if (isset($_POST['submitDislikes'])) {
	submitDislikes();
}

//call updateRecipe function when form posts
if (isset($_POST['updateRecipe'])) {
	updateRecipe();
	header('Location: ' . $_SERVER['REQUEST_URI']);
}

// check if post has image, if not assign default image
while ($postInfo = mysqli_fetch_array($getPostInfo)) {
	if (!$postInfo['image']) {
		$postInfo['image'] = 'defaultImage.jpg';
	}

	// for set post name ,author,image , description and comment form
	echo '<title>' . $postInfo['name'] . '</title>
    <div class="container" style="margin-top: 20px; margin-left: 24%;">
      <center>
      <div class="row">
        <div class="col-lg-8 col-sm-10 col-xs-10 col-lg-offset-2">
          <div class="postInfo">
            <div class="head"><center><h2 class="postName">' . $postInfo['name'] . '</h2></center></div>';

	// call submitdelete function when form posts    
	if (isset($_POST['submitdelete'])) {
		submitdelete();
	}

	if ($postInfo['author'] === $_SESSION['name']) {

		echo '<div class="head">
            <form method="POST" action="#">
            <button type="button" class="btn btn-primary" style="color: white;" data-toggle="modal" data-target="#updateRecipe">Update Recipe</button>
            <input type="submit" name="submitdelete" class= "btn btn-danger" value = "Delete Recipe">
            </form></div>';
	}
	
	echo '<h3 style="font-weight: bold; margin-top: 10px;">Author: ' . $postInfo['author'] . '</h3>
                <br>
                <div class="row">
                  <div class="col-lg-6">
                    <img class="postImage" src="uploads/' . $postInfo['image'] . '" " ><br>
                  </div>
                  <div class="col-lg-6">
                    <p style = "font-size: 20px; font-weight: bold;">Ingredients</p>
                    <p class="postDescription">' . $postInfo['ingredients'] . '</p>
                  </div></div>
                  <p style = "font-size: 20px; margin-top: 6px; font-weight: bold">Recipe</p>
                  <p class="postDescription">' . $postInfo['description'] . '</p><br/><div class="row">';

	//get likes from database
	$getLikesInfo = mysqli_query($connect, "SELECT COUNT(valueL) FROM likes WHERE valueL=1 GROUP BY postID HAVING postID =" . $postInfo['id']);
	if ($likes = mysqli_fetch_assoc($getLikesInfo)) {
		echo '<div class="col-2"><form method="POST" action="">
                    <button type="submit" name="submitLikes" class= "btn btn-primary btn-sm">Like <span class="badge badge-light">' . $likes["COUNT(valueL)"] . '</span></button>
                    </form></div>';
	} 
	else {
		echo '<div class="col-2"><form method="POST" action="#">
                    <button type="submit" name="submitLikes" class= "btn btn-primary btn-sm">Like <span class="badge badge-light">0</span></button>
                  </form></div>';
	}

	// get dislikes from database
	$getDislikesInfo = mysqli_query($connect, "SELECT COUNT(valueL) FROM likes WHERE valueL=-1 GROUP BY postID HAVING postID =" . $postInfo['id']);
	if ($dislikes = mysqli_fetch_assoc($getDislikesInfo)) {
		echo '<div class="col-1"><form method="POST" action="#">
                    <button type="submit" name="submitDislikes" class= "btn btn-danger btn-sm">Dislike <span class="badge badge-light">' . $dislikes["COUNT(valueL)"] . '</span></button>
                    </form></div>';
	} 
	else {
		echo '<div class="col-1"><form method="POST" action="#">
                    <button type="submit" name="submitDislikes" class= "btn btn-danger btn-sm">Dislike <span class="badge badge-light">0</span></button>
                  </form></div>';
	}
	echo    '<div class="col-8">
		    <form method="POST" action="#">
            <input name="commentText" class="postComment" type="text" size="32" required/>&ensp;
            <input type="submit" name="addComment" class= "btn btn-primary" value = "Comment" style="margin-bottom: 3px; padding: 6px;">
            </form>
            </div></div>';

	// get comments for database
	$getComments = mysqli_query($connect, "SELECT DISTINCT comments.name,comments.date,comments.text FROM comments INNER JOIN recipes ON comments.postID = $id ORDER BY comments.date DESC");
	while ($comment = mysqli_fetch_array($getComments)) {
		echo '<div class="Comments row">
            <div class="col-lg-3" style="margin-top: 4px;">
              <img class="PersonImg" src="https://www.w3schools.com/howto/img_avatar2.png">&emsp;
              ' . $comment['name'] . '<br>
            </div>
            <div class="col-lg-5" style="margin-top: 12px; text-align: justify;">
            <p style="font-weight: bold;">' . $comment['text'] . '</p>
            </div>
            <div class="col-lg-4" style="margin-top: 10px;">  
            <p>' . $comment['date'] . '</p>
            </div>
          </div>
          <hr/>';
	}
	
	echo '</div>
        </div></div>
        </center></div>';
}

// function to add comment
function addComment()
{
	// get connection database form config.php
	require '../server-side/config.php';
	$id = $GLOBALS['id'];
	$name = $_SESSION['name'];
	$postText = $_POST['commentText'];
	$querybb = "INSERT INTO comments (name,text,postID,date) VALUES ('$name','$postText','$id',now())";
	$insert = mysqli_query($connect, $querybb);
}

// function to submit likes
function submitLikes()
{
	// get connection database form config.php
	require '../server-side/config.php';
	$Gid = $GLOBALS['id'];
	$Uid = $_SESSION['user'];
	$checkStatus = mysqli_query($connect, "SELECT * FROM likes WHERE userID='$Uid' AND postID='$Gid'");
	$count = mysqli_num_rows($checkStatus);
	if ($count > 0) {
		$querybb = "UPDATE likes SET valueL = '1' WHERE userID='$Uid' AND postID= '$Gid'";
	} else {
		$querybb = "INSERT INTO likes (valueL, userID, postID) VALUES ('1','$Uid', '$Gid')";
	}
	$insert = mysqli_query($connect, $querybb);
}

// function to submit dislikes
function submitDislikes()
{
	// get connection database form config.php
	require '../server-side/config.php';
	$Gid = $GLOBALS['id'];
	$Uid = $_SESSION['user'];
	$checkStatus = mysqli_query($connect, "SELECT * FROM likes WHERE userID='$Uid' AND postID='$Gid'");
	$count = mysqli_num_rows($checkStatus);
	if ($count > 0) {
		$querybb = "UPDATE likes SET valueL = '-1' WHERE userID='$Uid' AND postID= '$Gid'";
	} else {
		$querybb = "INSERT INTO likes (valueL, userID, postID) VALUES ('-1','$Uid', '$Gid')";
	}
	$insert = mysqli_query($connect, $querybb);
}

// get posts from database
$getPostInfo = mysqli_query($connect, "SELECT * FROM recipes WHERE id='$id'");
$postInfo = mysqli_fetch_array($getPostInfo);
echo '
<div class="modal fade" id="updateRecipe" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" style="color: white;">&times;</button>
      </div>
      <div class="modal-body">
      <form action="" method="post">
        <div class="form-group">
        <p style="font-weight: bold;">Dish name: </p>
          <input type="text" class="form-control" id="dishName" placeholder="Dish name" name="dishName" value="' . $postInfo['name'] . '" required>
        </div>
        <div class="form-group">
        <p style="font-weight: bold;">Ingredients: </p>
          <textarea id="subject" class="form-control" name="ingredientsUpdate" placeholder="Ingredients required" style="height:100px" required>' . $postInfo['ingredients'] . '</textarea>
        </div>
        <div class="form-group">
        <p style="font-weight: bold;">Recipe: </p>
          <textarea id="subject" class="form-control" name="descriptionUpdate" placeholder="Enter recipe!" style="height:200px" required>' . $postInfo['description'] . '</textarea>
        </div>
        <button type="submit" name="updateRecipe" class="btn" style="background-color: #422929; color: white;">Update</button>
      </form>
      </div>
    </div>
  </div>
</div>';

// function to update recipe
function updateRecipe()
{
	require "../server-side/config.php";
	$id = $_GET['food'];
	// echo("Error description: 1" . mysqli_error($connect));
	$newDish = $_POST['dishName'];
	$newIngredients = $_POST['ingredientsUpdate'];
	$newRecipe = $_POST['descriptionUpdate'];
	$querybb = "UPDATE recipes SET name='$newDish', ingredients = '$newIngredients', description = '$newRecipe' WHERE id='$id'";
	$updateRecipe = mysqli_query($connect, $querybb);
}

// function to delete recipe
function submitdelete()
{
	require '../server-side/config.php';
	$id = $_GET['food'];
	$dd = "DELETE FROM recipes WHERE id='$id' AND author='$_SESSION[name]'";
	$deletecomment = mysqli_query($connect, "DELETE FROM comments WHERE postID='$id'");
	$deletelikes = mysqli_query($connect, "DELETE FROM likes WHERE postID='$id'");
	$deletepost = mysqli_query($connect, $dd);
	header('Location: ../index.php');
}
