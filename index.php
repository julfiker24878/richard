<?php
require 'db.php';
session_start();

//User Select
$select_user = "SELECT * FROM table1";
$select_user_result = mysqli_query($db_connect, $select_user);
$after_assoc_user = mysqli_fetch_assoc($select_user_result);
$active_id = $after_assoc_user['id'];

//Logo
$select_logo = "SELECT * FROM logo";
$select_logo_result = mysqli_query($db_connect, $select_logo);
$after_assoc_logo = mysqli_fetch_assoc($select_logo_result);

//Menu
$select_menu = "SELECT * FROM menu";
$select_menu_result = mysqli_query($db_connect, $select_menu);

//Banner
$select_banner = "SELECT * FROM banner WHERE status = 1";
$select_banner_result = mysqli_query($db_connect, $select_banner);
$after_assoc_banner = mysqli_fetch_assoc($select_banner_result);

//about
$select_about = "SELECT * FROM about";
$select_about_result = mysqli_query($db_connect, $select_about);
$after_assoc_about = mysqli_fetch_assoc($select_about_result);

//Skills
$select_skill = "SELECT * FROM skills ORDER BY id DESC LIMIT 3";
$select_skill_result = mysqli_query($db_connect, $select_skill);
$after_assoc_skill = mysqli_fetch_assoc($select_skill_result);

//Service
$select_services = "SELECT * FROM services WHERE status=1";
$select_services_result = mysqli_query($db_connect, $select_services);

//Experience
$select_experiences = "SELECT * FROM experiences";
$select_experiences_query = mysqli_query($db_connect, $select_experiences);

//Projects
$select_projects = "SELECT * FROM projects";
$select_projects_query = mysqli_query($db_connect, $select_projects);

//Testimonials
$select_testimonials = "SELECT * FROM testimonials";
$select_testimonials_query = mysqli_query($db_connect, $select_testimonials);

//Blogs
$select_blogs = "SELECT * FROM blogs ORDER BY id DESC LIMIT 3";
$select_blogs_query = mysqli_query($db_connect, $select_blogs);

//Brandings
$select_brandings = "SELECT * FROM brandings";
$select_brandings_query = mysqli_query($db_connect, $select_brandings);

//Social Accounts
$select_social_account = "SELECT * FROM social_accounts WHERE status=1";
$select_social_account_query = mysqli_query($db_connect, $select_social_account);

//Footer
$select_footer = "SELECT * FROM footer";
$select_footer_result = mysqli_query($db_connect, $select_footer);
$after_assoc_footer = mysqli_fetch_assoc($select_footer_result);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Richard. - Easy Onepage Personal Template">
    <meta name="author" content="Paul">
    
    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <title>Richard. - Easy Onepage Personal Template</title>
  </head>
