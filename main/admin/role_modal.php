<div class="modal fade" id="edit_role<?php echo $row['role_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <center><h4 class="modal-title" id="myModalLabel" style="margin-left: 160px;">Edit Role</h4></center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="role_proc.php?role_id=<?php echo $row['role_id']; ?>" enctype="multipart/form-data">
                    <div class="form-group" style="margin-top:10px;">

                        <div class="row">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Role Code" aria-label="Username" aria-describedby="addon-wrapping" name="role_code" value="<?php echo $row['role_code']; ?>">
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Role Description" aria-label="Username" aria-describedby="addon-wrapping" name="role_desc" value="<?php echo $row['role_desc']; ?>">
                            </div>
                        </div>

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

<div class="modal fade" id="delete_role<?php echo $row['role_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <center><h4 class="modal-title" id="myModalLabel"style="margin-left:160px;">Delete Role</h4></center>
            </div>

            <form method="POST" action="role_proc.php?role_id=<?php echo $row['role_id']; ?>" enctype="multipart/form-data">

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