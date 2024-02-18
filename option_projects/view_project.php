<?php
session_start();
require '../db.php';
require '../session.php';
require '../dashboard_includes/header.php';
$select = "SELECT * FROM projects";
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
		    				<h2>All Project</h2>
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
								      <th scope="col">T.P.</th>
								      <th scope="col">Title</th>
								      <th scope="col">Clients</th>
								      <th scope="col">Completion</th>
								      <th scope="col">Project Type</th>
								      <th scope="col">Authors</th>
								      <th scope="col">Budget</th>
								      <th scope="col">Project Image</th>
									  <?php if($_SESSION['user_role'] == 1 || $_SESSION['user_role'] == 2){ ?>
								      <th scope="col">Edit</th>
									  <?php } ?>
									  <?php if($_SESSION['user_role'] == 1){ ?>
								      <th scope="col">Delete</th>
									  <?php } ?>
								    </tr>
								  </thead>
								  <tbody>
								  	<?php foreach($select_result as $tp => $result){ ?>
									    <tr>
									      <th scope="row"><?= $tp+1; ?></th>
									      <td><?= $result['title']; ?></td>
									      <td><?= $result['clients']; ?></td>
									      <td><?= $result['completion']; ?></td>
									      <td><?= $result['type']; ?></td>
									      <td><?= $result['authors']; ?></td>
									      <td><?= $result['budget']; ?></td>
									      <td><img src="uploaded/<?= $result['project_image']; ?>" width='150' class='img-fluid'></td>
										  <?php if($_SESSION['user_role'] == 1 || $_SESSION['user_role'] == 2){ ?>
									      <td><a href="edit_project.php?id=<?= $result['id']; ?>" class="btn btn-primary"><i class="icon ion-edit"></a></td>
										  <?php } ?>
										  <?php if($_SESSION['user_role'] == 1){ ?>
									      <td><a href="delete_project.php?id=<?= $result['id']; ?>" class="btn btn-danger"><i class="icon ion-trash-a"></i></a></td>
										  <?php } ?>
									    </tr>
									<?php } ?>
								  </tbody>
								</table>
								<?php
									$rowcount = mysqli_num_rows($select_result);
									if($rowcount == 0){ ?>
										<div class="alert alert-info">
											<?php echo "No projects have been added yet!" ?>
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