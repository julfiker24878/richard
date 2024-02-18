<?php
session_start();
require '../session.php';
require '../db.php';
require '../dashboard_includes/header.php';
$id = $_GET['id'];
$select = "SELECT * FROM social_accounts WHERE id=$id";
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
		      			<h2>Edit Account</h2>
		      		</div>
		      		<?php if(isset($_SESSION['success'])){ ?>
								<div class="alert alert-success mt-2">
									<?= $_SESSION['success']; ?>
								</div>
							<?php } unset($_SESSION['success']); ?>
		      		<div class="card-body">
		      			<form action="update_social_account.php" method="POST">
							<div class="mb-3">
								<label for="account_name" class="form-label">Account Name</label>
								<input value="<?= $after_assoc['id']; ?>" type="hidden" name="id">
								<input value="<?= $after_assoc['account_name']; ?>" name="account_name" type="text" class="form-control" id="account_name">
							</div>
							<div class="mb-3">
								<label for="icon" class="form-label">Icon</label>
								<input value="<?= $after_assoc['icon']; ?>" name="icon" type="text" class="form-control" id="icon">
							</div>
							<div class="mb-3">
								<label for="link" class="form-label">Link</label>
								<input value="<?= $after_assoc['link']; ?>" name="link" type="text" class="form-control" id="link">
							</div>

							<button type="submit" class="btn btn-primary">Update</button>
						</form>
		      		</div>
		      	</div>
      		</div>
      	</div>
      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

<?php require '../dashboard_includes/footer.php'; ?>