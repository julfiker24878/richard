<?php
session_start();
require '../session.php';
require '../db.php';
require '../dashboard_includes/header.php';

$id = $_SESSION['user_id'];
$select = "SELECT * FROM table1 WHERE id=$id";
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
        <div class="row">
            <div class="col-md-4">
                <div class="pro-img-name">
                    <img src="/richard/uploads/profile/<?= $after_assoc['profile_image']; ?>" class="img-fluid rounded-circle">
                    <h4><?= $after_assoc['name']; ?></h4>
                </div>
            </div>
            <div class="col-md-8">
                <?php if(isset($_SESSION['updated'])){ ?>
                    <div class="alert alert-success mt-2">
                        <?php echo $_SESSION['updated']; ?>
                    </div>
                <?php } unset($_SESSION['updated']); ?>

                <?php if(isset($_SESSION['wrong_password'])){ ?>
                    <div class="alert alert-danger mt-2">
                        <?php echo $_SESSION['wrong_password']; ?>
                    </div>
                <?php } unset($_SESSION['wrong_password']); ?>

                <?php if(isset($_SESSION['password_unmatched'])){ ?>
                    <div class="alert alert-danger mt-2">
                        <?php echo $_SESSION['password_unmatched']; ?>
                    </div>
                <?php } unset($_SESSION['password_unmatched']); ?> 

                <form action="user_update.php" method="POST" enctype="multipart/form-data">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                Edit Name
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                    <div class="mb-3">
                                        <input value="<?= $after_assoc['id'] ?>" name="id" type="hidden" class="form-control" id="name">
                                        <input value="<?= $after_assoc['name'] ?>" name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                Edit Password
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body">
                                    <div class="mb-3">
                                        <input name="vpassword" type="password" class="form-control" placeholder="Current Password">
                                    </div>
                                    <div class="mt-3">
                                        <input name="npassword" type="password" class="form-control" placeholder="New Password">
                                    </div>
                                    <div class="mt-3">
                                        <input name="cpassword" type="password" class="form-control" placeholder="Confirm Password">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                                Edit Profile Image
                              </button>
                            </h2>
                            <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                                <div class="accordion-body">
                                    <div class="mb-3">
                                        <img class="pb-2" width="60" height="60" src="../uploads/profile/<?php echo $after_assoc['profile_image']; ?>" alt="">
                                        <input name="profile_image" type="file" class="form-control">
                                        <?php if(isset($_SESSION['invalid_extension'])){ ?>
                                            <div class="alert alert-warning mt-2">
                                                <?php echo $_SESSION['invalid_extension']; ?>
                                            </div>
                                        <?php } unset($_SESSION['invalid_extension']); ?>

                                        <?php if(isset($_SESSION['invalid_size'])){ ?>
                                            <div class="alert alert-warning mt-2">
                                                <?php echo $_SESSION['invalid_size']; ?>
                                            </div>
                                        <?php } unset($_SESSION['invalid_size']); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->

<!-- ########## END: MAIN PANEL ########## -->

<?php require '../dashboard_includes/footer.php'; ?>