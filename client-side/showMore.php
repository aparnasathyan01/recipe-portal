<?php
  // get conneciton database form config.php
  require '../server-side/config.php';
  require 'header.php';
  require 'navbar.php';
  // get parameter to set id of post
  $id= $_GET['food'];
  // get post from mysql by id
  $getPostInfo = mysqli_query($connect,"SELECT * FROM recipes WHERE id='$id'");
  // check post if not have image then set default image
  while($postInfo = mysqli_fetch_array($getPostInfo)){
    if(!$postInfo['image']){
      $postInfo['image']='defaultImage.jpg';
    }
    
    // for set post name ,author,image , description and comment form
    echo '<title>'.$postInfo['name'].'</title>
    <div class="container">
      <center>
      <div class="row">
        <div class="col-lg-8 col-sm-10 col-xs-10 col-lg-offset-2">
          <div class="postInfo">
            <div class="head"><h3>Author : '.$postInfo['author'].'</h3>';

          // delete recipe button added
            echo '<form method="POST" action="#">
            <input type="submit" name="submitdelete" value = "Delete Recipe">
            </form></div><br>';

            if(isset($_POST['submitdelete'])){
              $dd = "DELETE FROM recipes WHERE id='$id' AND author='$_SESSION[name]'";
              $deletecomment = mysqli_query ($connect,"DELETE FROM comments WHERE comments.postID='$id'");
              $deletepost = mysqli_query ($connect,$dd);
              header('Location: ./food.php');
            }
            //delete recipe button over

              echo '<div ><h2 class="postName">'.$postInfo['name'].'</h2></div>
                <br>
                <div class="row">
                  <div class="col-lg-6">
                    <img class="postImage" src="uploads/'.$postInfo['image'].'" " ><br>
                  </div>
                  <div class="col-lg-6">
                    <p class="font-weight-bold">Ingredients</p>
                    <p class="postDescription">'.$postInfo['ingredients'].'</p>
                    <p class="font-weight-bold">Recipe</p>
                    <p class="postDescription">'.$postInfo['description'].'</p>
                  </div>
                </div>
                <br>
                <div class="head">
                  <form method="POST" action="#">
                    <input name="commentText" class="postComment" type="text"/>
                    <input type="submit" value="comment" name="addComment">
                  </form>
                </div>
                <br>';
    // get comments for database mysql
    $getComments = mysqli_query($connect,"SELECT DISTINCT comments.name,comments.date,comments.text FROM comments INNER JOIN recipes ON comments.postID = $id ORDER BY comments.date DESC");
    while($comment = mysqli_fetch_array($getComments)){
      echo'<div class="Comments row">
            <div class="col-lg-3">
              <img class="PersonImg" src="https://www.w3schools.com/howto/img_avatar.png">
              '.$comment['name'].'<br>
            </div>
            <div class="col-lg-9">
              '.$comment['text'].'<br>
              '.$comment['date'].'
            </div>
          </div>
          <hr/>';
      }
      // end code html of page
      echo'</div>
        </div></div>
        </center></div>';
  // function to add comment
  }
  function addComment(){
    // get conneciton database form config.php
    require '../server-side/config.php';
    $id= $GLOBALS['id'];
    $name =   $_SESSION['name'];
    $postText = $_POST['commentText'];
    $querybb = "INSERT INTO comments (name,text,postID,date) VALUES ('$name','$postText','$id',now())";
    $instert=mysqli_query ($connect,$querybb);
  }
  // call addComment function when form post
  if(isset($_POST['addComment'])){
    addComment();
  }
?>
