<?php
include('admin_header.php');
include('admin_navbar.php');
?>

<h1 class="page-header text-center" style="margin-bottom: 20px; font-size: 4.0em;">Role</h1>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="card-body">
  <!-- Content here -->
            <div class="row">
                <div class="col-md-12">
                        <a href="#add_role" data-toggle="modal" style="" class="pull-right btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add Role</a>
                        <?php include('add_role.php'); ?>
                    </div>
                </div>

                    <div class="table-responsive">
                        <div style="margin-top:10px;">
                            <table id="table" class="table table-striped table-bordered" style="font-family: Century Gothic; font-size: 1.0em; width: 100%;"  >
                                <thead>
                                    <th>Role Code</th>
                                    <th>Role Description</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql="SELECT * from poso_roles";
                                    $query=$conn->query($sql);
                                    while($row=$query->fetch_array()){
                                        ?>
                                        <tr>
                                        <td><?php echo $row['role_code']; ?></td>
                                        <td><?php echo $row['role_desc']; ?></td>
                                        <td>                       
                                                <a href="#edit_role<?php echo $row['role_id']; ?>" data-toggle="modal" class="btn btn-success" style="width:80px;"><span class="glyphicon glyphicon-pencil"  ></span> Edit</a>
                                                <a href="#delete_role<?php echo $row['role_id']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                                            <?php include('role_modal.php'); ?>
                                        </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
        </div>
    </div>
</div>



<script type="text/javascript">
$(document).ready(function () {
    $('#table').DataTable();
});
</script>
<?php
include('admin_scripts.php');
include('../footer.php');
?>
