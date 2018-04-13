
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
    margin: 0px auto;
    bottom: -10px;
  }
}
@media (min-width: 768px) and (max-width: 991.98px) {
  #carousel .indicators .col-auto .triangle {
    margin: 6px auto;
    bottom: -12px;
  }
}
@media (min-width: 992px) and (max-width: 1199.98px) {
  #carousel .indicators .col-auto .triangle {
    margin: 0px auto;
    bottom: -16px;
  }
}
@media (min-width: 1200px) {
  #carousel .indicators .col-auto .triangle {
    margin: 0px auto;
    bottom: -16px;
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
.nxt-btn
{
 position: absolute;
  float: right;
  bottom: 0px;
  right: 0;
  color:  #dc291e;
 
 cursor: pointer;
}
.nxt-btn:hover, .nxt-btn:active
{



}


</style>
<div class="carousel mt-1" id="carousel" >
  <div class="container navs">
    <div class="row top-nav ">
      <div class="col-1 scrollers"><a href="#carousel" role="button" data-slide="prev"> <i class="fa fa-chevron-circle-left fa-2x"></i></a></div>
      <div class="col-10">
        <div class="row justify-content-center carousel-indicators indicators">
          
        <?php $i = 0;
    while ( have_rows('field_5a55a5855861a') ) : the_row(); //get carousel indicators ?>
                
          <div class="col-1 col-auto carousel-indicator <?php if ($i == "0") { echo "active"; } ?>" 
          data-target="#carousel"   data-slide-to="<?php echo $i; ?>">
         
          <?php if( get_sub_field('field_5a55a5d15861b') ): ?>
          <?php 

$image = get_sub_field('field_5a55a5d15861b');
$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)

if( $image ) {

	echo wp_get_attachment_image( $image, $size );

}

?>







<?php else: {?>

 <img src="<?php echo get_stylesheet_directory_uri();?>/img/carousel/<?php echo "".$i+1; ?>.png" alt="View this slide" class="img-fluid">
 

<?php } endif; ?>
         
                
          
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
   
  </div>
  <div class="carousel container" >
    <div class="carousel row" >
    
    <div class="col-1 hidden-md-down"></div>
      <div class="carousel-inner bordered col-12 col-md-12">

<?php
// check if the repeater field has rows of data
if( have_rows('field_5a55a5855861a') ):
  // loop through the rows of data 
    $e = 0;
    while ( have_rows('field_5a55a5855861a') ) : the_row(); ?>
 <div class="carousel-item <?php if ($e == "0") { echo "active"; } ?>">
         <?php get_template_part('loop-templates/acf/carousel-content');?>
      </div>
   <?php
    $e++; 
  endwhile;
else :
    // no rows found
endif;
?>




       
      </div>
      <div class="col-1 hidden-lg-down"></div>
    </div>
  </div>
</div>
<script>
  //$('.carousel-indicator:first').addClass('active');
  //$('.carousel-item:first').addClass('active');


</script>

