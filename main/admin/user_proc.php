<?php
include('../../config.php');
include('admin_scripts.php');

if(isset($_POST['update'])){
    $user_id=$_GET['user_id'];
    $user_fname=$_POST['user_fname'];
    $user_lname=$_POST['user_lname'];
    $user_role=$_POST['user_role'];
    $user_username=$_POST['username'];
    $password1=$_POST['password1'];
    $password2=$_POST['password2'];
    $userFname=strtoupper($user_fname);
    $userLname=strtoupper($user_lname);
  
    $query = mysqli_query($conn, "SELECT * FROM poso_user WHERE user_fname ='$user_fname' AND user_lname ='$user_lname'");
    $count = mysqli_num_rows($query);
    // check username whether exists.
    if($count == 1){
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Username already exist, Please try another username')
        </SCRIPT>");

    }else{
        if(strlen($password1) <= 8){
            echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Password must be more than 8 characters')
                </SCRIPT>");

        }
        else {
            if($password1 != $password2){
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Password dont match, Try again')
                </SCRIPT>");

            }
             else{
                $sql="INSERT into poso_user (user_fname,user_lname,user_role,user_username,user_password,user_created) 
                        values ('$userFname','$userLname','$user_role',' $user_username','$password2',CURRENT_TIMESTAMP)";
                $query_run = mysqli_query($conn, $sql);
                if ($query_run) {

                echo '<script type="text/javascript">

                    jQuery(function validation(){

                        Swal.fire({
                            title: "User Added",
                            icon: "success",
                            showConfirmButton: false,
                            timer: 1000
                        });
                    });

                    </script>';
   

                        }
                        else {
                echo '<script type="text/javascript">

                                jQuery(function validation(){

                                    swal({
                                        title: "Error!",
                                        icon: "error",
                                    });
                                });

                                </script>';
                             
                }
            }
    }
}
  }
  

  
if(isset($_POST['delete'])){
    $user_id = $_GET['user_id'];
    $sql="DELETE from poso_user where user_id = '$user_id'";
    $query_run = mysqli_query($conn, $sql);
    if ($query_run) {
      echo '<script type="text/javascript">
  
          jQuery(function validation(){
  
            Swal.fire({
                title: "Deleted Successfully",
                icon: "success",
                showConfirmButton: false,
                timer: 1000
              });
          });
  
           </script>';
           header('refresh:1; manage_user.php');
  }else {
    echo '<script type="text/javascript">
  
                    jQuery(function validation(){
  
                      swal({
                          title: "Error!",
                          icon: "error",
                        });
                    });
  
                     </script>';
                     header('refresh:1; manage_user.php');
  }
  }










?>
