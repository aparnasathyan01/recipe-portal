<div class="modal fade" id="signUp" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" required>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" required>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password" required>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="password2" placeholder="Re-enter your password" name="password2" required>
          </div>

          <!-- <div class="checkbox">
          <label><input type="checkbox" name="autoLogin">Login after register?</label>
        </div> -->
          <button type="reset" name="resetsignUp" class="btn btn-primary">Reset</button>
          <button type="submit" name="signUp" class="btn btn-primary">Sign Up</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
// error variable to count errors
$error = 0;
//  Function NewUser to add user to database
function NewUser()
{
  // get connection database form config.php
  require "server-side/config.php";
  //  get infromation from post
  $name = $_POST['name'];
  $email = $_POST['email'];
  // hash password with md5
  $password =  md5($_POST['password']);
  $insertUser = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')";
  $data = mysqli_query($connect, $insertUser);
  // check if user is inserted in database
  if ($data) {
    header('Location: index.php?error=none');
  }
}
// function checkUser to check post information
function checkUser()
{
  // get connection database form config.php
  require "server-side/config.php";
  // check if password fields match
  if (($_POST['password']) !== ($_POST['password2'])) {
    $GLOBALS['error']++;
    echo '<div class="col-sm-10 col-lg-4 col-lg-offset-4  col-sm-offset-1">
              <div class="alert alert-danger">
                Password doesnt match.
              </div>
            </div>';
  }
  // check if password field less than 8 character
  if (strlen($_POST['password']) < 7) {
    $GLOBALS['error']++;
    echo '<div class="col-sm-10 col-lg-4 col-lg-offset-4  col-sm-offset-1">
              <div class="alert alert-danger">
                Passowrd must be at least 8 characters.
              </div>
            </div>';
  }
  // check if email not empty in post
  if (!empty($_POST['email'])) {
    $GLOBALS['id'] = mysqli_query($connect, "SELECT id FROM users WHERE email = '$_POST[email]'");
    // check if email already in database
    if (!$row = mysqli_fetch_array($GLOBALS['id'])) {
      if ($GLOBALS['error'] === 0) {
        NewUser();
      }
    } else {
      echo '<div class="col-sm-10 col-lg-4 col-lg-offset-4  col-sm-offset-1">
                <div class="alert alert-danger">
                  This email already registered.
                </div>
              </div>';
    }
  }
}
// call checkUser function if got signUp post
if (isset($_POST['signUp'])) {
  checkUser();
}
?>