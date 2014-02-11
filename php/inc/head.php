<?php echo "<!doctype html>"?><!-- HTML5 Reset: https://github.com/murtaugh/HTML5-Reset Free to use --><!--[if lt IE 7 ]><html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"><![endif]--><!--[if IE 7 ]><html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"><![endif]--><!--[if IE 8 ]><html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]--><!--[if IE 9 ]><html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]--><!--[if gt IE 9]><!--><html class="no-js" <?php if ($thisLang!="") echo "lang=\"$thisLang\""; ?>><!--<![endif]--><!-- the "no-js" class is for Modernizr or Buoy http://cferdinandi.github.io/buoy/ . --><head <?php if ($thisWebsite!="") echo "id=\"$thisWebsite\""; ?>><?php ob_start('compress_head'); ?>

  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title><?php if ($thisWebsite!="") echo "$thisWebsite"; ?> | <?php if ($thispageTitle!="") echo "$thispageTitle"; ?>></title>

  <meta name="title" content="<?php if ($thispageTitle!="") echo "$thispageTitle"; ?>" />
  <meta name="description" content="<?php if ($thispageDesc!="") echo "$thispageDesc"; ?>" />
  <meta name="author" content="<?php if ($thisAuthor!="") echo "$thisAuthor"; ?>" />
  <!-- Google will often use this as its description of your page/site. Make it good. -->

  <meta name="google-site-verification" content="" />
  <!-- Speaking of Google, don't forget to set your site up: http://google.com/webmasters -->

  <meta name="Copyright" content="<?php if ($thisOrg!="") echo "$thisOrg"; ?>" />

  <!--  Mobile Viewport Fix http://j.mp/mobileviewport & http://davidbcalhoun.com/2010/viewport-metatag device-width : Occupy full width of the screen in its current orientation initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width -->
  <!-- Uncomment to use; use thoughtfully!  <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->

  <!-- Iconifier might be helpful for generating favicons and touch icons: http://iconifier.net -->
<link rel="shortcut icon" href="<?php echo $rootUrl ?>/assets/img/ui/favicon.ico" type="image/x-icon" />
  <!-- This is the traditional favicon.  - size: 16x16 or 32x32 - transparency is OK -->

<link rel="apple-touch-icon" href="<?php echo $rootUrl ?>/assets/img/ui/apple-touch-icon.png" />
  <!-- The is the icon for iOS's Web Clip and other things.  - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for retina display (IMHO, just go ahead and use the biggest one) - To prevent iOS from applying its styles to the icon name it thusly: apple-touch-icon-precomposed.png - Transparency is not recommended (iOS will put a black BG behind the icon) -->
  <!-- concatenate and minify for production -->
  <link rel="stylesheet" href="<?php echo $rootUrl ?>/assets/css/style.css" />

 <?php if ($thisPage=="homepage") echo "<link rel=\"stylesheet\" href=\"$rootUrl/assets/css/base16-atelierlakeside.light.css\" />" ?>

  <!-- Lea Verou's Prefix Free, lets you use only un-prefixed properties in yuor CSS files -->
  <!-- <script src="<?php// echo $rootUrl ?>/assets/js/prefixfree.min.js"></script> -->

  <!-- This is an un-minified, complete version of Modernizr.
     Before you move to production, you should generate a custom build that only has the detects you need. -->

  <!-- <script src="<?php// echo $rootUrl ?>/assets/js/modernizr-2.7.0.dev.js"></script> -->

  <!-- Application-specific meta tags -->
  <!-- Windows 8 -->
  <meta name="application-name" content="" />
  <meta name="msapplication-TileColor" content="" />
  <meta name="msapplication-TileImage" content="" />
  <!-- Twitter -->
  <meta name="twitter:card" content="">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:url" content="">
  <!-- Facebook -->
  <meta property="og:title" content="" />
  <meta property="og:description" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />

<!-- http://gomakethings.com/ditching-jquery-for-vanilla-js/ -->
 <script>if ( 'querySelector' in document && 'addEventListener' in window && Array.prototype.forEach ) { document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/g, '') + ' js '; }</script>

 </head>
<body <?php if ($thisType!="") echo "class=\"$thisType\""; ?>>
 <div <?php if ($thisPage!="") echo "class=\"$thisPage wrapper\""; ?>><!-- not needed? up to you: http://camendesign.com/code/developpeurs_sans_frontieres -->

  <header class="header">

    <h1><a href="<?php echo $rootUrl ?><?php echo $thisUrl ?>"><?php if ($thispageTitle!="") echo $thispageTitle ;?></a></h1>
  </header>
<?php ob_end_flush(); function compress_head($buffer) {
  $search = array("/>[[:space:]]+/", "/[[:space:]]+</");
  $replace = array(">","<");
  return preg_replace($search, $replace, $buffer);
}
?>
