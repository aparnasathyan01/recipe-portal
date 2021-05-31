<?php
$id= $_GET['food'];
$getPostInfo = mysqli_query($connect,"SELECT * FROM recipes WHERE id='$id'");
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
          <input type="text" class="form-control" id="dishName" placeholder="Dish name" name="dishName" value="'.$postInfo['name'].'" required>
        </div>
        <div class="form-group">
          <textarea id="subject" class="form-control" name="ingredientsUpdate" placeholder="Ingredients required" style="height:100px" required>'.$postInfo['ingredients'].'</textarea>
        </div>
        <div class="form-group">
          <textarea id="subject" class="form-control" name="descriptionUpdate" placeholder="Enter recipe!" style="height:200px" required>'.$postInfo['description'].'</textarea>
        </div>
        <button type="submit" name="updateRecipe" class="btn" style="background-color: #422929; color: white;">Update</button>
      </form>
      </div>
    </div>
  </div>
</div>';

  if(isset($_POST['updateRecipe'])){
    updateRecipe();
  }

  function updateRecipe(){
    require "../server-side/config.php";
    $id= $_GET['food'];
    // echo("Error description: 1" . mysqli_error($connect));
    $newDish = $_POST['dishName'];
    $newIngredients = $_POST['ingredientsUpdate'];
    $newRecipe = $_POST['descriptionUpdate'];
    $querybb = "UPDATE recipes SET name='$newDish', ingredients = '$newIngredients', description = '$newRecipe' WHERE id='$id'";
    $updateRecipe = mysqli_query($connect, $querybb);
  }

?>
