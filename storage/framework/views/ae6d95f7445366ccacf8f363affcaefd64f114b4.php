<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Rajasthan Ujala</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo e(URL::asset('assets/img/favicon.png" rel="icon')); ?>/">
  <link href="<?php echo e(URL::asset('assets/img/apple-touch-icon.png')); ?>" rel="apple-touch-icon"/>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  
  <link href="<?php echo e(URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(URL::asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(URL::asset('assets/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(URL::asset('assets/vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(URL::asset('assets/vendor/aos/aos.css')); ?>" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="<?php echo e(URL::asset('assets/css/main.css')); ?>" rel="stylesheet"/>
 
  <link href=" <?php echo e(URL::asset('assets/css/variables.css')); ?>" rel="stylesheet"/>

  <style>
th, td {
  border: 1px solid black;
  border-collapse: collapse;
}



    a:link {
      color: white;
      background-color: transparent;
      text-decoration: none;
    }

    a:visited {
      color: white;
      background-color: transparent;
      text-decoration: none;
    }

    a:hover {
      color: white;
      background-color: transparent;
      text-decoration: underline;
    }

    a:active {
      color: white;
      background-color: transparent;
      text-decoration: underline;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top ">
    <nav id="navbar" class="navbar navbar-dark bg-dark container-fluid">
      <div class=" container-xl d-flex align-items-center justify-content-between">

        <a href="<?php echo e(url('/')); ?>" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <Img>
          <h1 style="color: aliceblue;">Rajasthan Ujala</h1>
        </a>


        <ul>
          <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
          <li><a href="<?php echo e(url('lastest_news')); ?>">Latest News</a></li>
          <li class="dropdown"><a href="<?php echo e(url('')); ?>"><span>Categories</span> <i
                class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul class="bg-dark">
              <li><a href="search-result.html">Business</a></li>
              <li><a href="search-result.html">Bollywood</a></li>
              <li><a href="#">sports</a></li>
              <li><a href="#">politicies</a></li>
              <li><a href="#">Education</a></li>
              <li><a href="#">Entertainment</a></li>
              <li><a href="#">Technology</a></li>
              <li><a href="#">Lifestyle</a></li>
              <li><a href="#">Classifieds</a></li>
            </ul>
          </li>
          <li><a href="<?php echo e(url('blog')); ?>">Blog</a></li>
          <li><a href="<?php echo e(url('e_paper')); ?>">E-Paper</a></li>
          <li><a href="<?php echo e(url('gallery')); ?>">Gallery</a></li>

        </ul>
        <!-- .navbar -->
        <button type="button" class="btn btn-danger">
          Subscribe
      </button>
        <div class="position-relative" style="color: aliceblue;">



          <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
          <!-- <i class="bi bi-list mobile-nav-toggle"></i> -->
          
            
              <div class="display-date">
                <span id="day">day</span>,
                <span id="daynum">00</span>
                <span id="month">month</span>
                <span id="year">0000</span>
                
              </div>
              <div class="display-time"></div>
            </div>
           
          
          <!-- ======= Search Form ======= -->
          <div class="search-form-wrap js-search-form-wrap">
            <form action="search-result.html" class="search-form">
              <span class="icon bi-search"></span>
              <input type="text" placeholder="Search" class="form-control">
              <button class="btn js-search-close"><span class="bi-x"></span></button>
            </form>
          </div>
          <!-- End Search Form -->

        </div>

   
    </nav>
  </header><!-- End Header -->




  

  <?php echo $__env->yieldContent('content'); ?>







  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">

        <div class="row">
          <div class="col-lg-4">
            <h3 class="footer-heading">Rajasthan Ujala</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ab, perspiciatis beatae autem deleniti
              voluptate nulla a dolores, exercitationem eveniet libero laudantium recusandae officiis qui aliquid
              blanditiis omnis quae. Explicabo?</p>
            <p><a href="about.html" class="footer-link-more">Learn More</a></p>
          </div>
          <div class="col-6 col-lg-2">
            <h3 class="footer-heading">Navigation</h3>
            <ul class="footer-links list-unstyled">
              <li><a href="<?php echo e(url('/')); ?>"><i class="bi bi-chevron-right"></i> Home</a></li>
              <li><a href="<?php echo e(url('blog')); ?>"><i class="bi bi-chevron-right"></i> Blog</a></li>
              <li><a href="<?php echo e(url('category')); ?>"><i class="bi bi-chevron-right"></i> Categories</a></li>
              <li><a href="<?php echo e(url('/')); ?>single-post.html"><i class="bi bi-chevron-right"></i> Single Post</a></li>
              <li><a href="<?php echo e(url('/')); ?>about.html"><i class="bi bi-chevron-right"></i> About us</a></li>
              <li><a href="<?php echo e(url('/')); ?>contact.html"><i class="bi bi-chevron-right"></i> Contact</a></li>
            </ul>
          </div>
          <div class="col-6 col-lg-2">
            <h3 class="footer-heading">Categories</h3>
            <ul class="footer-links list-unstyled">
              <li><a href="<?php echo e(url('/')); ?>category.html"><i class="bi bi-chevron-right"></i> Business</a></li>
              <li><a href="<?php echo e(url('/')); ?>category.html"><i class="bi bi-chevron-right"></i> Culture</a></li>
              <li><a href="<?php echo e(url('/')); ?>category.html"><i class="bi bi-chevron-right"></i> Sport</a></li>
              <li><a href="<?php echo e(url('/')); ?>category.html"><i class="bi bi-chevron-right"></i> Food</a></li>
              <li><a href="<?php echo e(url('/')); ?>category.html"><i class="bi bi-chevron-right"></i> Politics</a></li>
              <li><a href="<?php echo e(url('/')); ?>category.html"><i class="bi bi-chevron-right"></i> Celebrity</a></li>
              <li><a href="<?php echo e(url('/')); ?>category.html"><i class="bi bi-chevron-right"></i> Startups</a></li>
              <li><a href="<?php echo e(url('/')); ?>category.html"><i class="bi bi-chevron-right"></i> Travel</a></li>

            </ul>
          </div>

          <div class="col-lg-4">
            <h3 class="footer-heading">Recent Posts</h3>

            <ul class="footer-links footer-blog-entry list-unstyled">
              <li>
                <a href="<?php echo e(url('/')); ?>single-post.html" class="d-flex align-items-center">
                  <img src="<?php echo e(url('/')); ?>assets/img/post-sq-1.jpg" alt="" class="img-fluid me-3">
                  <div>
                    <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span>
                      <span>Jul 5th '22</span></div>
                    <span>5 Great Startup Tips for Female Founders</span>
                  </div>
                </a>
              </li>

              <li>
                <a href="<?php echo e(url('/')); ?>single-post.html" class="d-flex align-items-center">
                  <img src="<?php echo e(url('/')); ?>assets/img/post-sq-2.jpg" alt="" class="img-fluid me-3">
                  <div>
                    <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span>
                      <span>Jul 5th '22</span></div>
                    <span>What is the son of Football Coach John Gruden, Deuce Gruden doing Now?</span>
                  </div>
                </a>
              </li>

              <li>
                <a href="<?php echo e(url('/')); ?>single-post.html" class="d-flex align-items-center">
                  <img src="<?php echo e(url('/')); ?>assets/img/post-sq-3.jpg" alt="" class="img-fluid me-3">
                  <div>
                    <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span>
                      <span>Jul 5th '22</span></div>
                    <span>Life Insurance And Pregnancy: A Working Mom’s Guide</span>
                  </div>
                </a>
              </li>

              <li>
                <a href="<?php echo e(url('/')); ?>single-post.html" class="d-flex align-items-center">
                  <img src="<?php echo e(url('/')); ?>assets/img/post-sq-4.jpg" alt="" class="img-fluid me-3">
                  <div>
                    <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span>
                      <span>Jul 5th '22</span></div>
                    <span>How to Avoid Distraction and Stay Focused During Video Calls?</span>
                  </div>
                </a>
              </li>

            </ul>

          </div>
        </div>
      </div>
    </div>
    <div class="footer-legal">
      <div class="container">

        <div class="row justify-content-between">
            <nav id="navbar" class=" navbar">
              <ul class="text-white">
                <li><a href="<?php echo e(url('/')); ?>about.html"> Home</a></li>
                <li><a href="<?php echo e(url('/')); ?>single-post.html">Lastest News</a></li>
                <li class="dropdown "><a href="category.html"><span>Categories</span> <i
                      class="bi bi-chevron-down dropdown-indicator"></i></a>
                  <ul>
                    <li><a href="<?php echo e(url('/')); ?>">Business</a></li>
                    <li><a href="<?php echo e(url('/')); ?>">Bollywood</a></li>
                    <li><a href="<?php echo e(url('/')); ?>#">Sports</a></li>
                    <li><a href="<?php echo e(url('/')); ?>#">Politics</a></li>
                    <li><a href="<?php echo e(url('/')); ?>#">Education</a></li>
                    <li><a href="<?php echo e(url('/')); ?>#">Entertainment</a></li>
                    <li><a href="<?php echo e(url('/')); ?>#">Technology</a></li>
                    <li><a href="<?php echo e(url('/')); ?>#">Lifestyle</a></li>
                    <li><a href="<?php echo e(url('/')); ?>#">Classifieds</a></li>
                  </ul>
                </li>

                <li><a href="<?php echo e(url('/')); ?>about.html">E-Paper</a></li>
                <li><a href="<?php echo e(url('/')); ?>about.html">Gallery</a></li>
                <li><a href="<?php echo e(url('/')); ?>about.html">About</a></li>
                <li><a href="<?php echo e(url('/contact')); ?>">Contact</a></li>
              </ul>
            </nav>
        </div>
      </div>
    </div>

    <div class="footer-legal">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            <div class="copyright">
              © Copyright <strong><span>Rajasthan Ujala </span></strong>. All Rights Reserved
            </div>

            <div class="credits">
            </div>

          </div>

          <div class="col-md-6">
            <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
              <a href="<?php echo e(url('/')); ?>#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="https://www.facebook.com/rajasthanujala" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://instagram.com/rajasthanujala?igshid=NTc4MTIwNjQ2YQ==" class="instagram"><i
                  class="bi bi-instagram"></i></a>
              <a href="https://youtube.com/@rajasthanujala1208" class="google-plus"><i class="bi bi-youtube"></i></a>
              <a href="<?php echo e(url('/')); ?>#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

        </div>

      </div>
    </div>

  </footer>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/script.js"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\RajasthanUjala\resources\views/layout/layout.blade.php ENDPATH**/ ?>