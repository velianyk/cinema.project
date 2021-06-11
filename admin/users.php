<?php
include 'security.php';
include 'includes/db_admin.php';
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/user_bar.php'; 
?>
 <h2 class="text-center">ЗАРЕЄСТОВАНІ КОРИСТУВАЧІ</h2>

	
    <?php 

        $query = $link->query("SELECT * FROM users");
        $row = $query->fetch_all(MYSQLI_ASSOC);

     ?>
     
     <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">LOGIN</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">DELETE</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach($row as $key): ?>
    <tr>
      <td><?php echo $key['id']; ?></td>
      <td><?php echo $key['login']; ?></td>
      <td><?php echo $key['password']; ?></td>
      <td>
<form action="actions.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="delete_id" value="<?php echo $key['id'];?>">
<button type="submit" name="delete_user_btn_cat" class="btn btn-sm btn-danger">Delete</button>
</form>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>











 <?php 
include 'includes/scripts.php';
include 'includes/footer.php';
  ?>

