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
		      			<h2>Add About</h2>
		      		</div>
		      		<?php if(isset($_SESSION['success'])){ ?>
								<div class="alert alert-success mt-2">
									<?= $_SESSION['success']; ?>
								</div>
							<?php } unset($_SESSION['success']); ?>
		      		<div class="card-body">
		      			<form action="post_about.php" method="POST">
									<div class="mb-3">
									    <label for="heading" class="form-label">Heading</label>
									    <input name="heading" type="text" class="form-control" id="heading">
									</div>
									<div class="mb-3">
										<label for="des" class="form-label">Description</label>
										<textarea name="des" class="form-control" id="des" rows="5"></textarea>
									</div>
									<div class="mb-3">
										<label for="year" class="form-label">Year</label>
										<input name="year" class="form-control" id="year">
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