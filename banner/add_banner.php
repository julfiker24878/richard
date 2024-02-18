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
      		<div class="col-md-8">
      			<div class="card">
		      		<div class="card-header">
		      			<h2>Add Banner</h2>
		      		</div>
		      		<?php if(isset($_SESSION['success'])){ ?>
								<div class="alert alert-success mt-2">
									<?= $_SESSION['success']; ?>
								</div>
							<?php } unset($_SESSION['success']); ?>
		      		<div class="card-body">
		      			<form action="banner_post.php" method="POST" enctype="multipart/form-data">
							<div class="mb-3">
							    <label for="heading" class="form-label">Heading</label>
							    <input name="heading" type="text" class="form-control" id="heading">
							</div>
							<div class="mb-3">
								<label for="description" class="form-label">Description</label>
								<textarea name="description" class="form-control" id="description" rows="5"></textarea>
							</div>
							<div class="mb-3">
								<label for="btn" class="form-label">Button Text</label>
								<input name="btn_text" class="form-control" id="btn">
							</div>
							<div class="mb-3">
								<label for="img" class="form-label">Banner Image</label>
								<input name="banner_image" type="file" class="form-control" id="img">
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