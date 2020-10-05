<html>

    <head>
    
    

    </head>
    
    <body>
        
        <?php
            include 'inc/base.php'; //La barre de navigation, en include
        ?>
        
        
       
        
        <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
        
        
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
        <link rel="stylesheet" href="css/index.css">
        
      
<div class="testtest">
          <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide"> <img src="img/menu/img1.jpg"> </div>
      <div class="swiper-slide"> <img src="img/menu/img2.jpg"> </div>
      <div class="swiper-slide"> <img src="img/menu/img3.jpg"> </div>
      <div class="swiper-slide"> <img src="img/menu/img4.jpg"> </div>
      <div class="swiper-slide"> <img src="img/menu/img5.jpg"> </div>
      <div class="swiper-slide"> <img src="img/menu/img6.jpg"> </div>
      <div class="swiper-slide"> <img src="img/menu/img7.jpg"> </div>
      <div class="swiper-slide"> <img src="img/menu/img8.jpg"> </div>
      <div class="swiper-slide"> <img src="img/menu/img9.jpg"> </div>
      <div class="swiper-slide"> <img src="img/menu/img10.jpg"> </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>
        
        
</div>
        
        
        
        

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      direction: 'vertical',
      //slidesPerView: 2,
      //spaceBetween: 30,
      loop: true,
      centeredSlides: true,
      keyboard: true,
      mousewheel: true,
      
      // Default parameters
  slidesPerView: 4,
  spaceBetween: 20,
  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 320px
    500: {
      slidesPerView: 3,
      spaceBetween: 20
    },
    // when window width is >= 480px
    1200: {
      slidesPerView: 2,
      spaceBetween: 20
    },
    // when window width is >= 640px
    1600: {
      slidesPerView: 2,
      spaceBetween: 20
    }
  },
   
        

      pagination: {
        el: '.swiper-pagination',
        clickable: true,
        
      },
    });
  </script>
        
        
         <?php
            include 'inc/sidebar.php'; //La barre de navigation, en include
        ?>
        
        
        <!--<script src="js/monscript.js"></script>-->
        

        

        
    </body>
    

    
</html>