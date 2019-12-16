<script src="<?php echo get_stylesheet_directory_uri();?>/js/aos.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/animate.js"></script>
<link href="<?php echo get_stylesheet_directory_uri();?>/css/aos.css" rel="stylesheet">
<div class="socialmediafeed">
<!--Staff Section starts - e.g staff reporting directly to the CEO -->
<?php
// check if the repeater field has rows of data for Managers
  if( have_rows('field_5db91f76c9579') ):
  // loop through the rows of data
  while ( have_rows('field_5db91f76c9579') ) : the_row();?>

<div data-aos="slide-up" class=" card-1 bg-white shadow border-0 rounded-2 p-4 ml-3 mb-3 mr-1 col-12 col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-6 " >
              <!-- Social media profile pic -->
<div class="" style="width: 100%; display: inline-flex;" >
              <?php $image = get_sub_field('field_5dc39a03dfda9'); if( !empty($image) ): ?>

                <div class="float:left;" style="min-width: 85px; width: 85px;margin-bottom: 20px; margin-right: 20px;">
                  <img class="rounded-1" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                </div>
              <?php endif; ?>

              <?php if (get_sub_field('field_5db91f94c957a')) { ?>
              <!-- Social media user -->
              <div class="" style="width: 100%; ">
                <div> <strong> <?php the_sub_field('field_5db91f94c957a');?></strong></div>
                <!-- Social media handle -->
                <div class="social-green">   <?php the_sub_field('field_5db91fbec957b');?>  </div>
                <div style="padding-top: 10px; border-bottom: 1px solid #eee;"> </div>
</div>
</div>
              <!-- Social media content -->
            <div id="social-content" class="p-3 bg-light-1 rounded-1 d-block">  <?php the_sub_field('field_5db92022c957e');?> </div>

              <!-- Social media post time -->
<div class="pb-5 pt-1" ?>
<?php
if (get_sub_field('field_5db91fdfc957c')) {
  ?>
    <div class="social-green social-left pt-1 pb-2" >    <?php the_sub_field('field_5db91fdfc957c');?> ago</div>
  <?php
} else {
}
?>

              <div class="social-green social-right pt-1 pb-2" > <img src="<?php echo get_stylesheet_directory_uri();?>/img/like.svg" alt="like" height="23" width="23"></div>
              <div class="social-green social-right pt-1 pb-2" > <img src="<?php echo get_stylesheet_directory_uri();?>/img/share.svg" alt="share" height="23" width="23"></div>
</div>
</div>

    <?php
    } else {
    }
    ?>


  <!--Responses-->
    <div class="social-replies socialmediafeed">

    <?php
$count = 0;
$replies = get_sub_field('field_5db9211db6c12');
if (is_array($replies)) {
  $count = count($replies) ;
}
if ($count > 1 ) { echo "<div class='x-replies'>"."$count replies"."</div>";
}
elseif  ($count < 1 ) { echo "";
}
elseif  ($count < 2 ) { echo "<div class='x-replies'>"."$count reply"."</div>";
}
?>
    <?php
    // check if the repeater field has rows of data for Staffs
    if( have_rows('field_5db9211db6c12') ):
    while ( have_rows('field_5db9211db6c12') ) : the_row();
    ?>



    <div data-aos="slide-up"   class="card-1 bg-white shadow border-0 rounded-2 p-5 ml-4 mb-3 col-12 col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-6 ">
      <!-- Social media profile picture -->
      <div class="" style="width: 100%; display: inline-flex;" >
    <?php $image = get_sub_field('field_5dc399c9dfda8'); if( !empty($image) ): ?>
      <div class="float:left;" style="min-width: 85px; width: 85px;margin-bottom: 20px; margin-right: 20px;">
        <img class="rounded-1" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      </div>
    <?php endif; ?>
      <!-- Social media user -->


<div class="" style="width: 100%; ">
  <div> <strong> <?php the_sub_field('field_5db92135b6c13');?></strong></div>
  <!-- Social media handle -->
  <div class="social-green">   <?php the_sub_field('field_5db9214bb6c14');?>  </div>
  <div style="padding-top: 10px; border-bottom: 1px solid #eee;"> </div>


