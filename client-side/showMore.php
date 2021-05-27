<?php
  // get connection database form config.php
  require '../server-side/config.php';
  require 'header.php';
  require 'navbar.php';
  // get parameter to set id of post
  $id= $_GET['food'];
  // get post from mysql by id
  $getPostInfo = mysqli_query($connect,"SELECT * FROM recipes WHERE id='$id'");
  // check post has image, if not assign default image
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
            <div class="head"><h3>Author: '.$postInfo['author'].'</h3></div>';

          // delete recipe button added
          if($postInfo['author'] === $_SESSION['name']){
            echo '<div class="head"><form method="POST" action="#">
            <input type="submit" name="submitdelete" class= "btn btn-danger" value = "Delete Recipe">
            </form></div>';

            if(isset($_POST['submitdelete'])){
              $dd = "DELETE FROM recipes WHERE id='$id' AND author='$_SESSION[name]'";
              $deletecomment = mysqli_query ($connect,"DELETE FROM comments WHERE comments.postID='$id'");
              $deletepost = mysqli_query ($connect,$dd);
              header('Location: ./food.php');
            }
          }
            //delete recipe button over
              echo '<div><h2 class="postName">'.$postInfo['name'].'</h2></div>
                <br>
                <div class="row">
                  <div class="col-lg-6">
                    <img class="postImage" src="uploads/'.$postInfo['image'].'" " ><br>
                  </div>
                  <div class="col-lg-6">
                    <p class="font-weight-bold" style = "font-size: 20px">Ingredients</p>
                    <p class="postDescription">'.$postInfo['ingredients'].'</p>
                    <p class="font-weight-bold" style = "font-size: 20px">Recipe</p>
                    <p class="postDescription">'.$postInfo['description'].'</p>
                  </div></div>';
                
                  $getLikesInfo = mysqli_query($connect, "SELECT COUNT(valueL) FROM likes WHERE valueL=1 GROUP BY postID HAVING postID =" . $postInfo['id']);
                  if($likes = mysqli_fetch_assoc($getLikesInfo)){
                    echo '<div class="col-xs-3"><form method="POST" action="">
                    <input type="submit" name="submitLikes" class= "btn btn-primary" value = "Like"> '.$likes["COUNT(valueL)"].'
                    </form></div>';
                  }
                  else{
                    echo '<div class="col-xs-3"><form method="POST" action="#">
                  <input type="submit" name="submitLikes" class= "btn btn-primary" value = "Like"> 0
                  </form></div>';
                  }
                  $getDislikesInfo = mysqli_query($connect, "SELECT COUNT(valueL) FROM likes WHERE valueL=-1 GROUP BY postID HAVING postID =" . $postInfo['id']);
                  if($dislikes = mysqli_fetch_assoc($getDislikesInfo)){
                    echo '<div class="col-xs-3"><form method="POST" action="#">
                    <input type="submit" name="submitDislikes" class= "btn btn-danger" value = "Dislike"> '.$dislikes["COUNT(valueL)"].'
                    </form></div>';
                  }
                  else{
                    echo '<div class="col-xs-3"><form method="POST" action="#">
                  <input type="submit" name="submitDislikes" class= "btn btn-danger" value = "Dislike"> 0
                  </form></div>';
                  }
                echo '
                <br>
                <div class="row">
                <div class="col-lg-12">
                <div class="head">
                  <form method="POST" action="#">
                    <input name="commentText" class="postComment" type="text" required/>
                    <input type="submit" value="comment" name="addComment"/>
                  </form>
                </div></div></div>
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
    // get connection database form config.php
    require '../server-side/config.php';
    $id= $GLOBALS['id'];
    $name = $_SESSION['name'];
    $postText = $_POST['commentText'];
    $querybb = "INSERT INTO comments (name,text,postID,date) VALUES ('$name','$postText','$id',now())";
    $insert=mysqli_query ($connect,$querybb);
  }
  // call addComment function when form post
  if(isset($_POST['addComment'])){
    addComment();
  }

  function submitLikes(){
    // get connection database form config.php
    require '../server-side/config.php';
    $Gid= $GLOBALS['id'];
    $Uid = $_SESSION['user'];
    $checkStatus = mysqli_query($connect, "SELECT * FROM likes WHERE userID='$Uid' AND postID='$Gid'");
    $count = mysqli_num_rows($checkStatus);
    if($count>0){
      $querybb = "UPDATE likes SET valueL = '1' WHERE userID='$Uid' AND postID= '$Gid'";
    }
    else{
      $querybb = "INSERT INTO likes (valueL, userID, postID) VALUES ('1','$Uid', '$Gid')";
    }
    $insert=mysqli_query ($connect,$querybb);
  }
  // call addComment function when form post
  if(isset($_POST['submitLikes'])){
    submitLikes();
  }
  function submitDislikes(){
    // get connection database form config.php
    require '../server-side/config.php';
    $Gid= $GLOBALS['id'];
    $Uid = $_SESSION['user'];
    $checkStatus = mysqli_query($connect, "SELECT * FROM likes WHERE userID='$Uid' AND postID='$Gid'");
    $count = mysqli_num_rows($checkStatus);
    if($count>0){
      $querybb = "UPDATE likes SET valueL = '-1' WHERE userID='$Uid' AND postID= '$Gid'";
    }
    else{
      $querybb = "INSERT INTO likes (valueL, userID, postID) VALUES ('-1','$Uid', '$Gid')";
    }
    $insert=mysqli_query ($connect,$querybb);
  }
  // call addComment function when form post
  if(isset($_POST['submitDislikes'])){
    submitDislikes();
  }
