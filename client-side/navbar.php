<!DOCTYPE html>
<html>

<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<body>
	<!-- script for search recipes in navbar -->
	<script>
		$(document).ready(function() {
			$("#search").on("keyup", function() {
				var value = $(this).val().toLowerCase();
				$(".allRecipes div").filter(function() {
					$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
				});
			});
		});
	</script>
	<nav class="navbar navbar-dark bg-dark" style="background-color: rgb(41, 41, 41); margin-bottom: 0px;">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="food.php">ReadyToCook</a>
			</div>
			<?php
			session_start();
			// check if user is logedin
			if (isset($_SESSION['Logedin'])) {
				if ($_SESSION['Logedin'] === 1) {
				}
			} else {
				$_SESSION['Logedin'] = 0;
			}
			// Logout function
			function Logout()
			{
				session_start();
				// Destroy user session
				session_unset();
				session_destroy();
				header('Location: ../index.php');
			}
			// check if parameter Logout defined by click logout in navbar - then go to Logout function
			if (isset($_GET['Logout'])) {
				Logout();
			}
			// check if Logedin session is defined
			// Logedin here is used to show recipes search , add recipe and logout

			if ($_SESSION['Logedin'] === 1) {
				// header('Location: ../');

				// check food parameter is set to show add recipe and search feature - not show when open post information
				if (!(isset($_GET['food']) || isset($_GET['user']))) {
					echo '     
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <form class="form-inline my-2 my-lg-0" action="searchRecipe.php" method="POST">
          <input type="text" name="search" class="form-control mr-sm-2" placeholder="Search">
          <input type="submit" class="btn btn-light my-2 my-sm-0" style="color: black;" value="Search" id="search">
        </form>
        </ul>
        <ul class="nav justify-content-end">

        <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#addFood" >Add recipe</a>
        </li></ul>';
				}
				echo '<ul class="nav justify-content-end"><li class="nav-item"><a class="nav-link" href="profile.php?user=' . $_SESSION['name'] . '">' . $_SESSION['name'] . '</a>
        <li class="nav-item"><a class="nav-link" href="navbar.php?Logout=true"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>';
			}
			?>
		</div>
	</nav>
</body>

</html>