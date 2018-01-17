
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Glossarize jQuery Plugin</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/2.1.0/normalize.css">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* Content */

    .content{
      width: 80%;
      margin: 0 auto;
    }

    /* Glossarized Content */

    .glossarizer_replaced{
      border-bottom: 1px #333 dotted;
      cursor: help;
      display: inline;
    }
 #tooltip
{
    text-align: center;
    color: #fff;
    background: #000;
    background: rgba(0,0,0,0.8);
    position: absolute;
    z-index: 100;
    padding: 15px;
    border-radius: 5px;
    box-sizing: border-box;    
}

    @media only screen and (max-width: 800px){
        #tooltip:before{
            content: 'x';
            position: absolute;
            color: #fff;
            right: 8px;
            top: 3px;
            font-size: 12px;
        }
    }    
 
    #tooltip:after /* triangle decoration */
    {
        width: 0;
        height: 0;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-top: 10px solid rgba(0,0,0,0.8);
        content: '';
        position: absolute;
        left: 50%;
        bottom: -10px;
        margin-left: -10px;
    }
 
        #tooltip.top:after
        {
            border-top-color: transparent;
            border-bottom: 10px solid #111;
            top: -20px;                         
            bottom: auto;
        }

 
        #tooltip.left:after
        {
            left: 10px;
            margin: 0;
        }
 
        #tooltip.right:after
        {
            right: 10px;
            left: auto;
            margin: 0;
        }
  </style>
</head>
<body>

  <div class="content">
    
   		<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'page' ); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>

  </div>
 
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/tooltip.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.glossarize.js"></script>
  <script>

  $(function(){

    $('.content').glossarizer({
      sourceURL: '<?php echo get_home_url(); ?>/glossary/',

      //sourceURL: '<?php echo get_stylesheet_directory_uri(); ?>/glossary.json',
      callback: function(){
        new tooltip();
      }
    });


  });

  </script>
  
</body>
</html>