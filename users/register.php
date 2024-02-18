<?php
session_start();
// require '../session.php';
// require '../dashboard_includes/header.php';
?>

<div class="d-flex align-items-center justify-content-center ht-md-100v">

  <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white">
    <div class="signin-logo tx-center tx-24 tx-bold tx-inverse mb-4">Richard <span class="tx-info tx-normal">Signup</span></div>
        <?php if(isset($_SESSION['success'])){ ?>
            <div class="alert alert-success mt-2">
                <?php echo $_SESSION['success']; ?>
            </div>
        <?php } unset($_SESSION['success']); ?>

        <?php if(isset($_SESSION['email_exists'])){ ?>
            <div class="alert alert-danger mt-2">
                <?php echo $_SESSION['email_exists']; ?>
            </div>
        <?php } unset($_SESSION['email_exists']); ?>

    <form action="post.php" method="POST" enctype="multipart/form-data">

        <div class="form-group">
          <input name="name" type="text" class="form-control" placeholder="Enter your fullname">
            <?php if(isset($_SESSION['err']['name'])){ ?>
                <div class="alert alert-warning mt-2">
                    <?php echo $_SESSION['err']['name']; ?>
                </div>
            <?php } unset($_SESSION['err']['name']); ?>

            <?php if(isset($_SESSION['large_name'])){ ?>
                <div class="alert alert-warning mt-2">
                    <?php echo $_SESSION['large_name']; ?>
                </div>
            <?php } unset($_SESSION['large_name']); ?>
        </div><!-- form-group -->

        <div class="form-group">
          <input name="email" type="email" class="form-control" placeholder="Enter your email address">
            <?php if(isset($_SESSION['err']['email'])){ ?>
                <div class="alert alert-warning mt-2">
                    <?php echo $_SESSION['err']['email']; ?>
                </div>
            <?php } unset($_SESSION['err']['email']); ?>

            <?php if(isset($_SESSION['invalid_email'])){ ?>
                <div class="alert alert-warning mt-2">
                    <?php echo $_SESSION['invalid_email']; ?>
                </div>
            <?php } unset($_SESSION['invalid_email']); ?>
        </div><!-- form-group -->

        <div class="form-group">
          <input name="password" type="password" class="form-control" placeholder="Enter your password">
            <?php if(isset($_SESSION['err']['password'])){ ?>
                <div class="alert alert-warning mt-2">
                    <?php echo $_SESSION['err']['password']; ?>
                </div>
            <?php } unset($_SESSION['err']['password']); ?>

            <?php if(isset($_SESSION['wk_pass'])){ ?>
                <div class="alert alert-warning mt-2">
                    <?php echo $_SESSION['wk_pass']; ?>
                </div>
            <?php } unset($_SESSION['wk_pass']); ?>
        </div><!-- form-group -->

        <div class="form-group">
          <input name="cpassword" type="password" class="form-control" placeholder="Confirm your password">
            <?php if(isset($_SESSION['err']['cpassword'])){ ?>
                <div class="alert alert-warning mt-2">
                    <?php echo $_SESSION['err']['cpassword']; ?>
                </div>
            <?php } unset($_SESSION['err']['cpassword']); ?>

            <?php if(isset($_SESSION['pass_match'])){ ?>
                <div class="alert alert-warning mt-2">
                    <?php echo $_SESSION['pass_match']; ?>
                </div>
            <?php } unset($_SESSION['pass_match']); ?>
        </div><!-- form-group -->

        <label class="custom-file">
          <input name="profile_image" type="file" id="file" class="custom-file-input form-control-lg">
          <span class="custom-file-control"></span>
        </label>
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

            <div class="form-group mt-3">
                <label>Add User</label>
                <select name="role"  class="form-control">
                    <option value="1">Admin</option>
                    <option value="2">Moderator</option>
                    <option value="3">Editor</option>
                    <option value="0">Subscriber</option>
                </select>
            </div>
        
        <div class="form-group tx-12 mt-3">By clicking the Sign Up button below, you agreed to our privacy policy and terms of use of our website.</div>
        <button type="submit" class="btn btn-info btn-block">Sign Up</button>

    </form>
  </div><!-- login-wrapper -->
</div><!-- d-flex -->

<?php require '../dashboard_includes/footer.php'; ?>