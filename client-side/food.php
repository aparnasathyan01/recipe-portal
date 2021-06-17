<?php
require 'navbar.php';
require 'header.php';
// get connection from  config.php
require '../server-side/config.php';
require 'addFood.php';

// set default rows (to get only 9 post )
$startRow = 0;
$endtRow = 9;

// check (show) parameter to display items(9 post)
if (isset($_GET['show'])) {
	$startRow = ($_GET['show'] - 1) * 9;
	$endtRow = ($_GET['show'] * 9);
}

// get recipes sorted by date
$getPosts = mysqli_query($connect, "SELECT * FROM recipes  ORDER BY date DESC limit $startRow,$endtRow");
echo '<html>
  <title>Recipes</title>
  <body>
  <div id="page-container">
  <div class="container">
    <center>
    <div class="row allRecipes">';

// check if the post has an image, if not then set default image
while ($post = mysqli_fetch_array($getPosts)) {
	if (!$post['image']) {
		$post['image'] = 'defaultImage.jpg';
	}
	// each post in Recipes page
	echo '<div class="col-lg-4 col-sm-10 col-xs-10 image">
              <div class="post containerDiv">
                <p class="head">' . $post['name'] . '</p><br>
                <img src="uploads/' . $post['image'] . '" ><br>
                <div class="overlay">
                  <div class="text">Date: ' . $post['date'] . '<p><br>By: ' . $post['author'] . '</p>
                    <a class="post-btn" href="showMore.php?food=' . $post['id'] . '">Show more</a>
                  </div>
                </div>
              </div>
            </div>';
}

// pagination
// get count of items to set pagination number
$countRow = mysqli_query($connect, "SELECT COUNT(id) FROM recipes");
$count = mysqli_fetch_array($countRow);
$pageNum = 1;
$row = 0;
for ($i = 0; $i <= $count['0'] - 1; $i++) {
	$row++;
	if ($row === 10) {
		$row = 0;
		$pageNum++;
		echo '<div style="margin-top: 20px; margin-left: 46%;"> <ul class="pagination">
        <li class="page-item"><a class="page-link" href="?show=1">1</a></li>';
		// to set pagination
		echo '<li class="page-item"><a class="page-link" href="?show=' . $pageNum . '">' . $pageNum . '</a></li></ul></div>';
	}
}

// footer
echo '</ul>
        </center>
        </div>
        <br/><br/>
        <!-- Footer -->
        <div class="footer" style="margin-top: 20px;">
          <p>© 2021 Copyright: AICA</p>
        </div>
        </div>
        </body>
        </html>
        <!-- Footer -->';
