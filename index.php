<?php
include_once('inc/conn.php');
?>
<?php
if(isset($_POST['submit'])){
    //declaring variables and assign empty values
    $email = "";
    $password = "";
    $msg = "";

    //catch input data
    $email = input_validate($_POST['email']);
    $password = input_validate($_POST['password']);


    //INSERT Values into database
    $query1 = "SELECT * FROM tbl_user WHERE email = '{$email}' AND pwd ='{$password}' LIMIT 1";
    $showResult = mysqli_query($conn, $query1);



    if($showResult){
      if (mysqli_num_rows($showResult) == 1) {
        // header("Location: Pages/Home/index.php");
        
      header("Refresh:2; url=Pages/Home/index.php");
      $msg = "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
      <strong>User Login Success! </strong> User Redirect to the Home Page.
    </div>";


      
      }
      else{
        $msg = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Please check your email or password! </strong> Enter correct credentials.
      </div>";
      }
     
        
    }

}

function input_validate($data){

    //remove unwanted spaces
    $data = trim($data);
    //remove backslashes
    $data = stripcslashes($data);
    //convert special chars to html entities
    $data = htmlspecialchars($data);

    return $data;

}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Page Title</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="css/AuthStyles/SignInPage/SignIn.css" />

  </head>
  <body>
    <div class="container">
      <form action="index.php" method="POST">
      <?php if(!empty($msg)){echo $msg;}?>
    
        <h2>Sign In</h2>
        <div class="form-group">
          <label >Email</label>
           <input type="text" class="form-control" name="email" required>
        </div>
        <div class="form-group">
          <label >Password</label>
          <input type="password" class="form-control" name="password" required>
        </div>
        <!-- <input type="submit" name="submit" class="submit_button" value="Login"> -->
        <div class="sub-btn" >
        <button type="submit" name="submit" class="btn btn-secondary">Login</button>
        </div>
        <div class="signup_link">
          Don't have an account? 
        <a href="Pages/Auth/SignUp/signup.php">Sign Up</a>
        </div>
      </form>
    </div>
  </body>
</html>
