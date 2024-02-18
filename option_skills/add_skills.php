<?php
session_start();
require '../session.php';
require '../db.php';
require '../dashboard_includes/header.php';
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
      		<div class="col-md-8">
      			<div class="card">
		      		<div class="card-header">
		      			<h2>Add Skills</h2>
		      		</div>
		      		<?php if(isset($_SESSION['success'])){ ?>
								<div class="alert alert-success mt-2">
									<?= $_SESSION['success']; ?>
								</div>
							<?php } unset($_SESSION['success']); ?>
		      		<div class="card-body">
		      			<form action="post_skills.php" method="POST">
									<div class="row">
										<div class="col-md-6">
											<div class="mb-3">
												<label for="skill" class="form-label">Skill Name</label>
												<input name="skill" class="form-control" id="skill">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label for="percent" class="form-label">Set Percentage</label>
												<input name="percentage" class="form-control" id="percent">
											</div>
										</div>
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