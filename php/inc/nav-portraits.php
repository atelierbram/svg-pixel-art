<?php ob_start('compress_nav'); ?>

<nav class="pagenav">
<ul>
  <li><a href="<?php echo $rootUrl ?><?php echo $prevUrl ?>">prev</a></li>
  <li><a href="<?php echo $rootUrl ?>portraits">portrait index</a></li>
  <li><a href="<?php echo $rootUrl ?><?php echo $nextUrl ?>">next</a></li>
</ul>
</nav>
 <?php ob_end_flush(); function compress_nav($buffer) {
  $search = array("/>[[:space:]]+/", "/[[:space:]]+</");
  $replace = array(">","<");
  return preg_replace($search, $replace, $buffer);
}
?>
