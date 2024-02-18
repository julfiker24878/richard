<?php
session_start();
require '../session.php';
require '../db.php';
require '../dashboard_includes/header.php';
$id = $_GET['id']; 
$select = "SELECT * FROM blogs WHERE id=$id";
$select_result = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_result);
?>

<!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Richard</a>
        <a class="breadcrumb-item" href="index.html">Pages</a>
        <span class="breadcrumb-item active">Blank Page</span>
      </nav>

      <div class="sl-pagebody">
      	<div class="container">
      		<div class="col-md-12">
      			<div class="card">
		      		<div class="card-header">
		      			<h2>Edit Blog</h2>
		      		</div>
		      		<?php if(isset($_SESSION['success'])){ ?>
								<div class="alert alert-success mt-2">
									<?= $_SESSION['success']; ?>
								</div>
							<?php } unset($_SESSION['success']); ?>
		      		<div class="card-body">
		      			<form action="update_blog.php" method="POST" enctype="multipart/form-data">
									<div class="mb-3">
									    <label for="title" class="form-label">Title</label>
									    <input value="<?= $after_assoc['id']; ?>" name="id" type="hidden">
									    <input value="<?= $after_assoc['title']; ?>" name="title" type="text" class="form-control" id="title">
									</div>
									<div class="mb-3">
									    <label for="des" class="form-label">Description</label>
									    <textarea name="des" class="form-control" id="des" rows="10"><?= $after_assoc['des']; ?></textarea>
									</div>
									<div class="mb-3">
										<label for="img" class="form-label">Blog Image</label>
										<img src="uploaded/<?= $after_assoc['blog_image']; ?>" width="70" class="img-fluid mb-3">
										<input name="blog_image" type="file" class="form-control" id="img">
										<?php if(isset($_SESSION['invalid_extension'])){ ?>
											<div class="alert alert-warning mt-2">
												<?= $_SESSION['invalid_extension']; ?>
											</div>
										<?php } unset($_SESSION['invalid_extension']); ?>

										<?php if(isset($_SESSION['invalid_size'])){ ?>
											<div class="alert alert-warning mt-2">
												<?= $_SESSION['invalid_size']; ?>
											</div>
										<?php } unset($_SESSION['invalid_size']); ?>
									</div>

								  <button type="submit" class="btn btn-primary">Save Changes</button>
								</form>
		      		</div>
		      	</div>
      		</div>
      	</div>
      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

<?php require '../dashboard_includes/footer.php'; ?>