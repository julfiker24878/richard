<?php
session_start();
require '../db.php';
require '../session.php';
require '../dashboard_includes/header.php';
$select = "SELECT * FROM table1";
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
                        <div class="card-header bg-primary text-light">
                            <h1>Registered Users <?php if($_SESSION['user_role'] == 1){ ?><a style="border-radius: 5px;" href="trashed.php" class="btnbtn-warning float-end">Trash Box</a><?php } ?></h1>
                        </div>
                        <div class="card-body">
                            <form action="mark_trash.php" method="POST">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">S.N.</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Profile Image</th>
                                        <th scope="col">Registered At</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($select_result as $key=>$select_results){ ?>
                                        <tr>
                                            <th><?php echo $key+1; ?></th>
                                            <td><?php echo $select_results['name']; ?></td>
                                            <td><?php echo $select_results['email']; ?></td>
                                            <td><?php
                                                if($select_results['role'] == 1){
                                                    echo "Admin";
                                                }elseif($select_results['role'] == 2){
                                                    echo "Moderator";
                                                }elseif($select_results['role'] == 3){
                                                    echo "Editor";
                                                }else{
                                                    echo "Subscriber";
                                                }
                                            ?></td>
                                            <td>
                                                <img class="rounded-circle" width="60" height="60" src="../uploads/profile/<?php echo $select_results['profile_image']; ?>" alt="">
                                            </td>
                                            <td><?php echo $select_results['registered_at']; ?></td>
                                            <td>
                                                <?php if($_SESSION['user_role'] == 1 || $_SESSION['user_role'] == 2){ ?>
                                                <a style="border-radius: 5px;" href="edit.php?id=<?php echo $select_results['id']; ?>" class="btn btn-primary">Edit</a>
                                                <?php } ?>
                                                <a style="border-radius: 5px;" href="single_view.php?id=<?php echo $select_results['id']; ?>" class="btn btn-success">View</a>
                                                <?php if($_SESSION['user_role'] == 1){ ?>
                                                <a style="border-radius: 5px;" id="delete.php?id=<?php echo $select_results['id']; ?>" class="btn btn-danger dlt-warning text-white">Delete</a>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            </form>
                            <?php
                                $rowcount = mysqli_num_rows($select_result);
                                if($rowcount == 0){
                            ?>
                            <div class="alert alert-info mt-2">
                                <?php echo "No data found!" ?>
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
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
    $(".dlt-warning").click(function(){
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = $(this).attr('id');
            }
        })
    });
</script>

<?php if(isset($_SESSION['deleted'])){ ?>
<script>
    Swal.fire(
        'Deleted!',
        '<?php echo $_SESSION['deleted']; ?>',
        'success'
    )
</script>
<?php } unset($_SESSION['deleted']); ?>