<?php
$thisPortrait= "Jenn Schiffer";
$thisLang="en";
$thispageDesc="Jenn Schiffer is a senior front-end web developer at the NBA. She has developed sites and apps for a number of grant and award-winning technology startups in the NYC area. Lately she has been focusing on making pixel and 8-bit art using code, teaching others how to use art to get people interested in programming.";
$thisAuthor="Bram de Haan";
$thisOrg="Atelier Bram de Haan";
$thisType="portraits";
$thisPage="jenn-schiffer";
$thisWebsite="svg-pixel-art";
$thisUrl="portraits/pixel-artists/jenn-schiffer.html";
$prevUrl="portraits/pixel-artists/gary-j-lucken.html";
$nextUrl="portraits/pixel-artists/kai-vermehr.html";

include "../../inc/config.php";
include "../../inc/head-portraits.php";
?>
<style>
.select-menu select,
.container,
.footer {
  background-color: #6D4F51;
}
body {
  background-color: #d1dae4;
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

<a href="http://negativitysandwiches.com/pixelfies-an-art-and-code-thing-i-made/">read about</a> and check out <a href="http://pancaketheorem.com/stuff/pixelfies">Pixelfies</a>; the project which was one of the sources for this thing here. More at: <a href="http://madeby.jennschiffer.com/">jennschiffer.com</a>
</pre>
</div>
<?php include "../../inc/nav-portraits.php" ?>
<?php include "../../inc/footer.php" ?>
</div><!-- /.wrapper -->
<script>
var imgObj = new Image();
imgObj.src = "<?php if ($rootUrl!="") echo $rootUrl; ?>assets/img/pixel-artists/JennSchiffer.png";
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
