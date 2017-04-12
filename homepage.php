<?php require_once('header_en.php'); ?>
<section class="main-slider">
  <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="7000">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
      <li data-target="#myCarousel" data-slide-to="7"></li>
    </ol>
    <!-- Carousel items -->
    <div class="carousel-inner">
      <!-- Slide 1 : Active -->
      <!--<div class="item active">
        <img src="images/demo/slider/slide_1.png" />
      </div>-->
      <div class="item active">
        <img src="images/demo/slider/slide_2.png" />
      </div>
      <div class="item">
        <img src="images/demo/slider/slide_3.png" />
      </div>
      <div class="item">
        <img src="images/demo/slider/slide_4.png" />
      </div>
      <div class="item">
        <img src="images/demo/slider/slide_5.png" />
      </div>
      <div class="item">
        <img src="images/demo/slider/slide_6.png" />
      </div>
      <div class="item">
        <img src="images/demo/slider/slide_7.png" />
      </div>
      <div class="item">
        <img src="images/demo/slider/slide_8.png" />
      </div>

    </div><!-- /.carousel-inner -->
    <!-- Controls -->
    <div class="control-box">
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="control-icon prev fa fa-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="control-icon next fa fa-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.control-box -->
  </div><!-- /#myCarousel -->
</section><!-- /.main-slider -->
<?php require_once('footer_en.php'); ?>
<script type="text/javascript">
	$(document).ready(function() {
    	$('.carousel').carousel({
      	interval: 7000
    })
  });
</script>