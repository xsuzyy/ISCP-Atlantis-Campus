<style>
    .eye2{
        position: absolute;
        right: 50px;
        bottom: 28px;
        cursor: pointer;
        transform: translate(0,-50%);
    }
    .eye1{
        position: absolute;
        right: 22px;
        bottom: -5px;
        cursor: pointer;
        transform: translate(0,-50%);
    }
</style>
<div class="modal fade" id="add_acc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <center><h4 class="modal-title" id="myModalLabel" style="margin-left:340px;">Add Account</h4></center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="add_acc_proc.php" enctype="multipart/form-data">
                    <div class="form-group" style="margin-top:10px;">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Name :</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Username :</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="username" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Password :</label>
                            </div>
                            <div class="col-md-9">
                                <input type="password" id="password1"  class="form-control" name="pass1" required>
                                <span class="eye1" ><i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle1()" > </i> </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Confirm Password :</label>
                            </div>
                            <div class="col-md-9">
                                <input type="password" id="password2" class="form-control" name="pass2" required>
                            </div>
                            <span class="eye2"><i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle2()" > </i> </span>
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
                <button type="submit" name="submit" class="btn btn-info" style="float:left;"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" style="float:right;"><span class="glyphicon glyphicon-remove"></span> Close</button>
                </form>
            </div>
        </div>
r
    </div>

</div>
