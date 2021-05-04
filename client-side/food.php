<?php
  require 'navbar.php';
  require 'header.php';
  // get conneciton database form config.php
  require '../server-side/config.php';
  require 'addFood.php';
  // set default rows (to get only 9 post )
  $startRow=0;
  $endtRow=9;
  // check (show) parameter to display another items(9 post)
  if (isset($_GET['show'])) {
    $startRow=($_GET['show']-1)*9;
    $endtRow=($_GET['show']*9);
  }
  // get post sorted by date
  $getPosts = mysqli_query($connect,"SELECT * FROM recipes  ORDER BY date DESC limit $startRow,$endtRow");
  echo '<title>Recipes</title>
  <div class="container">
    <center>
    <div class="row allRecipes">';
    // check if post has image, if not then set default image
    while($post = mysqli_fetch_array($getPosts)){
      if(!$post['image']){
        $post['image']='defaultImage.jpg';
      }
      // each post in Recipes page
      echo '<div class="col-lg-4 col-sm-10 col-xs-10 image">
              <div class="post containerDiv">
                <p class="head">'.$post['name'].'</p><br>
                <img src="uploads/'.$post['image'].'" ><br>
                <div class="overlay">
                  <div class="text">Date:'.$post['date'].'<p><br>By:'.$post['author'].'</p>
                    <a class="post-btn" href="showMore.php?food='.$post['id'].'">Show more</a>
                  </div>
                </div>
              </div>
            </div>';
    }
    // pagination
    echo'</div>
      <ul class="pagination">
      <li ><a href="?show=1">1</a></li>';
      // get count of items to set pagination number
      $countRow=mysqli_query($connect,"SELECT COUNT(id) FROM recipes");
      $count = mysqli_fetch_array($countRow);
      $pageNum=1;
      $row=0;
      for ($i=0;$i<=$count['0']-1;$i++) {
        $row++;
        if($row===9){
          $row=0;
          $pageNum++;
          // to set pagination
          echo '<li><a href="?show='.$pageNum.'">'.$pageNum.'</a></li>';
        }
      }
  // close tag for end page
  echo '</ul>
        </center>
        </div>';
 ?>
