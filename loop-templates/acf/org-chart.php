<script src="/wordpress481/wp-content/themes/bagwan_health/js/masonry.pkgd.js"></script>
<script src="/wordpress481/wp-content/themes/bagwan_health/js/imagesloaded.pkgd.min.js"></script>

<div id="wrapper" style="height: 800px">
  <div id="container">
    <?php if( have_rows('field_5d788e3e4ccf0') ): ?>
      <ol class="organizational-chart">
        <?php while ( have_rows('field_5d788e3e4ccf0') ) : the_row(); ?>
          <li>
            <div>
              <h5 class="card-title"><?php   the_sub_field('field_5d7893394e623');?></h5>
              <p class="card-text"><?php   the_sub_field('field_5d7893d64e436');?></p>
              <p class="card-text"><?php   the_sub_field('field_5d7894124e437');?></p>
            </div>
            <?php if( have_rows('field_5d786c0bf2dfa') ): ?>
              <ol>
                <?php while ( have_rows('field_5d786c0bf2dfa') ) : the_row(); ?>
                  <li>
                    <div class="card-1 shadow">
                      <div class='level1'>
                        <?php $image = get_sub_field('field_5d786c0bf2dfe'); ?>
                        <?php if( !empty($image) ): ?>
                          <div class="org_chart_profile">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];?>" class="card-img-top" />
                          </div>
                        <?php endif; ?>
                        <div class='org_name'>
                          <?php the_sub_field('field_5d786c0bf2dfb');?>
                        </div>
                        <div class='sub_org'>
                          <span class='sub_org_name'></span>
                        </div>
                        <div class='org_title'>
                          <?php the_sub_field('field_5d786c0bf2dfc');?>
                        </div>
                        <div class='bio'>
                          <?php the_sub_field('field_5d786c0bf2dfd');?>
                          <br><br><strong>Contact:</strong>
                          <?php the_sub_field('field_5d82c61c2ff3d');?>
                        </div>
                      </div>
                    </div>
                    <?php if( have_rows('field_5d786cb288b0c') ): ?>
                      <ol>
                        <?php while ( have_rows('field_5d786cb288b0c') ) : the_row(); ?>
                          <?php if(get_sub_field('field_5d786db3252a0')):?>
                            <li>
                              <div class="card-1 shadow">
                                <div class='level0'>
                                  <div class='org_name'>
                                    <?php the_sub_field('field_5d786db3252a0');?>
                                  </div>
                                </div>
                              </div>    
                            </li>
                          <?php endif; ?>
                        <?php endwhile; ?>
                      </ol>
                    <?php endif; ?>
                  </li>
                <?php endwhile; ?>
              </ol>
            <?php endif; ?>
          </li>
        <?php endwhile; ?>
      </ol>
    <?php endif; ?>
  </div>
</div>

<script src="/wordpress481/wp-content/themes/bagwan_health/js/masonry.js"></script>