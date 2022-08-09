<div class="modal fade" id="add_role" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <center><h4 class="modal-title" id="myModalLabel" style="margin-left: 160px;">Add New Role</h4></center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="role_proc.php" enctype="multipart/form-data">
                    <div class="form-group" style="margin-top:10px;">

                        <div class="row">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Role Code" aria-label="Username" aria-describedby="addon-wrapping" name="role_code">
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Role Description" aria-label="Username" aria-describedby="addon-wrapping" name="role_desc">
                            </div>
                        </div>

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
