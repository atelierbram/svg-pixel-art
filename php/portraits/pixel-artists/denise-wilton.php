<?php
$thisPortrait= "Denise Wilton";
$thisLang="en";
$thispageDesc="The type of work Denise Wilton does has varied enormously; from defining the brands in a physical, visual and written form, to developing relationships between companies and online communities, to overseeing UX and behaviours for connected devices. Pixel art was created for no other reason than the joy of drawing.";
$thisAuthor="Bram de Haan";
$thisOrg="Atelier Bram de Haan";
$thisType="portraits";
$thisPage="denise-wilton";
$thisWebsite="svg-pixel-art";
$thisUrl="portraits/pixel-artists/denise-wilton.html";
$prevUrl="portraits/pixel-artists/arjan-westerdiep.html";
$nextUrl="portraits/pixel-artists/gary-j-lucken.html";

include "../../inc/config.php";
include "../../inc/head-portraits.php";
?>
<style>
.select-menu select,
.container,
.footer {
  background-color: #885714;
}
body {
  background-color: #C0B29D;
}
</style>
</head>
<body <?php if ($thisType!="") echo "class=\"$thisType\""; ?>>
<div <?php if ($thisPage!="") echo "class=\"$thisPage wrapper\""; ?>>
<?php include "../../inc/header-portraits.php" ?>
<?php include "../../inc/select-menu-pa.php" ?>
<div id="svg-container" class="container svg-container"></div>
<div id="caption-container" class="container caption-container">
  <h1 class="alpha"><?php if ($thisPortrait!="") echo $thisPortrait;?></h1>
  <pre><?php if ($thispageDesc!="") echo "$thispageDesc"; ?>

Personal website: <a href="http://styledeficit.com/illustration.html">styledeficit.com</a>
</pre>
</div>
<?php include "../../inc/nav-portraits.php" ?>
<?php include "../../inc/footer.php" ?>
</div><!-- /.wrapper -->
<script>
var imgObj = new Image();
imgObj.src = "<?php if ($rootUrl!="") echo $rootUrl; ?>assets/img/pixel-artists/DeniseWilton.png";
</script>

<script src="<?php if ($rootUrl!="") echo $rootUrl; ?>assets/js/libs/d3.v3.min.js"></script>
<script src="<?php if ($rootUrl!="") echo $rootUrl; ?>assets/js/convert-to-svg.js"></script>
<script>
document.getElementById("nav").addEventListener('change',function () {
    window.location = this.value;
},false);
</script>
</body>
</html>
<?php ?>

