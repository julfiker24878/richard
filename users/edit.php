<?php
session_start();
require '../db.php';
require '../session.php';
require '../dashboard_includes/header.php';

$id = $_GET['id'];
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
                <div class="col-md-10 m-auto">
                    <div class="card">
                        <div class="card-header bg-primary text-light">
                            <h1>Edit User Info</h1>
                        </div>
                                <?php if(isset($_SESSION['updated'])){ ?>
                                    <div class="alert alert-success mt-2">
                                        <?php echo $_SESSION['updated']; ?>
                                    </div>
                                <?php } unset($_SESSION['updated']); ?>

                        <div class="card-body">
                        <form action="update.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input value="<?= $after_assoc['id'] ?>" name="id" type="hidden" class="form-control" id="name">
                                <input value="<?= $after_assoc['name'] ?>" name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input value="<?= $after_assoc['email'] ?>" name="email" type="type" class="form-control" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="pass" class="form-label">Password</label>
                                <input name="password" type="password" class="form-control" id="pass">
                            </div>
                            <div class="mb-3">
                                <img class="pb-2" width="60" height="60" src="../uploads/profile/<?php echo $after_assoc['profile_image']; ?>" alt="">
                                <label for="pro" class="form-label">Profile Image</label>
                                <input name="profile_image" type="file" class="form-control" id="pro">
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
                            <button type="submit" class="btn btn-primary">Change</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->

<!-- ########## END: MAIN PANEL ########## -->

<?php require '../dashboard_includes/footer.php'; ?>