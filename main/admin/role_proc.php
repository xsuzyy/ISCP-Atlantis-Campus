<?php
include('../../config.php');
include('admin_scripts.php');

    if(isset($_POST['add'])){
    $role_code=$_POST['role_code'];
    $role_desc=$_POST['role_desc'];

    $sql="INSERT into poso_roles (role_code,role_desc) values ('$role_code','$role_desc')";
    $query_run = mysqli_query($conn, $sql);
    if ($query_run) {

      echo '<script type="text/javascript">

          jQuery(function validation(){

            Swal.fire({
                title: "Data Added",
                icon: "success",
                showConfirmButton: false,
                timer: 1000
              });
          });

           </script>';
           header('refresh:1; manage_role.php');


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
                       header('refresh:1; manage_role.php');
    }
}

if(isset($_POST['update'])){
  $role_id=$_GET['role_id'];
  $role_code=$_POST['role_code'];
  $role_desc=$_POST['role_desc'];

	$sql="UPDATE poso_roles set role_code ='$role_code', role_desc='$role_desc' where role_id='$role_id'";
	$query_run = mysqli_query($conn, $sql);
    if ($query_run) {
			echo '<script type="text/javascript">

          jQuery(function validation(){

            Swal.fire({
                title: "Update Successfully",
                icon: "success",
                showConfirmButton: false,
                timer: 1000
              });
          });

           </script>';
           header('refresh:1; manage_role.php');
	}else {
    echo '<script type="text/javascript">

                    jQuery(function validation(){

                      swal({
                          title: "Error!",
                          icon: "error",
                        });
                    });

                     </script>';
                     header('refresh:1; manage_role.php');
  }
}

if(isset($_POST['delete'])){
  $role_id = $_GET['role_id'];
  $sql="DELETE from poso_roles where role_id = '$role_id'";
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
         header('refresh:1; manage_role.php');
}else {
  echo '<script type="text/javascript">

                  jQuery(function validation(){

                    swal({
                        title: "Error!",
                        icon: "error",
                      });
                  });

                   </script>';
                   header('refresh:1; manage_role.php');
}
}
?>
