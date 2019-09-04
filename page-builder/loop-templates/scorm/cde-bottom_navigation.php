<div>
  <div class="cde_footer_left">
  <i id="sidebarCollapse" class="fa fa-bars fa-2x" aria-hidden="true"></i>

</div>
  <div class="cde_footer_center">
          <div id="footer-page" class="">        
            <div id="next-prev">
              <?php if( get_field('field_5bdf9ede4ef3a') ): ?>
              <a title="Previous page" href="<?php the_field('field_5bdf9ede4ef3a'); ?>"  class="col-1 btn-prev float-left">
              </a>
              <?php endif; ?>
              <?php if( get_field('field_5bdf9ea04ef39') ): ?>
              <a title="Next page" href="<?php the_field('field_5bdf9ea04ef39'); ?>"  class="col-1 btn-next float-right">
              </a>
              <?php endif; ?>
            </div>
          </div>
  </div>
  <div class="cde_footer_right">
    <button onclick="fullscreen()" id="fullscreen" class="btn-fs"></button>
  </div>
</div>