<body>
   
   <!-- Loader -->
   <div class="loader">
    <div class="spinner"><div class="double-bounce1"></div><div class="double-bounce2"></div></div>
   </div>
  
    <!-- Click capture -->
   <div class="click-capture d-lg-none"></div>

    <!-- Navbar -->  
    <nav id="scrollspy" class="navbar navbar-desctop">
        
      <div class="d-flex position-relative w-100">

        <!-- Brand-->
        <a class="navbar-brand" href="#"><?= $after_assoc_logo['logo_text']; ?></a>
          <ul class="navbar-nav-desctop mr-auto d-none d-lg-block">

            <?php foreach($select_menu_result as $menu_item){ ?>
              <li><a class="nav-link" href="<?= $menu_item['link']; ?>"><?= $menu_item['name']; ?></a></li>
            <?php } ?>

          </ul>

        <!-- Social -->
        <ul class="social-icons mr-auto mr-lg-0 d-none d-sm-block">

          <?php foreach($select_social_account_query as $social_account){ ?>
            <li><a href="<?= $social_account['link']; ?>"><ion-icon name="<?= $social_account['icon']; ?>"></ion-icon></a></li>
          <?php } ?>
           
        </ul>

        <!-- Toggler -->
        <button class="toggler d-lg-none ml-auto">
          <span class="toggler-icon"></span>
          <span class="toggler-icon"></span>
          <span class="toggler-icon"></span>
        </button>
      </div>
    </nav>


    <!-- Navbar Mobile -->  
    <nav id="navbar-mobile" class="navbar navbar-mobile d-lg-none">
      <ion-icon class="close" name="close-outline"></ion-icon>

      <!-- Social -->
      <ul class="social-icons mr-auto mr-lg-0">

          <?php foreach($select_social_account_query as $social_account){ ?>
            <li><a href="<?= $social_account['link']; ?>"><ion-icon name="<?= $social_account['icon']; ?>"></ion-icon></a></li>
          <?php } ?>

      </ul>

      <ul class="navbar-nav navbar-nav-mobile">
        <li><a class="nav-link" href="#home">Home</a></li>
        <li><a class="nav-link" href="#about">About</a></li>
        <li><a class="nav-link" href="#experience">Experience</a></li>
        <li><a class="nav-link" href="#projects">Projects</a></li>
        <li><a class="nav-link" href="#testimonials">Testimonials</a></li>
       </ul>
       <div class="navbar-mobile-footer">
        <p>© 2020 Richard. All Rights Reserved.</p>
       </div>
    </nav>

    <!-- Banner -->
    <main id="home" class="masthead jarallax" style="background-image:url('banner/uploaded/<?= $after_assoc_banner['banner_image']; ?>');" role="main">
      <div class="opener">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-5">
              <h1>
              <?php
                if(empty($after_assoc_banner['heading'])){
                  echo "Hey, I am Richard.";
                }else{
                  echo $after_assoc_banner['heading'];
                }
              ?>
              </h1>
              <p class="lead mt-4 mb-5">
              <?php
                if(empty($after_assoc_banner['description'])){
                  echo "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form";
                }else{
                  echo $after_assoc_banner['description'];
                }
              ?>
              </p>
              <button type="button" class="btn" data-toggle="modal" data-target="#send-request">
              <?php
                if(empty($after_assoc_banner['btn_text'])){
                  echo "LET'S TALK";
                }else{
                  echo $after_assoc_banner['btn_text'];
                }
              ?>
              </button>
          </div>
          </div>
        </div>
      </div>
    </main>

    <!-- About -->
    <section id="about" class="section">
     <div class="container">
       <h2 data-aos="fade-up"><?= $after_assoc_about['heading']; ?></h2>
       <section class="mt-4">
          <div class="row">
            <div class="col-md-6 col-lg-5 mb-5 mb-md-0" data-aos="fade-up">
              <p><?= $after_assoc_about['des']; ?></p>
              <div class="experience d-flex align-items-center">
                <div class="experience-number text-parallax"><?= $after_assoc_about['year']; ?></div><div class="text-dark mt-3 ml-4">Years<br> of experience</div>
              </div>
            </div>
            <div class="col-md-5 offset-lg-2" data-aos="fade-in" data-aos-delay="50">
              <?php foreach($select_skill_result as $sr){ ?>
              <h6><?= $sr['skill']; ?></h6>
              <div class="progress mb-5">
                <div class="progress-bar" role="progressbar" data-aos="width" style="width: <?= $sr['percentage']; ?>%" aria-valuenow="<?= $sr['percentage']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <?php } ?>
            </div>
          </div>
        </section>
      </div>
    </section>
    
    <!-- Services -->
    <section class="section bg-dark">
     <div class="container">
        <div class="container">
            <div class="row">
              <?php foreach($select_services_result as $service){ ?>
                <div class="col-md-4 mb-4 mb-md-0" data-aos="fade-in">
                  <ion-icon class="text-white" name="<?= $service['service_icon']; ?>"></ion-icon>
                  <h6 class="text-white"><?= $service['title']; ?></h6>
                  <p><?= $service['des']; ?></p>
                </div>
              <?php } ?>
            </div>
        </div>
      </div>
    </section>
      
     <!-- Experience -->
     <section id="experience" class="section pb-0">
      <div class="container">
        <div class="row align-items-end">
          <div class="col-md-6" data-aos="fade-up"><h2 class="mb-3 mb-md-0">Experience</h2></div>
          <div class="col-md-5 offset-md-1 text-md-right"><h6 class="my-0 text-gray"><a href="option_experience/cv/cv.pdf" download>Download my cv</a></h6></div>
        </div>
        <div class="mt-5 pt-5">

          <?php foreach($select_experiences_query as $experiences){ ?>
          <div class="row-experience row justify-content-between" data-aos="fade-up">
            <div class="col-md-4">
              <div class="h6 my-0 text-gray"><?= $experiences['duration']; ?></div>
              <h5 class="mt-2 text-primary text-uppercase"><?= $experiences['company']; ?></h5>
            </div>
            <div class="col-md-4">
              <h5 class="mb-3 mt-0 text-uppercase"><?= $experiences['designation']; ?></h5>
            </div>
            <div class="col-md-4">
              <p><?= $experiences['des']; ?></p>
            </div>
          </div>
          <?php } ?>

        </div>
      </div>
    </section>
    
    <!-- Projects -->
    <section id="projects" class="section">
     <div class="container">
        <div class="row align-items-end">
          <div class="col-md-6" data-aos="fade-up"><h2 class="mb-3 mb-md-0">Featured projects</h2></div>
          <div class="col-md-5 offset-md-1 text-md-right"><h6 class="my-0 text-gray"><a href="#">View all projects</a></h6></div>
        </div>
        <div class="mt-5 pt-5" data-aos="fade-in">
          <div class="carousel-project owl-carousel">

            <?php foreach($select_projects_query as $project){ ?>
             <div class="project-item">
                <a href="#<?= $project['id']; ?>" class="popup-with-zoom-anim">
                  <figure class="position-relative">
                    <img alt="" class="w-100" src="option_projects/uploaded/<?= $project['project_image']; ?>">
                    <figcaption class="text-white">
                      <h3 class="mb-2 text-white"><?= $project['title']; ?></h3>
                      <p><?= $project['type']; ?></p>
                    </figcaption>
                  </figure>
                </a>
             </div>
            <?php } ?>

         </div>
        </div>
      </div>
    </section>

    <!-- Project Modal Dialog -->
    <?php foreach($select_projects_query as $project_modal){ ?>
    <div id="<?= $project_modal['id']; ?>" class="container mfp-hide zoom-anim-dialog">
      <h2 class="mt-0"><?= $project_modal['title']; ?></h2>
      <div class="mt-5 pt-2 text-dark">
        <div class="row">
          <div class="mb-5 col-md-6 col-lg-3">
            <h6 class="my-0">Clients:</h6>
            <span><?= $project_modal['clients']; ?></span>
          </div>
          <div class="mb-5 col-md-6 col-lg-3">
            <h6 class="my-0">Completion:</h6>
            <span><?= $project_modal['completion']; ?></span>
          </div>
          <div class="mb-5 col-md-6 col-lg-3">
            <h6 class="my-0">Project Type:</h6>
            <span><?= $project_modal['type']; ?></span>
          </div>
          <div class="mb-5 col-md-6 col-lg-3">
            <h6 class="my-0">Authors</h6>
            <span><?= $project_modal['authors']; ?></span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <h6 class="my-0">Budget:</h6>
            <span>$<?= $project_modal['budget']; ?></span>
          </div>
        </div>
      </div>
      <img alt="" class="mt-5 pt-2 w-100" src="option_projects/uploaded/<?= $project_modal['project_image']; ?>">
    </div>
  <?php } ?>

    
    <!-- Testimonials -->
    <section id="testimonials" class="testimonials section">
      <div class="container">
         <div class="carousel-testimonials owl-carousel">

          <?php foreach($select_testimonials_query as $testimonial){ ?>
             <div class="col-testimonial" data-aos="fade-up">
                <span class="quiote">"</span>
                <p data-aos="fade-up"><?= $testimonial['comment']; ?></p>
                <p class="mt-5 text-dark" data-aos="fade-up"><strong><?= $testimonial['name']; ?></strong> - <?= $testimonial['designation']; ?></p>
             </div>
          <?php } ?>

         </div>
       </div>
    </section>

     <!-- News -->
    <section id="news" class="section bg-light">
     <div class="container">
        <div class="row align-items-end">
          <div class="col-md-6" data-aos="fade-up"><h2 class="mb-3 mb-md-0">Latest news</h2></div>
          <div class="col-md-5 offset-md-1 text-md-right"><h6 class="text-gray my-0"><a href="option_blog/blogs.php">View all news</a></h6></div>
        </div>
        <div class="mt-5 pt-5">
          <div class="row-news row">

            <?php foreach($select_blogs_query as $blog){ ?>
              <div class="col-news col-md-6 col-lg-4" data-aos="fade-in" data-aos-delay="0">
                <figure class="position-relative">
                  <div class="position-relative">
                    <a href=""><img alt="" class="w-100 d-block" src="option_blog/uploaded/<?= $blog['blog_image']; ?>"></a>
                    <mark class="date"><?= $blog['posted_at']; ?></mark>
                  </div>
                  <figcaption><h5><a href="option_blog/blog.php?id=<?= $blog['id']; ?>"><?= $blog['title']; ?></a></h5><?= substr($blog['des'], 0, 50)."..." ?>
                  </figcaption>
                </figure>
              </div>
            <?php } ?>

         </div>
        </div>
      </div>
    </section>

    <!-- Partners -->
    <section id="partners" class="section-sm">
       <div class="container">
         <div class="row-partners row">

          <?php foreach($select_brandings_query as $brand){ ?>
            <div class="col-partner col-md-6 col-lg-3" data-aos="fade-in">
              <img alt="" src="option_branding/uploaded/<?= $brand['brand_image']; ?>">
            </div>
          <?php } ?>

         </div>
       </div>
    </section>


    <!-- Footer after_assoc_footer -->  
    <footer>
      <div class="section bg-dark py-5 pb-0">
        <div class="container">
          <div class="row">
           <div class="col-md-6 col-lg-3">
             <h6 class="text-white mb-4">Phone:</h6>
             <p class="text-white mb-4"><?= $after_assoc_footer['phone']; ?></p>
            </div>
            <div class="col-md-6 col-lg-3">
             <h6 class="text-white mb-4">Email:</h6>
             <p class="text-white mb-4"><?= $after_assoc_footer['email']; ?></p>
            </div>
            <div class="col-md-6 col-lg-3">
              <h6 class="text-white mb-4">Follow me:</h6>
              <ul class="social-icons">
                <?php foreach($select_social_account_query as $social_account){ ?>
                  <li><a href="<?= $social_account['link']; ?>"><ion-icon name="<?= $social_account['icon']; ?>"></ion-icon></a></li>
                <?php } ?>
              </ul>
            </div>
            <div class="col-md-6 col-lg-3">
              <h6 class="text-white mb-4">Subscribe:</h6>
              <form action="./option_subscribe/insert_subscribe.php" method="POST">
                <div class="input-group">
                  <input id="mc-email" type="email" name="email" class="form-control" placeholder="Email" required>
                  <div class="input-group-append">
                    <button class="btn" type="submit">Go</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-copy section-sm">
        <div class="container"><?= $after_assoc_footer['credit']; ?></div>
       </div>
    </footer>
     
    <!-- Modal -->
    <div class="modal fade" id="send-request">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title mt-0">Send request</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Leave your contacts and our managers will contact you soon.</p>
            <form action="./option_contact/insert_contact.php" method="POST">
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Name">
              </div>
              <div class="form-group">
                <input type="email" name="email"  class="form-control" required="" placeholder="Email *">
              </div>
              <div class="form-group">
                <textarea rows="3" name="message"  class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group mb-0 text-right">
                <button type="submit" class="btn">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
<!-- Optional JavaScript -->
<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/popper.min.js" ></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
<script src="js/jarallax.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/interface.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php if(isset($_SESSION['success'])){ ?>
<script>
  swal("Congratulations!", "<?= $_SESSION['success']; ?>", "success");
</script>
<?php } unset($_SESSION['success']); ?>

<?php if(isset($_SESSION['success_subscribe'])){ ?>
<script>
  swal("Congratulations!", "<?= $_SESSION['success_subscribe']; ?>", "success");
</script>
<?php } unset($_SESSION['success_subscribe']); ?>

</body>
</html>