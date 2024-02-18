<?php
 session_start();
 require 'session.php';
 require 'db.php';
 require 'dashboard_includes/header.php'; 
 
 $select_users = "SELECT * FROM table1";
 $users_query = mysqli_query($db_connect, $select_users);
 $rowcount_users = mysqli_num_rows($users_query);
 
 $select_subscribers = "SELECT * FROM subscribers";
 $subscribers_query = mysqli_query($db_connect, $select_subscribers);
 $rowcount_subscribers = mysqli_num_rows($subscribers_query);
?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="index.html">Richard</a>
    <span class="breadcrumb-item active">Dashboard</span>
  </nav>

  <div class="sl-pagebody">
    <div class="row row-sm">
        
        <div class="col-sm-3 col-xl-3">
            <div class="card pd-20 bg-primary">
                <div class="d-flex justify-content-between align-items-center mg-b-10">
                    <h6 class="tx-16 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total</h6>
                </div><!-- card-header -->
                <div class="d-flex align-items-center justify-content-between">
                    <span class="text-white">Last Updated: 23 March 2022</span>
                    <h3 class="mg-b-0 tx-white tx-lato tx-bold"></h3>
                </div><!-- card-body -->
                <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                    <span class="tx-11 tx-white-6">Total Users</span>
                    <h6 class="tx-white mg-b-0"><?php 
                        if($rowcount_users == 0){
                            echo "No users found!";
                        }else{
                            echo $rowcount_users;
                        }
                    ?></h6>
                </div>
                <div>
                    <span class="tx-11 tx-white-6">Total Subscribers</span>
                    <h6 class="tx-white mg-b-0"><?php 
                        if($rowcount_subscribers == 0){
                            echo "No subscriptions found!";
                        }else{
                            echo $rowcount_subscribers;
                        }
                    ?></h6>
                </div>
                </div><!-- -->
            </div><!-- card -->
        </div><!-- col-3 -->
        
      <div class="col-md-9">
        <div class="card">
          <div class="card-header">
            <h3 class="text-primary">Main Features</h3>
          </div>
          <div class="card-body">
            <ul>
              <li class="text-dark">Backend Development
                <ul>
                  <li class="text-dark">Backend Development Author - Julfiker Ali
                  <li class="text-dark">Backend Development Author URI - https://julfikerali.com</li>
                  <li class="text-dark">PHP version: 8.1.2</li>
                </ul>
              </li>
              <li class="text-dark">Frontend HTML Template
                <ul>
                  <li class="text-dark">Frontend HTML Template Name - Richard.</li>
                  <li class="text-dark">Author of Frontend Template - Paul </li>
                  <li class="text-dark">Frontend HTML Template Author URI - http://themeforest.net/user/paul_tf </li>
                  <li class="text-dark">Bootstrap v4.4.1</li>
                  <li class="text-dark">Owl Carousel v2.3.4</li>
                  <li class="text-dark">jQuery v1.12.4</li>
                </ul>
              </li>
              <li class="text-dark">Backend HTML Template
                <ul>
                  <li class="text-dark">Backend HTML Template Name - Starlight Responsive Dashboard Template </li>
                  <li class="text-dark">Author of Backend Template - ThemePixels (@themepixels) </li>
                  <li class="text-dark">Backend HTML Template Author URI - http://themepixels.me/starlight </li>
                  <li class="text-dark">Bootstrap v5.1.3</li>
                </ul>
              </li>

              <li class="text-dark">User Role</li>
              <li class="text-dark">Ion Icons</li>
              <li class="text-dark">Social Accounts</li>
              <li class="text-dark">Subscribe Form</li>
              <li class="text-dark">Contact Form</li>
              <li class="text-dark">Active/Deactive Using Status</li>
              <li class="text-dark">Changing Footer Credit</li>
              <li class="text-dark">Full Dynamic</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

<?php require 'dashboard_includes/footer.php'; ?>

<?php if(isset($_SESSION['sweet_done'])){ ?>
  <script type="text/javascript">
    const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
    })

    Toast.fire({
      icon: 'success',
      title: 'Signed in successfully'
    })
  </script>
<?php } unset($_SESSION['sweet_done']); ?>