<?php
include 'security.php';
include 'includes/db_admin.php';
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/user_bar.php'; 
?>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="actions.php" method="post" >

        <div class="modal-body">

            <div class="form-group">
                <label> Username </label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
            </div>
            <input type="hidden" name="usertype" value="admin">
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="register_btn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-secondary">Admin Profile 
            <button type="button" class="ml-2 btn btn-secondary btn-sm" data-toggle="modal" data-target="#addadminprofile">
              Add Admin Profile 
            </button>
    </h6>
  </div>

  <div class="card-body">

    <?php if(isset($_SESSION['success']) && $_SESSION['success']!=""): ?>
      <h2 class="text-success"><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></h2>
    <?php elseif(isset($_SESSION['status']) && $_SESSION['status']!=""): ?>
      <h2 class="text-danger"><?php echo $_SESSION['status']; unset($_SESSION['status']); ?></h2>
    <?php  endif;?>

    <div class="table-responsive">
      <?php 
        $query = $link->query("SELECT * FROM admins");
        $row = $query->fetch_all(MYSQLI_ASSOC);
       ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
             <th>UserType</th>
            <th>Edit</th>
            <th>Delete </th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($row as $key):?>
          <tr>
            <td><?php echo $key['id']; ?></td>
            <td><?php echo $key['username']; ?></td>
            <td><?php echo $key['password']; ?></td>
            <td><?php echo $key['usertype']; ?></td>
            <td>
                <form action="register_edit.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $key['id'];?>">
                    <button  type="submit" name="edit_btn" class="btn btn-dark btn-sm">Edit</button>
                </form>
            </td>
            <td>
                <form action="actions.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $key['id'];?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->


 <?php 
include 'includes/scripts.php';
include 'includes/footer.php';
  ?>

