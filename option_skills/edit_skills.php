<?php
session_start();
require '../session.php';
require '../db.php';
require '../dashboard_includes/header.php';

$id = $_GET['id'];

$select = "SELECT * FROM skills WHERE id=$id";
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
		      			<h2>Edit Skills</h2>
		      		</div>
		      		<?php if(isset($_SESSION['success'])){ ?>
								<div class="alert alert-success mt-2">
									<?= $_SESSION['success']; ?>
								</div>
							<?php } unset($_SESSION['success']); ?>
		      		<div class="card-body">
		      	<form action="update_skills.php" method="POST">
						  <input value="<?= $after_assoc['id']; ?>" name="id" type="hidden" class="form-control">
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3">
										<label for="skill" class="form-label">Skill Name</label>
										<input name="skill" class="form-control" id="skill" value="<?= $after_assoc['skill']; ?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label for="percent" class="form-label">Set Percentage</label>
										<input name="percent" value="<?= $after_assoc['percentage']; ?>" class="form-control" id="percent">
									</div>
								</div>
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