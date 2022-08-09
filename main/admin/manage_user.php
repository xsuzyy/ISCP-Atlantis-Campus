<?php
include('admin_header.php');
include('admin_navbar.php');
?>

<h1 class="page-header text-center" style="margin-bottom: 20px; font-size: 4.0em;">User</h1>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="card-body">
  <!-- Content here -->
            <div class="row">
                <div class="col-md-12">
                        <a href="#add_user" data-toggle="modal" style="" class="pull-right btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add User</a>
                        <?php include('add_user.php'); ?>
                    </div>
                </div>

                    <div class="table-responsive">
                        <div style="margin-top:10px;">
                            <table id="table" class="table table-striped table-bordered" style="font-family: Century Gothic; font-size: 1.0em; width: 100%;"  >
                                <thead>
                                    <th>Name</th>
                                    <th>Role Description</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql="SELECT * from poso_user
                                          left join poso_roles on poso_roles.role_code=poso_user.user_role
                                          Where user_role != 'ADM'
                                          order by user_id desc";
                                    $query=$conn->query($sql);
                                    while($row=$query->fetch_array()){
                                        ?>
                                        <tr>
                                        <td><?php echo $row['user_fname']; " "?> <?php echo $row['user_lname'];?></td>
                                        <td><?php echo $row['role_desc']; ?></td>
                                        <td>                       
                                                <a href="#edit_user<?php echo $row['user_id']; ?>" data-toggle="modal" class="btn btn-success" style="width:80px;"><span class="glyphicon glyphicon-pencil"  ></span> Edit</a>
                                                <a href="#delete_user<?php echo $row['user_id']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                                           
                                                <?php include('user_modal.php'); ?>
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
