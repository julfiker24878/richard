<?php
session_start();
require '../db.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Starlight Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="/richard/dashboard_assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/richard/dashboard_assets/lib/Ionicons/css/ionicons.css" rel="stylesheet">


    <!-- Starlight CSS -->
    <link rel="stylesheet" href="/richard/dashboard_assets/css/starlight.css">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse mb-4">Starlight <span class="tx-info tx-normal">login</span></div>

        <form action="login_post.php" method="POST">
            <?php if(isset($_SESSION['pass_success'])){ ?>
                <div class="alert alert-success mt-2">
                    <?php echo $_SESSION['pass_success']; ?>
                </div>
            <?php } unset($_SESSION['pass_success']); ?>

            <div class="form-group">
                <input name="email" type="email" class="form-control" placeholder="Enter your email address">
                <?php if(isset($_SESSION['email_not_exist'])){ ?>
                    <div class="alert alert-danger mt-2">
                        <?php echo $_SESSION['email_not_exist']; ?>
                    </div>
                <?php } unset($_SESSION['email_not_exist']); ?>
            </div><!-- form-group -->

            <div class="form-group">
                <input name="password" type="password" class="form-control" placeholder="Enter your password">
                <?php if(isset($_SESSION['password_unmatched'])){ ?>
                    <div class="alert alert-warning mt-2">
                        <?php echo $_SESSION['password_unmatched']; ?>
                    </div>
                <?php } unset($_SESSION['password_unmatched']); ?>
            </div><!-- form-group -->

            <button type="submit" class="btn btn-info btn-block">Sign In</button>

        </form>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    <script src="/richard/dashboard_assets/lib/jquery/jquery.js"></script>
    <script src="/richard/dashboard_assets/lib/popper.js/popper.js"></script>
    <script src="/richard/dashboard_assets/lib/bootstrap/bootstrap.js"></script>

  </body>
</html>