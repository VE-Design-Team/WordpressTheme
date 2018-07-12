<?php

if (have_rows('field_5a73d3d48b839')):

    while (have_rows('field_5a73d3d48b839')): the_row();?>
						<style>
						#course-banner
						{

						    font-family: Museo500;

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
						   font-family: Museo700;
						}
						#national-codes
						{
						text-transform: uppercase;
						font-family: Museo500;
						}
						.unit-code
						{
						    font-family: Museo300;
						}

						    h3::before {
						  content: "\2014";
						  position: absolute;
						  top: -0.175rem;
						  color: #e60028;
						  color:  <?php echo the_sub_field('field_5b305d3e27736'); ?>;

						}
						.course-title, .course-code, .course-school
						{
				        color: #000054;
						color: <?php the_sub_field('field_5b3474591a392')?>;
						}

						</style>

						<div id="course-banner">


						    <div class="col-12 pb-3 background" style="background-image: url('<?php the_sub_field('field_5a73d775be41f');?>'); <?php the_sub_field('field_5a73d88c935e5');?>">
						        <div class="row">
						            <div class="col-1"></div>
						            <div class="col-11 pt-4 pl-5 pr-4 pb-0">
						                <h3 class="course-title" >
						                    <?php the_sub_field('field_5a73d4088b83a');?>
						                </h3>
						                <p class="course-code" >
						                    <?php the_sub_field('field_5a73d4aa8b83b');?>
						                </p>
						                <p class="course-school" >
						                    <strong>
						                        <?php the_sub_field('field_5a73d4da8b83c');?>
						                    </strong>
						                </p>
						            </div>
						        </div>
							</div>
							
							<?php if( get_field('field_5b3963a36f75b') ): ?>
							<h6 id="national-codes" class="text-muted mt-1 small">National course code: <?php  the_sub_field('field_5b3963a36f75b'); ?></h6> 
<?php endif; ?>
							

				        </div>
				        <?php endwhile;else:endif;?>
