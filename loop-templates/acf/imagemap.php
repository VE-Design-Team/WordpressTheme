<style>

.tooltips:hover {
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
  line-height: 1rem;
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

<?php $logo = get_field('field_5b1f6b5c746f6');?>
<?php echo file_get_contents($logo); ?>

<div class="description"></div>


<?php

// check if there are ids with tooltips to be applied
if (have_rows('field_5b1f6bd8746f7')):
    echo "<script>";
    // loop through the information
    while (have_rows('field_5b1f6bd8746f7')): the_row();?>




var g = document.getElementById('<?php the_sub_field('field_5b1f6bef746f8');?>');

var parent = g.parentNode;
var a = document.createElementNS('http://www.w3.org/2000/svg', 'a');

a.setAttributeNS('http://www.w3.org/1999/xlink', 'href', '<?php the_sub_field('field_5b31f2791c135');?>');
a.appendChild(g);

parent.appendChild(a);

 $("#<?php the_sub_field('field_5b1f6bef746f8');?>").attr("class", "enabled");
		       $("#<?php the_sub_field('field_5b1f6bef746f8');?>").attr("id", "<?php the_sub_field('field_5b1f6e66746f9');?>");



		    <?php endwhile;
    echo "</script>";

else:

    // No tooltips to be applied

endif;

?>

    <script>


// apply tooltips
    $description = $(".description");

  $('.enabled').hover(function() {

    $(this).attr("class", "enabled tooltips");
    $description.addClass('active');
    $description.html($(this).attr('id'));
  }

  , function() {
    $description.removeClass('active');
  });

$(document).on('mousemove', function(e){

  $description.css({
    left:  e.pageX,
    top:   e.pageY - 70
  });

});

        </script>
