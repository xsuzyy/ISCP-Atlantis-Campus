<div class="modal fade" id="edit_user<?php echo $row['user_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <center><h4 class="modal-title" id="myModalLabel" style="margin-left:340px;">Edit User</h4></center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="" enctype="multipart/form-data">
                    <div class="form-group" style="margin-top:10px;">

                        <div class="input-group mb-3" >
                            <span class="input-group-text">Name</span>
                            <input type="text" aria-label="First name" placeholder="First Name" class="form-control" name="user_fname" value="<?php echo $row['user_fname']; ?>" required>
                            <input type="text" aria-label="Last name" placeholder="Last Name" class="form-control" name="user_lname" value="<?php echo $row['user_lname']; ?>" required>
                        </div>

                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Role</label>
                                <select class="form-select" id="inputGroupSelect01" style="width:91%;" name="user_role"> 
                                <option value="<?php echo $row['role_code']; ?>"><?php echo $row['role_desc']; ?></option>
                                    <?php
                                        $sql="SELECT * from poso_roles where role_code != 'ADM' AND role_code != '".$row['role_code']."'";
                                         $aquery=$conn->query($sql);
                                         while($arow=$aquery->fetch_array()){
                                          ?>
                                           <option value="<?php echo $arow['role_code']; ?>"><?php echo $arow['role_desc']; ?></option>
                                       <?php
                                           }
                                      ?>
                                </select>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" name="username" value="<?php echo $row['user_username']; ?>" required>
                        </div>



                        <div class="input-group mb-3">
                            <input type="password" id="id_password1" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping" name="password1"  required>
                            <span class="input-group-text" id="addon-wrapping"><i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle1()" > </i></span>
                        </div>

                        <div class="input-group mb-3">
                            <input type="password" id="id_password2" class="form-control" placeholder="Confirm Password" aria-label="Password" aria-describedby="addon-wrapping" name="password2" required>
                            <span class="input-group-text" id="addon-wrapping"><i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle2()" > </i></span>
                            
                        </div>

                        <script>
                        function toggle1(){
                            var x = document.getElementById("id_password1");
                            if (x.type === "password") {
                                x.type = "text";
                            } else {
                                x.type = "password";
                            }
                        }

                        function toggle2(){
                            var x = document.getElementById("id_password2");
                            if (x.type === "password") {
                                x.type = "text";
                            } else {
                                x.type = "password";
                            }
                        }   
                
                    </script>
                    
                    </div>

                </div>
			</div>
            <div class="modal-footer">
                <button type="submit" name="update" class="btn btn-info" style="float:left;"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" style="float:right;"><span class="glyphicon glyphicon-remove"></span> Close</button>
                </form>
            </div>
        </div>

    </div>

</div>


<div class="modal fade" id="delete_user<?php echo $row['user_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <center><h4 class="modal-title" id="myModalLabel"style="margin-left:160px;">Delete User</h4></center>
            </div>

            <form method="POST" action="user_proc.php?user_id=<?php echo $row['user_id']; ?>" enctype="multipart/form-data">

                <div class="modal-body">
                    <h3 class="text-center">Are you Sure?</h3>
                </div>

            <div class="modal-footer">
                <button type="submit" name="delete" class="btn btn-danger" style="float:left;"><span class="glyphicon glyphicon-floppy-disk"></span>Delete</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal" style="float:right;"><span class="glyphicon glyphicon-remove"></span> No</button>
                </form>
            </div> 

        </div>

    </div>

</div>