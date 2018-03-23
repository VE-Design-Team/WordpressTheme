
<style>
#carousel .navs {
  max-height: 100px;
}
@media (min-width: 768px) and (max-width: 991.98px) {
  #carousel .navs {
    max-height: 90px;
  }
}
#carousel .navs .indicators .col-1 {
  padding: 5px;
  max-height: 100px;
}
#carousel .navs .indicators .col-1 img {
  width: 100px;
  -webkit-filter: grayscale(100%);
  filter: grayscale(100%);
}
#carousel .navs .indicators .col-10 {
  margin: 0;
  padding: 0;
}
#carousel .scrollers {
  height: 100px;
}
#carousel .scrollers a .fa-chevron-circle-left {
  margin-top: 50%;
}
#carousel .scrollers a .fa-chevron-circle-right {
  margin-top: 50%;
}
#carousel .indicators {
  margin: 0;
  padding: 0;
}
#carousel .indicators .col-auto .triangle {
  position: relative;
  width: 0;
  display: none;
  border-bottom: solid 20px #ccc;
  border-right: solid 20px transparent;
  border-left: solid 20px transparent;
  z-index: 1000;
  width: 9px;
  height: 9px;
}
@media (max-width: 575.98px) {
  #carousel .indicators .col-auto .triangle {
    display: none;
  }
}
@media (min-width: 576px) and (max-width: 767.98px) {
  #carousel .indicators .col-auto .triangle {
    margin: 8px auto;
  }
}
@media (min-width: 768px) and (max-width: 991.98px) {
  #carousel .indicators .col-auto .triangle {
    margin: 36px auto;
  }
}
@media (min-width: 992px) and (max-width: 1199.98px) {
  #carousel .indicators .col-auto .triangle {
    margin: 28px auto;
  }
}
@media (min-width: 1200px) {
  #carousel .indicators .col-auto .triangle {
    margin: 15px auto;
  }
}
#carousel .indicators .col-auto .triangle .empty {
  position: absolute;
  top: 2px;
  left: -19px;
  width: 0;
  border-bottom: solid 20px white;
  border-right: solid 19px transparent;
  border-left: solid 19px transparent;
}
#carousel .bordered {
  border: 2px solid #ccc;
  padding: 1rem;
}

@media (max-width: 767.98px) {
  .top-nav {
    display: none;
  }
}

.side-nav {
  display: none;
}
@media (max-width: 767.98px) {
  .side-nav {
    display: block;
    z-index: 1000;
    padding: 20px;
  }
}

.fa-chevron-circle-left {
  float: left;
  color: #dc291e;
  margin-bottom: 10px;
}

.fa-chevron-circle-right {
  float: right;
  color: #dc291e;
  margin-bottom: 10px;
}

#carousel > div.container.navs > div.row.top-nav > div.col-10 > div > div.col-1.col-auto.active > .triangle {
  display: block;
}

#carousel > div.container.navs > div.row.top-nav > div.col-10 > div > div.col-1.col-auto.active > img {
  -webkit-filter: grayscale(0%);
  filter: grayscale(0%);
}


</style>
<div class="carousel mt-1" id="carousel" data-ride="carousel">
  <div class="container navs">
    <div class="row top-nav">
      <div class="col-1 scrollers"><a href="#carousel" role="button" data-slide="prev"> <i class="fa fa-chevron-circle-left fa-2x"></i></a></div>
      <div class="col-10">
        <div class="row justify-content-center carousel-indicators indicators">
          
        <?php $i = 0;
    while ( have_rows('field_5a55a5855861a') ) : the_row(); //get carousel indicators ?>
       
          
          <div class="col-1 col-auto" 
          data-target="#carousel" data-slide-to="<?php echo $i; ?>"><img class="img-fluid" src="<?php the_sub_field('field_5a55a5d15861b'); ?>" alt="<?php the_sub_field('field_5a5820d027a5d'); ?>"/>
            <div class="triangle">
              <div class="empty"></div>
            </div>
          </div>


<?php $i++;
    endwhile; //noe get right indicator ?>

        
        </div>
      </div>
      <div class="col-1 scrollers"><a class="right" href="#carousel" role="button" data-slide="next"><i class="fa fa-chevron-circle-right fa-2x"></i></a></div>
    </div>
    <div class="row side-nav"><a href="#carousel" role="button" data-slide="prev"> <i class="fa fa-chevron-circle-left fa-2x"></i></a><a href="#carousel" role="button" data-slide="next"> <i class="fa fa-chevron-circle-right fa-2x">  </i></a></div>
  </div>
  <div class="carousel container">
    <div class="carousel slide" data-ride="carousel">
      <div class="carousel-inner bordered">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-6">
              <p>One</p>
            </div>
            <div class="col-6">
              <p>One and a half</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-12">
              <p>two</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-12">
              <p>three</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-12">
              <p>four</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-12">
              <p>five</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-12">
              <p>six</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  $('.carousel-inner .carousel-item:first').addClass('active');
$('.carousel').carousel({
  interval: false
})
</script>