</div>
</div>

        <!-- Social media content -->
      <div id="social-content" class="p-3 bg-light-1 rounded-1"> <?php the_sub_field('field_5db92176b6c17');?> </div>

        <!-- Social media post time -->
        <div class="pb-3 pt-1" ?>
                      <div class="social-green social-left pt-1 pb-2" >    <?php the_sub_field('field_5db92156b6c15');?> ago</div>
                      <div class="social-green social-right pt-1 pb-2" > <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="23" height="23" viewBox="0 0 23 23">
                        <defs>
                          <style>
                            .cls-1 {
                              clip-path: url(#clip-like);
                            }
                            .cls-2 {
                              fill: rgba(255,255,255,0);
                            }
                            .cls-3 {
                              fill: #888;
                            }
                          </style>
                          <clipPath id="clip-like">
                            <rect width="23" height="23"/>
                          </clipPath>
                        </defs>
                        <g id="like" class="cls-1">
                          <path id="noun_like_163915" class="cls-2" d="M28.841,21.208a2.233,2.233,0,0,0-.48-1.253,1.928,1.928,0,0,0-.449-2.236c-1.3-1.186-4.365-.542-4.71-.465h0c-.2.035-.4.076-.613.124a5.938,5.938,0,0,1,.455-2.178c.51-1.548.48-2.733-.089-3.52a2.291,2.291,0,0,0-1.835-.891.87.87,0,0,0-.679.311,2.507,2.507,0,0,0-.3,1.729c-.48,1.293-1.841,4.489-3,5.377a.451.451,0,0,0-.053.048,3.846,3.846,0,0,0-.725,1.1,1.48,1.48,0,0,0-.741-.2H13.384a1.492,1.492,0,0,0-1.49,1.49V26.6a1.492,1.492,0,0,0,1.49,1.49h2.234a1.481,1.481,0,0,0,.9-.3l.83.127h.01a36.812,36.812,0,0,0,4.879.268q.654.051,1.224.051a8.282,8.282,0,0,0,1.7-.151,3.16,3.16,0,0,0,2.253-1.4,2.208,2.208,0,0,0,.242-1.4,2.317,2.317,0,0,0,.68-2.631A2.161,2.161,0,0,0,28.841,21.208Zm-7.715-9.5C21.308,11.715,21.028,11.843,21.126,11.713Z" transform="translate(-8.871 -7.791)"/>
                          <path id="noun_like_163915-2" data-name="noun_like_163915" class="cls-3" d="M28.841,21.208a2.233,2.233,0,0,0-.48-1.253,1.928,1.928,0,0,0-.449-2.236c-1.3-1.186-4.365-.542-4.71-.465h0c-.2.035-.4.076-.613.124a5.938,5.938,0,0,1,.455-2.178c.51-1.548.48-2.733-.089-3.52a2.291,2.291,0,0,0-1.835-.891.87.87,0,0,0-.679.311,2.507,2.507,0,0,0-.3,1.729c-.48,1.293-1.841,4.489-3,5.377a.451.451,0,0,0-.053.048,3.846,3.846,0,0,0-.725,1.1,1.48,1.48,0,0,0-.741-.2H13.384a1.492,1.492,0,0,0-1.49,1.49V26.6a1.492,1.492,0,0,0,1.49,1.49h2.234a1.481,1.481,0,0,0,.9-.3l.83.127h.01a36.812,36.812,0,0,0,4.879.268q.654.051,1.224.051a8.282,8.282,0,0,0,1.7-.151,3.16,3.16,0,0,0,2.253-1.4,2.208,2.208,0,0,0,.242-1.4,2.317,2.317,0,0,0,.68-2.631A2.161,2.161,0,0,0,28.841,21.208ZM13.384,27.166a.569.569,0,0,1-.569-.569V20.649a.569.569,0,0,1,.569-.569h2.234a.569.569,0,0,1,.472.252.46.46,0,0,0,.088.219.563.563,0,0,1,.009.1V26.6a.569.569,0,0,1-.569.569Zm14.067-4.909a.456.456,0,0,0-.063.554,1.43,1.43,0,0,1-.526,1.925.461.461,0,0,0-.157.524,1.3,1.3,0,0,1-.1.972,2.312,2.312,0,0,1-1.639.944,9.742,9.742,0,0,1-2.679.081H22.24A36.554,36.554,0,0,1,17.482,27l-.413-.063a1.478,1.478,0,0,0,.04-.337V20.649a1.482,1.482,0,0,0-.071-.453,3.1,3.1,0,0,1,.691-1.281c1.636-1.295,3.244-5.688,3.312-5.875a.463.463,0,0,0,.022-.228,2.168,2.168,0,0,1,.063-1.1,1.358,1.358,0,0,1,1.077.509,3.141,3.141,0,0,1-.04,2.691c-.609,1.848-.666,2.817-.19,3.24a.764.764,0,0,0,.766.137c.223-.051.439-.1.642-.131l.044-.01c1.13-.248,3.157-.4,3.865.25a1.084,1.084,0,0,1,.131,1.377.461.461,0,0,0,.081.593,1.226,1.226,0,0,1-.051,1.888ZM13.66,25.912a.723.723,0,1,1,.723.723A.723.723,0,0,1,13.66,25.912Z" transform="translate(-8.871 -7.791)"/>
                        </g>
                      </svg></div>
                      <div class="social-green social-right pt-1 pb-2" > <img  src="<?php echo get_stylesheet_directory_uri();?>/img/share.svg" alt="share" height="23" width="23"></div>
        </div>


</div>


    <?php  endwhile; ?>
    <?php else : ?>
    <?php endif; ?>
</div>


    <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>
<!--Staff Section ends  -->
</div>
