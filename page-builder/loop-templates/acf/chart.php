<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/Chart.js"></script>
<canvas id="myChart" width="400" height="400"></canvas>
<?php if (get_field('field_5b3431cc74803')): ?>
<small class"text-muted">Source:
	<a href="<?php the_field('field_5b3431cc74803');?>"><?php the_field('field_5b34316574802');?></a>
</small>
<?php else:{?>
		    <small class"text-muted">Source: <?php the_field('field_5b34316574802');?></small>
		<?php }endif;?>
<script>
var ctx = document.getElementById("myChart");
var myChart = new Chart (ctx, {
    type: '<?php the_field('field_5b33022fc17e8');?>',
    data: {
      <?php
// check if the graph has data
if (have_rows('field_5b3305d272aef')):
    echo 'labels: [';
    // get the data
    $rowCount = count(get_field('field_5b3305d272aef')); //GET THE COUNT
    $i = 1;
    while (have_rows('field_5b3305d272aef')): the_row();
        // Display the data
        echo '"';
        echo the_sub_field('field_5b33060372af0');
        if ($i < $rowCount):
            echo '", ';
        else:{echo '"';};
        endif;
        $i++;
    endwhile;
    //close the json schema
    echo "],";
else:
    // no rows found
endif;

?>

        datasets: [{
            label: '<?php the_field('field_5b330bd6f6f55');?>',
            <?php
// check if the graph has data
if (have_rows('field_5b3305d272aef')):
    echo 'data: [';
    // get the data
    $rowCount2 = count(get_field('field_5b3305d272aef')); //GET THE COUNT
    $j = 1;
    while (have_rows('field_5b3305d272aef')): the_row();
        // Display the data
        echo the_sub_field('field_5b33061b72af1');
        if ($j < $rowCount):
            echo ', ';
        endif;
        $j++;
    endwhile;
    //close the json schema
    echo "],";
else:
    // no rows found
endif;

?>
            backgroundColor: [
              <?php
// check if the graph has data
if (have_rows('field_5b3305d272aef')):

    // get the data
    $rowCount2 = count(get_field('field_5b3305d272aef')); //GET THE COUNT
    $k = 1;
    while (have_rows('field_5b3305d272aef')): the_row();
        // Display the data
        echo "'";
        echo the_sub_field('field_5b3306603fb40');
        echo "'";
        if ($k < $rowCount):
            echo ',
						        ';
        endif;
        $k++;
    endwhile;
    //close the json schema

else:
    // no rows found
endif;

?>
            ],
        }]
    },
    options: {
      responsive:true,
      title: {
        display:true,
        text: '<?php the_field('field_5b33031972aec');?>'
      },
        scales: {
          xAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: '<?php the_field('field_5b33046a72aed');?>'
						}
					}],
          yAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: '<?php the_field('field_5b33056f72aee');?>'
						}
					}]

        }
    }
});

</script>
