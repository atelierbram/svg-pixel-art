<?php
$thisPortrait= "Gary J. Lucken";
$thisLang="en";
$thispageDesc="Gary J. Lucken is a videogame obsessed artist working from his Computer in Bournemouth, Dorset, UK, surrounded by Japanese toys and piles of old 2D videogames. He produces a unique brand of colourful artwork heavily influenced by the videogames, toys and pop culture he loves so much.";
$thisAuthor="Bram de Haan";
$thisOrg="Atelier Bram de Haan";
$thisType="portraits";
$thisPage="gary-j-lucken";
$thisWebsite="svg-pixel-art";
$thisUrl="portraits/pixel-artists/shaun-inman.html";
$prevUrl="portraits/pixel-artists/denise-wilton.html";
$nextUrl="portraits/pixel-artists/jenn-schiffer.html";

include "../../inc/config.php";
include "../../inc/head-portraits.php";
?>
<style>
.select-menu select,
.container,
.footer {
  background-color: #5b7070;
}
body {
  background-color: #b6c5bc;
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

More at: <a href="http://www.armyoftrolls.co.uk/website/html/homepage.html">armyoftrolls.co.uk</a>
</pre>
</div>
<?php include "../../inc/nav-portraits.php" ?>
<?php include "../../inc/footer.php" ?>
</div><!-- /.wrapper -->
<script>
var imgObj = new Image();
imgObj.src = "<?php if ($rootUrl!="") echo $rootUrl; ?>assets/img/pixel-artists/GaryJLucken.png";
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
