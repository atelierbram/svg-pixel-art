<?php echo "<!doctype html>"?><html class="no-js" <?php if ($thisLang!="") echo "lang=\"$thisLang\""; ?>><head <?php if ($thisWebsite!="") echo "id=\"$thisWebsite\""; ?>><?php ob_start('compress_head'); ?>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>Pixel art portrait of <?php if ($thisPortrait!="") echo $thisPortrait;?></title>

  <meta name="description" content="<?php if ($thispageDesc!="") echo "$thispageDesc"; ?>" />

<link rel="author" href="https://plus.google.com/111567145811003203990/posts">

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="<?php echo $rootUrl ?>assets/css/global-v1.css" />

 <link rel="prev" href="<?php echo $rootUrl ?><?php echo $prevUrl ?>" />
 <link rel="next" href="<?php echo $rootUrl ?><?php echo $nextUrl ?>" />

 <script>if ( 'querySelector' in document && 'addEventListener' in window && Array.prototype.forEach ) { document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/g, '') + ' js '; }</script>
<?php ob_end_flush(); function compress_head($buffer) {
  $search = array("/>[[:space:]]+/", "/[[:space:]]+</");
  $replace = array(">","<");
  return preg_replace($search, $replace, $buffer);
}
?>
