<?php

if (have_rows('field_5a73d3d48b839')):

    while (have_rows('field_5a73d3d48b839')) : the_row(); ?>
<style>
#course-banner
{

    font-family: Museo-500;

}

#course-banner > .background
{
background-size: auto 100% ;
background-repeat: no-repeat; 
max-height:250px;
max-width: 100%;
padding: 1.5rem 2rem;
}
.pb-3 {
padding-bottom: 2rem !important;}


.h3, h3{
   font-size: 1.7em !important;
   font-family: Museo-700;
}
#national-codes
{
text-transform: uppercase;
font-family: Museo-500;
}
.unit-code
{
    font-family: Museo-300;
}    
    
    h3::before {
  content: "\2014";
  position: absolute;
  top: -0.175rem;
  color: #e60028;
  color:  <?php echo the_sub_field('field_5b305d3e27736'); ?>;
 
}
</style>    

<div id="course-banner">


    <div class="col-12 pb-3 background" style="background-image: url('<?php the_sub_field('field_5a73d775be41f'); ?>'); <?php the_sub_field('field_5a73d88c935e5'); ?>">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-11 pt-4 pl-5 pr-4 pb-0">
                <h3 style="color: #000054;">
                    <?php the_sub_field('field_5a73d4088b83a'); ?>
                </h3>
                <p class="unit-code" style="color: #000054;">
                    <?php the_sub_field('field_5a73d4aa8b83b'); ?>
                </p>
                <p style="color: #000054;">
                    <strong>
                        <?php the_sub_field('field_5a73d4da8b83c'); ?>
                    </strong>
                </p>
            </div>
        </div>
    </div>

<h6 id="national-codes" class="text-muted mt-1 small">National course code: <?php  the_sub_field('field_5b3058d98687f'); ?><br> National Unit codes: <?php the_sub_field('field_5b3058f786880'); ?></h6>
</div>

    <?php endwhile;

else :

endif;

?>
