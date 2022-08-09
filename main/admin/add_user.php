<div class="modal fade" id="add_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <center><h4 class="modal-title" id="myModalLabel" style="margin-left:340px;">Add User</h4></center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="" enctype="multipart/form-data">
                    <div class="form-group" style="margin-top:10px;">

                        <div class="input-group mb-3" >
                            <span class="input-group-text">Name</span>
                            <input type="text" aria-label="First name" placeholder="First Name" class="form-control" name="user_fname" required>
                            <input type="text" aria-label="Last name" placeholder="Last Name" class="form-control" name="user_lname" required>
                        </div>

                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Role</label>
                                <select class="form-select" id="inputGroupSelect01" style="width:92%;" name="user_role"> 
                                    <option selected>Option</option>
                                    <?php
                                        $sql="SELECT * from poso_roles where role_code !='ADM' order by role_id asc";
                                         $query=$conn->query($sql);
                                         while($row=$query->fetch_array()){
                                          ?>
                                           <option value="<?php echo $row['role_code']; ?>"><?php echo $row['role_desc']; ?></option>
                                       <?php
                                           }
                                      ?>
                                </select>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" name="username" required>
                        </div>

                        <div class="input-group mb-3">
                            <input type="password" id="password1" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping" name="password1" required>
                            <span class="input-group-text" id="addon-wrapping"><i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle1()" > </i></span>
                        </div>

                        <div class="input-group mb-3">
                            <input type="password" id="password2" class="form-control" placeholder="Confirm Password" aria-label="Password" aria-describedby="addon-wrapping" name="password2" required>
                            <span class="input-group-text" id="addon-wrapping"><i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle2()" > </i></span>
                            
                        </div>

                        <script>
                        var state = false;
                        function toggle1(){
                            if(state){
                                document.getElementById("password1").setAttribute("type","password");
                                state = false;
                            }
                            else{
                                document.getElementById("password1").setAttribute("type","pass1");
                                state = true;
                            }
                        }

         	
                    </script>
                     <script>
                        var state = false;
                        function toggle2(){
                            if(state){
                                document.getElementById("password2").setAttribute("type","password");
                                state = false;
                            }
                            else{
                                document.getElementById("password2").setAttribute("type","pass2");
                                state = true;
                            }
                        }   
                        </script>
                    </div>

                </div>
			</div>
            <div class="modal-footer">
                <button type="submit" name="add" class="btn btn-info" style="float:left;"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" style="float:right;"><span class="glyphicon glyphicon-remove"></span> Close</button>
                </form>
            </div>
        </div>

    </div>

</div>

<?php
include('../../config.php');
include('admin_scripts.php');

if(isset($_POST['add'])){
    $user_fname=$_POST['user_fname'];
    $user_lname=$_POST['user_lname'];
    $user_role=$_POST['user_role'];
    $user_username=$_POST['username'];
    $password1=$_POST['password1'];
    $password2=$_POST['password2'];
    $userFname=strtoupper($user_fname);
    $userLname=strtoupper($user_lname);

    $query = mysqli_query($conn, "SELECT * FROM poso_user WHERE user_fname ='$user_fname' AND user_lname ='$user_lname' ");
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












?>
