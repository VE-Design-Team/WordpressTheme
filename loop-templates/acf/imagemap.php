<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>SVG Map with Tooltips</title>
  
  
  
<style>
html, body {
  width: 100%;
}

svg {
  max-width: 100% !important;
  height: auto;
  display: block;
}

.heyo:hover {
  fill: #CC2929;
  -moz-transition: 0.3s;
  -o-transition: 0.3s;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.enabled {
  fill: #21669E;
  cursor: pointer;
}

.description {
  pointer-events: none;
  position: absolute;
  font-size: 18px;
  text-align: center;
  background: white;
  padding: 10px 15px;
  z-index: 5;
  height: 30px;
  line-height: 30px;
  margin: 0 auto;
  color: #21669e;
  border-radius: 5px;
  box-shadow: 0 0 0 1px #eee;
  -moz-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  -webkit-transform: translateX(-50%);
  transform: translateX(-50%);
  display: none;
}
.description.active {
  display: block;
}
.description:after {
  content: "";
  position: absolute;
  left: 50%;
  top: 100%;
  width: 0;
  height: 0;
  margin-left: -10px;
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-top: 10px solid white;
}

    </style>

  
</head>

<body>


<?php $url = the_field('field_5b1f6b5c746f6');
echo $url;

$rss = file_get_contents($url);

var_dump($rss); ?>


<img src="<?php the_field('field_5b1f6b5c746f6'); ?>" alt="Kiwi standing on oval">
<?php echo file_get_contents( $txt); ?>


<div class="description"></div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> 

    <script>
    
    $description = $(".description");

  $('.enabled').hover(function() {
    
    $(this).attr("class", "enabled heyo");
    $description.addClass('active');
    $description.html($(this).attr('id'));
  }, function() {
    $description.removeClass('active');
  });

$(document).on('mousemove', function(e){
  
  $description.css({
    left:  e.pageX,
    top:   e.pageY - 70
  });
  
});
    
    </script>




</body>

</html>
