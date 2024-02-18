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
		      			<h2>Add Social Account</h2>
		      		</div>
		      		<?php if(isset($_SESSION['success'])){ ?>
								<div class="alert alert-success mt-2">
									<?= $_SESSION['success']; ?>
								</div>
							<?php } unset($_SESSION['success']); ?>
		      		<div class="card-body">
		      			<form action="post_social_account.php" method="POST">
									<div class="mb-3">
									    <label for="account_name" class="form-label">Account Name</label>
									    <input name="account_name" type="text" class="form-control" id="account_name">
									</div>
									<div class="mb-3">
									    <label for="icon" class="form-label">Icon</label>
									    <input name="icon" type="text" class="form-control" id="icon">
									</div>
									<div class="mb-3">
										<label for="link" class="form-label">Link</label>
										<input name="link" type="text" class="form-control" id="link">
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