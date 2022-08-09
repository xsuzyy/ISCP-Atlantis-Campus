<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   <title> ISCP | Login </title>
   <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script src="../vendor/jquery/jquery.min.js"></script>
     <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   </head>
   <body>
<?php
  include("../config.php");
  session_start();

  if(isset($_POST["login"]))
{
  $user = $_POST["username"];
  $pass = $_POST["password"];
  $query = "SELECT * FROM account WHERE   username='$user' AND password ='$pass' " ;
  $result1 = mysqli_query($conn,$query);
  if(mysqli_num_rows($result1) > 0)
  {
      while($row = mysqli_fetch_assoc($result1))
      {
         if($row["level"] == "head")
           {

             $_SESSION['id'] = $row['id'];
             $_SESSION['user'] = $user;
             $_SESSION['name'] = $row['name'];
             $_SESSION['level'] = "head";
             echo '<script type="text/javascript">

              jQuery(function validation(){

                Swal.fire({
                    title: "Login Succesfully!",
                    icon: "success",
                    showConfirmButton: false,
                    timer: 1000
                  });
              });

              </script>';
             header('Location: head_index.php');
            }
          else if($row["level"] == "admin")
            {
             $_SESSION['id'] = $row['id'];
             $_SESSION['user'] = $user;
             $_SESSION['level'] = "admin";
             echo '<script type="text/javascript">

              jQuery(function validation(){

                Swal.fire({
                    title: "Login Succesfully!",
                    icon: "success",
                    showConfirmButton: false,
                    timer: 1000
                  });
              });

              </script>';
             header('Location: admin_index.php');
          }
          else if($row["level"] == "user")
          {
            $_SESSION['id'] = $row['id'];
            $_SESSION['user'] = $user;
            $_SESSION['name'] = $row['name'];
            $_SESSION['level'] = "user";
            $activity = "login";
            $sql="INSERT into daily_logs (user,activity,date) values ('$user','$activity',CURRENT_TIMESTAMP)";
            $query_run = mysqli_query($conn, $sql);
            echo '<script type="text/javascript">

              jQuery(function validation(){

                Swal.fire({
                    title: "Login Succesfully!",
                    icon: "success",
                    showConfirmButton: false,
                    timer: 1000
                  });
              });

              </script>';
            header('Location: index.php');
          }
          else{
            echo '<script type="text/javascript">

            jQuery(function validation(){

              swal({
                  title: "Invalid Username or Password",
                  icon: "error",
                });
            });

            </script>';
          }
      }
  }
  else {
    echo '<script type="text/javascript">

      jQuery(function validation(){

        swal({
            title: "Invalid Username or Password",
            icon: "error",
          });
      });

       </script>';
}
}
?>
  <div class="container">
    <div class="content">
      <div class="left-side">
      	<div class="address details" >
          <a href="../backup/backuppanel.php">
            <img src="../images/logo.png" style="height: 200px; width: 200px; margin-top: 100px;" >
          </a>
        </div>
      </div>

      <div class="right-side">

        <div class="topic-text">Login</div>

      <form action="" method="post" enctype="multipart/form-data" >

        <div class="input-box">
          <input type="text" name="username" placeholder="Username" value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>"required>
        </div>

        <div class="input-box">
          <input type="password" name="password" placeholder="Password" required>
        </div>

        <div class="button">
          <input type="submit" name="login" id="login" value="Login" >
        </div>

      </form>


</body>

</html>
