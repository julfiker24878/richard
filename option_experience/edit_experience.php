<?php
session_start();
require '../session.php';
require '../db.php';
require '../dashboard_includes/header.php';
$id = $_GET['id'];
$select = "SELECT * FROM experiences WHERE id=$id";
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
		      			<h2>Edit About</h2>
		      		</div>
		      		<?php if(isset($_SESSION['success'])){ ?>
								<div class="alert alert-success mt-2">
									<?= $_SESSION['success']; ?>
								</div>
							<?php } unset($_SESSION['success']); ?>
		      		<div class="card-body">
		      			<form action="update_experience.php" method="POST">
									<div class="mb-3">
										<label for="duration" class="form-label">Year Duration</label>
										<input value="<?= $after_assoc['id']; ?>" type="hidden" name="id" class="form-control">
										<input value="<?= $after_assoc['duration']; ?>" type="text" name="duration" class="form-control" id="duration">
									</div>
									<div class="mb-3">
									    <label for="company" class="form-label">Company Name</label>
									    <input value="<?= $after_assoc['company']; ?>" name="company" type="text" class="form-control" id="company">
									</div>
									<div class="mb-3">
									    <label for="designation" class="form-label">Designation</label>
									    <input value="<?= $after_assoc['designation']; ?>" name="designation" type="text" class="form-control" id="designation">
									</div>
									<div class="mb-3">
										<label for="des" class="form-label">Description</label>
										<textarea name="des" class="form-control" id="des" rows="6"><?= $after_assoc['des']; ?></textarea>
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