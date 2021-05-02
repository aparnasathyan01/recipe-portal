<title>Login</title>
<div class="container loginForm  background-container col-sm-10 col-lg-4 col-lg-offset-4  col-sm-offset-1">
  <h2>Login</h2>
  <form action="" method="POST">
    <div class="form-group loginInput">
      <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" required>
    </div>
    <div class="form-group loginInput">
      <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password" required>
    </div>
    <button type="submit" name="login" class="btn btn-primary">LOGIN</button>
  </form>
  <label class="notReg">Not registered? </label><a href="" data-toggle="modal" data-target="#signUp"> Create account</a>
</div>
<br>
<?php
// check if user is logedin
  if(isset($_SESSION['Logedin'])){
    $Logedin=$_SESSION['Logedin'];
    if($Logedin===1){
      header('Location: client-side/food.php');
    }
  }else{
    $Logedin=0;
  }
  //  Login function
  function Login(){
    // get conneciton database form config.php
    require "server-side/config.php";
    $email = $_POST['email'];
    $password =  md5($_POST['password']);
    // check user email and password match
    $checkUser = mysqli_query($connect,"SELECT * FROM users WHERE email = '$_POST[email]' AND password='$password'");
    $count = mysqli_num_rows($checkUser);
    // check if got no data from database
    if ($count == 0) {
	     echo '<div class="col-sm-10 col-lg-4 col-lg-offset-4  col-sm-offset-1">
              <div class="alert alert-danger">
                Wrong email or password
              </div>
            </div>';
     } else {
    // if user and password correct
    while($data = mysqli_fetch_array($checkUser)){
      // set sessions
      $_SESSION['user'] = $data['id'];
      $_SESSION['name'] = $data['name'];
      $_SESSION['Logedin']=1;
      header('Location: client-side/food.php');
      }
    }
  }
  function check(){
    // get conneciton database form config.php
    require "server-side/config.php";
    //  check if email is defined in database
    $checkEmail = mysqli_query($connect,"SELECT * FROM users WHERE email = '$_POST[email]'");
    if($row = mysqli_fetch_array($checkEmail)){
      Login();
    }else{
      echo '<div class="col-sm-10 col-lg-4 col-lg-offset-4  col-sm-offset-1">
              <div class="alert alert-danger">
                This email is not registered.
              </div>
            </div>';
    }
  }
  // call check function when post form (login)
  if(isset($_POST['login'])){
    check();
  }
 ?>
