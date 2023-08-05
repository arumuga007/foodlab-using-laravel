<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=REM:wght@300;500&display=swap" rel="stylesheet">
  <script src="{{asset('js/scrollFunction.js')}}" defer></script>
  <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}" />
  <link rel="stylesheet" href="{{asset('css/stylehome.css')}}" />
  <link rel="icon" href="css/logo1.jpg  " type="image/jpg">
  <title>Selection Project</title>
</head>
<style>
</style>
<body>
  <div class="container">    
    <div class="header">
      <div class="logo-and-name">
      <div class="logo animate-text"></div>
      <div class="Organisation_name animate-text">Food Lab</div>
      </div>
      <label>
        <i class="menu-icon animate-text" onclick="getMenu()">Menu</i>
      </label>
      <nav class="menu-items hide">
        <div class="item1 animate-text" style="position: relative;">Home</div>
        <div class="item2 animate-text">Services</div>
        <div class="item3 animate-text">Gallery</div>
        <div class="item4 animate-text">Co-traveller</div>
        <div class="item5 animate-text">FAQs</div>
        <div class="item6 animate-text getprofile">Contact Us</div>
        <div class="item7 animate-text" onclick="getPersonalInfo()">Your Profile</div>
      </nav>
  </div>
  <section class="main swiper mySwiper" style="position:relative;">
  <div class="profile">
      <div class="personal-details person-heading">Personal Information:</div>
      <div class="personal-details person-name"> Name :  {{auth()->user()->name}}</div>
      <div class="personal-details person-name"> Email &nbsp;: {{auth()->user()->email}}</div>
      <a href="logout" class="personal-details logout">Log out</a>
      
    </div>
      <div class="wrapper swiper-wrapper">
        <div class="slide swiper-slide">
          <img src="images/firstslide.jpg" alt="" class="image" />
          <div class="image-data animate-text">
            <span class="text ">Enjoy the finest food.</span>
            <h2>
              Enjoy Our Exclusive <br />
              Food and Drink
            </h2>
            <a href="#" class="button">About Us</a>
          </div>
        </div>
        <div class="slide swiper-slide">
          <img src="images/secondslide.jpeg" alt="" class="image" />
          <div class="image-data">
            <span class="text">We really like what we do.</span>
            <h2>
              Innovation sparks some<br />
              gastronomic revolutions
            </h2>
            <a href="#" class="button">About Us</a>
          </div>
        </div>
        <div class="slide swiper-slide">
          <img src="images/thirdslide.jpeg" alt="" class="image" />
          <div class="image-data">
            <span class="text">Making Our Food with lover.</span>
            <h2>
              Where chefs innovate<br />
              palates celebrate
            </h2>
            <a href="#" class="button">About Us</a>
          </div>
        </div>
      </div>

      <div class="swiper-button-next nav-btn"></div>
      <div class="swiper-button-prev nav-btn"></div>
      <div class="swiper-pagination"></div>
    </section>
    </div>
    <article>
    <div class="intro">
      <h1 class="intro-head line-above">Food Safety Services</h1>
      <div class="float-shape" style="right: 0; border-bottom-left-radius: 50px;"></div>
    </div>
    <div class="intro-content">
      <div class="img-container">
        <div class="left-img">
          <img src="images/firstintro.jpeg" alt="" class="left-img1">
          <img src="images/secondintro.jpeg" alt="" class="left-img1">
        </div>
        <div class="right-img">
        <img src="images/thirdintro.jpg" alt="" class="right-img1">
        </div>
      </div>
      <div class="about-foodlab">
        Welcome to Food Lab, where culinary exploration meets innovation. Discover a gastronomic journey like no other as we blend cutting-edge techniques with the finest ingredients to create delectable masterpieces. Join us to experience the art of food at its finest, tantalizing your taste buds with every delightful bite. Indulge, savor, and celebrate the love for food at Food Lab.
      </div>
    </div>
    </article>
    <footer class="footer">
      <div class="footer-contact  ">
          <div class="contact-headings ">Food Lab</div>
          <div class="phone"><strong>Phone: </strong>+91 91454 48375</div>
          <div class="email"><strong>Email: </strong>foodlab@in</div>
          <div class="shape-on-footer"></div>
      </div>
      <div class="footer-info">
        <div class="useful-info">
          <div class="useful-link">
            <div class="useful-link-head footer-nav contact-headings line-above" style="position: relative;">Useful Link</div>
            <div class="footer-nav">Home</div>
            <div class="footer-nav">Services</div>
            <div class="footer-nav">Registration</div>
            <div class="footer-nav">Gallery</div>
            <div class="footer-nav">FAQs</div>
          </div>
          <div class="support">
            <div style="visibility: hidden;">Nothing</div>
            <div class="support-sub">Support</div>
            <div class="support-sub">Contact Us</div>
          </div>
          <div class="site-map">
            <div class="useful-link-head footer-nav contact-headings line-above" style="position: relative;">Site Map</div>
            <div class="footer-nav">Home</div>
            <div class="footer-nav">Services</div>
            <div class="footer-nav">Registration</div>
            <div class="footer-nav">Gallery</div>
            <div class="footer-nav">FAQs</div>
          </div>
        </div>
        <div class="footer-copyright">
            FoodLabs inc. &copy; Copyright 2023. All Rights Reserved.
        </div>
      </div>
    </footer>
    <!-- Swiper JS -->
    <script src="{{asset('js/swiper-bundle.min.js')}}"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        loop: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
</body>
</html>