
<div class="swiper-container">
    <div class="swiper-wrapper">
		<div class="swiper-slide" style="background-image:url(continut/img/noah-bogaard-rlLO0Rk_eGI-unsplash.jpg)"></div>
		<div class="swiper-slide" style="background-image:url(continut/img/truck-4718474_1280.jpg)"></div>
		<div class="swiper-slide" style="background-image:url(continut/img/nezar-bani-nasur-2-UfGYK70YQ-unsplash.jpg)"></div>
    <div class="swiper-slide" style="background-image:url(continut/img/auto-4798125_1280.jpg)"></div>
	  <div class="swiper-slide" style="background-image:url(continut/img/car-2900898_1280.jpg)"></div>
	  <div class="swiper-slide" style="background-image:url(continut/img/dodge-charger-1858599_1920.jpg)"></div>
	  <div class="swiper-slide" style="background-image:url(continut/img/asdfgfgdfgfdgdfhtyhrthg.jpg)"></div>
	  <div class="swiper-slide" style="background-image:url(continut/img/foad-memariaan-rgLgPbmFU18-unsplash.jpg)"></div>
	  <div class="swiper-slide" style="background-image:url(continut/img/mostafa-jamei-GdC-D3dMkFY-unsplash.jpg)"></div>
</div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>

	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 50,
          modifier: 1,
          slideShadows: true,
      },
      autoplay: {
          delay: 2300,
          disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>

<div class="container col-lg-11">
  <p>Din cauza faptului că românii gasesc foarte greu anumite piese de Dodge, ne-am gândit să venim în ajutorul acestora cu un proiect care are scopul de a găsi piesele dorite mașinii lor, marca Dodge, în cel mai scurt timp. <br><br>Ideea proiectului a venit în urma problemelor asemănatoare întâmpinate de către fondator.</p>
</div>

<div>&nbsp;</div><div class="clearfix">&nbsp;</div>


<center>
  <div class="continut col-lg-11">  
      <?php
      include_once "produse/produse.php";
      ?>
  </div>
</center>