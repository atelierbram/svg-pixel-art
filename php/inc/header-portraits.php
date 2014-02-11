<?php ob_start('compress_header'); ?>
<header class="header">
 <a href="<?php echo $rootUrl ?>" class="logo"><?php include "pixel-art-svg_w3c-logo.php" ?><h1>Pixel Art with SVG</h1></a>
<p class="tagline"><a href="<?php echo $rootUrl ?>portraits">portraits</a></p>
<!-- end tag moved to select-menu</header> -->
<?php ob_end_flush(); function compress_header($buffer) {
  $search = array("/>[[:space:]]+/", "/[[:space:]]+</");
  $replace = array(">","<");
  return preg_replace($search, $replace, $buffer);
}
?>
