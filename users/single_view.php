<?php
session_start();
require '../db.php';
require '../session.php';

$id = $_GET['id'];
$select = "SELECT * FROM table1 WHERE id=$id";
$select_result = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_result);
?>

<?php require '../dashboard_includes/header.php'; ?>

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
                        <div class="card-header bg-primary text-light">
                            <h1><?= $after_assoc['name']; ?> Information <a href="view.php" class="btn btn-success float-end">HOME</a></h1>
                        </div>
                        <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Profile Photo</th>
                                    <td>
                                        <img width="450" height="450" src="../uploads/profile/<?php echo $after_assoc['profile_image']; ?>" alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td><?= $after_assoc['name']; ?></td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td><?= $after_assoc['email']; ?></td>
                                </tr>
                                <tr>
                                    <th>Password</th>
                                    <td><?= $after_assoc['password']; ?></td>
                                </tr>
                                <tr>
                                    <th>Registration Date</th>
                                    <td><?= $after_assoc['registered_at']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->

<!-- ########## END: MAIN PANEL ########## -->

<?php require '../dashboard_includes/footer.php'; ?>