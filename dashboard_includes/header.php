<?php
  $hostname = 'localhost';
  $db_username = 'carscedw_test';
  $db_password = 'asAS12!@';
  $dbname = 'carscedw_richard';
  $db_connect = mysqli_connect($hostname, $db_username, $db_password, $dbname);

  $id = $_SESSION['user_id'];
  $select = "SELECT * FROM table1 WHERE id=$id";
  $select_result = mysqli_query($db_connect, $select);
  $after_assoc = mysqli_fetch_assoc($select_result);
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

    <title><?= $_SESSION['username']; ?> - Richard</title>

    <!-- vendor css -->
    <link href="/richard/dashboard_assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/richard/dashboard_assets/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="/richard/dashboard_assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link rel="stylesheet" href="/richard/dashboard_assets/css/bootstrap.min.css">


    <!-- Starlight CSS -->
    <link rel="stylesheet" href="/richard/dashboard_assets/css/starlight.css">
    <link rel="stylesheet" type="text/css" href="/richard/style.css">
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href=""><img src="/richard/img/favicon.png" alt="" width="50"> Julfiker Ali</a></div>
    <div class="sl-sideleft">
      <div class="input-group input-group-search">
        <input type="search" name="search" class="form-control" placeholder="Search">
        <span class="input-group-btn">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span><!-- input-group-btn -->
      </div><!-- input-group -->

      <label class="sidebar-label">Navigation</label>
      <div class="sl-sideleft-menu">
        <a href="/richard/admin.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-home tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="/richard/admin.php" class="nav-link"><ion-icon class="mr-2" name="home"></ion-icon>Home</a></li>
          <li class="nav-item"><a href="/richard/index.php" class="nav-link" target="_blank"><ion-icon class="mr-2" name="paper-plane"></ion-icon>Visit Site</a></li>
        </ul>

        <!-- Logo -->
      <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-aperture tx-20"></i>
            <span class="menu-item-label">Site Title</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="/richard/option_logo/view_logo.php" class="nav-link"><i class="ion-information-circled mr-2"></i>View Title</a></li>
          <?php if($_SESSION['user_role'] == 1){ ?>
          <li class="nav-item"><a href="/richard/option_logo/add_logo.php" class="nav-link"><i class="icon ion-plus-circled mr-2"></i>Add Title</a></li>
          <?php } ?>
        </ul>

        <!-- Menu -->
      <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-navicon-round tx-20"></i>
            <span class="menu-item-label">Menu</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="/richard/option_menu/view_menu.php" class="nav-link"><i class="ion-information-circled mr-2"></i>View Menu Items</a></li>
          <?php if($_SESSION['user_role'] == 1){ ?>
          <li class="nav-item"><a href="/richard/option_menu/add_menu.php" class="nav-link"><i class="icon ion-plus-circled mr-2"></i>Add Menu Items</a></li>
          <?php } ?>
        </ul>

        <!-- User Info -->
        <?php if($_SESSION['user_role'] == 1 || $_SESSION['user_role'] == 2 || $_SESSION['user_role'] == 3){ ?>
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon ion-person-stalker tx-20"></i>
            <span class="menu-item-label">Users</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="/richard/users/view.php" class="nav-link"><i class="ion-information-circled mr-2"></i>User Info</a></li>
          <?php if($_SESSION['user_role'] == 1){ ?>
          <li class="nav-item"><a href="/richard/users/register.php" class="nav-link"><i class="ion-person-add mr-2"></i>Add User</a></li>
          <?php } ?>
        </ul>
      <?php } ?>

      <!-- Banner Section -->
      <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon fa fa-image tx-20"></i>
            <span class="menu-item-label">Banners</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="/richard/banner/view_banner.php" class="nav-link"><i class="ion-information-circled mr-2"></i>View Banners</a></li>
          <?php if($_SESSION['user_role'] == 1){ ?>
          <li class="nav-item"><a href="/richard/banner/add_banner.php" class="nav-link"><i class="icon ion-plus-circled mr-2"></i>Add Banners</a></li>
          <?php } ?>
        </ul>

        <!-- About Section -->
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <ion-icon name="person"></ion-icon>
            <span class="menu-item-label">About</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="/richard/option_about/view_about.php" class="nav-link"><i class="ion-information-circled mr-2"></i>View About</a></li>
          <?php if($_SESSION['user_role'] == 1){ ?>
          <li class="nav-item"><a href="/richard/option_about/add_about.php" class="nav-link"><i class="icon ion-plus-circled mr-2"></i>Add About</a></li>
          <?php } ?>
        </ul>

        <!-- Skills Section -->
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <ion-icon name="checkbox-outline"></ion-icon>
            <span class="menu-item-label">Skills</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="/richard/option_skills/view_skills.php" class="nav-link"><i class="ion-information-circled mr-2"></i>View Skills</a></li>
          <?php if($_SESSION['user_role'] == 1){ ?>
          <li class="nav-item"><a href="/richard/option_skills/add_skills.php" class="nav-link"><i class="icon ion-plus-circled mr-2"></i>Add Skills</a></li>
          <?php } ?>
        </ul>

        <!-- Service Section -->
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-gear-b tx-20"></i>
            <span class="menu-item-label">Services</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="/richard/option_services/view_service.php" class="nav-link"><i class="ion-information-circled mr-2"></i>View Services</a></li>
          <?php if($_SESSION['user_role'] == 1){ ?>
          <li class="nav-item"><a href="/richard/option_services/add_service.php" class="nav-link"><i class="icon ion-plus-circled mr-2"></i>Add Services</a></li>
          <?php } ?>
        </ul>

        <!-- Experience Section -->
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-wand tx-20"></i>
            <span class="menu-item-label">Experience</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="/richard/option_experience/view_experience.php" class="nav-link"><i class="ion-information-circled mr-2"></i>View Experience</a></li>
          <?php if($_SESSION['user_role'] == 1){ ?>
          <li class="nav-item"><a href="/richard/option_experience/add_experience.php" class="nav-link"><i class="icon ion-plus-circled mr-2"></i>Add Experience</a></li>
          <?php } ?>
        </ul>

        <!-- Featured Project Section -->
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-aperture tx-20"></i>
            <span class="menu-item-label">Featured Project</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="/richard/option_projects/view_project.php" class="nav-link"><i class="ion-information-circled mr-2"></i>View Featured Project</a></li>
          <?php if($_SESSION['user_role'] == 1){ ?>
          <li class="nav-item"><a href="/richard/option_projects/add_project.php" class="nav-link"><i class="icon ion-plus-circled mr-2"></i>Add Featured Project</a></li>
          <?php } ?>
        </ul>

        <!-- Testimonial Section -->
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-star tx-20"></i>
            <span class="menu-item-label">Testimonial</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="/richard/option_testimonial/view_testimonial.php" class="nav-link"><i class="ion-information-circled mr-2"></i>View Testimonial</a></li>
          <?php if($_SESSION['user_role'] == 1){ ?>
          <li class="nav-item"><a href="/richard/option_testimonial/add_testimonial.php" class="nav-link"><i class="icon ion-plus-circled mr-2"></i>Add Testimonial</a></li>
          <?php } ?>
        </ul>

        <!-- Latest News Section -->
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-document-text tx-20"></i>
            <span class="menu-item-label">Latest News</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="/richard/option_blog/view_blog.php" class="nav-link"><i class="ion-information-circled mr-2"></i>View Latest News</a></li>
          <?php if($_SESSION['user_role'] == 1){ ?>
          <li class="nav-item"><a href="/richard/option_blog/add_blog.php" class="nav-link"><i class="icon ion-plus-circled mr-2"></i>Add Latest News</a></li>
          <?php } ?>
        </ul>

        <!-- Branding Section -->
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-person tx-20"></i>
            <span class="menu-item-label">Branding</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="/richard/option_branding/view_branding.php" class="nav-link"><i class="ion-information-circled mr-2"></i>View Branding</a></li>
          <?php if($_SESSION['user_role'] == 1){ ?>
          <li class="nav-item"><a href="/richard/option_branding/add_branding.php" class="nav-link"><i class="icon ion-plus-circled mr-2"></i>Add Branding</a></li>
          <?php } ?>
        </ul>

        <!-- Social Accounts -->
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-link tx-20"></i>
            <span class="menu-item-label">Social Accounts</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="/richard/option_social_accounts/view_social_account.php" class="nav-link"><i class="ion-information-circled mr-2"></i>View Accounts</a></li>
          <?php if($_SESSION['user_role'] == 1){ ?>
          <li class="nav-item"><a href="/richard/option_social_accounts/add_social_account.php" class="nav-link"><i class="icon ion-plus-circled mr-2"></i>Add Accounts</a></li>
          <?php } ?>
        </ul>

        <!-- Contacted Clients -->
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <ion-icon name="mail-unread"></ion-icon>
            <span class="menu-item-label">Clients Messages</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="/richard/option_contact/view_contact.php" class="nav-link"><i class="ion-information-circled mr-2"></i>Contact Messages</a></li>
          <li class="nav-item"><a href="/richard/option_subscribe/view_subscribe.php" class="nav-link"><i class="ion-information-circled mr-2"></i>Subscribers Emails</a></li>
        </ul>

        <!-- Footer Credit -->
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-at tx-20"></i>
            <span class="menu-item-label">Footer</span>
            <i class="menu-item-arrow fa fa-angle-down"></i> 
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="/richard/option_footer/view_footer.php" class="nav-link"><i class="ion-information-circled mr-2"></i>View Footer</a></li>
          <?php if($_SESSION['user_role'] == 1){ ?>
          <li class="nav-item"><a href="/richard/option_footer/add_footer.php" class="nav-link"><i class="icon ion-plus-circled mr-2"></i>Add Footer</a></li>
          <?php } ?>
        </ul>

      </div><!-- sl-sideleft-menu -->

      <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div><!-- sl-header-left -->
      <div class="sl-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name"><?= $after_assoc['name']; ?></span>
              <img src="/richard/uploads/profile/<?= $after_assoc['profile_image']; ?>" class="wd-32 rounded-circle" alt="" width="40" height="35">
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href="/richard/users/user_edit.php"><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                <li><a href="/richard/login/logout.php"><i class="icon ion-power"></i> Sign Out</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
      </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->