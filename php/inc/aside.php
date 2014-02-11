<?php ob_start('compress_aside'); ?>
   <aside class="sidebar">

<?php if ($thisPage!="homepage") include 'mod-default.php';?>

<?php if ($thisPage=="homepage") include 'mod-resources.php';?>

  </aside>
 <?php ob_end_flush(); function compress_aside($buffer) {
  $search = array("/>[[:space:]]+/", "/[[:space:]]+</");
  $replace = array(">","<");
  return preg_replace($search, $replace, $buffer);
}
?>

