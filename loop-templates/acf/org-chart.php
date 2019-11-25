<script src="/wp-content/themes/bagwan_health/js/masonry.pkgd.js"></script>
<script src="/wp-content/themes/bagwan_health/js/imagesloaded.pkgd.min.js"></script>

<div id="wrapper" style="height: 1200px">
  <div id="container">
    <?php if( have_rows('field_5d788e3e4ccf0') ): ?>
      <ol class="organizational-chart">
        <!--- CEO  -->
        <?php while ( have_rows('field_5d788e3e4ccf0') ) : the_row(); ?>
          <li>
            <div>
              <div class="card-1 shadow">
                <div class="level1">
                  <?php $image = get_sub_field('field_5d7894214e438'); ?>
                  <?php if( !empty($image) ): ?>
                    <div class="org_chart_profile">
                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];?>" class="card-img-top" />
                    </div>
                  <?php endif; ?>
                  <div class='org_name'>
                    <?php the_sub_field('field_5d7893394e623');?>
                  </div>
                  <div class='sub_org'>
                    <span class='sub_org_name'></span>
                  </div>
                  <div class='org_title'>
                    <?php the_sub_field('field_5d7893d64e436');?>
                  </div>
                  <div class='bio'>
                    <?php the_sub_field('field_5d7894124e437');?>
                  </div>
                </div>
              </div>
            </div>
            <!--- Manager  -->
            <?php if( have_rows('field_5d786c0bf2dfa') ): ?>
              <ol>
                <?php while ( have_rows('field_5d786c0bf2dfa') ) : the_row(); ?>
                  <li>
                    <div>
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
                            <?php if(get_sub_field('field_5d82c61c2ff3d')):?>
                              <br><br><strong>Contact:</strong>
                              <?php the_sub_field('field_5d82c61c2ff3d');?>
                            <?php endif; ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--- Staff  -->
                    <?php if( have_rows('field_5d786cb288b0c') ): ?>
                      <ol>
                        <?php while ( have_rows('field_5d786cb288b0c') ) : the_row(); ?>
                          <?php if(get_sub_field('field_5d786db3252a0')):?>
                            <li>
                              <div>
                                <div class="card-1 shadow">
                                  <div class="level1">
                                    <?php $image = get_sub_field('field_5d786dd1252a2'); ?>
                                    <?php if( !empty($image) ): ?>
                                      <div class="org_chart_profile">
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];?>" class="card-img-top" />
                                      </div>
                                    <?php endif; ?>
                                    <div class='org_name'>
                                      <?php the_sub_field('field_5d786d972529f');?>
                                    </div>
                                    <div class='sub_org'>
                                      <span class='sub_org_name'></span>
                                    </div>
                                    <div class='org_title'>
                                      <?php the_sub_field('field_5d786db3252a0');?>
                                    </div>
                                    <div class='bio'>
                                      <?php the_sub_field('field_5d786dc0252a1');?>
                                    </div>
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

<script src="/wp-content/themes/bagwan_health/js/masonry.js"></script>