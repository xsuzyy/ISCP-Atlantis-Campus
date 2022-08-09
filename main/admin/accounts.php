<?php
include('admin_header.php');
include('admin_navbar.php');
?>
<body>

<h1 class="page-header text-center" style="margin-bottom: 20px; font-size: 4.0em;">Accounts</h1>

<div class="row">
 <div class="col-md-12">
   <a href="#add_acc" data-toggle="modal" style="margin-left: 70px;" class="pull-right btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add Account</a>
   <?php include('add_acc.php'); ?>
 </div>

</div>
    <div class="table-responsive">
<div style="margin-top:10px;">
<table class="table table-striped table-bordered" style="font-family: Century Gothic; font-size: 1.0em; text-align: center; width: 100%;"  >
   <thead>
     <th>Name</th>
     <th>Date Created</th>
     <th>Action</th>
   </thead>
   <tbody>
     <?php
       $sql="select * from account where level='user1' || level='user2'  ";
       $query=$conn->query($sql);
       while($row=$query->fetch_array()){
           $status=$row['status'];


         ?>
         <tr>
           <td><?php echo $row['name']; ?></td>
           <td><?php echo $row['created']; ?></td>
           <td>     
                 
               
                <a href="#edit_acc<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-success" style="width:80px;"><span class="glyphicon glyphicon-pencil"  ></span> Edit</a>
                <a href="#delete_acc<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
             <?php include('acc_modal.php'); ?>
           </td>
           <td>
           </td>
         </tr>
         <?php
       }
     ?>
   </tbody>
 </table>
</div>
</div>
</body>
</html>
<?php
include('admin_scripts.php');
include('../footer.php');
?>
