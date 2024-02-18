<?php
session_start();
require '../dashboard_includes/header.php'; ?>

<!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Richard</a>
        <a class="breadcrumb-item" href="index.html">Pages</a>
        <span class="breadcrumb-item active">Blank Page</span>
      </nav>

      <div class="sl-pagebody">
      	<div class="container">
      		<div class="col-md-10 m-auto">
      			<div class="card">
		      		<div class="card-header">
		      			<h2>Add Post</h2>
		      		</div>
		      		<div class="card-body">
		      			<form action="post_blog.php" method="POST" enctype="multipart/form-data">
									<div class="mb-3">
									    <label for="title" class="form-label">Title</label>
									    <input name="title" type="text" class="form-control" id="title">
									</div>
									<div class="mb-3">
									    <label for="des" class="form-label">Description</label>
									    <textarea name="des" class="form-control" id="des" rows="6"></textarea>
									</div>
									<div class="mb-3">
										<label for="img" class="form-label">Blog Image</label>
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

								  <button type="submit" class="btn btn-primary">Add</button>
								</form>
		      		</div>
		      	</div>
      		</div>
      	</div>
      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

<?php require '../dashboard_includes/footer.php'; ?>

<?php if(isset($_SESSION['success'])){ ?>
<script type="text/javascript">
	Swal.fire(
	  'Congratulations!',
	  '<?= $_SESSION['success']; ?>',
	  'success'
	)
</script>
<?php } unset($_SESSION['success']); ?>