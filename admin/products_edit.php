<?php
include 'security.php';
include 'includes/db_admin.php';
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/user_bar.php'; 
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Product</h6>
  </div>

  <div class="card-body">
<?php 

	if (isset($_POST['edit_product_btn'])) {
		$id = $_POST['edit_id'];
		$query = $link->query("SELECT * FROM products WHERE id = '$id'");
        $row = $query->fetch_all(MYSQLI_ASSOC);
        foreach ($row as $key) {
        	$id = $key['id'];
          $category_id = $key['category_id'];
          $description = $key['description'];
          $price = $key['price'];
        	$name = $key['name'];
        	$image = $key['image'];	
        }
	}

 ?>
  <div class="col-3">
    	<form action="actions.php" method="post" enctype="multipart/form-data">
      	<input type="hidden" name="update_id" value="<?php echo $id;?>">
        <?php 

          $query = $link->query("SELECT * FROM categories");
          $row_cat = $query->fetch_all(MYSQLI_ASSOC);

         ?>
          <div class="form-group">
            <label>Name product category</label>
            <select name="category_id" class="form-control" required>
            <?php foreach ($row_cat as $key): ?>
             <option value="<?php echo $key['id']; ?>"><?php echo $key['name']; ?></option>
             <?php endforeach; ?>    
            </select>
          </div>
          <div class="form-group">
            <label>Name product</label>
            <input type="text" name="name" class="form-control" required value="<?php echo $name;?>">
          </div>
          <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="4"><?php echo $description;?></textarea>
          </div>
          <div class="form-group">
            <label>Price</label>
            <input type="text" name="price" class="form-control" value="<?php echo $price;?>">
          </div>
          <div class="form-group">
              <div class="custom-file">
              <input name="image" type="file" class="custom-file-input">
              <label class="custom-file-label">Choose file</label>
              </div>
          </div>
           <div class="form-group">
          <input type="hidden" name="oldimage" value="<?php echo $image;?>">
          <img class="img-fluid" src="<?php echo $image;?>" alt="">
        </div>
             <div class="form-group">
                <a class="btn btn-danger" href="products.php">Cancel</a>
                <button name="update_btn_product" class="btn btn-info" type="submit">Update</button>
            </div>
          </form>
  </div>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

 <?php 
include 'includes/scripts.php';
include 'includes/footer.php';
  ?>