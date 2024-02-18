<?php
session_start();
require '../db.php';
require '../session.php';
require '../dashboard_includes/header.php';
$select = "SELECT * FROM experiences";
$select_result = mysqli_query($db_connect, $select);
?>

<!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Richard</a>
        <a class="breadcrumb-item" href="index.html">Pages</a>
        <span class="breadcrumb-item active">Blank Page</span>
      </nav>

      <div class="sl-pagebody">
	    	<div class="row">
	    		<div class="col-md-12">
		    		<div class="card">
		    			<div class="card-header">
		    				<h2>about</h2>
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
								      <th scope="col">T.E.</th>
								      <th scope="col">Year Duration</th>
								      <th scope="col">Company Name</th>
								      <th scope="col">Designation</th>
								      <th scope="col">Description</th>
									  <?php if($_SESSION['user_role'] == 1 || $_SESSION['user_role'] == 2){ ?>
								      <th scope="col">Edit</th>
									  <?php } ?>
									  <?php if($_SESSION['user_role'] == 1){ ?>
								      <th scope="col">Delete</th>
									  <?php } ?>
								    </tr>
								  </thead>
								  <tbody>
								  	<?php foreach($select_result as $te => $result){ ?>
									    <tr>
									      <th scope="row"><?= $te+1; ?></th>
									      <td><?= $result['duration']; ?></td>
									      <td><?= $result['company']; ?></td>
									      <td><?= $result['designation']; ?></td>
									      <td><?= $result['des']; ?></td>
										  <?php if($_SESSION['user_role'] == 1 || $_SESSION['user_role'] == 2){ ?>
									      <td><a href="edit_experience.php?id=<?= $result['id']; ?>" class="btn btn-primary"><i class="icon ion-edit"></i></a></td>
										  <?php } ?>
										  <?php if($_SESSION['user_role'] == 1){ ?>
									      <td><a href="delete_experience.php?id=<?= $result['id']; ?>" class="btn btn-danger"><i class="icon ion-trash-a"></i></a></td>
										  <?php } ?>
									    </tr>
									<?php } ?>
								  </tbody>
								</table>
								<?php
									$rowcount = mysqli_num_rows($select_result);
									if($rowcount == 0){ ?>
										<div class="alert alert-info">
											<?php echo "No banners have been added yet!" ?>
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