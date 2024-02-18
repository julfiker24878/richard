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
		      			<h2>Add Testimonial</h2>
		      		</div>
		      		<?php if(isset($_SESSION['success'])){ ?>
								<div class="alert alert-success mt-2">
									<?= $_SESSION['success']; ?>
								</div>
							<?php } unset($_SESSION['success']); ?>
		      		<div class="card-body">
		      			<form action="post_testimonial.php" method="POST">
		      				<div class="mb-3">
										<label for="comment" class="form-label">Comment</label>
										<textarea name="comment" class="form-control" id="comment" rows="6"></textarea>
									</div>
									<div class="mb-3">
									    <label for="name" class="form-label">Name</label>
									    <input name="name" type="text" class="form-control" id="name">
									</div>
									<div class="mb-3">
									    <label for="designation" class="form-label">Designation</label>
									    <input name="designation" type="text" class="form-control" id="designation">
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