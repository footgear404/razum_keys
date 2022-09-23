<!-- =======================================================
* Template Name: RazumLife - v1.0.0
======================================================== -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Razum Keys</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/favicon.ico" rel="icon">
  <link href="img/favicon.ico" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <script
  src="https://code.jquery.com/jquery-3.6.1.js"
  integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
  crossorigin="anonymous"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="page-index">

    <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="img/logo.svg" alt="">
        <h1 class="d-flex align-items-center">Ключ</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#" class="active" onclick="history.back();">Назад</a></li>
          <!-- <li><a href="about.html">About</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="team.html">Team</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Contact</a></li> -->
        </ul>
      </nav><!-- .navbar -->

    </div>

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-xl-4">


          <form role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <select class="house-select form-select" name="form-select" aria-label="Выберите дом" onchange="getdate(event);" required>
                  <option selected disabled>Выберите дом</option>
                  <?php include '/api/houses-request.php'; ?>
                </select>

                  <input id="flat-select" class="form-control" type="number" name="flat-select" value="" placeholder="Кв.№" required>
              </div>

              <div class="col-md-6 form-group">
              <div class="form-group mt-3 mt-md-0">
                <input placeholder="+7 (123) 456-78-90" type="text" class="form-control phonenumb" name="phonenumb" value="" required />
                <input id="checkDate" name="checkDate" class="form-control" type="date" onchange="getdate(event);" required />
              </div>
              </div>
            </div>
            <div class="showTime"></div>

            <div class="text-center">
              <button class="btn btn-success" type="button" onclick="sendForm()">Отпарвить</button>
              <div class="send-result"></div>
              <!-- <button class="btn btn-success" type="button" name="button" >Отпарвить</button> -->
            </div>
          </form>
          <!-- <h2 data-aos="fade-up">Получить ключ от квартиры</h2>
          <blockquote data-aos="fade-up" data-aos-delay="100">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis cum recusandae eum laboriosam voluptatem repudiandae odio, vel exercitationem officiis provident minima. </p>
          </blockquote>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#about" class="btn-get-started">Get Started</a>
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div> -->

        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->



  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.php" class="logo d-flex align-items-center">
              <img src="img/logo-bw.svg" alt="">
              <span>Ключ</span>
            </a>
            <p>Улучшаем жизнь семей, создавая качественное, функциональное и эстетичное жилье, которое формирует облик города.</p>
            <div class="social-links d-flex  mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Может быть полезно</h4>
            <ul>
              <li><i class="bi bi-dash"></i> <a href="https://razum.life/#our" target="_blank">О компании</a></li>
              <li><i class="bi bi-dash"></i> <a href="https://razum.life/#money" target="_blank">Наши ценности</a></li>
              <li><i class="bi bi-dash"></i> <a href="https://razum.life/#projects" target="_blank">Наши проекты</a></li>
              <li><i class="bi bi-dash"></i> <a href="https://razum.life/novosty" target="_blank">Новости</a></li>
              <li><i class="bi bi-dash"></i> <a href="https://razum.life/#contacts" target="_blank">Контакты</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Контакты</h4>
            <p>
              Астрахань, Набережная <br>
              Приволжского Затона, 20в<br>
              <br><br>
              <strong>Телефон:</strong> +7 (8512) <b>20-05-20</b><br>
              <strong>Email:</strong> info@<b>razum.life</b><br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span><a href="https://razum.life/">Razum.life</a></span></strong>. All Rights Reserved
        </div>
        <div class="credits">

          Designed by <a href="mailto:semenchuk@razum.life">semenchuk@razum.life</a>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>



  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>
  <script src="/assets/js/datetime.js"></script>

</body>

</html>
