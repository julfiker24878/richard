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
		      			<h2>Add Project</h2>
		      		</div>
		      		<?php if(isset($_SESSION['success'])){ ?>
								<div class="alert alert-success mt-2">
									<?= $_SESSION['success']; ?>
								</div>
							<?php } unset($_SESSION['success']); ?>
		      		<div class="card-body">
		      			<form action="post_project.php" method="POST" enctype="multipart/form-data">
									<div class="mb-3">
									    <label for="title" class="form-label">Title</label>
									    <input name="title" type="text" class="form-control" id="title">
									</div>
									<div class="mb-3">
									    <label for="clients" class="form-label">Clients</label>
									    <input name="clients" type="text" class="form-control" id="clients">
									</div>
									<div class="mb-3">
										<label for="completion" class="form-label">Completion</label>
										<input name="completion" class="form-control" id="completion">
									</div>
									<div class="mb-3">
									    <label for="type" class="form-label">Project Type</label>
									    <input name="type" type="text" class="form-control" id="type">
									</div>
									<div class="mb-3">
									    <label for="authors" class="form-label">Authors</label>
									    <input name="authors" type="text" class="form-control" id="authors">
									</div>
									<div class="mb-3">
									    <label for="budget" class="form-label">Budget</label>
									    <input name="budget" type="text" class="form-control" id="budget">
									</div>
									<div class="mb-3">
										<label for="img" class="form-label">Project Image</label>
										<input name="project_image" type="file" class="form-control" id="img">
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