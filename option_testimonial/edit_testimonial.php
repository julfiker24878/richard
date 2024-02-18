<?php
session_start();
require '../session.php';
require '../db.php';
require '../dashboard_includes/header.php';
$id = $_GET['id'];
$select = "SELECT * FROM testimonials WHERE id=$id";
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
		      			<form action="update_testimonial.php" method="POST">
									<div class="mb-3">
										<label for="comment" class="form-label">Comment</label>
										<input value="<?= $after_assoc['id']; ?>" type="hidden" name="id" class="form-control">
										<textarea name="comment" class="form-control" id="comment" rows="6"><?= $after_assoc['comment']; ?></textarea>
									</div>
									<div class="mb-3">
									    <label for="name" class="form-label">Name</label>
									    <input value="<?= $after_assoc['name']; ?>" name="name" type="text" class="form-control" id="name">
									</div>
									<div class="mb-3">
									    <label for="designation" class="form-label">Designation</label>
									    <input value="<?= $after_assoc['designation']; ?>" name="designation" type="text" class="form-control" id="designation">
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