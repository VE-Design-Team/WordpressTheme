	<?php
$variable = get_field('field_5b8cd3c52f308', 'option');
if ($variable  == 'fssi') {

  get_template_part( 'fssi' );
}
elseif ($variable  == 'cde') {
  get_template_part( 'cde' );
}
elseif ($variable  == 'whm') {
  get_template_part( 'whm' );
}
elseif ($variable  == 'vwp') {
  get_template_part( 'vwp' );
}
elseif ($variable  == 'bridge') {
  get_template_part( 'bridge' );
};
?>
