<?php
//Get menu as selected in page
 //$menu = get_field('field_5bc317e313d41');
 //wp_nav_menu( array(
  //  'menu' => '$menu'
 //) );
?>
<!-------------------------------------- accordion ------------------------------------->

<div class="container-fluid" id="page">
  <div id="accordion" class="show">
    <div class="visibility p-0">
      <div id="accordion" class="accordion">
        <div class="header" id="header-accordion"><img src="<?php echo get_stylesheet_directory_uri(); ?>/fssi/img/nav-header.jpg"
            alt="Future Social Service Institute" width="240px"> </div>
        <div class="card mb-0">
          <div class="thin card-header collapsed" data-toggle="collapse" href="#collapseOne">
            <a class="card-title">
              Welcome and Orientation
            </a>
          </div>
          <div id="collapseOne" class="card-body collapse" data-parent="#accordion">
            <ul class="nav-list">
              <li class="selected">
                <span><i class="fa fa-circle"></i>
                </span>
                <div>Next Page Title</div>
              </li>
              <li>
                <span><i class="fa fa-circle"></i>
                </span>
                <div>Next Page Title</div>
              </li>
              <li>
                <span><i class="fa fa-circle"></i>
                </span>
                <div>Next Page Title</div>
              </li>
            </ul>
          </div>
          <div class="thin card-header collapsed " data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
            <a class="card-title">
              Introduction to human rights
            </a>
          </div>
          <div id="collapseTwo" class="card-body collapse show" data-parent="#accordion">
            <ul class="nav-list">
              <li class="selected">
                <span><i class="fa fa-circle"></i>
                </span>
                <div>Next Page Title</div>
              </li>
              <li>
                <span><i class="fa fa-circle"></i>
                </span>
                <div>Next Page Title</div>
              </li>
              <li>
                <span><i class="fa fa-circle"></i>
                </span>
                <div>Next Page Title</div>
              </li>
            </ul>
          </div>
          <div class="thin card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
            <a class="card-title">
              Introduction to the module
            </a>
          </div>
          <div id="collapseThree" class="card-body collapse" data-parent="#accordion">
            <ul class="nav-list">
              <li>
                <span><i class="fa fa-circle"></i>
                </span>
                <div>Next Page Title</div>
              </li>
              <li>
                <span><i class="fa fa-circle"></i>
                </span>
                <div>Next Page Title</div>
              </li>
              <li>
                <span><i class="fa fa-circle"></i>
                </span>
                <div>Next Page Title</div>
              </li>
            </ul>
          </div>
          <div class="accordion-footer"><i class="fa fa-chevron-circle-down"></i></div>
        </div>
      </div>

    </div>
  </div>
</div>
<!--     accordion -->
