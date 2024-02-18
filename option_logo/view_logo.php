<?php
session_start();
require '../db.php';
require '../session.php';
require '../dashboard_includes/header.php';
$select = "SELECT * FROM logo";
$select_result = mysqli_query($db_connect, $select);
?>

<!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Richard</a>
        <a class="breadcrumb-item" href="index.html">Pages</a>
        <span class="breadcrumb-item active">View Site Title</span>
      </nav>

      <div class="sl-pagebody">
	    	<div class="row">
	    		<div class="col-md-12">
		    		<div class="card">
		    			<div class="card-header">
		    				<h2>Site Title</h2>
		    			</div>
		    			<?php if(isset($_SESSION['deleted'])){ ?>
		    				<div class="alert alert-danger">
		    					<?= $_SESSION['deleted']; ?>
		    			<?php } unset($_SESSION['deleted']); ?>
		    				</div>
		    			<div class="card-body">
		    				<table class="table table-bordered">
								  <thead>
								    <tr>
								      <th scope="col">T.L.</th>
								      <th scope="col">Site Title</th>
								      <th scope="col">Actions</th>
								    </tr>
								  </thead>
								  <tbody>
								  	<?php foreach($select_result as $tl => $result){ ?>
									    <tr>
									      <th scope="row"><?= $tl+1; ?></th>
									      <td><?= $result['logo_text']; ?></td>
									      <td>
										  <?php if($_SESSION['user_role'] == 1 || $_SESSION['user_role'] == 2){ ?>
									      	<a href="edit_logo.php?id=<?= $result['id']; ?>" class="btn btn-primary">Eidt</a>
											  <?php } ?>
											  <?php if($_SESSION['user_role'] == 1){ ?>
									      	<a href="delete_logo.php?id=<?= $result['id']; ?>" class="btn btn-danger">Delete</a>
											  <?php } ?>
									      </td>
									    </tr>
									<?php } ?>
								  </tbody>
								</table>
								<?php
								$rowcount = mysqli_num_rows($select_result);
								if($rowcount == 0){ ?>
									<div class="alert alert-info">
										<?php echo "No title has been added yet!" ?>
									</div>
								<?php } ?>
		    			</div>
		    		</div>
		    	</div>
	    	</div>
      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

<?php require '../dashboard_includes/footer.php'; ?>