<div id="nav">
  <div id="reveal" class="visibility p-0">

    <?php
//get menu assigned to this page
 $menu = get_field('field_5bc317e313d41');
// and place in the page
wp_nav_menu(array(
  'menu' => $menu,
'container_id' => 'cssmenu',
'walker' => new CSS_Menu_Maker_Walker()
));
?>
      <div class="nav-footer"></div> 

  </div>

</div>
<script>
  // do the opening and closing for the menu accordion
  (function ($) {
    $(document).ready(function () {
      $('#cssmenu li.has-sub>a').on('click', function () {
        $(this).removeAttr('href');
        var element = $(this).parent('li');
        if (element.hasClass('open')) {
          element.removeClass('open');
          element.find('li').removeClass('open');
          element.find('ul').slideUp();
        } else {
          element.addClass('open');
          element.children('ul').slideDown();
          element.siblings('li').children('ul').slideUp();
          element.siblings('li').removeClass('open');
          element.siblings('li').find('li').removeClass('open');
          element.siblings('li').find('ul').slideUp();
        }
      });

      $('#cssmenu>ul>li.has-sub>a').append('<span class="holder"></span>');

    });
  })(jQuery);
//ensure nav loads closed
$('#reveal').addClass('navshow').removeClass('test2');
//ensure the nav is always open for the current page
$("li.menu-item" ).children('ul').css({ display: "none" });
$('li.active').closest('ul').addClass('open').css({ display: "block" })
</script>
