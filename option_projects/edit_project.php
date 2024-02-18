<?php
session_start();
require '../session.php';
require '../db.php';
require '../dashboard_includes/header.php';
$id = $_GET['id']; 
$select = "SELECT * FROM projects WHERE id=$id";
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
		      			<h2>Edit Project</h2>
		      		</div>
		      		<?php if(isset($_SESSION['success'])){ ?>
								<div class="alert alert-success mt-2">
									<?= $_SESSION['success']; ?>
								</div>
							<?php } unset($_SESSION['success']); ?>
		      		<div class="card-body">
		      			<form action="update_project.php" method="POST" enctype="multipart/form-data">
									<div class="mb-3">
									    <label for="title" class="form-label">Title</label>
									    <input value="<?= $after_assoc['id']; ?>" name="id" type="hidden">
									    <input value="<?= $after_assoc['title']; ?>" name="title" type="text" class="form-control" id="title">
									</div>
									<div class="mb-3">
									    <label for="clients" class="form-label">Clients</label>
									    <input value="<?= $after_assoc['clients']; ?>" name="clients" type="text" class="form-control" id="clients">
									</div>
									<div class="mb-3">
										<label for="completion" class="form-label">Completion</label>
										<input value="<?= $after_assoc['completion']; ?>" name="completion" class="form-control" id="completion">
									</div>
									<div class="mb-3">
									    <label for="type" class="form-label">Project Type</label>
									    <input value="<?= $after_assoc['type']; ?>" name="type" type="text" class="form-control" id="type">
									</div>
									<div class="mb-3">
									    <label for="authors" class="form-label">Authors</label>
									    <input value="<?= $after_assoc['authors']; ?>" name="authors" type="text" class="form-control" id="authors">
									</div>
									<div class="mb-3">
									    <label for="budget" class="form-label">Budget</label>
									    <input value="<?= $after_assoc['budget']; ?>" name="budget" type="text" class="form-control" id="budget">
									</div>
									<div class="mb-3">
										<label for="img" class="form-label d-block">Project Image</label>
										<img src="uploaded/<?= $after_assoc['project_image']; ?>" width="250" class="img-fluid mb-3">
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