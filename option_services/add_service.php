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
      		<div class="col-md-10">
      			<div class="card">
		      		<div class="card-header">
		      			<h2>Add Service</h2>
		      		</div>
		      		<?php if(isset($_SESSION['success'])){ ?>
								<div class="alert alert-success mt-2">
									<?= $_SESSION['success']; ?>
								</div>
							<?php } unset($_SESSION['success']); ?>
		      		<div class="card-body">
		      			<form action="post_service.php" method="POST" enctype="multipart/form-data">
							<div class="mb-3">
							    <label for="heading" class="form-label">Title</label>
							    <input name="title" type="text" class="form-control" id="heading">
							</div>
							<div class="mb-3">
								<label for="description" class="form-label">Description</label>
								<textarea name="des" class="form-control" id="description" rows="5"></textarea>
							</div>
							<div class="mb-3">
								<label for="img" class="form-label">Service Icon</label>
								<input name="service_icon" type="text" class="form-control" id="img">
							</div>

						  <button type="submit" class="btn btn-primary">Publish</button>
						</form>
		      		</div>
		      	</div>
      		</div>
      	</div>
      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

<?php require '../dashboard_includes/footer.php'; ?>