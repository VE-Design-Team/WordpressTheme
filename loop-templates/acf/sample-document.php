<style>
.physical-document{
  border:solid 0px #cfcfcf;
  border-bottom:none;
  padding: 3rem 4rem;
  margin:20px 20px 0px 20px;
  font-family:TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif; 
  font-size:1em;
  line-height:1.7em;
  -webkit-box-shadow: 0px 0px 27px 0px rgba(0,0,0,0.44);
    -moz-box-shadow: 0px 0px 27px 0px rgba(0,0,0,0.44);
    box-shadow: 0px 0px 27px 0px rgba(0,0,0,0.44);
    max-width: 800px;

  p:last-child{
  padding-bottom:1rem;
  }

  



}
  .tear{
  background-image: url(<?php echo get_stylesheet_directory_uri();?>/img/tear.png);
  background-repeat:no-repeat;
  background-position:bottom;
  background-size: auto 100%;
  height:100%;
  padding:2.47% 0;
  margin: 0px 20px 20px 20px;
  -webkit-filter: drop-shadow(0px 10px 5px rgba(0, 0, 0, 0.28));
  filter: drop-shadow(0px 10px 5px rgba(0, 0, 0, 0.28));
  max-width: 800px;
  }
.background-watermark{
      position:absolute;
      z-index:-5;
      display:block;
      margin: auto;
}
.bg-text
{
    color:lightgrey;
    font-size:3rem;
    line-height: 4rem;
    z-index:-5;
    transform:rotate(330deg);
    -webkit-transform:rotate(330deg);
    padding-top: 10rem;
}


</style>

<div class="physical-document">
  <div class="background-watermark">
    <p class="bg-text text-center"><?php echo get_field('field_5a4c67c8bad65') ?></p>
  </div>

  <?php echo get_field('field_5a4c656d2c071') ?>
</div>
<div class="tear"></div>
