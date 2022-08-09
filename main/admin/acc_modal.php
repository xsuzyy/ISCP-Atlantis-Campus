<div class="modal fade" id="delete_acc<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <center><h4 class="modal-title" id="myModalLabel"style="margin-left:140px;">Delete Account</h4></center>
            </div>
            <div class="modal-body">
                <h3 class="text-center">Are you Sure?</h3>
            </div>
            <div class="modal-footer">
              <a href="delete_acc.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" style="float:left;"><span class="glyphicon glyphicon-trash"></span> Yes</a>
                <button type="button" class="btn btn-warning" data-dismiss="modal" style="float:right;"><span class="glyphicon glyphicon-remove"></span> No</button>
                </form>
            </div>
        </div>

    </div>

</div>


<div class="modal fade" id="edit_acc<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <center><h4 class="modal-title" id="myModalLabel" style="margin-left:330px;">Edit Account</h4></center>
            </div>

            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="edit_acc.php?id=<?php echo $row['id']; ?>" enctype="multipart/form-data">

                    <div class="form-group" style="margin-top:10px;">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Name :</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="<?php echo $row['name']; ?>" name="name" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group" style="margin-top:10px;">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">User Type :</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="<?php echo $row['name']; ?>" name="name" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Username :</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="<?php echo $row['username']; ?>" name="username" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Old Password :</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="<?php echo $row['password']; ?>" name="oldpass" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">New Password :</label>
                            </div>
                            <div class="col-md-9">
                                <input type="password" class="form-control" id="new_pass1"  name="newpass1" required>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Confirm Password :</label>
                            </div>
                            <div class="col-md-9">
                                <input type="password" class="form-control"id="new_pass2"  name="newpass2" required>

                            </div>
                        </div>
                    </div>


                </div>
			</div>

            <div class="modal-footer">
              <button type="submit" class="btn btn-info" style="float: left;"><span class="glyphicon glyphicon-edit"></span> Update</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                </form>
            </div>
        </div>

    </div>

</div>