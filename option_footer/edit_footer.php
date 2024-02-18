<?php
session_start();
require '../session.php';
require '../db.php';
require '../dashboard_includes/header.php';
$id = $_GET['id'];
$select = "SELECT * FROM footer WHERE id=$id";
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
		      			<h2>Edit Footer Info</h2>
		      		</div>
		      		<?php if(isset($_SESSION['success'])){ ?>
								<div class="alert alert-success mt-2">
									<?= $_SESSION['success']; ?>
								</div>
							<?php } unset($_SESSION['success']); ?>
		      		<div class="card-body">
		      			<form action="update_footer.php" method="POST">
									<div class="mb-3">
										<label for="phone" class="form-label">Phone</label>
										<input value="<?= $after_assoc['id']; ?>" type="hidden" name="id">
										<input value="<?= $after_assoc['phone']; ?>" name="phone" type="text" class="form-control" id="phone">
									</div>
									<div class="mb-3">
									    <label for="email" class="form-label">Email</label>
									    <input value="<?= $after_assoc['email']; ?>" name="email" type="email" class="form-control" id="email">
									</div>
									<div class="mb-3">
									    <label for="credit" class="form-label">Footer Credit</label>
									    <input value="<?= $after_assoc['credit']; ?>" name="credit" type="text" class="form-control" id="credit">
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