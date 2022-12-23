<?php
    session_start();
  
    if(isset($_SESSION['username'])){
            // echo "<script language=javascript>document.location.href='index2.php'</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>Krenavin Studio</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!--

TemplateMo 570 Chain App Dev

https://templatemo.com/tm-570-chain-app-dev

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="assets/images/KRENAVIN.png" height="75px" alt="Chain App Dev">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#services">Services</a></li>
              <li class="scroll-to-section"><a href="#about">About</a></li>
              <li class="scroll-to-section"><a href="#pricing">Pricing</a></li>
              <li><div class="gradient-button"><a href="login/logout.php"><i class="fa fa-user"></i> Welcome,  <?php echo $_SESSION['username'];?></a></div></li> 
            </ul>        
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->


  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Krenavin Studio</h2>
                    <p style="color: white">Krenavin Studio merupakan sebuah usaha yang berfokus pada bidang IPTEK <br>
                     terutama yang kaitannya dengan industri kreatif seperti Photography, Videography, Graphic Desain, dll.</p>
                  </div>
                  <div class="col-lg-12">
                    <div class="white-button first-button scroll-to-section">
                      <!--<a href="#contact">Free Quote <i class="fab fa-apple"></i></a>
                    </div>
                    <div class="white-button scroll-to-section">
                      <a href="#contact">Free Quote <i class="fab fa-google-play"></i></a>-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/slider-dec.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4>Amazing <em>Services &amp; Features</em> for you</h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <p></p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="service-item first-service">
            <div class="icon"></div>
            <h4>Photography</h4>
            <p>Melayani jasa fotografi produk, brand, dll.</p>
            <!--<div class="text-button">
              <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
            </div>-->
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item second-service">
            <div class="icon"></div>
            <h4>Videography</h4>
            <p>Kebutuhan videografi promosi produk, brand, dll.</p>
            <!--<div class="text-button">
              <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
            </div>-->
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item third-service">
            <div class="icon"></div>
            <h4>Graphic Design</h4>
            <p>Pembuatan Logo, mascot, desain grafis, dll.</p>
            <!--<div class="text-button">
              <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
            </div>-->
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item fourth-service">
            <div class="icon"></div>
            <h4>UI/UX Design</h4>
            <p>Pembuatan desain UI/UX untuk kebutuhan website</p>
            <!--<div class="text-button">
              <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
            </div>-->
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="section-heading">
            <h4>About <em>What We Do</em> &amp; Who We Are</h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <p>Krenavin berfokus kepada penyediaan jasa pada bidang insdustri kreatif</p>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="box-item">
                <h4><a href="#">Create Design</a></h4>
                <p>Membantu dalam membuat desain yang anda inginkan</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box-item">
                <h4><a href="#">Design Consultation</a></h4>
                <p>Konsultasi desain sesuai dengan makna dan filosofi perusahaan anda</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box-item">
                <h4><a href="#">Product Photoshoot</a></h4>
                <p>Buat produk anda semakin dikenal oleh banyak orang</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box-item">
                <h4><a href="#">Social Media Management</a></h4>
                <p>Manajemen sosial media usaha anda agar semakin dikenal</p>
              </div>
            </div>
            <!-- <div class="col-lg-12">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eismod tempor idunte ut labore et dolore adipiscing  magna.</p>

            </div> -->
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-image">
            <img src="assets/images/about-right-dec.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Testimonial [COMING SOON] -->
  <div id="clients" class="the-clients">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4>Check What <em>The Clients Say</em> About Our Sevice</h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <p>Mari cek bagaimana kepuasan pelanggan dan penilaian terhadap kualitas service yang kami berikan [COMING SOON FEATURE]</p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-7 align-self-center">
                  <div class="menu">
                    <div class="first-thumb active">
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-4 col-sm-4 col-12">
                            <h4>Bayu Indra</h4>
                            <span class="date">30 November 2022</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                            <span class="category">Social Media Administrator</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 col-12">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <span class="rating">5.0</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-4 col-sm-4 col-12">
                            <h4>Widi Adnyana</h4>
                            <span class="date">6 Desember 2022</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                            <span class="category">New App Ecosystem</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 col-12">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <span class="rating">3.9</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> 
                <div class="col-lg-5">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="client-content">
                                <img src="assets/images/quote.png" alt="">
                                <p>“Menurut saya service yang diberikan oleh Krenavin Studio ini sangat memuaskan. Mulai dari customer service nya yang ramah hingga pelayanannya yang cepat apabila terjadi permasalahan”</p>
                              </div>
                              <div class="down-content">
                                <img src="assets/images/client-image.jpg" alt="">
                                <div class="right-content">
                                  <h4>Bayu Indra</h4>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="client-content">
                                <img src="assets/images/quote.png" alt="">
                                <p>“Lorem ipsum dolor sit amet, consectetur adpiscing elit, sed do eismod tempor idunte ut labore et dolore magna aliqua darwin kengan
                                  lorem ipsum dolor sit amet, consectetur picing elit massive big blasta.”</p>
                              </div>
                              <div class="down-content">
                                <img src="assets/images/client-image.jpg" alt="">
                                <div class="right-content">
                                  <h4>Random Staff</h4>
                                  <span>Manager, Digital Company</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>          
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="pricing" class="pricing-tables">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4>We Have The Best Pre-Order <em>Prices</em> You Can Get</h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eismod tempor incididunt ut labore et dolore magna.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing-item-regular">
            <span class="price">$5</span>
            <h4>Paket Satuan</h4>
            <div class="icon">
              <img src="assets/images/pricing-table-01.png" alt="">
            </div>
            <ul>
              <li>Photography Produk</li>              
            </ul>
            <div class="border-button">
              <a href="https://api.whatsapp.com/send/?phone=6281238117639&text&type=phone_number&app_absent=0">Purchase This Plan Now</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing-item-regular">
            <span class="price">$5</span>
            <h4>Paket Satuan</h4>
            <div class="icon">
              <img src="assets/images/pricing-table-01.png" alt="">
            </div>
            <ul>           
              <li>Videography Produk/Brand</li>
            </ul>
            <div class="border-button">
              <a href="https://api.whatsapp.com/send/?phone=6281238117639&text&type=phone_number&app_absent=0">Purchase This Plan Now</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing-item-regular">
            <span class="price">$5</span>
            <h4>Paket Satuan</h4>
            <div class="icon">
              <img src="assets/images/pricing-table-01.png" alt="">
            </div>
            <ul>           
              <li>Graphic Design</li>
            </ul>
            <div class="border-button">
              <a href="https://api.whatsapp.com/send/?phone=6281238117639&text&type=phone_number&app_absent=0">Purchase This Plan Now</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing-item-regular">
            <span class="price">$12</span>
            <h4>Paket Low</h4>
            <div class="icon">
              <img src="assets/images/pricing-table-01.png" alt="">
            </div>
            <ul>
            <li>Logo Design</li>
              <li>Photoshoot Product</li>              
              <li class="non-function">Videoshoot Product</li>
              <li class="non-function">Social Media Management</li>
              <li class="non-function">Website + Hosting</li>
              <li>1x Revision</li>
            </ul>
            <div class="border-button">
              <a href="https://api.whatsapp.com/send/?phone=6281238117639&text&type=phone_number&app_absent=0">Purchase This Plan Now</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing-item-regular">
          <span class="price">$25</span>
            <h4>Paket Mid</h4>
            <div class="icon">
              <img src="assets/images/pricing-table-01.png" alt="">
            </div>
            <ul>
            <li>Logo Design</li>
              <li>Photoshoot Product</li>              
              <li>Videoshoot Product</li>
              <li>Social Media Management</li>
              <li class="non-function">Website + Hosting</li>
              <li>3x Revision</li>
            </ul>
            <div class="border-button">
              <a href="https://api.whatsapp.com/send/?phone=6281238117639&text&type=phone_number&app_absent=0">Purchase This Plan Now</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing-item-regular">
            <span class="price">$66</span>
            <h4>Paket High</h4>
            <div class="icon">
              <img src="assets/images/pricing-table-01.png" alt="">
            </div>
            <ul>
              <li>Logo Design</li>
              <li>Photoshoot Product</li>              
              <li>Videoshoot Product</li>
              <li>Social Media Management</li>
              <li>Website + Hosting</li>
              <li>5x Revision</li>
            </ul>
            <div class="border-button">
              <a href="https://api.whatsapp.com/send/?phone=6281238117639&text&type=phone_number&app_absent=0">Purchase This Plan Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 

  <footer id="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <!--<h4>Join our mailing list to receive the news &amp; latest trends</h4>-->
          </div>
        </div>
        <div class="col-lg-6 offset-lg-3">
          <form id="search" action="#" method="GET">
            <div class="row">
              <div class="col-lg-6 col-sm-6">
                <!--<fieldset>
                  <input type="address" name="address" class="email" placeholder="Email Address..." autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6 col-sm-6">
                <fieldset>
                  <button type="submit" class="main-button">Subscribe Now <i class="fa fa-angle-right"></i></button>
                </fieldset>-->
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>Contact Us</h4>
            <p>Denpasar, Bali</p>
            <p><a href="#">088219257877</a></p>
            <p><a href="#">krenavinstudio@gmail.com</a></p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>About Us</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Testimonials</a></li>
            </ul>
            <!--<ul>
              <li><a href="#">About</a></li>
              <li><a href="#">Testimonials</a></li>
              <li><a href="#">Pricing</a></li>
            </ul>-->
          </div>
        </div>
        <div class="col-lg-3">
          <div class="footer-widget">
            <div class="logo">
              <img src="assets/images/logo.png" size="75px" alt="">
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="copyright-text">
            <p>Copyright © 2022 Krenavin Studio 
        </p>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>