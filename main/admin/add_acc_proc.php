<?php
include('../../config.php');
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $username=$_POST['username'];
    $password1=$_POST['pass1'];
    $password2=$_POST['pass2'];
    $user_level ="user";

    $query = mysqli_query($conn, "SELECT * FROM account WHERE username='$username'");
    $count = mysqli_num_rows($query);
    // check email whether exists.
    if($count != 0){
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
                $sql="INSERT into account (name, username, password, level,created) values ('$name','$username', '$password2' , '$user_level',CURRENT_TIMESTAMP)";
                $query_run = mysqli_query($conn, $sql);
                if ($query_run) {

                echo '<script type="text/javascript">

                    jQuery(function validation(){

                        Swal.fire({
                            title: "Account Added",
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
?>
