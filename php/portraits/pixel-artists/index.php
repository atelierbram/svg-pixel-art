<?php
$thisPortrait= "Arjan Westerdiep";
$thisLang="en";
$thispageDesc="Arjan Westerdiep likes to create things, at a technical level (programming) and at a visual level. Apart from commercial work he enjoys working on personal projects, which are, most of the time, a combination of technique and artistic expression. He was trained as a visual artist with a Master in computer animation and image synthesis.";
$thisAuthor="Bram de Haan";
$thisOrg="Atelier Bram de Haan";
$thisType="portraits";
$thisPage="arjan-westerdiep";
$thisWebsite="svg-pixel-art";
$thisUrl="portraits/pixel-artists/arjan-westerdiep.html";
$prevUrl="portraits/pixel-artists/arjan-westerdiep.html";
$nextUrl="portraits/pixel-artists/arjan-westerdiep.html";

include "../../inc/config.php";
include "../../inc/head-portraits.php";
?>
<style>
.select-menu select,
.container,
.footer {
  background-color: #585b72;
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

More at: <a href="http://drububu.com/">drububu.com</a>
</pre>
</div>
<?php include "../../inc/nav-portraits.php" ?>
<?php include "../../inc/footer.php" ?>
</div><!-- /.wrapper -->
<script>
var imgObj = new Image();
imgObj.src = "<?php if ($rootUrl!="") echo $rootUrl; ?>assets/img/pixel-artists/ArjanWesterdiep.png";
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
