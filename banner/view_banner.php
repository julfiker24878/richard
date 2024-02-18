<?php
session_start();
require '../db.php';
require '../session.php';
require '../dashboard_includes/header.php';
$select = "SELECT * FROM banner";
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
		    				<h2>Banners</h2>
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
								      <th scope="col">T.N.</th>
								      <th scope="col">Heading</th>
								      <th scope="col">Description</th>
								      <th scope="col">Button Text</th>
								      <th scope="col">Banner Image</th>
								      <th scope="col">Action</th>
								      <th scope="col">Status</th>
								    </tr>
								  </thead>
								  <tbody>
								  	<?php foreach($select_result as $tb => $result){ ?>
									    <tr>
									      <th scope="row"><?= $tb+1; ?></th>
									      <td><?= $result['heading']; ?></td>
									      <td><?= $result['description']; ?></td>
									      <td><?= $result['btn_text']; ?></td>
									      <td>
									      	<img src="uploaded/<?= $result['banner_image']; ?>" width='50' class='img-fluid'>
									      </td>
									      <td>
										  <?php if($_SESSION['user_role'] == 1 || $_SESSION['user_role'] == 2){ ?>
									      	<a href="edit_banner.php?id=<?= $result['id']; ?>" class="btn btn-primary">Eidt</a>
											  <?php } ?>
											<?php if($_SESSION['user_role'] == 1){ ?>
									      	<a href="delete_banner.php?id=<?= $result['id']; ?>" class="btn btn-danger">Delete</a>
											<?php } ?>
									      </td>
										  <td>
											<?php if($result['status'] == 1){ ?>
												<a href="status.php?id=<?= $result['id']; ?>" class="btn btn-success">Active</a>
											<?php }else{ ?>
												<a href="status.php?id=<?= $result['id']; ?>" class="btn btn-secondary">Deactive</a>
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